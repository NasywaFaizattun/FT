<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MemberController extends Controller
{
    public function index(): View
    {
        return view('admin.members.index', [
            'members' => ClassMember::query()->orderBy('sort_order')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.members.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quote' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer'],
            'photo' => ['nullable', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('members', 'public');
        }

        ClassMember::create($data);

        return redirect()->route('admin.members.index')->with('status', 'Member created.');
    }

    public function edit(ClassMember $member): View
    {
        return view('admin.members.edit', [
            'member' => $member,
        ]);
    }

    public function update(Request $request, ClassMember $member): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'quote' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer'],
            'photo' => ['nullable', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('photo')) {
            if ($member->photo_path) {
                Storage::disk('public')->delete($member->photo_path);
            }

            $data['photo_path'] = $request->file('photo')->store('members', 'public');
        }

        $member->update($data);

        return redirect()->route('admin.members.index')->with('status', 'Member updated.');
    }

    public function destroy(ClassMember $member): RedirectResponse
    {
        if ($member->photo_path) {
            Storage::disk('public')->delete($member->photo_path);
        }

        $member->delete();

        return redirect()->route('admin.members.index')->with('status', 'Member deleted.');
    }
}