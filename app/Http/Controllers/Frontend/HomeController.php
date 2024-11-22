<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();

        SEOTools::setTitle('Anasayfa'); // Dinamik olacak şekilde ayalanacak
        SEOTools::setDescription('Özel Sultan Evde Sağlık Hizmetleri'); // Dinamik olacak şekilde ayalanacak
        SEOTools::opengraph()->addProperty('type', 'website'); // Hizmet detay sayfasında type article olarak güncellenecek
        SEOTools::metatags()->setKeywords(['doktor randevu', 'telemedicine']); // Dinamik olacak şekilde ayalanacak
        SEOTools::addImages('https://sultanevdesaglikhizmetleri.com/wp-content/uploads/2021/10/cropped-sultan-logo-1536x288.png'); // Dinamik olacak şekilde ayalanacak

        return view('frontend.home', [
            "serviceCategories" => $serviceCategories,
            "types" => $types
        ]);
    }

}
