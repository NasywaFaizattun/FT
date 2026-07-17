<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background:
                radial-gradient(circle at top left, rgba(59, 130, 246, 0.30), transparent 30%),
                radial-gradient(circle at bottom right, rgba(14, 165, 233, 0.24), transparent 28%),
                linear-gradient(180deg, #020617 0%, #0f172a 100%);
        }
    </style>
</head>
<body class="min-h-screen text-white antialiased">
    <main class="flex min-h-screen items-center justify-center px-5 py-10">
        <div class="grid w-full max-w-5xl gap-8 lg:grid-cols-[0.9fr_1.1fr]">
            <section class="rounded-[2rem] border border-white/10 bg-white/5 p-8 shadow-2xl shadow-slate-950/40 backdrop-blur">
                <p class="text-xs font-bold uppercase tracking-[0.45em] text-sky-300">Admin Access</p>
                <h1 class="mt-4 text-4xl font-black leading-tight">Login ke backend Fourda X Triwara</h1>
                <p class="mt-4 max-w-md text-white/70 leading-relaxed">
                    Masuk untuk mengubah hero, anggota, riwayat, dan contact section. Login default: admin@fourda.test / password.
                </p>
                <div class="mt-8 rounded-[1.5rem] border border-white/10 bg-slate-950/50 p-5 text-sm text-white/75">
                    <p class="font-semibold text-white">Yang bisa diatur:</p>
                    <ul class="mt-3 space-y-2">
                        <li>Hero image, title, dan CTA</li>
                        <li>Foto, nama, dan keterangan anggota</li>
                        <li>Foto, judul, dan deskripsi riwayat</li>
                        <li>Kontak, lokasi, dan ilustrasi section</li>
                    </ul>
                </div>
            </section>

            <section class="rounded-[2rem] border border-white/10 bg-slate-950/70 p-8 shadow-2xl shadow-slate-950/50 backdrop-blur">
                <form method="POST" action="{{ route('login.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-white/80" for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder:text-white/35 focus:border-sky-300 focus:outline-none">
                        @error('email')
                            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-white/80" for="password">Password</label>
                        <input id="password" name="password" type="password" required class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3.5 text-white placeholder:text-white/35 focus:border-sky-300 focus:outline-none">
                        @error('password')
                            <p class="mt-2 text-sm text-red-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-3 text-sm text-white/70">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/20 bg-white/10 text-sky-400 focus:ring-sky-300">
                        Remember me
                    </label>

                    <button type="submit" class="w-full rounded-2xl bg-sky-500 px-5 py-4 font-bold text-white transition hover:bg-sky-600">
                        Login
                    </button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>