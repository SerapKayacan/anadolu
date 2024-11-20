<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order','ASC')->get();
        return view('admin.service.index', [
            "services" => $services
        ]);
    }

    public function create()
    {
        $categories = ServiceCategory::where('is_active', true)->orderBy('sort_order','ASC')->get();
        return view('admin.service.create', [
            "categories" => $categories
        ]);
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->slug = SlugHelper::generateUniqueSlug(Service::class, $request->title);
        $service->meta_description = $request->meta_description;
        $service->category_page_detail = $request->category_page_detail;
        $service->sort_detail = $request->sort_detail;
        $service->detail = $request->detail;
        $service->category_id = $request->category_id;
        $service->sort_order = $request->sort_order;
        $service->can_be_appointment = $request->can_be_appointment;
        $service->appointment_start_time = $request->appointment_start_time;
        $service->appointment_end_time = $request->appointment_end_time;
        $service->is_active = $request->is_active;
        $service->save();

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
        $service->tags()->sync($tagIds);
//buraya ihtiyqc var
        if ($request->hasFile('banner_image')) {
            $service->clearMediaCollection('banner');
            $service->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }

        return redirect()->to(route('service.index', $service->id));
    }

    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $tags = $service->tags->pluck('name')->toArray();

        return view('admin.service.edit', [
            "service" => $service,
            "categories" => $categories,
            "tags" => $tags
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
        $service->category_page_detail = $request->category_page_detail;
        $service->sort_detail = $request->sort_detail;
        $service->detail = $request->detail;
        $service->category_id = $request->category_id;
        $service->sort_order = $request->sort_order;
        $service->can_be_appointment = $request->can_be_appointment;
        $service->appointment_start_time = $request->appointment_start_time;
        $service->appointment_end_time = $request->appointment_end_time;
        $service->is_active = $request->is_active;
        $service->update();

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
        $service->tags()->sync($tagIds);

        if ($request->hasFile('banner_image')) {
            $service->clearMediaCollection('banner');
            $service->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        } else {
            $service->clearMediaCollection('banner');
        }

        return redirect()->to(route('service.index', $service->id));
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
