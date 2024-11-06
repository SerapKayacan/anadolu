<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
        public function index()
    {

        $services = Service::orderBy('sort_order','ASC')->get();
        return view('frontend.services', [
            "services" => $services
        ]);
    }

}
