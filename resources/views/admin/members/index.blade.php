@php($title = 'Members')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-6xl space-y-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Members</p>
                <h2 class="mt-2 text-3xl font-black">Kelola anggota kelas</h2>
            </div>
            <a href="{{ route('admin.members.create') }}" class="rounded-full bg-sky-500 px-5 py-3 font-semibold text-white hover:bg-sky-600">Tambah Anggota</a>
        </div>

        <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($members as $member)
                <article class="overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5">
                    <div class="h-56 bg-slate-800 bg-cover bg-center" @if ($member->photo_path) style="background-image: url('{{ asset('storage/'.$member->photo_path) }}')" @endif></div>
                    <div class="space-y-4 p-5">
                        <div>
                            <h3 class="text-2xl font-black">{{ $member->name }}</h3>
                            <p class="mt-2 text-sm text-white/70">{{ $member->quote }}</p>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <a href="{{ route('admin.members.edit', $member) }}" class="rounded-full border border-white/10 px-4 py-2 hover:bg-white/5">Edit</a>
                            <form method="POST" action="{{ route('admin.members.destroy', $member) }}" onsubmit="return confirm('Hapus anggota ini?')">
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