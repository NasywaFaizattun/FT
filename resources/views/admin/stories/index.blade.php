@php($title = 'Stories')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-6xl space-y-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Stories</p>
                <h2 class="mt-2 text-3xl font-black">Kelola riwayat section</h2>
            </div>
            <a href="{{ route('admin.stories.create') }}" class="rounded-full bg-sky-500 px-5 py-3 font-semibold text-white hover:bg-sky-600">Tambah Riwayat</a>
        </div>

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-2">
            @foreach ($stories as $story)
                <article class="overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5">
                    <div class="h-56 bg-slate-800 bg-cover bg-center" @if ($story->photo_path) style="background-image: url('{{ asset('storage/'.$story->photo_path) }}')" @endif></div>
                    <div class="space-y-4 p-5">
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-sky-300">{{ $story->badge }}</p>
                        <h3 class="text-2xl font-black">{{ $story->title }}</h3>
                        <p class="text-sm text-white/70">{{ $story->description }}</p>
                        <div class="flex items-center gap-3 text-sm">
                            <a href="{{ route('admin.stories.edit', $story) }}" class="rounded-full border border-white/10 px-4 py-2 hover:bg-white/5">Edit</a>
                            <form method="POST" action="{{ route('admin.stories.destroy', $story) }}" onsubmit="return confirm('Hapus riwayat ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-full border border-red-400/30 px-4 py-2 text-red-200 hover:bg-red-400/10">Delete</button>
                            </form>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection