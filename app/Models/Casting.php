<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Casting extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'desc',
        'desc_short',
        'iframe_url',
    ];

    protected $translatable = ['title', 'slug', 'desc', 'desc_short'];
}