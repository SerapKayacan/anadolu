<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\TabPanel;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $locale = App::getLocale();

        $serviceCategories = ServiceCategory::where('is_active', true)
            ->withCount('services')
            ->with(['translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }])
            ->orderBy('sort_order', 'ASC')
            ->get();

        $carousels = Carousel::where('is_active', true)
            ->orderBy('sort_order', 'ASC')
            ->get();

        $tabPanels = TabPanel::where('is_active', true)
            ->orderBy('sort_order', 'ASC')
            ->get();

        $types = ServiceCategory::types();

        $services = Service::where('is_active', true)
            ->with(['translations' => function ($query) use ($locale) {
                $query->where('locale', $locale);
            }])
            ->orderBy('sort_order', 'ASC')
            ->get();

        SEOTools::setTitle('Anasayfa');
        SEOTools::setDescription('Anadolu Tadilat');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['tadilat', 'boya']);

        return view('frontend.home', compact('serviceCategories', 'types', 'carousels', 'tabPanels', 'services'));
    }


}
