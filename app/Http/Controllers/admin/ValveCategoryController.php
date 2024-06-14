<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ValveCategoryRequest;
use App\Models\Lang;
use App\Models\ValveCategory;
use App\Services\DataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ValveCategoryController extends Controller
{
    protected $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $models = ValveCategory::all();
        return view('admin.valve_categories.index', compact('models'));
    }

    public function create()
    {
        $langs = Lang::all();
        return view('admin.valve_categories.create', compact('langs'));
    }

    public function store(ValveCategoryRequest $request)
    {

        $data = $request->only('title');
        $data['slug'] = $this->dataService->sluggableArray($data, 'title');
        $created = ValveCategory::create($data);

        return redirect()->route('admin.valve_categories.index')
            ->with('type', 'success')
            ->with('message', 'Valve Category has been stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ValveCategory $valve_category)
    {
        if (!empty($valve_category)) {
            $model = $valve_category;
            $model['json_field'] = $model->getTranslations('title');
            // dd($model);
            $langs = Lang::all();
            return view('admin.valve_categories.edit', compact('model', 'langs'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValveCategoryRequest $request, ValveCategory $valveCategory)
    {
        if (!empty($valveCategory)) {
            $model = $valveCategory;
            $langs = Lang::all();

            $data = $request->only('title');
            $data['slug'] = $this->dataService->sluggableArray($data, 'title');

            $update = $valveCategory->update($data);

            if ($update) {
                return redirect()->route('admin.valve_categories.index')
                    ->with('type', 'success')
                    ->with('message', 'Category has been updated.');
            } else {
                return back()
                    ->with('type', 'danger')
                    ->with('message', 'Failed to update category!')
                    ->withInput($data)->with(compact('model', 'langs'));
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ValveCategory $valveCategory)
    {
        if (!empty($valveCategory)) {
            $deleted = $valveCategory->delete();

            if ($deleted) {
                return redirect()->route('admin.valve_categories.index')
                    ->with('type', 'info')
                    ->with('message', 'Category has been deleted!');
            } else {
                return redirect()->back()
                    ->with('type', 'danger')
                    ->with('message', 'Failed to delete Category!');
            }
        } else {
            abort(404);
        }
    }
}