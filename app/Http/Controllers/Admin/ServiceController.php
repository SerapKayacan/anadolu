<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $types = ServiceCategory::types();
        return view('admin.service.index', [
            "serviceCategories" => $services,
            "types" => $types
        ]);
    }

    public function create()
    {
        $types = ServiceCategory::types();
        return view('admin.service.create', [
            "types" => $types
        ]);
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->slug = SlugHelper::generateUniqueSlug(Service::class, $request->title);
        $service->meta_description = $request->meta_description;
        $service->meta_keywords = $request->meta_keywords;
        $service->category_page_detail = $request->category_page_detail;
        $service->sort_detail = $request->sort_detail;
        $service->detail = $request->detail;
        $service->banner_image = $request->banner_image;
        $service->category_id = $request->category_id;
        $service->sort_order = $request->sort_order;
        $service->is_active = $request->is_active;
        $service->save();

        return redirect()->to(route('service.edit', $service->id));
    }

    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        $types = ServiceCategory::types();
        return view('admin.service.edit', [
            "serviceCategory" => $service,
            "types" => $types
        ]);
    }

    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);
        if ($service->title !== $request->title) {
            $service->slug = SlugHelper::generateUniqueSlug(Service::class, $request->title);
        }
        $service->title = $request->title;
        $service->meta_description = $request->meta_description;
        $service->meta_keywords = $request->meta_keywords;
        $service->category_page_detail = $request->category_page_detail;
        $service->sort_detail = $request->sort_detail;
        $service->detail = $request->detail;
        $service->banner_image = $request->banner_image;
        $service->category_id = $request->category_id;
        $service->sort_order = $request->sort_order;
        $service->is_active = $request->is_active;
        $service->update();

        return redirect()->to(route('service.edit', $service->id));
    }

    public function destroy(string $id)
    {
        $service = Service::findOrFail($id)->delete();
        if ($service){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
