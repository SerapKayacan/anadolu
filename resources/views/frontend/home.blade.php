@extends('frontend.layouts.master')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($carousels as $index => $carousel)
                @php
                    $translation = $carousel->translations->firstWhere('locale', app()->getLocale());
                @endphp

                <div class="owl-carousel-item position-relative  @if ($index == 0) active @endif">
                    <img class="img-fluid" src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}"
                         alt="Carousel Image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                         style="background: rgba(53, 53, 53, 0.3);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        {{ $translation?->title ?? 'Default Title' }}
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        {{ $translation?->description ?? 'Default Description' }}
                                    </p>
                                    <a href="{{ $carousel->button_link }}"
                                       title="{{ $translation?->title ?? 'Default Title' }} Görüntüle"
                                       class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                        {{ __('messages.see_more') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-user-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">01</h1>
                    </div>
                    <h5>{{ __('messages.creative_designers') }}</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">02</h1>
                    </div>
                    <h5>{{ __('messages.quality_products') }}</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">03</h1>
                    </div>
                    <h5>{{ __('messages.free_consultation') }}</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-headphones fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">04</h1>
                    </div>
                    <h5>{{ __('messages.customer_support') }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">{{ __('messages.services') }}</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">{{ __('messages.all') }}</li>
                        @foreach ($serviceCategories as $serviceCategory)
                            @php
                                $translation = $serviceCategory->translations->firstWhere('locale', app()->getLocale());
                            @endphp
                            @if ($translation)
                            <li class="mx-2" data-filter=".category-{{ $serviceCategory->id }}">
                                {{ $serviceCategory->translations->first()?->title ?? 'Default Title' }}
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 portfolio-item category-{{ $service->category_id }} wow fadeInUp " >
                        <div class="rounded overflow-hidden h-100 d-flex flex-column">
                            <div class="position-relative overflow-hidden">
                                <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}">
                                    <img class="img-fluid w-100 h-auto"
                                         src="{{ $service->getFirstMediaUrl('images', 'large') ?: asset('default-image.jpg') }}"
                                         alt="{{ $service->translations->first()?->title ?? 'Default Title' }}">
                                </a>

                            </div>
                            <div class="border border-5 border-light border-top-0 p-4 d-flex flex-column flex-grow-1">
                                 @php
                                $translation = $service->translations->where('locale', app()->getLocale())->first();
                                 @endphp
                                <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}">
                                    <p class="text-primary fw-medium fs-3 mb-2">  {{ $service->translations->first()?->title ?? 'Default Title' }}</p>
                                </a>
                                <h5 class="lh-base mb-0">
                                    {{ $service->translations->first()?->category_page_detail ?? 'Default Title' }}
                                </h5>
                                <a class="fw-medium" href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"> {{ __('messages.see_more') }}<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/about-us.jpeg') }}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">{{ __('messages.vision_title') }}</h1>
                        </div>
                        <p class="mb-4 pb-2">{{ __('messages.vision_text') }}</p>
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">{{ __('messages.mission_title') }}</h1>
                        </div>
                        <p class="mb-4 pb-2">{{ __('messages.mission_text') }}
{{--                        <div class="row g-4 mb-4 pb-2">--}}
{{--                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"--}}
{{--                                         style="width: 60px; height: 60px;">--}}
{{--                                        <i class="fa fa-users fa-2x text-primary"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>--}}
{{--                                        <p class="fw-medium mb-0">Mutlu Müşteri</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"--}}
{{--                                         style="width: 60px; height: 60px;">--}}
{{--                                        <i class="fa fa-check fa-2x text-primary"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3">--}}
{{--                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>--}}
{{--                                        <p class="fw-medium mb-0">Bitirilmiş Proje</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">{{ __('messages.why_choose_us_title') }}</h1>
                        </div>
                        <p class="mb-4 pb-2"> {{ __('messages.why_choose_us_text') }}</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">{{ __('messages.quality') }}</p>
                                        <h5 class="mb-0">{{ __('messages.services') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">{{ __('messages.innovator') }}</p>
                                        <h5 class="mb-0">{{ __('messages.designs') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">{{ __('messages.free') }}</p>
                                        <h5 class="mb-0">{{ __('messages.advice') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">{{ __('messages.customer') }}</p>
                                        <h5 class="mb-0">{{ __('messages.support') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/why-us.jpeg') }}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    window.addEventListener("load", function () {
        document.getElementById("spinner").style.display = "none";
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filters = document.querySelectorAll("#portfolio-flters li");
        const items = document.querySelectorAll(".portfolio-item");

        filters.forEach(filter => {
            filter.addEventListener("click", function() {
                // Remove active class from all filters
                filters.forEach(f => f.classList.remove("active"));
                this.classList.add("active");

                const filterValue = this.getAttribute("data-filter");

                if (filterValue === "*") {
                    // Show all items when "All" is clicked
                    items.forEach(item => {
                        item.style.display = "block";
                    });
                } else {
                    // Hide all items first
                    items.forEach(item => {
                        item.style.display = "none";
                    });

                    // Show only items that match the selected category
                    document.querySelectorAll(filterValue).forEach(item => {
                        item.style.display = "block";
                    });
                }
            });
        });
    });
</script>
{{--<script>--}}
{{--    window.addEventListener('DOMContentLoaded', () => {--}}
{{--        // Select all portfolio items with the class 'wow fadeInUp'--}}
{{--        const portfolioItems = document.querySelectorAll('.portfolio-item');--}}

{{--        // Loop through each portfolio item and apply a dynamic delay--}}
{{--        portfolioItems.forEach((item, index) => {--}}
{{--            // Create a dynamic delay for each item. For example, use the index to set a delay.--}}
{{--            const delay = (index + 0.01) * 0.01; // Increase delay by 0.2s for each item--}}
{{--            item.setAttribute('data-wow-delay', `${delay}s`);--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}
