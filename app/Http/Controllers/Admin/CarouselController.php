<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\ServiceCategory;
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
        $carousel->title = $request->title;
        $carousel->slug = SlugHelper::generateUniqueSlug(Carousel::class, $request->title);
        $carousel->alt_text = $request->alt_text;
        $carousel->sort_order = $request->sort_order;
        $carousel->is_active = $request->is_active;
        $carousel->save();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $carousel->tags()->sync($tagIds);

        if ($request->hasFile('banner_image')) {
            $carousel->clearMediaCollection('banner');
            $carousel->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }
        return redirect()->to(route('carousel.index', $carousel->id));


    }
    public function edit(string $id)
    {
        $carousel = Carousel::findOrFail($id);
      $tags = $carousel->tags->pluck('name')->toArray();

        return view('admin.carousel.edit', [
            "carousel" => $carousel,
           "tags" => $tags
        ]);
    }
    public function update(Request $request, string $id)
    {
        $carousel = Carousel::findOrFail($id);
        if ($carousel->title !== $request->title) {
            $carousel->slug = SlugHelper::generateUniqueSlug(Carousel::class, $request->title);
        }
        $carousel->title = $request->title;
        $carousel->alt_text = $request->alt_text;
        $carousel->sort_order = $request->sort_order;
        $carousel->is_active = $request->is_active;
        $carousel->update();

        $tags = json_decode($request->tags, true);
        $tagIds = [];
        if (!is_null($tags) && count($tags) > 0) {
            foreach ($tags as $tagName) {
                if (strlen($tagName["value"]) > 2) {
                    $tag = Tag::firstOrCreate(['name' => $tagName["value"]]);
                    $tagIds[] = $tag->id;
                }
            }
        }
        $carousel->tags()->sync($tagIds);


        if ($request->hasFile('banner_image')) {
            $carousel->clearMediaCollection('banner');
            $carousel->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        } else {
            $carousel->clearMediaCollection('banner');
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
