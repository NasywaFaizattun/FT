<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StoryItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class StoryController extends Controller
{
    public function index(): View
    {
        return view('admin.stories.index', [
            'stories' => StoryItem::query()->orderBy('sort_order')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.stories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'badge' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer'],
            'photo' => ['nullable', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('stories', 'public');
        }

        StoryItem::create($data);

        return redirect()->route('admin.stories.index')->with('status', 'Story item created.');
    }

    public function edit(StoryItem $story): View
    {
        return view('admin.stories.edit', [
            'story' => $story,
        ]);
    }

    public function update(Request $request, StoryItem $story): RedirectResponse
    {
        $data = $request->validate([
            'badge' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer'],
            'photo' => ['nullable', 'image', 'max:4096'],
        ]);

        if ($request->hasFile('photo')) {
            if ($story->photo_path) {
                Storage::disk('public')->delete($story->photo_path);
            }

            $data['photo_path'] = $request->file('photo')->store('stories', 'public');
        }

        $story->update($data);

        return redirect()->route('admin.stories.index')->with('status', 'Story item updated.');
    }

    public function destroy(StoryItem $story): RedirectResponse
    {
        if ($story->photo_path) {
            Storage::disk('public')->delete($story->photo_path);
        }

        $story->delete();

        return redirect()->route('admin.stories.index')->with('status', 'Story item deleted.');
    }
}