<?php

namespace App\Http\Controllers;

use App\Models\ClassMember;
use App\Models\ContactSection;
use App\Models\HeroSection;
use App\Models\StoryItem;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    public function __invoke()
    {
        $hero = Schema::hasTable('hero_sections') ? HeroSection::query()->first() : null;
        $members = Schema::hasTable('class_members') ? ClassMember::query()->orderBy('sort_order')->get() : collect();
        $stories = Schema::hasTable('story_items') ? StoryItem::query()->orderBy('sort_order')->get() : collect();
        $contact = Schema::hasTable('contact_sections') ? ContactSection::query()->first() : null;

        return view('home.index', [
            'hero' => $hero,
            'members' => $members,
            'stories' => $stories,
            'contact' => $contact,
        ]);
    }
}