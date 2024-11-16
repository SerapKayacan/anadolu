<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class OnlineDoctorController extends Controller

{
     public function showByCategory($id)
    {
        $serviceCategory = ServiceCategory::with('services')->findOrFail($id); // Fetch the category and its services
        $types = ServiceCategory::types();


        return view('frontend.online-doctor', [
            'serviceCategory' => $serviceCategory,
            'services' => $serviceCategory->services,
            'types' => $types,
        ]);
    }

   }
