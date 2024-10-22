<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        $types = ServiceCategory::types();
        return view('admin.service-category.create', [
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
        $serviceCategory->meta_keywords = $request->meta_keywords;
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

        return redirect()->to(route('service-category.edit', $serviceCategory->id));
    }

    public function edit(string $id)
    {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $types = ServiceCategory::types();
        return view('admin.service.edit', [
            "serviceCategory" => $serviceCategory,
            "types" => $types
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
        $serviceCategory->meta_keywords = $request->meta_keywords;
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

        return redirect()->to(route('service-category.edit', $serviceCategory->id));
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
