<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showByCategory($slug)
    {
        $serviceCategories = ServiceCategory::where('is_active', true)->get();
        $serviceCategory = ServiceCategory::where('is_active', true)->where('slug', $slug)->with('services')->firstOrFail(); // Fetch the category and its services
        $types = ServiceCategory::types();

        SEOTools::setTitle($serviceCategory->title ); // Dinamik olacak şekilde ayalanacak
        SEOTools::setDescription('Anadolu Tadilat'); // Dinamik olacak şekilde ayalanacak
        SEOTools::opengraph()->addProperty('type', 'website'); // Hizmet detay sayfasında type article olarak güncellenecek
        SEOTools::metatags()->setKeywords(['tadilat', 'boya']); // Dinamik olacak şekilde ayalanacak
//        SEOTools::addImages('https://sultanevdesaglikhizmetleri.com/wp-content/uploads/2021/10/cropped-sultan-logo-1536x288.png'); // Dinamik olacak şekilde ayalanacak


        return view('frontend.services', [
            'serviceCategories' => $serviceCategories,
            'serviceCategory' => $serviceCategory,
            'services' => $serviceCategory->services,
            'types' => $types,
        ]);
    }




}
