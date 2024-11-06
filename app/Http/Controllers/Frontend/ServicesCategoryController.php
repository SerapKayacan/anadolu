<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();

        return view('frontend.services-category', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }

}
