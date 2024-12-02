<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showByCategory($id)
    {
        $serviceCategory = ServiceCategory::where('is_active', true)->with('services')->findOrFail($id); // Fetch the category and its services
        $types = ServiceCategory::types();

        return view('frontend.services', [
            'serviceCategory' => $serviceCategory,
            'services' => $serviceCategory->services,
            'types' => $types,
        ]);
    }




}
