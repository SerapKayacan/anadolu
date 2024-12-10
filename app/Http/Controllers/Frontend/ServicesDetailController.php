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

        $service = Service::with('getCategory')
            ->where('is_active', true)
            ->where('slug', $slug)
            ->orderBy('sort_order', 'ASC')
            ->firstOrFail();

        $days = $this->appointmentService->getWeeklyAvailability($service);
        SEOTools::setTitle($service->title); // Dinamik olacak şekilde ayalanacak
        SEOTools::setDescription($service->meta_description); // Dinamik olacak şekilde ayalanacak
        SEOTools::opengraph()->addProperty('type', 'article'); // Hizmet detay sayfasında type article olarak güncellenecek
        SEOTools::metatags()->setKeywords($service->tags->pluck('name')->toArray()); // Dinamik olacak şekilde ayalanacak
        SEOTools::addImages($service->getFirstMediaUrl('banner', 'large')); // Dinamik olacak şekilde ayalanacak

        return view('frontend.services-detail', [
            "service" => $service,
            "days" => $days,

        ]);
    }


}
