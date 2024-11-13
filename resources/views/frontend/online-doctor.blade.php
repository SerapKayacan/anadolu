@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="main-wrapper-services-1" style="background-color:#F0EDFD">
            <div class="container main-container-services-1">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xs-12">
                        <p class="services-search-text">Sağlığı <span style="color:#372778">Eve Getiriyoruz</span>
                        </p>
                        <form class="search-bar" role="search" id="form">
                            <input class="search-bar-input" type="search" id="query" name="q"
                                   placeholder="evde serum..."
                                   aria-label="Search through site content">
                            <button class="search-bar-button">
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
            </div>
        </div>
        <div class="main-wrapper-2">
            <div class="container">
                <div class="row" >
                    @foreach ($serviceCategories as $serviceCategory)
                        <div class="col @if(  $serviceCategory->home_page_colspan==2 ) col-lg-6
                                @else col-lg-3
                                @endif" style="margin-bottom:20px;">
                            <a href="" style=" text-decoration: none;">
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
                                            {{$serviceCategory->category_page_detail }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
