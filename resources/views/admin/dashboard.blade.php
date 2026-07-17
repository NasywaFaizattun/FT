@php($title = 'Dashboard')
@extends('admin.layout')

@section('content')
    <div class="mx-auto max-w-6xl space-y-8">
        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 backdrop-blur">
            <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Dashboard</p>
            <h2 class="mt-3 text-4xl font-black">Kelola isi halaman depan dari satu tempat</h2>
            <p class="mt-4 max-w-3xl text-white/70 leading-relaxed">Setiap section sekarang punya backend sendiri, jadi foto, nama, dan keterangan bisa diubah tanpa menyentuh template homepage.</p>
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            <div class="rounded-[1.75rem] border border-white/10 bg-slate-900 p-6">
                <p class="text-xs uppercase tracking-[0.35em] text-white/45">Members</p>
                <p class="mt-4 text-4xl font-black">{{ $memberCount }}</p>
            </div>
            <div class="rounded-[1.75rem] border border-white/10 bg-slate-900 p-6">
                <p class="text-xs uppercase tracking-[0.35em] text-white/45">Stories</p>
                <p class="mt-4 text-4xl font-black">{{ $storyCount }}</p>
            </div>
            <div class="rounded-[1.75rem] border border-white/10 bg-slate-900 p-6">
                <p class="text-xs uppercase tracking-[0.35em] text-white/45">Auth</p>
                <p class="mt-4 text-lg font-semibold text-white/85">Login aktif via halaman sendiri</p>
            </div>
        </div>
    </div>
@endsection