<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HeroController extends Controller
{
    public function edit(): View
    {
        return view('admin.hero.edit', [
            'hero' => HeroSection::query()->first(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'badge_text' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'title_accent' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'primary_cta_label' => ['nullable', 'string', 'max:255'],
            'primary_cta_url' => ['nullable', 'string', 'max:255'],
            'secondary_cta_label' => ['nullable', 'string', 'max:255'],
            'secondary_cta_url' => ['nullable', 'string', 'max:255'],
            'team_label' => ['nullable', 'string', 'max:255'],
            'team_value' => ['nullable', 'string', 'max:255'],
            'theme_label' => ['nullable', 'string', 'max:255'],
            'theme_value' => ['nullable', 'string', 'max:255'],
            'style_label' => ['nullable', 'string', 'max:255'],
            'style_value' => ['nullable', 'string', 'max:255'],
            'background_image' => ['nullable', 'image', 'max:4096'],
            'poster_image' => ['nullable', 'image', 'max:4096'],
        ]);

        $hero = HeroSection::query()->first() ?? new HeroSection();

        if ($request->hasFile('background_image')) {
            if ($hero->background_image_path) {
                Storage::disk('public')->delete($hero->background_image_path);
            }

            $data['background_image_path'] = $request->file('background_image')->store('hero', 'public');
        }

        if ($request->hasFile('poster_image')) {
            if ($hero->poster_image_path) {
                Storage::disk('public')->delete($hero->poster_image_path);
            }

            $data['poster_image_path'] = $request->file('poster_image')->store('hero', 'public');
        }

        $hero->fill($data);
        $hero->save();

        return redirect()->route('admin.hero.edit')->with('status', 'Hero section updated.');
    }
}