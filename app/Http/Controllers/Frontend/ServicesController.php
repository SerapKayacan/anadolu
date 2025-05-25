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

        // Eager-load services and their translations & media
        $serviceCategory = ServiceCategory::with(['services.translations', 'services.media'])
            ->where('is_active', true)
            ->where('slug', $slug)
            ->firstOrFail();

        $types = ServiceCategory::types();

        // Set SEO based on current locale
        $locale = app()->getLocale();
        $translation = $serviceCategory->translations->where('locale', $locale)->first();

        SEOTools::setTitle($translation?->title ?? $serviceCategory->title);
        SEOTools::setDescription($translation?->meta_description ?? 'Anadolu Tadilat');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['tadilat', 'boya']);

        return view('frontend.services', [
            'serviceCategories' => $serviceCategories,
            'serviceCategory' => $serviceCategory,
            'services' => $serviceCategory->services,
            'types' => $types,
        ]);
    }





}
