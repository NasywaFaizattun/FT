<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'badge',
        'title',
        'description',
        'photo_path',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];
}