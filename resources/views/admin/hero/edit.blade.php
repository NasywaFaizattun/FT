@php($title = 'Edit Hero')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-5xl">
        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 backdrop-blur">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Hero Section</p>
                    <h2 class="mt-3 text-3xl font-black">Atur tampilan pembuka</h2>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data" class="mt-8 space-y-5">
                @csrf
                @method('PUT')

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="badge_text">Badge</label>
                        <input id="badge_text" name="badge_text" value="{{ old('badge_text', $hero->badge_text ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="title_accent">Title Accent</label>
                        <input id="title_accent" name="title_accent" value="{{ old('title_accent', $hero->title_accent ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold" for="title">Title</label>
                    <input id="title" name="title" value="{{ old('title', $hero->title ?? '') }}" required class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold" for="description">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">{{ old('description', $hero->description ?? '') }}</textarea>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="primary_cta_label">Primary CTA Label</label>
                        <input id="primary_cta_label" name="primary_cta_label" value="{{ old('primary_cta_label', $hero->primary_cta_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="primary_cta_url">Primary CTA URL</label>
                        <input id="primary_cta_url" name="primary_cta_url" value="{{ old('primary_cta_url', $hero->primary_cta_url ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="secondary_cta_label">Secondary CTA Label</label>
                        <input id="secondary_cta_label" name="secondary_cta_label" value="{{ old('secondary_cta_label', $hero->secondary_cta_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="secondary_cta_url">Secondary CTA URL</label>
                        <input id="secondary_cta_url" name="secondary_cta_url" value="{{ old('secondary_cta_url', $hero->secondary_cta_url ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-3">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="team_label">Team Label</label>
                        <input id="team_label" name="team_label" value="{{ old('team_label', $hero->team_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="team_value">Team Value</label>
                        <input id="team_value" name="team_value" value="{{ old('team_value', $hero->team_value ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="style_value">Style Value</label>
                        <input id="style_value" name="style_value" value="{{ old('style_value', $hero->style_value ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-3">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="theme_label">Theme Label</label>
                        <input id="theme_label" name="theme_label" value="{{ old('theme_label', $hero->theme_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="theme_value">Theme Value</label>
                        <input id="theme_value" name="theme_value" value="{{ old('theme_value', $hero->theme_value ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="style_label">Style Label</label>
                        <input id="style_label" name="style_label" value="{{ old('style_label', $hero->style_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="background_image">Background Image</label>
                        <input id="background_image" name="background_image" type="file" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-semibold" for="poster_image">Poster Image</label>
                        <input id="poster_image" name="poster_image" type="file" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white">
                    </div>
                </div>

                <button type="submit" class="rounded-2xl bg-sky-500 px-6 py-3 font-bold text-white hover:bg-sky-600">Save Hero</button>
            </form>
        </div>
    </div>
@endsection