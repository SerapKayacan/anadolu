<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::with('services')->get(); // Make sure to eager load the services
        $types = ServiceCategory::types();
        $services = Service::with('getCategory')->orderBy('sort_order', 'ASC')->get();

        // Pass the serviceCategories to the view
        return view('frontend.services-category', [
            'serviceCategories' => $serviceCategories,
            "types" => $types,
            "services" => $services
        ]);

    }

}
