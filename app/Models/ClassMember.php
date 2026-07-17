<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quote',
        'photo_path',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];
}