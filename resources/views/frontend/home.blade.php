@extends('frontend.layouts.master')
@section('content')
    <main>
        <div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($carousels as $carousel)
                        <div class="carousel-item active"  >
                            <img src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}" class=""
                                 alt="...">
                            <div class="carousel-caption " style="position:relative; bottom:250px;left:40px;">
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
        <div class="main-wrapper-2">
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
                                            {{$serviceCategory->category_page_detail }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="main-wrapper-2">
            <div class="container navbar-bottom">
                <div class="row">
                    <div class="col-lg-12 ">
                        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class=" nav-button active" id="pills-first-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-first" type="button" role="tab"
                                        aria-controls="pills-first" aria-selected="true">
                                    <div class="box nav-button-icon">
                                        <i class="bi bi-journal-bookmark ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                 viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                 focusable="false" class=""><title>book_legal_law</title>
                                                <path
                                                    d="M9.902 0c0.631 0 1.142 0.511 1.142 1.142v19.81c0 0.631-0.511 1.142-1.142 1.142s-1.142-0.511-1.142-1.142v-19.81c0-0.631 0.511-1.142 1.142-1.142z"></path>
                                                <path
                                                    d="M26.673 19.81c0.631 0 1.142 0.511 1.142 1.142v6.095c0 0.631-0.511 1.142-1.142 1.142s-1.142-0.511-1.142-1.142v-6.095c0-0.631 0.512-1.142 1.142-1.142z"></path>
                                                <path
                                                    d="M25.525 1.142c0-0.631 0.511-1.142 1.142-1.142 1.472 0 2.666 1.194 2.666 2.666v16.762c0 1.473-1.194 2.666-2.666 2.666h-19.81c-1.052 0-1.905 0.853-1.905 1.905s0.853 1.905 1.905 1.905c0.631 0 1.142 0.511 1.142 1.142s-0.511 1.142-1.142 1.142c-2.314 0-4.19-1.876-4.19-4.19s1.876-4.19 4.19-4.19h19.81c0.211 0 0.381-0.171 0.381-0.381v-16.762c0-0.211-0.171-0.381-0.381-0.381-0.631 0-1.142-0.511-1.142-1.142z"></path>
                                                <path
                                                    d="M5.713 27.047c0-0.631 0.511-1.142 1.142-1.142h9.143c0.631 0 1.142 0.511 1.142 1.142s-0.512 1.142-1.142 1.142h-9.143c-0.631 0-1.142-0.512-1.142-1.142z"></path>
                                                <path
                                                    d="M20.945 27.047c0-0.631 0.512-1.142 1.142-1.142h6.096c0.631 0 1.142 0.511 1.142 1.142s-0.512 1.142-1.142 1.142h-6.096c-0.631 0-1.142-0.512-1.142-1.142z"></path>
                                                <path
                                                    d="M14.853 24.762c0-0.631 0.511-1.142 1.142-1.142h6.095c0.631 0 1.142 0.511 1.142 1.142v6.095c0 0.396-0.205 0.764-0.542 0.972s-0.757 0.227-1.112 0.050l-2.537-1.268-2.537 1.268c-0.354 0.177-0.775 0.158-1.111-0.050s-0.542-0.576-0.542-0.972v-6.095zM17.137 25.905v3.105l1.394-0.697c0.322-0.161 0.7-0.161 1.022 0l1.394 0.697v-3.105h-3.811z"></path>
                                                <path
                                                    d="M6.857 2.285c-1.052 0-1.905 0.853-1.905 1.905v19.81c0 0.631-0.511 1.142-1.142 1.142s-1.142-0.512-1.142-1.142v-19.81c0-2.314 1.876-4.19 4.19-4.19h19.81c0.631 0 1.142 0.511 1.142 1.142s-0.511 1.142-1.142 1.142h-19.81z"></path>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="nav-button-text">
                                        <p>Yeni Nesil Sağlık</p>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" nav-button" id="pills-second-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-second" type="button" role="tab"
                                        aria-controls="pills-second" aria-selected="false">
                                    <div class="box nav-button-icon">
                                        <i class="bi bi-people ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                 viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                 focusable="false" class=""><title>user_group</title>
                                                <path
                                                    d="M27.254 13.349c0.677 0.677 0.677 1.775 0 2.452s-1.775 0.677-2.452 0v-0c-0.677-0.677-0.677-1.775 0-2.452v0c0.677-0.677 1.775-0.677 2.452 0zM28.697 11.903c-1.475-1.474-3.865-1.473-5.339 0.001s-1.475 3.866 0 5.341c1.475 1.475 3.866 1.475 5.341 0s1.475-3.866 0-5.341c-0-0-0.001-0.001-0.001-0.001z"></path>
                                                <path
                                                    d="M18.275 8.431c1.258 1.258 1.258 3.297 0 4.555s-3.297 1.258-4.555 0c-1.258-1.258-1.258-3.297 0-4.555s3.297-1.258 4.555 0zM19.719 6.986c-2.056-2.055-5.388-2.055-7.443 0v0c-2.056 2.056-2.056 5.388 0 7.444v0c2.056 2.056 5.388 2.056 7.444 0v-0c2.055-2.056 2.055-5.388 0-7.444-0-0-0-0-0-0z"></path>
                                                <path
                                                    d="M7.2 13.349c0.677 0.677 0.677 1.775 0 2.452s-1.775 0.677-2.452 0v-0c-0.677-0.677-0.677-1.775 0-2.452v0c0.677-0.677 1.775-0.677 2.452 0zM8.643 11.903c-1.475-1.474-3.865-1.473-5.34 0.001s-1.475 3.866 0 5.341c1.475 1.475 3.866 1.475 5.341 0s1.475-3.866 0-5.341c-0-0-0.001-0.001-0.001-0.001z"></path>
                                                <path
                                                    d="M25.462 20.634c0-0.564 0.457-1.021 1.021-1.021h1.091c2.445 0 4.426 1.981 4.426 4.426v1.493c0 0.564-0.457 1.021-1.021 1.021s-1.021-0.457-1.021-1.021v-1.493c0-1.317-1.067-2.383-2.383-2.383h-1.091c-0.564 0-1.021-0.457-1.021-1.021z"></path>
                                                <path
                                                    d="M4.426 21.655c-1.317 0-2.383 1.067-2.383 2.383v1.493c0 0.564-0.457 1.021-1.021 1.021s-1.021-0.457-1.021-1.021v-1.493c0-2.445 1.981-4.426 4.426-4.426h1.091c0.564 0 1.021 0.457 1.021 1.021s-0.457 1.021-1.021 1.021h-1.091z">
                                                </path>
                                                <path
                                                    d="M7.706 23.353c0-3.197 2.591-5.788 5.788-5.788h5.010c3.197 0 5.788 2.591 5.788 5.788v2.18c0 0.564-0.457 1.021-1.021 1.021s-1.021-0.457-1.021-1.021v-2.18c0-2.068-1.677-3.745-3.745-3.745h-5.010c-2.068 0-3.745 1.677-3.745 3.745v2.18c0 0.564-0.457 1.021-1.021 1.021s-1.021-0.457-1.021-1.021v-2.18z"></path>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="nav-button-text">
                                        <p>Yeni Nesil Sağlık</p>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" nav-button " id="pills-third-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-third" type="button" role="tab"
                                        aria-controls="pills-third" aria-selected="false">
                                    <div class="box nav-button-icon">
                                        <i class="bi bi-house-heart ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                 viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                 focusable="false" class=""><title>package_box_home</title>
                                                <path
                                                    d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path>
                                                <path
                                                    d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path>
                                                <path
                                                    d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z"></path>
                                                <path
                                                    d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="nav-button-text">
                                        <p>Yeni Nesil Sağlık</p>
                                    </div>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" nav-button " id="pills-fourth-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-fourth" type="button" role="tab"
                                        aria-controls="pills-fourth" aria-selected="false">
                                    <div class="box nav-button-icon">
                                        <i class="bi bi-webcam ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                 viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                 focusable="false" class=""><title>monitor_camera</title>
                                                <path
                                                    d="M5.852 3.123c-1.94 0-3.512 1.572-3.512 3.512v12.486c0 1.94 1.572 3.512 3.512 3.512h18.729c1.94 0 3.512-1.572 3.512-3.512v-3.121c0-0.646 0.524-1.17 1.17-1.17s1.17 0.524 1.17 1.17v3.121c0 3.232-2.62 5.852-5.852 5.852h-18.729c-3.232 0-5.852-2.62-5.852-5.852v-12.486c0-3.232 2.62-5.852 5.852-5.852h6.243c0.646 0 1.17 0.524 1.17 1.17s-0.524 1.17-1.17 1.17h-6.243z"></path>
                                                <path
                                                    d="M18.186 22.642c0.641-0.080 1.226 0.375 1.306 1.016l0.78 6.243c0.080 0.641-0.375 1.226-1.016 1.306s-1.226-0.375-1.306-1.016l-0.78-6.243c-0.080-0.641 0.375-1.226 1.016-1.306z"></path>
                                                <path
                                                    d="M12.236 22.642c0.641 0.080 1.096 0.665 1.016 1.306l-0.78 6.243c-0.080 0.641-0.665 1.096-1.306 1.016s-1.096-0.665-1.016-1.306l0.78-6.243c0.080-0.641 0.665-1.096 1.306-1.016z"></path>
                                                <path
                                                    d="M6.549 30.047c0-0.646 0.524-1.17 1.17-1.17h14.983c0.646 0 1.17 0.524 1.17 1.17s-0.524 1.17-1.17 1.17h-14.983c-0.646 0-1.17-0.524-1.17-1.17z"></path>
                                                <path
                                                    d="M29.66 4.141l-1.952 1.203v2.061l1.952 1.203v-4.467zM30.121 8.893l0 0v0c0 0 0 0 0-0zM28.894 1.864c0.628-0.387 1.417-0.404 2.062-0.044s1.044 1.040 1.044 1.779v5.552c0 0.738-0.4 1.419-1.044 1.779s-1.433 0.343-2.062-0.045c0 0 0 0 0 0l-2.97-1.831c-0.346-0.213-0.556-0.59-0.556-0.996v-3.367c0-0.406 0.21-0.783 0.556-0.996l2.97-1.831z"></path>
                                                <path
                                                    d="M15.601 3.903c0-1.723 1.397-3.12 3.12-3.12h5.855c1.723 0 3.12 1.397 3.12 3.12v4.944c0 1.723-1.397 3.12-3.12 3.12h-5.855c-1.723 0-3.12-1.397-3.12-3.12v-4.944zM18.721 3.123c-0.431 0-0.78 0.349-0.78 0.78v4.944c0 0.431 0.349 0.78 0.78 0.78h5.855c0.431 0 0.78-0.349 0.78-0.78v-4.944c0-0.431-0.349-0.78-0.78-0.78h-5.855z"></path>
                                            </svg>
                                            <path
                                                d="M6.857 2.285c-1.052 0-1.905 0.853-1.905 1.905v19.81c0 0.631-0.511 1.142-1.142 1.142s-1.142-0.512-1.142-1.142v-19.81c0-2.314 1.876-4.19 4.19-4.19h19.81c0.631 0 1.142 0.511 1.142 1.142s-0.511 1.142-1.142 1.142h-19.81z"></path>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="nav-button-text">
                                        <p>Yeni Nesil Sağlık</p>
                                    </div>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-first" role="tabpanel"
                                 aria-labelledby="pills-first-tab" tabindex="0"
                                 style="display:flex">
                                <div style="flex:1">
                                    <img src="{{ asset('') }}assets/frontend/images/w=500.avif" alt="" class="nav-img">
                                </div>
                                <div style="flex:1">
                                    <p class="navbar-text-top">Teknoloji ve <span style="color:#4D37A7;">Sağlık Hizmetlerini Bir Araya Getiriyoruz</span>
                                    </p>
                                    <p class=" navbar-text-middle">İhtiyaç duyduğunuz sağlık hizmetlerini teknolojik
                                        altyapımızla istediğiniz zaman,
                                        istediğiniz yerde alabilirsiniz. Giyilebilir teknolojiler, ev konforunda tedavi,
                                        online uzman desteği ve daha pek çok konuda kişiye özel hizmetlerimizden
                                        faydalanabilirsiniz.
                                        Kolay randevu sistemimizle evde bakım ve online doktor desteği randevunuzu
                                        hızlıca oluşturabilirsiniz.
                                    </p>
                                    <div class=" navbar-button-bottom">
                                        <button class="navbar-bottom-button" style="display:flex;">
                                            <div class="navbar-bottom-button-text">
                                                <p>Hizmetlerimizi Keşfedin</p>
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
                            <div class="tab-pane fade " id="pills-second" role="tabpanel"
                                 aria-labelledby="pills-second-tab" tabindex="0"
                                 style="display:flex;">
                                <div style="flex:1">
                                    <img src="{{ asset('') }}assets/frontend/images/w=500%20-2.avif" alt=""
                                         class="nav-img">
                                </div>
                                <div style="flex:1">
                                    <p class="navbar-text-top">Teknoloji ve <span style="color:#4D37A7;">Sağlık Hizmetlerini Bir Araya Getiriyoruz</span>
                                    </p>
                                    <p class=" navbar-text-middle">İhtiyaç duyduğunuz sağlık hizmetlerini
                                        teknolojik
                                        altyapımızla istediğiniz zaman,
                                        istediğiniz yerde alabilirsiniz. Giyilebilir teknolojiler, ev konforunda
                                        tedavi,
                                        online uzman desteği ve daha pek çok konuda kişiye özel hizmetlerimizden
                                        faydalanabilirsiniz.
                                        Kolay randevu sistemimizle evde bakım ve online doktor desteği randevunuzu
                                        hızlıca oluşturabilirsiniz.
                                    </p>
                                    <div class=" navbar-button-bottom">
                                        <button class="navbar-bottom-button" style="display:flex;">
                                            <div class="navbar-bottom-button-text">
                                                <p>Hizmetlerimizi Keşfedin</p>
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
                            <div class="tab-pane fade " id="pills-third" role="tabpanel"
                                 aria-labelledby="pills-third-tab" tabindex="0"
                                 style="display:flex">
                                <div style="flex:1">
                                    <img src="{{ asset('') }}assets/frontend/images/w=500.avif" alt="" class="nav-img">
                                </div>
                                <div style="flex:1">
                                    <p class="navbar-text-top">Teknoloji ve <span style="color:#4D37A7;">Sağlık Hizmetlerini Bir Araya Getiriyoruz</span>
                                    </p>
                                    <p class=" navbar-text-middle">İhtiyaç duyduğunuz sağlık hizmetlerini teknolojik
                                        altyapımızla istediğiniz zaman,
                                        istediğiniz yerde alabilirsiniz. Giyilebilir teknolojiler, ev konforunda tedavi,
                                        online uzman desteği ve daha pek çok konuda kişiye özel hizmetlerimizden
                                        faydalanabilirsiniz.
                                        Kolay randevu sistemimizle evde bakım ve online doktor desteği randevunuzu
                                        hızlıca oluşturabilirsiniz.
                                    </p>
                                    <div class=" navbar-button-bottom">
                                        <button class="navbar-bottom-button" style="display:flex;">
                                            <div class="navbar-bottom-button-text">
                                                <p>Hizmetlerimizi Keşfedin</p>
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
                            <div class="tab-pane fade " id="pills-fourth" role="tabpanel"
                                 aria-labelledby="pills-fourth-tab" tabindex="0"
                                 style="display:flex;">
                                <div style="flex:1">
                                    <img src="{{ asset('') }}assets/frontend/images/w=500%20-2.avif" alt=""
                                         class="nav-img">
                                </div>
                                <div style="flex:1">
                                    <p class="navbar-text-top">Teknoloji ve <span style="color:#4D37A7;">Sağlık Hizmetlerini Bir Araya Getiriyoruz</span>
                                    </p>
                                    <p class=" navbar-text-middle">İhtiyaç duyduğunuz sağlık hizmetlerini
                                        teknolojik
                                        altyapımızla istediğiniz zaman,
                                        istediğiniz yerde alabilirsiniz. Giyilebilir teknolojiler, ev konforunda
                                        tedavi,
                                        online uzman desteği ve daha pek çok konuda kişiye özel hizmetlerimizden
                                        faydalanabilirsiniz.
                                        Kolay randevu sistemimizle evde bakım ve online doktor desteği randevunuzu
                                        hızlıca oluşturabilirsiniz.
                                    </p>
                                    <div class=" navbar-button-bottom">
                                        <button class="navbar-bottom-button" style="display:flex;">
                                            <div class="navbar-bottom-button-text">
                                                <p>Hizmetlerimizi Keşfedin</p>
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
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
