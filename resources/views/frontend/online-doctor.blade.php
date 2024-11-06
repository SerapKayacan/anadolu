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
                <div class="row online-doctor-row">
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-purple-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Hemşirelik Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">İhtiyacınız olan tedavi sürecini evinizin
                                        konforunda,
                                        uzman hemşirelerimizle gerçekleştirelim.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-turquoise-online-doctor">
                                <div class="card-head">
                                    <div style="flex:1">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Bakım Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">Sağlık sorunlarınıza yönelik deneyimli sağlık
                                        ekibimizden
                                        profesyonel destek alın.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-pink-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Serum Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">Evinizin konforunda ihtiyacınız olan serum tedavi
                                        hizmetini gerçekleştirelim.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row online-doctor-row">
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-blue-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Laboratuvar Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">Rutin Kontrol için veya doktor tavsiyesi
                                        doğrultusunda
                                        bulunduğunuz yere gelerek gerekli tahlilleri yapıyoruz.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-yellow-online-doctor">
                                <div class="card-head">
                                    <div style="flex:1">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Görüntüleme Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">Kontrol amaçlı istediğiniz veya hekiminizin
                                        hastalığın
                                        tanısı ya da tedavi sürecinde talep ettiği tıbbi testleri uyguluyoruz.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-green-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Genetik Check-Up ve İnceleme</p>
                                    <p class=" bottom-p-online-doctor">OLası genetik hastalıkların erken teşhisi
                                        için
                                        gerekli
                                        check-up paketlerimi uyguluyoruz, sonuçlarını değerlendiriyoruz.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row online-doctor-row">
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-green-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Doktor Desteği</p>
                                    <p class=" bottom-p-online-doctor">Uzman doktorlarımızla sağlık sorununuzun tespiti
                                        ve
                                        tedavisi için evinizin konforunda muayenenizi yaptırın.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-pink-online-doctor">
                                <div class="card-head">
                                    <div style="flex:2">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Check-up Hizmeti</p>
                                    <p class=" bottom-p-online-doctor">Yaşınıza ve sağlık durumunuza uygun,kişiye özgü
                                        check-up
                                        paketlerimizi evinizde gerçekleştiriyoruz.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="" style=" text-decoration: none;">
                            <div class="card card-yellow-online-doctor">
                                <div class="card-head">
                                    <div style="flex:1">
                                        <div class="box icon-box-small">f</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class=" middle-p-online-doctor">Evde Görüntüleme Hizmetleri</p>
                                    <p class=" bottom-p-online-doctor">Kontrol amaçlı istediğiniz veya hekiminizin
                                        hastalığın
                                        tanısı ya da tedavi sürecinde talep ettiği tıbbi testleri uyguluyoruz.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
