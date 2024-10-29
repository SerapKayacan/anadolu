<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();
        return view('admin.service-category.index', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }

    public function create()
    {
        $types = ServiceCategory::types();
        return view('admin.service-category.create', [
            "types" => $types
        ]);
    }

    public function store(Request $request)
    {
        $serviceCategory = new ServiceCategory();
        $serviceCategory->title = $request->title;
        $serviceCategory->slug = SlugHelper::generateUniqueSlug(ServiceCategory::class, $request->title);
        $serviceCategory->meta_description = $request->meta_description;
        $serviceCategory->category_page_detail = $request->category_page_detail;
        $serviceCategory->home_page_detail = $request->home_page_detail;
        $serviceCategory->icon = $request->icon;
        $serviceCategory->type = $request->type;
        $serviceCategory->sort_order = $request->sort_order;
        $serviceCategory->is_show_home_page = $request->is_show_home_page;
        $serviceCategory->is_show_service_page = $request->is_show_service_page;
        $serviceCategory->home_page_colspan = $request->home_page_colspan;
        $serviceCategory->is_active = $request->is_active;
        $serviceCategory->save();

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
        $serviceCategory->tags()->sync($tagIds);

        return redirect()->to(route('service-category.index', $serviceCategory->id));
    }

    public function edit(string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $types = ServiceCategory::types();
        $tags = $serviceCategory->tags->pluck('name')->toArray();

        return view('admin.service-category.edit', [
            "serviceCategory" => $serviceCategory,
            "types" => $types,
            "tags" => $tags
        ]);
    }

    public function update(Request $request, string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        if ($serviceCategory->title !== $request->title) {
            $serviceCategory->slug = SlugHelper::generateUniqueSlug(ServiceCategory::class, $request->title);
        }
        $serviceCategory->title = $request->title;
        $serviceCategory->meta_description = $request->meta_description;
        $serviceCategory->category_page_detail = $request->category_page_detail;
        $serviceCategory->home_page_detail = $request->home_page_detail;
        $serviceCategory->icon = $request->icon;
        $serviceCategory->type = $request->type;
        $serviceCategory->sort_order = $request->sort_order;
        $serviceCategory->is_show_home_page = $request->is_show_home_page;
        $serviceCategory->is_show_service_page = $request->is_show_service_page;
        $serviceCategory->home_page_colspan = $request->home_page_colspan;
        $serviceCategory->is_active = $request->is_active;
        $serviceCategory->update();

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
        $serviceCategory->tags()->sync($tagIds);

        return redirect()->to(route('service-category.index', $serviceCategory->id));
    }

    public function destroy(string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id)->delete();
        if ($serviceCategory){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
