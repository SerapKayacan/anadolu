@extends('frontend.layouts.master')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($carousels as $index => $carousel)
                <div class="owl-carousel-item position-relative  @if ($index == 0) active @endif">
                    <img class="img-fluid" src="{{ $carousel->getFirstMediaUrl('banner', 'large') }}"
                         alt="Carousel Image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                         style="background: rgba(53, 53, 53, 0.3);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">{!! $carousel->title !!}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">{!! $carousel->description !!}</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Devamını
                                        Oku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-user-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">01</h1>
                    </div>
                    <h5>Yaratıcı Tasarımcılar</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">02</h1>
                    </div>
                    <h5>Kaliteli Ürünler</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">03</h1>
                    </div>
                    <h5>Ücretsiz Danışmanlık</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-headphones fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">04</h1>
                    </div>
                    <h5>Müşteri Desteği</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Hizmetlerimiz</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Hepsi</li>
                        @foreach ($serviceCategories as $serviceCategory)
                            <li class="mx-2" data-filter=".category-{{ $serviceCategory->id }}">
                                {{ $serviceCategory->title }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 portfolio-item category-{{ $service->category_id }} wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100 h-auto"  src="{{ $service->getFirstMediaUrl('images', 'large') ?: asset('default-image.jpg') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{ $service->getFirstMediaUrl('images', 'large') ?: asset('default-image.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">{{ $service->title }}</p>
                                <h5 class="lh-base mb-0">{{ $service->category_page_detail }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/about-us.jpg') }}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Vizyonumuz</h1>
                        </div>
                        <p class="mb-4 pb-2">Yenilikçi ve sürdürülebilir çözümlerle sektörde fark yaratmak, inşaat ve tadilat sektöründe lider konuma gelerek müşterilerimizin ilk
                            tercihi olmak. Hem bireysel hem de kurumsal müşterilerimize sunduğumuz hizmetlerde, kalite ve güvenilirliği bir arada sunarak uzun vadeli
                            iş birlikleri kurmayı hedefliyoruz.
                            Teknolojiyi yakından takip ederek ve sürekli gelişime açık bir yapıyla, sektörde öncü bir marka olmayı amaçlıyoruz.</p>
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Misyonumuz</h1>
                        </div>
                        <p class="mb-4 pb-2"> Müşteri ihtiyaçlarını en iyi şekilde analiz ederek, beklentilerin ötesine geçen hizmetler sunmak.
                            Çalışmalarımızda kalite standartlarından asla ödün vermeden, çevre dostu malzeme ve teknikler kullanarak
                            projelerimizi hayata geçiriyoruz. Her projeye özel çözümler üreterek, müşteri memnuniyetini en üst seviyede tutmayı
                            hedefliyoruz. Aynı zamanda çalışanlarımızın gelişimine katkı sağlayarak, profesyonel ve güçlü bir ekip ruhu ile sektöre değer katıyoruz.
                            Sizin için en iyisini hedefleyen bir anlayışla, mekanlarınıza değer katmaya ve yaşam kalitenizi yükseltmeye devam ediyoruz.</p>

                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Mutlu Müşteri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Bitirilmiş roje</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Neden Biz</h1>
                        </div>
                        <p class="mb-4 pb-2"> Firmamız, Epoksi ve PVC Döşeme, Boya/Badana, Tadilat ve Isı Yalıtımı ile
                            Mantolama alanlarında uzmanlaşmış bir kuruluş olarak,
                            sektörde yılların getirdiği tecrübe ve güvenle faaliyet göstermektedir. Müşteri
                            memnuniyetini ön planda tutarak, her projede kaliteli
                            işçilik ve yenilikçi çözümler sunmayı ilke edindik. Her biri alanında deneyimli ve uzman
                            kadromuzla, estetik ve fonksiyonelliği bir araya
                            getirerek yaşam ve çalışma alanlarınızı daha konforlu, dayanıklı ve modern hale getiriyoruz.
                            Hedefimiz, sadece hizmet sunmak değil, aynı zamanda müşterilerimizin hayallerini
                            gerçekleştirmelerine destek olmaktır.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Kaliteli</p>
                                        <h5 class="mb-0">Hizmetler</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Yenilikçi</p>
                                        <h5 class="mb-0">Tasarımlar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Ücretsiz</p>
                                        <h5 class="mb-0">Danışma</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                         style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Müşteri</p>
                                        <h5 class="mb-0">Desteği</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/why-us.jpg') }}"
                             style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <!-- Testimonial Start -->--}}
{{--    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title text-center">--}}
{{--                <h1 class="display-5 mb-5">Memnuniyet</h1>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel testimonial-carousel">--}}
{{--                <div class="testimonial-item text-center">--}}
{{--                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg"--}}
{{--                         style="width: 90px; height: 90px;">--}}
{{--                    <div class="testimonial-text text-center p-4">--}}
{{--                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna--}}
{{--                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea--}}
{{--                            clita.</p>--}}
{{--                        <h5 class="mb-1">Client Name</h5>--}}
{{--                        <span class="fst-italic">Profession</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item text-center">--}}
{{--                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-2.jpg"--}}
{{--                         style="width: 90px; height: 90px;">--}}
{{--                    <div class="testimonial-text text-center p-4">--}}
{{--                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna--}}
{{--                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea--}}
{{--                            clita.</p>--}}
{{--                        <h5 class="mb-1">Client Name</h5>--}}
{{--                        <span class="fst-italic">Profession</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-item text-center">--}}
{{--                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg"--}}
{{--                         style="width: 90px; height: 90px;">--}}
{{--                    <div class="testimonial-text text-center p-4">--}}
{{--                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna--}}
{{--                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea--}}
{{--                            clita.</p>--}}
{{--                        <h5 class="mb-1">Client Name</h5>--}}
{{--                        <span class="fst-italic">Profession</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Testimonial End -->--}}

@endsection
<script>
    window.addEventListener("load", function () {
        document.getElementById("spinner").style.display = "none";
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filters = document.querySelectorAll("#portfolio-flters li");
        const items = document.querySelectorAll(".portfolio-item");

        filters.forEach(filter => {
            filter.addEventListener("click", function() {
                // Remove active class from all filters
                filters.forEach(f => f.classList.remove("active"));
                this.classList.add("active");

                const filterValue = this.getAttribute("data-filter");

                if (filterValue === "*") {
                    // Show all items when "All" is clicked
                    items.forEach(item => {
                        item.style.display = "block";
                    });
                } else {
                    // Hide all items first
                    items.forEach(item => {
                        item.style.display = "none";
                    });

                    // Show only items that match the selected category
                    document.querySelectorAll(filterValue).forEach(item => {
                        item.style.display = "block";
                    });
                }
            });
        });
    });


</script>
