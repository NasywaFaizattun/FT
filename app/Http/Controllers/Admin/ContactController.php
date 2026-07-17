<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function edit(): View
    {
        return view('admin.contact.edit', [
            'contact' => ContactSection::query()->first(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'section_label' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'phone' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'form_note' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:4096'],
        ]);

        $contact = ContactSection::query()->first() ?? new ContactSection();

        if ($request->hasFile('image')) {
            if ($contact->image_path) {
                Storage::disk('public')->delete($contact->image_path);
            }

            $data['image_path'] = $request->file('image')->store('contact', 'public');
        }

        $contact->fill($data);
        $contact->save();

        return redirect()->route('admin.contact.edit')->with('status', 'Contact section updated.');
    }
}