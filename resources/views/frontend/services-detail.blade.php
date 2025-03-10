@extends('frontend.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $service->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Ana Sayfa</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $serviceCategory->title }}</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ $service->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
{{--            <div class="section-title text-center">--}}
{{--                <h1 class="display-5 mb-5">{{ $service->title }}</h1>--}}
{{--            </div>--}}
            <div class="row g-4">
                @foreach ($service->getMedia('images') as $image)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ $image->getUrl('large') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0"> {{ $image->getCustomProperty('image_title') ?? 'No Title Available' }}</h5>
                            <small>  {{ $image->getCustomProperty('image_description') ?? 'No Description Available' }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
