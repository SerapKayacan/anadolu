<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Service;
use App\Services\AppointmentService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    protected $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function index()
    {
        $services = Service::where('can_be_appointment', true)->where('is_active', true)->orderBy('sort_order','ASC')->get();
        return view('admin.appointment.index', [
            "services" => $services
        ]);
    }

    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        $days = $this->appointmentService->getWeeklyAvailability($service);

        return view('admin.appointment.edit', [
            "service" => $service,
            "days" => $days
        ]);
    }

    public function update(Request $request, string $id)
    {
        $dates = $request->except(['service_id', '_token', '_method']);
        foreach ($dates as $key => $value) {
            [$day, $time] = explode('+', $key);
            $date = Carbon::parse($day);

            if ($value == 'on') {
                Appointment::where('service_id', $id)
                    ->where('date', $date->toDateString())
                    ->where('time', $time)
                    ->delete();
            } else {
                Appointment::updateOrCreate(
                    [
                        'service_id' => $id,
                        'date' => $date->toDateString(),
                        'time' => $time,
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Güncelleme başarılı');
    }
}
