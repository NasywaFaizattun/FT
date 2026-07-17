@php($title = 'Edit Story')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-4xl rounded-[2rem] border border-white/10 bg-white/5 p-8 backdrop-blur">
        <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Stories</p>
        <h2 class="mt-2 text-3xl font-black">Edit riwayat</h2>

        <form method="POST" action="{{ route('admin.stories.update', $story) }}" enctype="multipart/form-data" class="mt-8 space-y-5">
            @csrf
            @method('PUT')

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="badge">Badge</label>
                    <input id="badge" name="badge" value="{{ old('badge', $story->badge) }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-semibold" for="sort_order">Urutan</label>
                    <input id="sort_order" name="sort_order" type="number" value="{{ old('sort_order', $story->sort_order) }}" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
                </div>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="title">Judul</label>
                <input id="title" name="title" value="{{ old('title', $story->title) }}" required class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="description">Keterangan</label>
                <textarea id="description" name="description" rows="4" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white focus:border-sky-300 focus:outline-none">{{ old('description', $story->description) }}</textarea>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold" for="photo">Foto baru</label>
                <input id="photo" name="photo" type="file" class="w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-white">
            </div>

            <button type="submit" class="rounded-2xl bg-sky-500 px-6 py-3 font-bold text-white hover:bg-sky-600">Update</button>
        </form>
    </div>
@endsection