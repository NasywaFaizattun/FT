<?php

namespace Database\Seeders;

use App\Models\ClassMember;
use App\Models\ContactSection;
use App\Models\HeroSection;
use App\Models\StoryItem;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->firstOrCreate(
            ['email' => 'admin@fourda.test'],
            [
                'name' => 'Admin Fourda',
                'password' => Hash::make('password'),
            ]
        );

        if (! HeroSection::query()->exists()) {
            HeroSection::create([
                'badge_text' => 'Original Series - Fourda X Triwara',
                'title' => 'Kami punya cerita yang kuat',
                'title_accent' => 'cerita',
                'description' => 'Kelas kami dibangun dari kerja sama, semangat belajar, dan kebersamaan yang tumbuh di setiap hari.',
                'primary_cta_label' => 'Lihat Anggota',
                'primary_cta_url' => '#anggota',
                'secondary_cta_label' => 'Hubungi Kami',
                'secondary_cta_url' => '#contact',
                'team_label' => 'Team',
                'team_value' => '7 Orang',
                'theme_label' => 'Theme',
                'theme_value' => 'Blue Cinematic',
                'style_label' => 'Style',
                'style_value' => 'Modern & Clean',
            ]);
        }

        if (! ClassMember::query()->exists()) {
            ClassMember::insert([
                ['name' => 'Alya', 'quote' => 'Belajar konsisten, hasil akan mengikuti.', 'sort_order' => 1],
                ['name' => 'Raka', 'quote' => 'Kerja keras hari ini, hasil bagus nanti.', 'sort_order' => 2],
                ['name' => 'Nadia', 'quote' => 'Tetap tenang, tetap maju, tetap rapi.', 'sort_order' => 3],
                ['name' => 'Fajar', 'quote' => 'Biar pelan, yang penting konsisten.', 'sort_order' => 4],
                ['name' => 'Salsa', 'quote' => 'Hasil terbaik lahir dari kebiasaan baik.', 'sort_order' => 5],
                ['name' => 'Dimas', 'quote' => 'Satu tim, satu tujuan, satu hasil.', 'sort_order' => 6],
                ['name' => 'Rani', 'quote' => 'Kuat di proses, tenang di hasil.', 'sort_order' => 7],
            ]);
        }

        if (! StoryItem::query()->exists()) {
            StoryItem::insert([
                ['badge' => 'Awal', 'title' => 'Terbentuk dari kebersamaan', 'description' => 'Kelas ini mulai terbentuk dari obrolan, tugas, dan banyak momen kecil yang bikin semuanya makin solid.', 'sort_order' => 1],
                ['badge' => 'Proses', 'title' => 'Belajar bareng setiap hari', 'description' => 'Setiap pertemuan jadi ruang untuk bertukar ide, memperbaiki kesalahan, dan tumbuh bersama.', 'sort_order' => 2],
                ['badge' => 'Identitas', 'title' => 'Punya warna sendiri', 'description' => 'Fourda Triwara bukan cuma nama kelas, tapi juga simbol kerja sama, disiplin, dan semangat berkembang.', 'sort_order' => 3],
                ['badge' => 'Harapan', 'title' => 'Tetap kompak sampai akhir', 'description' => 'Tujuan akhirnya adalah membawa kekompakan itu ke hasil yang lebih baik di setiap tantangan.', 'sort_order' => 4],
            ]);
        }

        if (! ContactSection::query()->exists()) {
            ContactSection::create([
                'section_label' => 'Section 4',
                'title' => 'Contact',
                'description' => 'Kalau ingin kerja sama, tanya sesuatu, atau sekadar ngobrol soal desain dan project, hubungi kami lewat form berikut.',
                'email' => 'contact@fourdatriwara.com',
                'phone' => '+62 123 456 789',
                'location' => 'Indonesia',
                'form_note' => 'Kami akan membalas pesan secepat mungkin.',
            ]);
        }
    }
}
