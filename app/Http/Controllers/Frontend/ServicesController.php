<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::with('services')->orderBy('sort_order', 'ASC')->get();
        $types = ServiceCategory::types();

        return view('frontend.services', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }




}
