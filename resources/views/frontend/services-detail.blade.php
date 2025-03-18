@extends('frontend.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $service->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Ana Sayfa</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}">Hizmetlerimiz</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page"><a href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}">{{ $serviceCategory->title }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $service->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                @foreach ($service->getMedia('images') as $image)
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" title="{{ $service->title }}" src="{{ $image->getUrl('large') }}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">{{ $service->title }}</h1>
                        </div>
                        <p class="mb-4 pb-2">{!! $service->sort_detail !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
