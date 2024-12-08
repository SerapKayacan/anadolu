@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($carousels as $carousel)
                            <div class="carousel-item active ">
                                <img src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}" class=""
                                     alt="...">
                                <div class="carousel-caption" style="position:relative; bottom:250px;left:40px;">
                                    <h5>{!! $carousel->title !!}  </h5>
                                    <p>{!!  $carousel->description !!} </p>
                                    <a
                                        href="{{ $carousel->button_link }}"
                                        class="btn p-3"
                                        target="_blank"
                                        style="color: {{ $carousel->text_color }};background-color: {{ $carousel->background_color }};border: 1px solid {{ $carousel->border_color }};border-radius:23px; font-weight:bold;">
                                        {{ $carousel->button_text }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
        <div class="container">
            <div class="row">
                @foreach ($serviceCategories as $serviceCategory)
                    <div class="col @if(  $serviceCategory->home_page_colspan==2 ) col-lg-6
                                @else col-lg-3
                                @endif" style="margin-bottom:20px;">
                        <a href="{{ route('services.byCategory', ['id' => $serviceCategory->id]) }}"
                           style=" text-decoration: none;">
                            @php
                                $colors = ['card-turquoise', 'card-yellow', 'card-purple', 'card-blue',  'card-pink','card-green', ];
                            @endphp
                            <div class="card
                                @if(  $serviceCategory->sort_order==0 ) card-1
                               @else {{ $colors[($serviceCategory->sort_order -1 ) % count($colors)] }}
                                @endif">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class=" icon-box"> {!! $serviceCategory->icon !!}</div>
                                    </div>
                                    <div class="right-box" style="flex:9">
                                        <div>  {{ $types[$serviceCategory->type] }} </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="
                                        @if(  $serviceCategory->sort_order==0 ) middle-p-big
                                        @else middle-p-small
                                        @endif">{{ $serviceCategory->title }}</p>
                                    <p class="
                                       @if(  $serviceCategory->sort_order==0 ) bottom-p-big
                                        @else bottom-p-small
                                        @endif">
                                        {!!  $serviceCategory->home_page_detail !!} </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container navbar-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Navigation Tabs -->
                    <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                        @foreach ($tabPanels as $index => $tabPanel)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-button nav-link  {{ $index === 0 ? 'active' : '' }}"
                                    id="pills-tab-{{ $index }}"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-content-{{ $index }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-content-{{ $index }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                    <div class="box nav-button-icon">
                                        {!! $tabPanel->icon !!}
                                    </div>
                                    <div class="nav-button-text">
                                        <p>{{ $tabPanel->nav_button_text }}</p>
                                    </div>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        @foreach ($tabPanels as $index => $tabPanel)
                            <div
                                class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                id="pills-content-{{ $index }}"
                                role="tabpanel"
                                aria-labelledby="pills-tab-{{ $index }}"
                                tabindex="0">
                                <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                        <img
                                            src="{{ $tabPanel->getFirstMediaUrl('banner', 'large') }}"
                                            alt=""
                                            class="img-fluid rounded-4">
                                    </div>
                                    <div class="col-md-4">
                                        <p class="title ms-0" style="line-height:1;"> {!! $tabPanel->title !!}</p>
                                        <p class="description">{!! $tabPanel->description !!}</p>
                                        <div style="position: relative; height: 100px;"> <!-- Parent container -->
                                            <button class="navbar-bottom-button" style="display: flex;"
                                                    onclick="location.href='{{ $tabPanel->button_link }}';">
                                                <div class="navbar-bottom-button-text">
                                                    <p>{{ $tabPanel->button_text }}</p>
                                                </div>
                                                <div class="navbar-button-bottom-icon">
                                                    <i class="bi bi-arrow-right navbar-button-bottom-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                             focusable="false" class="">
                                                            <path
                                                                d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                        </svg>
                                                    </i>
                                                </div>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
