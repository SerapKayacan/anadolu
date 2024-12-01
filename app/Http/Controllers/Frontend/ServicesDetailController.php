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
        $services = Service::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $service = Service::with('getCategory')->findOrFail($id);
        $days = collect($this->appointmentService->getWeeklyAvailability($service))
            ->map(function ($times) {
                return array_map(function ($time) {
                    // Add is_available flag to all times, even if not filtered
                    return [
                        'time' => $time['time'],
                        'is_available' => $time['is_available'] ?? false,
                    ];
                }, $times);
            });
        $noAppointments = $days->every(function ($times) {
            return empty($times); // No times available for any day
        });


        return view('frontend.services-detail', [
            "service" => $service,
            "days" => $days,
            "services" => $services,
            "noAppointments" => $noAppointments, // Pass the flag to the view
            'serviceCategory' => $serviceCategory,
        ]);
    }


}
