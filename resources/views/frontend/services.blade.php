@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $serviceCategory->title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Ana Sayfa</a></li>
                    <li class="breadcrumb-item">Hizmetlerimiz</li>
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
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img src="{{ $service->getFirstMediaUrl('images', 'large') ?: asset('default-image.jpg') }}" alt="{{ $service->title }}">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{ $service->title}}</h4>
                            <p>{{ $service->category_page_detail }}</p>
                            <a class="fw-medium" title="{{ $service->title }}" href="{{ route('services-detail.show', ['slug' => $service->slug]) }}" >Devamını Gör<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
<script>
    window.addEventListener('DOMContentLoaded', () => {
        // Select all portfolio items with the class 'wow fadeInUp'
        const portfolioItems = document.querySelectorAll('.service-item');

        // Loop through each portfolio item and apply a dynamic delay
        portfolioItems.forEach((item, index) => {
            // Create a dynamic delay for each item. For example, use the index to set a delay.
            const delay = (index + 1) * 0.2; // Increase delay by 0.2s for each item
            item.setAttribute('data-wow-delay', `${delay}s`);
        });
    });

</script>
