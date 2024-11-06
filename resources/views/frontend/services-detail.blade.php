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
        <div class="main-wrapper-services-1">
            <div class="container main-container-services-1">
                <div class="row  body-card-services-detail">
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  body-card-services-detail">
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  body-card-services-detail">
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  body-card-services-detail">
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-services-detail">
                            <div class="card-header card-services-detail-header">
                                <img src="{{ asset('') }}assets/frontend/images/services-detail-1.avif" alt="" class="card-service-detail-image">
                                <div class="card-image-text-box">Evde / Yerinde Hizmet</div>
                            </div>
                            <div class="card-body card-services-detail-body">
                                <p class="card-service-detail-header">Evde Kan Alımı</p>
                                <p class="card-service-detail-middle-text">
                                    Uzman hemşiremiz, hekiminizin tahlil için talep ettiği kan alma işlemini hastaneye gitmenize gerek kalmadan bulunduğunuz yerde gerçekleştirir.
                                </p>
                                <div style="display:flex;">
                                    <p class="card-detail-price">1250 TL</p>
                                    <button class="card-service-detail-button">Devamını Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
