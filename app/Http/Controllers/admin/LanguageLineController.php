<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lang;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langs = Lang::all();
        $models = LanguageLine::get();
        if (!empty($langs)) {
            return view('admin.language_line.index', compact('models', 'langs'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs = Lang::all();
        return view('admin.language_line.create', compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string|max:255',
            'key' => 'required|string|max:255',
            'text' => 'required|array',
        ]);

        LanguageLine::create([
            'group' => $validated['group'],
            'key' => $validated['key'],
            'text' => $validated['text'],
        ]);

        return redirect()->route('admin.language_line.create')->with('success', 'Language Line added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LanguageLine $languageLine)
    {
        if (!empty($languageLine)) {
            $model = $languageLine;
            return view('admin.language_line.show', compact('model'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LanguageLine $languageLine)
    {
        if (!empty($languageLine)) {
            $model = $languageLine;
            $langs = Lang::all();
            return view('admin.language_line.edit', compact('model', 'langs'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LanguageLine $languageLine)
    {
        if (!empty($languageLine)) {
            $model = $languageLine;
            $langs = Lang::all();

            $data = $request->only('text', 'group', 'key');
            // $data['is_deleted'] = $request->is_deleted ? 1 : 0;
            $update = $languageLine->update($data);

            if ($update) {
                return redirect()->route('admin.language_line.index')
                    ->with('type', 'success')
                    ->with('message', 'Language Line has been updated.');
            } else {
                return back()
                    ->with('type', 'danger')
                    ->with('message', 'Failed to update language line!')
                    ->withInput($data)->with(compact('model', 'langs'));
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(LanguageLine $languageLine)
    {
        if (!empty($languageLine)) {
            $deleted = $languageLine->delete();

            if ($deleted) {
                return redirect()->route('admin.language_line.index')
                    ->with('type', 'info')
                    ->with('message', 'Language line has been deleted!');
            } else {
                return redirect()->back()
                    ->with('type', 'danger')
                    ->with('message', 'Failed to delete language line!');
            }
        } else {
            abort(404);
        }
    }

}
