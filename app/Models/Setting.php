<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'fb',
        'tw',
        'in',
        'inst',
        'yt',
        'image_logo_light',
        'image_logo_dark',
        'home_about_title',
        'home_about_subtitle',
        'home_about_desc',
        'time_line_title',
        'footer_title',
        'address',
        'phone',
        'fax',
        'email',
        'about_banner',
        'about_title',
        'about_desc',
        'about_iframe',
        'contact_title',
        'contact_image',
        'welding_title',
        'welding_image',
        'casting_desc',
    ];

    protected $translatable = [
        'home_about_title',
        'home_about_subtitle',
        'home_about_desc',
        'time_line_title',
        'footer_title',
        'about_title',
        'about_desc',
        'contact_title',
        'welding_title',
        'casting_desc',
    ];
}