<?php

namespace App\Services;

use App\Models\Service;
use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentService
{
    public function getWeeklyAvailability($service)
    {
        $start_time = $service->appointment_start_time;
        $end_time = $service->appointment_end_time;

        $days = [];
        $currentDate = Carbon::today();

        for ($day = 0; $day < 7; $day++) {
            $date = $currentDate->copy()->addDays($day);
            $timeSlot = Carbon::parse($start_time);

            while ($timeSlot->lessThanOrEqualTo(Carbon::parse($end_time))) {
                $timeString = $timeSlot->format('H:i');

                $isAvailable = !Appointment::where('service_id', $service->id)
                    ->where('date', $date->toDateString())
                    ->where('time', $timeString)
                    ->exists();

                $days[$date->toDateString()][] = [
                    'time' => $timeString,
                    'is_available' => $isAvailable
                ];

                $timeSlot->addMinutes(30);
            }
        }

        return $days;
    }
}
