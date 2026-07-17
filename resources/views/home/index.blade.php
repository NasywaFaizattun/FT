<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FOURDA X TRIWARA </title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .js-reveal-ready [data-reveal] {
                opacity: 0;
                transform: translateY(24px) scale(0.985);
                filter: blur(8px);
                transition:
                    opacity 720ms cubic-bezier(0.22, 1, 0.36, 1),
                    transform 720ms cubic-bezier(0.22, 1, 0.36, 1),
                    filter 720ms cubic-bezier(0.22, 1, 0.36, 1);
                will-change: opacity, transform, filter;
            }

            .js-reveal-ready [data-reveal].is-visible {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }

            .js-reveal-ready [data-reveal="hero"] {
                transform: translateY(32px) scale(0.98);
            }

            .js-reveal-ready [data-reveal="soft"] {
                transform: translateY(18px);
            }

            @media (prefers-reduced-motion: reduce) {
                [data-reveal] {
                    opacity: 1 !important;
                    transform: none !important;
                    filter: none !important;
                    transition: none !important;
                }
            }

            .hero-bg {
                background-image:
                    linear-gradient(90deg, rgba(7, 14, 39, 0.94) 0%, rgba(9, 23, 72, 0.80) 50%, rgba(18, 78, 156, 0.45) 100%),
                    url('{{ $hero?->background_image_path ? asset('storage/'.$hero->background_image_path) : 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1800&q=80' }}');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .section-bg {
                background:
                    radial-gradient(circle at top left, rgba(56, 189, 248, 0.16), transparent 30%),
                    radial-gradient(circle at bottom right, rgba(37, 99, 235, 0.14), transparent 28%),
                    linear-gradient(180deg, #020617 0%, #0f172a 100%);
            }

            .glass {
                backdrop-filter: blur(18px);
                -webkit-backdrop-filter: blur(18px);
                background: rgba(255, 255, 255, 0.10);
            }

            .soft-shadow {
                box-shadow: 0 28px 80px rgba(15, 23, 42, 0.18);
            }
        </style>
    </head>
    <body class="bg-slate-950 text-white antialiased">
        @php
            $members = $members->isNotEmpty() ? $members : collect([
                (object) ['name' => 'Alya', 'quote' => 'Belajar konsisten, hasil akan mengikuti.', 'photo_path' => null],
                (object) ['name' => 'Raka', 'quote' => 'Kerja keras hari ini, hasil bagus nanti.', 'photo_path' => null],
                (object) ['name' => 'Nadia', 'quote' => 'Tetap tenang, tetap maju, tetap rapi.', 'photo_path' => null],
                (object) ['name' => 'Fajar', 'quote' => 'Biar pelan, yang penting konsisten.', 'photo_path' => null],
                (object) ['name' => 'Salsa', 'quote' => 'Hasil terbaik lahir dari kebiasaan baik.', 'photo_path' => null],
                (object) ['name' => 'Dimas', 'quote' => 'Satu tim, satu tujuan, satu hasil.', 'photo_path' => null],
                (object) ['name' => 'Rani', 'quote' => 'Kuat di proses, tenang di hasil.', 'photo_path' => null],
            ]);

            $stories = $stories->isNotEmpty() ? $stories : collect([
                (object) ['badge' => 'Awal', 'title' => 'Terbentuk dari kebersamaan', 'description' => 'Kelas ini mulai terbentuk dari obrolan, tugas, dan banyak momen kecil yang bikin semuanya makin solid.', 'photo_path' => null],
                (object) ['badge' => 'Proses', 'title' => 'Belajar bareng setiap hari', 'description' => 'Setiap pertemuan jadi ruang untuk bertukar ide, memperbaiki kesalahan, dan tumbuh bersama.', 'photo_path' => null],
                (object) ['badge' => 'Identitas', 'title' => 'Punya warna sendiri', 'description' => 'Fourda Triwara bukan cuma nama kelas, tapi juga simbol kerja sama, disiplin, dan semangat berkembang.', 'photo_path' => null],
                (object) ['badge' => 'Harapan', 'title' => 'Tetap kompak sampai akhir', 'description' => 'Tujuan akhirnya adalah membawa kekompakan itu ke hasil yang lebih baik di setiap tantangan.', 'photo_path' => null],
            ]);

            $heroPoster = $hero?->poster_image_path ? asset('storage/'.$hero->poster_image_path) : 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=80';
            $contactImage = $contact?->image_path ? asset('storage/'.$contact->image_path) : null;

            $titleWords = $hero?->title ? preg_split('/\s+/', trim($hero->title), 2) : ['Kami punya', 'cerita yang kuat'];
            $heroFirst = $titleWords[0] ?? 'Kami punya';
            $heroRest = $titleWords[1] ?? 'cerita yang kuat';
        @endphp

        <main class="min-h-screen">
            <section class="relative overflow-hidden hero-bg">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(56,189,248,0.18),transparent_28%),radial-gradient(circle_at_85%_15%,rgba(59,130,246,0.18),transparent_26%),radial-gradient(circle_at_80%_80%,rgba(96,165,250,0.16),transparent_30%)]"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-slate-950/10 via-slate-950/45 to-slate-950"></div>

                <header class="relative z-20 px-5 lg:px-10 pt-5">
                    <nav class="mx-auto max-w-7xl rounded-full border border-white/10 bg-white/10 px-5 lg:px-8 py-4 glass soft-shadow">
                        <div class="flex items-center justify-between gap-4">
                            <a href="{{ route('home') }}" class="flex items-center gap-3">
                                <span class="text-sm sm:text-base lg:text-lg font-black tracking-[0.3em] uppercase">Fourda X Triwara</span>
                            </a>
                            <div class="hidden md:flex items-center gap-6 text-sm font-medium text-white/80">
                                <a href="#kelas" class="hover:text-white transition">Home</a>
                                <a href="#anggota" class="hover:text-white transition">Anggota</a>
                                <a href="#riwayat" class="hover:text-white transition">Riwayat</a>
                                <a href="#contact" class="hover:text-white transition">Contact</a>
                            </div>
                            <div class="flex items-center gap-3">
                                @auth
                                    <a href="{{ route('admin.dashboard') }}" class="rounded-full bg-white px-5 py-2.5 text-sm font-bold text-blue-700 transition hover:bg-blue-100">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="rounded-full border border-white/20 bg-white/5 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-white/10">Logout</button>
                                    </form>
                                @else
                                    <!-- <a href="{{ route('login') }}" class="rounded-full bg-white px-5 py-2.5 text-sm font-bold text-blue-700 transition hover:bg-blue-100">Login</a> -->
                                @endauth
                            </div>
                        </div>
                    </nav>
                </header>

                <section id="kelas" class="relative z-10 px-5 lg:px-10 pt-16 pb-20 lg:pt-24 lg:pb-28">
                    <div class="mx-auto grid max-w-7xl items-center gap-10 lg:grid-cols-[1.1fr_0.9fr]">
                        <div class="max-w-3xl space-y-8" data-reveal="hero">
                            <div class="inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm text-white/85 glass" data-reveal="soft" data-reveal-delay="40">
                                <span class="h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                                {{ $hero?->badge_text ?? 'Original Series - Fourda X Triwara' }}
                            </div>

                            <div class="space-y-5" data-reveal="soft" data-reveal-delay="110">
                                <h1 class="text-5xl sm:text-6xl lg:text-8xl font-black leading-[0.9] uppercase tracking-tight drop-shadow-[0_16px_42px_rgba(0,0,0,0.35)]">
                                    {{ $heroFirst }}
                                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-200 via-white to-blue-200">{{ $hero?->title_accent ?? 'cerita' }}</span>
                                    {{ $heroRest }}
                                </h1>
                                <p class="max-w-2xl text-base sm:text-lg lg:text-xl text-white/80 leading-relaxed">
                                    {{ $hero?->description ?? 'Kelas kami dibangun dari kerja sama, semangat belajar, dan kebersamaan yang tumbuh di setiap hari.' }}
                                </p>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-4" data-reveal="soft" data-reveal-delay="180">
                                <a href="{{ $hero?->primary_cta_url ?? '#anggota' }}" class="inline-flex items-center justify-center rounded-full bg-white px-7 py-4 text-sm sm:text-base font-bold text-blue-700 transition hover:bg-blue-100">
                                    {{ $hero?->primary_cta_label ?? 'Lihat Anggota' }}
                                </a>
                                <a href="{{ $hero?->secondary_cta_url ?? '#contact' }}" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 px-7 py-4 text-sm sm:text-base font-semibold text-white transition hover:bg-white/10">
                                    {{ $hero?->secondary_cta_label ?? 'Hubungi Kami' }}
                                </a>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2" data-reveal="soft" data-reveal-delay="250">
                                <div class="glass rounded-2xl border border-white/10 p-4">
                                    <p class="text-xs uppercase tracking-[0.28em] text-white/55">{{ $hero?->team_label ?? 'Team' }}</p>
                                    <p class="mt-2 text-lg font-semibold text-white">{{ $hero?->team_value ?? '7 Orang' }}</p>
                                </div>
                                <div class="glass rounded-2xl border border-white/10 p-4">
                                    <p class="text-xs uppercase tracking-[0.28em] text-white/55">{{ $hero?->theme_label ?? 'Theme' }}</p>
                                    <p class="mt-2 text-lg font-semibold text-white">{{ $hero?->theme_value ?? 'Blue Cinematic' }}</p>
                                </div>
                                <div class="glass rounded-2xl border border-white/10 p-4">
                                    <p class="text-xs uppercase tracking-[0.28em] text-white/55">{{ $hero?->style_label ?? 'Style' }}</p>
                                    <p class="mt-2 text-lg font-semibold text-white">{{ $hero?->style_value ?? 'Modern & Clean' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:justify-self-end w-full max-w-xl" data-reveal="hero" data-reveal-delay="170">
                            <div class="glass relative overflow-hidden rounded-[2rem] border border-white/10 p-4 sm:p-6 soft-shadow">
                                <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-transparent via-sky-300 to-transparent"></div>
                                <div class="relative aspect-[4/5] overflow-hidden rounded-[1.5rem] border border-white/10 bg-slate-900">
                                    <div class="absolute inset-0 bg-cover bg-center opacity-60" style="background-image: url('{{ $heroPoster }}')"></div>
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(96,165,250,0.24),transparent_28%),radial-gradient(circle_at_80%_70%,rgba(59,130,246,0.20),transparent_26%)]"></div>

                                    <div class="absolute left-0 right-0 bottom-0 p-5 sm:p-6 space-y-4">
                                        <div class="inline-flex rounded-full bg-blue-600 px-3 py-1 text-[10px] font-black uppercase tracking-[0.32em] text-white shadow-lg shadow-blue-600/30">
                                            Class Banner
                                        </div>
                                        <h2 class="text-3xl sm:text-4xl font-black uppercase leading-none">Fourda X Triwara</h2>
                                        <p class="max-w-sm text-sm sm:text-base text-white/78">
                                            Foto latar dan poster bisa diganti langsung dari backend.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <section id="anggota" class="relative px-5 lg:px-10 py-20 section-bg text-white">
                <div class="mx-auto max-w-7xl">
                    <div class="max-w-2xl mb-12" data-reveal>
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.35em] text-sky-300">Section 2</p>
                        <h2 class="mt-3 text-4xl sm:text-5xl font-black text-white">{{ $members->count() }} anggota kelas kami</h2>
                        <p class="mt-4 text-lg text-white/70">Setiap kartu punya foto, nama, dan keterangan yang bisa diubah dari backend.</p>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                        @foreach ($members as $member)
                            <article class="overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 soft-shadow backdrop-blur" data-reveal data-reveal-delay="{{ $loop->index * 90 }}">
                                <div class="h-64 bg-cover bg-center" @if ($member->photo_path) style="background-image: url('{{ asset('storage/'.$member->photo_path) }}')" @else style="background-image: url('https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=900&q=80')" @endif></div>
                                <div class="p-6">
                                    <h3 class="text-xl font-black text-white">{{ $member->name }}</h3>
                                    <p class="mt-2 text-white/70">{{ $member->quote }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="riwayat" class="px-5 lg:px-10 py-20 bg-slate-950 text-white">
                <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[0.85fr_1.15fr] items-start">
                    <div class="rounded-[2rem] border border-white/10 bg-white/5 p-8 text-white soft-shadow backdrop-blur" data-reveal>
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-sky-300">Section 3</p>
                        <h2 class="mt-4 text-4xl font-black leading-tight">Riwayat singkat Fourda Triwara</h2>
                        <p class="mt-4 text-white/75 leading-relaxed">Cerita, judul, gambar, dan deskripsi tiap blok bisa diatur terpisah dari backend.</p>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        @foreach ($stories as $story)
                            <div class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6 overflow-hidden backdrop-blur" data-reveal data-reveal-delay="{{ $loop->index * 90 }}">
                                <div class="mb-4 h-44 rounded-[1.25rem] bg-slate-200 bg-cover bg-center" @if ($story->photo_path) style="background-image: url('{{ asset('storage/'.$story->photo_path) }}')" @endif></div>
                                <p class="text-xs font-bold uppercase tracking-[0.3em] text-sky-300">{{ $story->badge }}</p>
                                <h3 class="mt-3 text-2xl font-bold text-white">{{ $story->title }}</h3>
                                <p class="mt-3 text-white/70 leading-relaxed">{{ $story->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="contact" class="px-5 lg:px-10 py-20 bg-slate-950 text-white">
                <div class="mx-auto max-w-7xl grid gap-10 lg:grid-cols-[0.95fr_1.05fr] items-start">
                    <div class="space-y-6" data-reveal>
                        <p class="text-xs font-bold uppercase tracking-[0.35em] text-sky-300">{{ $contact?->section_label ?? 'Section 4' }}</p>
                        <h2 class="text-4xl sm:text-5xl font-black leading-tight">{{ $contact?->title ?? 'Contact' }}</h2>
                        <p class="max-w-xl text-white/72 leading-relaxed">{{ $contact?->description ?? 'Kalau ingin kerja sama, tanya sesuatu, atau sekadar ngobrol soal desain dan project, hubungi kami lewat form berikut.' }}</p>

                        <div class="grid gap-4 sm:grid-cols-3" data-reveal data-reveal-delay="120">
                            <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-xs uppercase tracking-[0.25em] text-white/45">Email</p>
                                <a href="mailto:{{ $contact?->email ?? 'contact@fourdatriwara.com' }}" class="mt-2 block font-semibold text-white hover:text-sky-300 transition">{{ $contact?->email ?? 'contact@fourdatriwara.com' }}</a>
                            </div>
                            <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-xs uppercase tracking-[0.25em] text-white/45">Phone</p>
                                <a href="tel:{{ $contact?->phone ?? '+62123456789' }}" class="mt-2 block font-semibold text-white hover:text-sky-300 transition">{{ $contact?->phone ?? '+62 123 456 789' }}</a>
                            </div>
                            <div class="rounded-[1.5rem] border border-white/10 bg-white/5 p-5 backdrop-blur">
                                <p class="text-xs uppercase tracking-[0.25em] text-white/45">Location</p>
                                <p class="mt-2 font-semibold text-white">{{ $contact?->location ?? 'Indonesia' }}</p>
                            </div>
                        </div>

                        @if ($contact?->image_path)
                            <div class="overflow-hidden rounded-[1.75rem] border border-white/10" data-reveal data-reveal-delay="180">
                                <img src="{{ asset('storage/'.$contact->image_path) }}" alt="Contact section image" class="h-72 w-full object-cover">
                            </div>
                        @endif
                    </div>

                    <form class="rounded-[2rem] border border-white/10 bg-white/5 p-6 sm:p-8 soft-shadow space-y-5 backdrop-blur" data-reveal data-reveal-delay="170">
                        <div class="grid gap-5 sm:grid-cols-2">
                            <input type="text" placeholder="Nama" class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3.5 text-white placeholder:text-white/40 focus:border-sky-300 focus:outline-none" required>
                            <input type="email" placeholder="Email" class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3.5 text-white placeholder:text-white/40 focus:border-sky-300 focus:outline-none" required>
                        </div>
                        <input type="text" placeholder="Subject" class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3.5 text-white placeholder:text-white/40 focus:border-sky-300 focus:outline-none" required>
                        <textarea placeholder="{{ $contact?->form_note ?? 'Tulis pesan kamu di sini' }}" rows="6" class="w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3.5 text-white placeholder:text-white/40 focus:border-sky-300 focus:outline-none resize-none" required></textarea>
                        <button type="submit" class="w-full rounded-2xl bg-blue-500 px-5 py-4 font-bold text-white transition hover:bg-blue-600">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </section>
        </main>
    </body>
</html>