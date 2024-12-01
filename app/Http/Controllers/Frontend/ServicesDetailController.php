<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\AppointmentService;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServicesDetailController extends Controller
{
    protected $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function show(string $id)
    {
        $serviceCategory = ServiceCategory::with('services')->findOrFail($id);
        $service = Service::where('is_active', true)->orderBy('sort_order','ASC')->with('getCategory')->findOrFail($id);
        $days = $this->appointmentService->getWeeklyAvailability($service);




        return view('frontend.services-detail', [
            "service" => $service,
            "days" => $days,
            'serviceCategory' => $serviceCategory,
        ]);
    }


}
