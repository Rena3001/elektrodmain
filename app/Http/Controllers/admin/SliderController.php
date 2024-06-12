<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Services\DataService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file()){
            $fileExtension = $request->image->extension();
            $imgName = 'sliders_' . $this->dataService->getNowDateStr() . '.' . $fileExtension;

            $imgPath = $request->file('image')->storeAs('uploads/admin/sliders', $imgName, 'public');
            $created = Slider::create([
                'image' => '/storage/' . $imgPath,
            ]);

        }
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        if (!empty($slider)) {
            $model = $slider;
            return view('admin.sliders.show', compact('model'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        if (!empty($slider)) {
            $model = $slider;
            return view('admin.sliders.edit', compact('model'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        if (!empty($slider)) {
            $model = $slider;
            $image = $model->image;
            if($request->file()){

                if ($image && file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
                $fileExtension = $request->image->extension();
                $imgName = 'sliders_'. $this->dataService->getNowDateStr(). '.'. $fileExtension;
                $imgPath = $request->file('image')->storeAs('uploads/admin/sliders', $imgName, 'public');
                $model->image = '/storage/'. $imgPath;
            }

            $model->save();
        }
        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        if (!empty($slider)) {
            if ($slider->image && file_exists(public_path($slider->image))) {
                unlink(public_path($slider->image));
            }
            $deleted = $slider->delete();

            if ($deleted) {
                return redirect()->route('admin.sliders.index')
                    ->with('type', 'info')
                    ->with('message', 'Slider has been deleted!');
            } else {
                return redirect()->back()
                    ->with('type', 'danger')
                    ->with('message', 'Failed to delete slider!');
            }
        } else {
            abort(404);
        }
    }
}
