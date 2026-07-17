<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'badge_text',
        'title',
        'title_accent',
        'description',
        'primary_cta_label',
        'primary_cta_url',
        'secondary_cta_label',
        'secondary_cta_url',
        'team_label',
        'team_value',
        'theme_label',
        'theme_value',
        'style_label',
        'style_value',
        'background_image_path',
        'poster_image_path',
    ];
}