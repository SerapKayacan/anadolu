@extends('frontend.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ __('messages.about_us') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="{{ route('about-us.index') }}">{{ __('messages.about_us') }}</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
                        <p class="mb-4 pb-2">{{ __('messages.mission_text') }}</p>

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

@endsection
