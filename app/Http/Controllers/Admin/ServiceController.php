<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Log;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order','ASC')->get();
        return view('admin.service.index', [
            "services" => $services
        ]);
    }
    public function showImages()
    {
        $images = Media::all(); // Fetch all images from the database
        return view('your-blade-file', compact('images'));
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
        // Log the image descriptions before processing
        Log::debug('Request Image Descriptions:', ['descriptions' => $request->input('image_descriptions')]);

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

        // Handle tags
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

        // Handle image uploads and descriptions
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $uploadedImage = $service->addMedia($image)
                    ->usingFileName(SlugHelper::imageSlugName($image))
                    ->toMediaCollection('images');

                // Store the image title and description as custom properties
                if (isset($request->image_titles[$index])) {
                    $uploadedImage->setCustomProperty('image_title', $request->image_titles[$index]);
                }

                if (isset($request->image_descriptions[$index])) {
                    $uploadedImage->setCustomProperty('image_description', $request->image_descriptions[$index]);
                }

                $uploadedImage->save();
            }
        }

        // Sync tags with the service
        $service->tags()->sync($tagIds);

        // Handle banner image if provided
        if ($request->hasFile('banner_image')) {
            // Clear the existing banner images
            $service->clearMediaCollection('banner');
            // Save the banner image to the media collection
            $service->addMedia($request->banner_image)
                ->usingFileName(SlugHelper::imageSlugName($request->banner_image))
                ->toMediaCollection('banner');
        }

        // Redirect to the service index page
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

        // Update general service attributes
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

        // Update Tags
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

        // Handle Banner Image
        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            if ($bannerImage->isValid()) {
                $service->clearMediaCollection('banner'); // Clear existing banner images
                $service->addMedia($bannerImage)
                    ->usingFileName(SlugHelper::imageSlugName($bannerImage))
                    ->toMediaCollection('banner'); // Add new banner image
            }
        }

        // Handle Regular Images and Update Descriptions and Titles
        if ($request->hasFile('images')) {
            // Clear all old images before uploading new ones
            $service->clearMediaCollection('images');

            // Loop through the images and add them to the media collection
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $media = $service->addMedia($image)
                        ->usingFileName(SlugHelper::imageSlugName($image))
                        ->toMediaCollection('images');

                    // Check if there's a description for the current image
                    $imageDescription = $request->input("image_descriptions.{$media->id}");
                    $imageTitle = $request->input("image_titles.{$media->id}");

                    if ($imageDescription) {
                        // Update the custom property (image description)
                        $media->setCustomProperty('image_description', $imageDescription)->save();
                    }

                    if ($imageTitle) {
                        // Update the custom property (image title)
                        $media->setCustomProperty('image_title', $imageTitle)->save();
                    }
                }
            }
        }

        // **Update Existing Image Descriptions and Titles**
        if ($request->has('image_descriptions') || $request->has('image_titles')) {
            foreach ($request->image_descriptions as $imageId => $description) {
                $image = $service->getMedia('images')->where('id', $imageId)->first();
                if ($image) {
                    // Update the custom property for image description
                    $image->setCustomProperty('image_description', $description)->save();
                }
            }

            foreach ($request->image_titles as $imageId => $title) {
                $image = $service->getMedia('images')->where('id', $imageId)->first();
                if ($image) {
                    // Update the custom property for image title
                    $image->setCustomProperty('image_title', $title)->save();
                }
            }
        }

        return redirect()->route('service.index', $service->id);
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
    public function deleteImage($id)
    {
        $image = Media::find($id);

        if ($image) {
            $image->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Image not found'], 404);
    }

}
