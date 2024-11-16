<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Services\AppointmentService;
use Illuminate\Http\Request;

class OnlineDoctorDetailController extends Controller
{

    protected $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function show(string $id)
    {
        $serviceCategory = ServiceCategory::with('services')->findOrFail($id);
        $services = Service::where('can_be_appointment', true)->where('is_active', true)->orderBy('sort_order','ASC')->get();
        $service = Service::with('getCategory')->findOrFail($id); // Ensure related data is loaded
        $days = collect($this->appointmentService->getWeeklyAvailability($service))
            ->map(function ($times) {
                return array_filter($times, fn($time) => $time['is_available']); // Filter only available times
            });
        $noAppointments = $days->every(function ($times) {
            return empty($times); // No times available for any day
        });


        return view('frontend.online-doctor-detail', [
            "service" => $service,
            "days" => $days,
            "services" => $services,
            "noAppointments" => $noAppointments, // Pass the flag to the view
            'serviceCategory' => $serviceCategory,
        ]);
    }
}
