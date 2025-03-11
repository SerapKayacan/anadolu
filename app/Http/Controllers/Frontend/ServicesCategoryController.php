<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order', 'ASC')->get();
        $types = ServiceCategory::types();
        foreach ($serviceCategories as $serviceCategory) {
            SEOTools::setTitle($serviceCategory->title); // Dinamik olacak şekilde ayalanacak
            SEOTools::setDescription('Anadolu Tadilat'); // Dinamik olacak şekilde ayalanacak
            SEOTools::opengraph()->addProperty('type', 'website'); // Hizmet detay sayfasında type article olarak güncellenecek
            SEOTools::metatags()->setKeywords(['tadilat', 'boya']); // Dinamik olacak şekilde ayalanacak
//            SEOTools::addImages('https://sultanevdesaglikhizmetleri.com/wp-content/uploads/2021/10/cropped-sultan-logo-1536x288.png'); // Dinamik olacak şekilde ayalanacak
        }

        // Pass the serviceCategories to the view
        return view('frontend.services-category', [
            'serviceCategories' => $serviceCategories,
            "types" => $types,

        ]);

    }

}
