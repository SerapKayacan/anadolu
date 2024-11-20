<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();
        return view('frontend.contact ', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }
}
