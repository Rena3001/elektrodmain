<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WeldingSlider extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'image',
        'title',
        'subtitle',
    ];

    protected $translatable = ['title', 'subtitle',];
}