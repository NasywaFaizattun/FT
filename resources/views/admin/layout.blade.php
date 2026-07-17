<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-white antialiased">
    <div class="flex min-h-screen flex-col lg:flex-row">
        <aside class="border-b border-white/10 bg-slate-900/95 px-5 py-5 lg:min-h-screen lg:w-80 lg:border-b-0 lg:border-r">
            <div class="flex items-center justify-between lg:block">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-sky-300">Admin Panel</p>
                    <h1 class="mt-2 text-2xl font-black">Fourda X Triwara</h1>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="lg:mt-8">
                    @csrf
                    <button type="submit" class="rounded-full border border-white/10 px-4 py-2 text-sm text-white/75 hover:bg-white/5">Logout</button>
                </form>
            </div>

            <nav class="mt-8 grid gap-2 text-sm font-medium text-white/75">
                <a href="{{ route('admin.dashboard') }}" class="rounded-2xl border border-white/10 px-4 py-3 hover:bg-white/5">Dashboard</a>
                <a href="{{ route('admin.hero.edit') }}" class="rounded-2xl border border-white/10 px-4 py-3 hover:bg-white/5">Hero Section</a>
                <a href="{{ route('admin.members.index') }}" class="rounded-2xl border border-white/10 px-4 py-3 hover:bg-white/5">Anggota</a>
                <a href="{{ route('admin.stories.index') }}" class="rounded-2xl border border-white/10 px-4 py-3 hover:bg-white/5">Riwayat</a>
                <a href="{{ route('admin.contact.edit') }}" class="rounded-2xl border border-white/10 px-4 py-3 hover:bg-white/5">Contact</a>
                <a href="{{ route('home') }}" class="rounded-2xl border border-sky-400/30 px-4 py-3 text-sky-300 hover:bg-sky-400/10">Lihat Homepage</a>
            </nav>
        </aside>

        <main class="flex-1 px-5 py-8 lg:px-8">
            @if (session('status'))
                <div class="mb-6 rounded-2xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200">
                    {{ session('status') }}
                </div>
            @endif

            {{ $slot ?? '' }}
            @yield('content')
        </main>
    </div>
</body>
</html>