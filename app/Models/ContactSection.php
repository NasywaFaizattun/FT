<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_label',
        'title',
        'description',
        'email',
        'phone',
        'location',
        'image_path',
        'form_note',
    ];
}