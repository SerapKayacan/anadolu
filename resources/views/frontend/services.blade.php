@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="row px-4" style="background-color:#f8caca">
            <div class="col-12 text-center py-4 ms-20 d-flex flex-column align-items-center">
                <form action="{{ route('search') }}" method="GET" class="search-bar justify-content-center mx-3"
                      role="search" id="form">
                    <input class="search-bar-input" type="search" name="query"
                           placeholder="Epoxy-PVC..."
                           aria-label="Search through site content">
                    <button class="search-bar-button px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.5em" color=" #6E4EEF"
                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false"
                             class=""><title>search</title>
                            <path
                                d="M23.031 23.033c0.536-0.536 1.404-0.536 1.939 0l6.626 6.626c0.536 0.536 0.536 1.404 0 1.939s-1.404 0.536-1.94 0l-6.626-6.626c-0.536-0.536-0.536-1.404 0-1.939z"></path>
                            <path
                                d="M0.001 14.628c0.001-8.079 6.55-14.628 14.628-14.628 0 0 0 0 0 0 8.079 0 14.628 6.549 14.628 14.628s-6.549 14.628-14.628 14.628c-8.078 0-14.627-6.548-14.628-14.626zM2.744 14.628c0 6.564 5.321 11.886 11.886 11.886s11.886-5.321 11.886-11.886c0-6.564-5.321-11.886-11.886-11.886s-11.885 5.322-11.886 11.886z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="main-wrapper-services-1" style="margin-top:40px;margin-bottom:40px;">
            <div class="container main-container-services-1">
                <div class="row justify-content-center p-4 ">
                    @foreach ($services as $service)
                        <div class="col-lg-4 mb-4">
                            <div class="card home-card rounded-5 ">
                                <img src="{{ $service->getFirstMediaUrl('banner', 'large') }}" alt="Service image"
                                     class="home-card-img rounded-5">
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
            </div>
        </div>

    </main>
@endsection
