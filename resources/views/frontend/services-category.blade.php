@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            @foreach ($serviceCategories as $serviceCategory)
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $serviceCategory->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Ana Sayfa</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $serviceCategory->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Hizmetlerimiz</h1>
            </div>
            <div class="row g-4">
                @foreach ($serviceCategories as $serviceCategory)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/service-1.jpg') }}" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{ $serviceCategory->title }}</h4>
                            <p>{!! $serviceCategory->category_page_detail !!}</p>
                            <a class="fw-medium" href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}" >Hizmetleri Görüntüle<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
