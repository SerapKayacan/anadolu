<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\AppointmentService;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ServicesDetailController extends Controller
{
    protected $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function show(string $slug)
    {
        $serviceCategories = ServiceCategory::where('is_active', true)->get();
        $service = Service::with('getCategory')
            ->where('is_active', true)
            ->where('slug', $slug)
            ->orderBy('sort_order', 'ASC')
            ->firstOrFail();

        $serviceCategory = $service->getCategory; // Retrieve the category from the relationship

        $days = $this->appointmentService->getWeeklyAvailability($service);

        SEOTools::setTitle($service->title);
        SEOTools::setDescription($service->meta_description);
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::metatags()->setKeywords($service->tags->pluck('name')->toArray());

        return view('frontend.services-detail', [
            'serviceCategories' => $serviceCategories,
            "service" => $service,
            "serviceCategory" => $serviceCategory, // Pass the category to the view
            "days" => $days,
        ]);

    }


}
