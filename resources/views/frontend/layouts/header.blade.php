<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TC692324');</script>
    <!-- End Google Tag Manager -->
    <!-- Favicon -->
    <link href="{{asset('assets/frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">


    <!-- Template Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC692324"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="icon-bar call-icon">
    <a class="phone" title="{{ __('messages.call_us') }}" href="tel:05447258125" ><i class="fas fa-phone-alt text-white"></i></a>
    <a class="instagram" title="{{ __('messages.contact_us_via_instagram') }}" href="https://www.instagram.com/anadolutadilat1?igsh=MWtkaGo4eTFhM2xjYw==" ><i class="fab fa-instagram"></i></a>
    <a class="whatsapp" title="{{ __('messages.contact_us_via_whatsapp') }}" href="https://wa.me/905447258125" ><i class="fab fa-whatsapp"></i></a>
    <a class="facebook" title="{{ __('messages.contact_us_via_facebook') }}" href="https://m.facebook.com/profile.php?id=61575540899975" ><i class="fab fa-facebook"></i></a>
    <a class="linkedin" title="{{ __('messages.contact_us_via_linkedln') }}" href="https://www.linkedin.com/in/erkan-pirim-082723265/?originalSubdomain=tr" ><i class="fab fa-linkedin"></i></a>
</div>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                {{--                <div class="h-100 d-inline-flex align-items-center py-3 me-4">--}}
                {{--                    <small class="fa fa-map-marker-alt text-primary me-2"></small>--}}
                {{--                    <small>123 Street, New York, USA</small>--}}
                {{--                </div>--}}
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Pzt - Cum : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+90 544 725 81 25</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" title="{{ __('messages.contact_us_via_instagram') }}" href="https://wa.me/905447258125"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" title="{{ __('messages.contact_us_via_facebook') }}" href="https://m.facebook.com/profile.php?id=61575540899975"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" title="{{ __('messages.contact_us_via_linkedln') }}" href="https://www.linkedin.com/in/erkan-pirim-082723265/?originalSubdomain=tr"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" title="{{ __('messages.contact_us_via_instagram') }}" href="https://www.instagram.com/anadolutadilat1?igsh=MWtkaGo4eTFhM2xjYw=="><i class="fab fa-instagram"></i></a>
                    <div class="mt-0.5 ms-1">
                    <form action="{{ route('language.change') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="locale" value="tr">
                        <button type="submit" style="border:none; background:none; padding:5px;" {{ app()->getLocale() == 'tr' ? 'disabled' : '' }}>
                            <img src="{{ asset('assets/frontend/img/turk-bayragi.jpg') }}" alt="Türkçe" style="width:24px; height:auto;">
                        </button>
                    </form>

                    <form action="{{ route('language.change') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="locale" value="en">
                        <button type="submit" style="border:none; background:none; padding:5px;" {{ app()->getLocale() == 'en' ? 'disabled' : '' }}>
                            <img src="{{ asset('assets/frontend/img/amerikan-bayragi.jpeg') }}" alt="English" width="24">
                        </button>
                    </form>

                    <form action="{{ route('language.change') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="locale" value="fr">
                        <button type="submit" style="border:none; background:none; padding:5px;" {{ app()->getLocale() == 'fr' ? 'disabled' : '' }}>
                            <img src="{{ asset('assets/frontend/img/fransa-bayragi.png') }}" alt="Français" width="24">
                        </button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand logo-top-left d-flex align-items-center ms-4">
            <img src="{{ asset('assets/frontend/img/logo-4.png') }}" alt="Anadolu Tadilat Logo" >
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <div class="dropdown d-inline mt-3 me-3">
                    <button class="btn btn-light dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @php
                            $locale = app()->getLocale();
                            $flags = [
                                'tr' => 'turk-bayragi.jpg',
                                'en' => 'amerikan-bayragi.jpeg',
                                'fr' => 'fransa-bayragi.png',
                            ];
                        @endphp
                        <img src="{{ asset('assets/frontend/img/' . $flags[$locale]) }}" alt="{{ strtoupper($locale) }}" width="24">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li>
                            <form action="{{ route('language.change') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="locale" value="tr">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('assets/frontend/img/turk-bayragi.jpg') }}" alt="Türkçe" width="24"> Türkçe
                                </button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('language.change') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="locale" value="en">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('assets/frontend/img/amerikan-bayragi.jpeg') }}" alt="English" width="24"> English
                                </button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ route('language.change') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="locale" value="fr">
                                <button type="submit" class="dropdown-item">
                                    <img src="{{ asset('assets/frontend/img/fransa-bayragi.png') }}" alt="Français" width="24"> Français
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">{{ __('messages.home') }}</a>
                <a href="{{ route('about-us.index') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about-us.index' ? 'active' : '' }}">{{ __('messages.about_us') }}</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'services-category.index' ? 'active' : '' }}" data-bs-toggle="dropdown">{{ __('messages.services') }}</a>
                    <div class="dropdown-menu fade-up m-0">
                        @foreach ($serviceCategories as $serviceCategory)
                            @php
                                $translation = $serviceCategory->translations->firstWhere('locale', app()->getLocale());
                            @endphp
                            @if ($translation)
                                <a href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}">
                                    {{ $serviceCategory->translations->first()?->title ?? 'Default Title' }}
                                </a>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <a title="{{ __('messages.call_us') }}"  href="tel:05447258125" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{ __('messages.call_us') }}
                <svg width="20" height="20" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.1-.24 11.36 11.36 0 003.57.57 1 1 0 011 1v3.59a1 1 0 01-1 1A19 19 0 013 4a1 1 0 011-1h3.59a1 1 0 011 1 11.36 11.36 0 00.57 3.57 1 1 0 01-.24 1.1z" fill="white"/>
                </svg>
            </a>
        </div>
    </nav>
    <!-- Navbar End -->

