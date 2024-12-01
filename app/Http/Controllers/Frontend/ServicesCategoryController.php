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
        $serviceCategories = ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order', 'ASC')->get();
        $types = ServiceCategory::types();


        // Pass the serviceCategories to the view
        return view('frontend.services-category', [
            'serviceCategories' => $serviceCategories,
            "types" => $types,

        ]);

    }

}
