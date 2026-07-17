@php($title = 'Edit Contact')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-5xl rounded-[2rem] border border-white/10 bg-white/5 p-8 backdrop-blur">
        <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Contact</p>
        <h2 class="mt-2 text-3xl font-black">Atur section contact</h2>

        <form method="POST" action="{{ route('admin.contact.update') }}" enctype="multipart/form-data" class="mt-8 space-y-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="section_label">Section Label</label>
                    <input id="section_label" name="section_label" value="{{ old('section_label', $contact->section_label ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="title">Title</label>
                    <input id="title" name="title" value="{{ old('title', $contact->title ?? '') }}" required class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="description">Description</label>
                <textarea id="description" name="description" rows="4" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">{{ old('description', $contact->description ?? '') }}</textarea>
            </div>

            <div class="grid gap-5 md:grid-cols-3">
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="email">Email</label>
                    <input id="email" name="email" value="{{ old('email', $contact->email ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="phone">Phone</label>
                    <input id="phone" name="phone" value="{{ old('phone', $contact->phone ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="location">Location</label>
                    <input id="location" name="location" value="{{ old('location', $contact->location ?? '') }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="form_note">Form Note</label>
                <textarea id="form_note" name="form_note" rows="3" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">{{ old('form_note', $contact->form_note ?? '') }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="image">Image</label>
                <input id="image" name="image" type="file" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white">
            </div>

            <button type="submit" class="rounded-2xl bg-sky-500 px-6 py-3 font-bold text-white hover:bg-sky-600">Save Contact</button>
        </form>
    </div>
@endsection