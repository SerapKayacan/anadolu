@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    @php
        $locale = app()->getLocale();
        $translatedTitle = $serviceCategory->translations->where('locale', $locale)->first()?->title ?? 'Default Title';
    @endphp

    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $translatedTitle }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item text-white">{{ __('messages.services') }}</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $translatedTitle }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Page Header End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <!-- Add your section title here if needed -->
            </div>
            <div class="row g-4">
                @foreach ($services as $index => $service)
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="service-item">
                            <div class="overflow-hidden">
                                <img src="{{ $service->getFirstMediaUrl('images', 'large') ?: asset('default-image.jpg') }}" alt="{{ $service->title }}">
                            </div>
                            <div class="p-4 text-center border border-5 border-light border-top-0">
                                <h4 class="mb-3">{{ $service->translations->where('locale', app()->getLocale())->first()?->title ?? 'Default Title' }}</h4>
                                <p>{{ $service->translations->where('locale', app()->getLocale())->first()?->category_page_detail ?? 'Default Title' }}</p>
                                <a class="fw-medium" title="{{ $service->translations->where('locale', app()->getLocale())->first()?->title ?? 'Default Title' }}" href="{{ route('services-detail.show', ['slug' => $service->slug]) }}" >{{ __('messages.see_more') }}<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Service End -->
@endsection
