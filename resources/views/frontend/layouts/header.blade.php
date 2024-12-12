<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/home-card.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/services-category.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/online-doctor.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/footer.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/frontend/css/chaty-front.min.css">
</head>
<body>
<header style="position: sticky; top: 0; z-index:1020; background-color: white;">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center mt-auto py-2">
            <a href="{{ route('home') }}">
                <img src="{{ asset('') }}assets/frontend/images/sultanparkkk%20(1).png"
                     alt="Bootstrap" width="50" height="45">
            </a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center ">
            <nav class="navbar navbar-expand-lg navbar-light position-relative" style="width:auto; padding-right: 0;">
                <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto" style="font-size:16px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" style="font-weight: 700; color:#244daa;">Ana
                                Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('onlineDoctor.byCategory') }}"
                               style="font-weight: 700; color:#244daa;">Online Doktor Görüşmesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services-category.index') }}"
                               style="font-weight: 700; color:#244daa;">Hizmetlerimiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us.index') }}"
                               style="font-weight: 700; color:#244daa;">Hakkımızda</a>
                        </li>
                        {{--                    <li class="nav-item">--}}
                        {{--                        <a class="nav-link" href="#" style="font-weight: 700; color:#244daa;">Blog</a>--}}
                        {{--                    </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}"
                               style="font-weight: 700; color:#244daa;">İletişim</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center"
             style="background-color:#3b79ac;">
            <ul class="nav justify-content-center align-items-center  "
                style="font-size:15px;padding-top:15px;padding-bottom:15px;">
                <li class="nav-item "
                    style="margin-right:8px;color:white; display:flex;align-items: center;margin-top:-4px; ">
                    Canlı desteğe isteğin zaman ve hızlı ulaş!
                </li>
                <li class="nav-item" style="margin-right:8px;">
                    <a style="text-decoration: none;" href="tel:02125910911" target="_blank">
                        <button
                            style="background-color:#ec4949;border-radius:15px;border:none;height:20px;width:90px;display:flex;margin-right:4px;padding-right:6px;">
                            <div style="color:white; margin-top:-5px;margin-left:-25px;flex:1;padding-left:-6px;">
                                <i style="background-color:white;font-size:10px; border-radius:8px; padding-right:-1px;padding-left:-1px;padding-bottom:1px ;padding-top:1px;margin-top:-2px;color:#45339E;"
                                   class="bi bi-telephone-outbound">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="7" fill="currentColor"
                                         class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5"/>
                                    </svg>
                                </i>
                            </div>
                            <div style="color:white;font-size:11px;flex:1;margin-left:-19px;margin-top:1px;">
                                <p>7/24 Arayın</p>
                            </div>
                        </button>
                    </a>
                </li>
                <li class="nav-item ">
                    <a style="text-decoration: none;  display:flex;align-items: center;color:white; weight:bold;font-family:arial;" href="tel:02125910911" target="_blank">0212 591 09 11</a>
                </li>
                </a>
                <li class="nav-item" style=" margin-left:20px;">
                    <a style="text-decoration: none;" href="https://wa.me/9005354694234" target="_blank">
                        <button
                            style="background-color:#42b842;border-radius:15px;border:none;height:20px;width:90px;display:flex;">
                            <div style="color:white; margin-top:-5px;margin-left:-18px;flex:1">
                                <i class="bi bi-whatsapp"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="white"
                                     class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                                </i>
                            </div>
                            <div style="color:white;font-size:11px;flex:1;margin-left:-14px;margin-top:1px;">
                                <p>7/24 Yazın</p>
                            </div>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
