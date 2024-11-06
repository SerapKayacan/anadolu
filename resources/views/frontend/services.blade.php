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
        <div class="main-wrapper-services-1" style="margin-top:40px;margin-bottom:40px;">
            <div class="container main-container-services-1">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xs-12">
                        <div class="card card-services">
                            <div class="card-header card-services-header">
                                <div class="icon-box-services">
                                    <i class="bi bi-house-heart icon-card-services">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em"
                                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                             focusable="false"
                                             class=""><title>package_box_home</title>
                                            <path
                                                d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path>
                                            <path
                                                d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path>
                                            <path
                                                d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z">
                                            </path>
                                            <path
                                                d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path>
                                        </svg>
                                    </i>
                                </div>
                                <div class="card-top-text">Evde Hemşirelik Hizmetleri</div>
                                <div class="card-middle-text">Hizmet kapsamına giren tüm ihtiyaçlarınızı uzman
                                    hemşirelerimiz aracılığıyla pratik ve güvenli bir şekilde karşılıyoruz.
                                </div>
                            </div>
                            <div class="card-body card-services-body">
                                <div class="button-header">
                                    <p>Hizmetler</p>
                                </div>
                                <hr class="card-link-line-services">
                                <lu class="card-link" style="list-style-type: none;">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <li style="display:flex;">
                                        <a href="{{ route('services-detail.index') }}"
                                           style="display:flex;text-decoration:none;">
                                            <p class="card-link-bottom-text">Daha Fazlası</p>
                                            <i class="bi bi-arrow-right card-link-bottom-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.90em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class="">
                                                    <path
                                                        d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                </lu>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xs-12">
                        <div class="card card-services">
                            <div class="card-header card-services-header">
                                <div class="icon-box-services">
                                    <i class="bi bi-house-heart icon-card-services">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em"
                                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                             focusable="false"
                                             class=""><title>package_box_home</title>
                                            <path
                                                d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path>
                                            <path
                                                d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path>
                                            <path
                                                d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z">
                                            </path>
                                            <path
                                                d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path>
                                        </svg>
                                    </i>
                                </div>
                                <div class="card-top-text">Evde Hemşirelik Hizmetleri</div>
                                <div class="card-middle-text">Hizmet kapsamına giren tüm ihtiyaçlarınızı uzman
                                    hemşirelerimiz aracılığıyla pratik ve güvenli bir şekilde karşılıyoruz.
                                </div>
                            </div>
                            <div class="card-body card-services-body">
                                <div class="button-header">
                                    <p>Hizmetler</p>
                                </div>
                                <hr class="card-link-line-services">
                                <lu class="card-link" style="list-style-type: none;">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <li style="display:flex;">
                                        <a href="{{ route('services-detail.index') }}" style="display:flex;text-decoration:none;">
                                            <p class="card-link-bottom-text">Daha Fazlası</p>
                                            <i class="bi bi-arrow-right card-link-bottom-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.90em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class="">
                                                    <path
                                                        d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                </lu>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xs-12">
                        <div class="card card-services">
                            <div class="card-header card-services-header">
                                <div class="icon-box-services">
                                    <i class="bi bi-house-heart icon-card-services">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em"
                                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                             focusable="false"
                                             class=""><title>package_box_home</title>
                                            <path
                                                d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path>
                                            <path
                                                d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path>
                                            <path
                                                d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z">
                                            </path>
                                            <path
                                                d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path>
                                        </svg>
                                    </i>
                                </div>
                                <div class="card-top-text">Evde Hemşirelik Hizmetleri</div>
                                <div class="card-middle-text">Hizmet kapsamına giren tüm ihtiyaçlarınızı uzman
                                    hemşirelerimiz aracılığıyla pratik ve güvenli bir şekilde karşılıyoruz.
                                </div>
                            </div>
                            <div class="card-body card-services-body">
                                <div class="button-header">
                                    <p>Hizmetler</p>
                                </div>
                                <hr class="card-link-line-services">
                                <lu class="card-link" style="list-style-type: none;">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <li style="display:flex;">
                                        <a href="{{ route('services-detail.index') }}" style="display:flex;text-decoration:none;">
                                            <p class="card-link-bottom-text">Daha Fazlası</p>
                                            <i class="bi bi-arrow-right card-link-bottom-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.90em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class="">
                                                    <path
                                                        d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                </lu>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xs-12">
                        <div class="card card-services">
                            <div class="card-header card-services-header">
                                <div class="icon-box-services">
                                    <i class="bi bi-house-heart icon-card-services">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em"
                                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                             focusable="false"
                                             class=""><title>package_box_home</title>
                                            <path
                                                d="M15.993 19.237c-0.672 0-1.23-0.558-1.23-1.23v-5.281c0-0.672 0.558-1.23 1.23-1.23s1.23 0.558 1.23 1.23v5.281c0 0.672-0.558 1.23-1.23 1.23z"></path>
                                            <path
                                                d="M21.744 23.748c-0.672 0-1.23-0.558-1.23-1.23v-3.248l-8.988-0.049-0.049 3.28c0 0.672-0.558 1.23-1.23 1.23s-1.23-0.558-1.23-1.23v-3.248c0-1.378 1.132-2.51 2.509-2.51h8.939c1.378 0 2.509 1.132 2.509 2.51v3.248c0 0.672-0.558 1.23-1.23 1.23v0.016z"></path>
                                            <path
                                                d="M20.087 25.437h-8.201c-1.591 0-2.87-1.296-2.87-2.87v-5.856c0-0.836 0.164-1.657 0.492-2.411l0.459-1.066c0.459-1.066 1.493-1.739 2.641-1.739h6.774c1.148 0 2.181 0.689 2.641 1.739l0.459 1.066c0.328 0.771 0.492 1.575 0.492 2.411v5.856c0 1.575-1.296 2.87-2.87 2.87h-0.016zM12.608 13.956c-0.164 0-0.312 0.098-0.377 0.246l-0.459 1.066c-0.197 0.459-0.295 0.951-0.295 1.443v5.856c0 0.23 0.18 0.41 0.41 0.41h8.201c0.23 0 0.41-0.18 0.41-0.41v-5.856c0-0.508-0.098-0.984-0.295-1.46l-0.459-1.066c-0.066-0.148-0.213-0.246-0.377-0.246h-6.758v0.016z">
                                            </path>
                                            <path
                                                d="M25.849 31.998h-19.699c-3.395 0-6.151-2.756-6.151-6.151v-12.039c0-1.919 0.869-3.674 2.378-4.855l9.841-7.66c2.231-1.722 5.331-1.722 7.561 0l9.841 7.66c1.509 1.165 2.378 2.936 2.378 4.855v12.039c0 3.395-2.755 6.151-6.151 6.151zM15.992 2.458c-0.804 0-1.607 0.262-2.263 0.771l-9.841 7.66c-0.902 0.705-1.427 1.771-1.427 2.92v12.039c0 2.034 1.657 3.691 3.69 3.691h19.699c2.034 0 3.69-1.657 3.69-3.691v-12.039c0-1.148-0.525-2.214-1.427-2.92l-9.841-7.66c-0.673-0.525-1.46-0.771-2.264-0.771h-0.016z"></path>
                                        </svg>
                                    </i>
                                </div>
                                <div class="card-top-text">Evde Hemşirelik Hizmetleri</div>
                                <div class="card-middle-text">Hizmet kapsamına giren tüm ihtiyaçlarınızı uzman
                                    hemşirelerimiz aracılığıyla pratik ve güvenli bir şekilde karşılıyoruz.
                                </div>
                            </div>
                            <div class="card-body card-services-body">
                                <div class="button-header">
                                    <p>Hizmetler</p>
                                </div>
                                <hr class="card-link-line-services">
                                <lu class="card-link" style="list-style-type: none;">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <hr class="card-link-line-services">
                                    <li>
                                        <a href="" style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services">Enjeksiyon Uygulaması</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                    <li style="display:flex;">
                                        <a href="{{ route('services-detail.index') }}" style="display:flex;text-decoration:none;">
                                            <p class="card-link-bottom-text">Daha Fazlası</p>
                                            <i class="bi bi-arrow-right card-link-bottom-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.90em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class="">
                                                    <path
                                                        d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                </lu>
                            </div>
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
