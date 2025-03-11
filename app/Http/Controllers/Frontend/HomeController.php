<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\TabPanel;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::where('is_active', true)->withCount('services')->orderBy('sort_order','ASC')->get();
        $carousels = Carousel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $tabPanels = TabPanel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $types = ServiceCategory::types();
        $services = Service::where('is_active', true)->orderBy('sort_order','ASC')->get();

        SEOTools::setTitle('Anasayfa'); // Dinamik olacak şekilde ayalanacak
        SEOTools::setDescription('Anadolu Tadilat'); // Dinamik olacak şekilde ayalanacak
        SEOTools::opengraph()->addProperty('type', 'website'); // Hizmet detay sayfasında type article olarak güncellenecek
        SEOTools::metatags()->setKeywords(['tadilat', 'boya']); // Dinamik olacak şekilde ayalanacak
//        SEOTools::addImages('https://sultanevdesaglikhizmetleri.com/wp-content/uploads/2021/10/cropped-sultan-logo-1536x288.png'); // Dinamik olacak şekilde ayalanacak

        return view('frontend.home', [
            "serviceCategories" => $serviceCategories,
            "types" => $types,
            "carousels"=>$carousels,
            "tabPanels" => $tabPanels,
            "services" => $services
        ]);
    }

}
