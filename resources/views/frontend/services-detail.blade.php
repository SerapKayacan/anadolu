@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="container rounded-bottom-5 pb-5 px-5" style="background-color:#f8dbdb">
            <div class="row justify-content-center ">
                <div class="col-lg-5 col-md-5col-sm-12 col-xs-12 d-flex justify-content-center pt-4 pb-2">
                    <img class="services-detail-page-img"
                         src="{{ $service->getFirstMediaUrl('banner', 'large') }}"
                         alt="Service Banner">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 services-detail-page-text col-lg-5 pt-4 pb-2">
                    <h1 class="services-detail-page-header">{{ $service->title }}</h1>
                    <p>
                        {!! $service->sort_detail !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="container pb-5 px-5">
            <div class="row justify-content-center mx-4">
                <div class="col-md-12 col-lg-12 col-xs-12 mx-2">
                    <p class="services-detail-page-text-bottom"> {!! $service->detail !!} </p>
                </div>
            </div>
        </div>

    </main>

@endsection
