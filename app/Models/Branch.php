<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Branch extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'address',
        'phone',
        'fax',
        'email_domestic',
        'email_request',
        'map_link',
    ];

    protected $translatable = ['title'];
}