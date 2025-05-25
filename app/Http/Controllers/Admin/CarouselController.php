<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Tag;
use Illuminate\Http\Request;

class CarouselController extends Controller
{

    public function index()
    {
        $carousels = Carousel::orderBy('sort_order','ASC')->get();
        return view('admin.carousel.index', [
            "carousels" => $carousels
        ]);
    }


    public function create()
    {
        return view('admin.carousel.create');
    }


    public function store(Request $request)
    {
        $carousel = new Carousel();
        $mainTitle = $request->input('translations.tr.title');
        $carousel->title = $mainTitle;
        $carousel->description = $request->description ;
        $carousel->sort_order = $request->sort_order;
        $carousel->button_link = $request->button_link;
        $carousel->is_active = $request->is_active;
        $carousel->save();
        foreach ($request->translations as $locale => $data) {
            if (!empty($data['title'])) {
                $carousel->translations()->create([
                    'locale' => $locale,
                    'title' => $data['title'],
                    'description' => $data['description'] ?? '',
                ]);
            }
        }

        if ($request->hasFile('banner_image')) {
            $carousel->clearMediaCollection('banner');
            $carousel->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }
        return redirect()->to(route('carousel.index', $carousel->id));


    }
    public function edit(string $id)
    {
        $carousel = Carousel::findOrFail($id);


        return view('admin.carousel.edit', [
            "carousel" => $carousel,

        ]);
    }
    public function update(Request $request, string $id)
    {
        $carousel = Carousel::findOrFail($id);
        $carousel->title = $request->input('translations.tr.title');
        $carousel->description = $request->description ;
        $carousel->sort_order = $request->sort_order;
        $carousel->button_link = $request->button_link;
        $carousel->is_active = $request->is_active;
        $carousel->update();

        foreach ($request->translations as $locale => $data) {
            if (!empty($data['title'])) {
                $carousel->translations()->updateOrCreate(
                    ['locale' => $locale],
                    [
                        'title' => $data['title'],
                        'description' => $data['description'] ?? '',

                    ]
                );
            }
        }


        if ($request->hasFile('banner_image')) {
            $carousel->clearMediaCollection('banner');
            $carousel->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        return redirect()->to(route('carousel.index', $carousel->id));
    }


    public function destroy(string $id)
    {
        $carousel = Carousel::findOrFail($id)->delete();
        if ($carousel){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
