@extends('frontend.layouts.master')
@section('content')
    <div class="container-fluid px-0 mx-0">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $index => $carousel)
                    <div class="carousel-item @if ($index == 0) active @endif">
                        <img src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}" class="d-block w-100"
                             alt="Carousel Image">
                        <div class="carousel-caption d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h5>{!! $carousel->title !!}</h5>
                                <p>{!! $carousel->description !!}</p>
                                <a href="{{ $carousel->button_link }}" title="Hizmeti Görüntüleyin" class="btn p-3"
                                   style="color: {{ $carousel->text_color }}; background-color: {{ $carousel->background_color }}; border: 1px solid {{ $carousel->border_color }}; border-radius: 23px; font-weight: bold;">
                                    {{ $carousel->button_text }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row justify-content-center  p-4 ">
        @foreach ($services as $service)
            <div class="col-lg-4 mb-4">
                <div class="card home-card ">
                    <img src="{{ $service->getFirstMediaUrl('banner', 'large') }}" alt="Service image"
                         class="home-card-img">
                    <div class="card-body home-card-body">
                        <p class="home-card-title"> {{ $service->title}}</p>
                        <p class="home-card-detail">{{ $service->category_page_detail }}</p>
                        <button class="home-card-button" title="Devamını Gör."
                                onclick="window.location.href='{{ route('services-detail.show', ['slug' => $service->slug]) }}'">
                            Devamını Gör
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
