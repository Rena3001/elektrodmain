<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Lang;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $langs = Lang::all();
        $settings = Setting::first();

        $settings['home_about_titles'] = $settings->getTranslations('home_about_title');
        $settings['home_about_subtitles'] = $settings->getTranslations('home_about_subtitle');
        $settings['home_about_descs'] = $settings->getTranslations('home_about_desc');
        $settings['time_line_titles'] = $settings->getTranslations('time_line_title');
        $settings['footer_titles'] = $settings->getTranslations('footer_title');
        $settings['about_titles'] = $settings->getTranslations('about_title');
        $settings['about_descs'] = $settings->getTranslations('about_desc');
        $settings['contact_titles'] = $settings->getTranslations('contact_title');
        $settings['welding_titles'] = $settings->getTranslations('welding_title');
        $settings['casting_descs'] = $settings->getTranslations('casting_desc');

        return view('admin.settings.index', compact('langs', 'settings'));
    }

    public function edit()
    {
        $langs = Lang::all();
        $settings = Setting::first();

        return view('admin.settings.edit', compact('langs', 'settings'));
    }

    public function update(SettingRequest $request)
    {
    }
}