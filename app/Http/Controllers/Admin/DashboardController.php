<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassMember;
use App\Models\StoryItem;
use Illuminate\View\View;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $memberCount = Schema::hasTable('class_members') ? ClassMember::count() : 0;
        $storyCount = Schema::hasTable('story_items') ? StoryItem::count() : 0;

        return view('admin.dashboard', [
            'memberCount' => $memberCount,
            'storyCount' => $storyCount,
        ]);
    }
}