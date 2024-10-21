<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="" />
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('') }}assets/media/logos/favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('') }}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
    <style>
        .handle {
                cursor: move;
            }

        .tagify:not(.form-control-sm):not(.form-control-lg) {
            max-height: 40px;
        }

        .min-w-110px {
            min-width: 110px!important;
        }

    </style>
    @yield('css')
    <style>
        .icon-ss {
            font-size: 0.5rem !important;
        }

        .icon-xs {
            font-size: 0.65rem !important;
        }

        .icon-sm {
            font-size: 0.75rem !important;
        }

        .icon-nm {
            font-size: 0.9rem !important;
        }

        .icon-ms {
            font-size: 1.15rem !important;
        }

        .icon-md {
            font-size: 1.25rem !important;
        }

        .icon-lg {
            font-size: 1.5rem !important;
        }

        .icon-xl {
            font-size: 1.75rem !important;
        }

        .icon-xxl {
            font-size: 2.25rem !important;
        }

        .icon-1x {
            font-size: 1rem !important;
        }

        .icon-2x {
            font-size: 2rem !important;
        }

        .icon-3x {
            font-size: 3rem !important;
        }

        .icon-4x {
            font-size: 4rem !important;
        }

        .icon-5x {
            font-size: 5rem !important;
        }

        .icon-6x {
            font-size: 6rem !important;
        }

        .icon-7x {
            font-size: 7rem !important;
        }

        .icon-8x {
            font-size: 8rem !important;
        }

        .icon-9x {
            font-size: 9rem !important;
        }

        .icon-10x {
            font-size: 10rem !important;
        }

        @media (min-width: 576px) {
            .icon-sm-ss {
                font-size: 0.5rem !important;
            }

            .icon-sm-xs {
                font-size: 0.65rem !important;
            }

            .icon-sm-sm {
                font-size: 0.75rem !important;
            }

            .icon-sm-nm {
                font-size: 0.9rem !important;
            }

            .icon-sm-ms {
                font-size: 1.15rem !important;
            }

            .icon-sm-md {
                font-size: 1.25rem !important;
            }

            .icon-sm-lg {
                font-size: 1.5rem !important;
            }

            .icon-sm-xl {
                font-size: 1.75rem !important;
            }

            .icon-sm-xxl {
                font-size: 2.25rem !important;
            }

            .icon-sm-1x {
                font-size: 1rem !important;
            }

            .icon-sm-2x {
                font-size: 2rem !important;
            }

            .icon-sm-3x {
                font-size: 3rem !important;
            }

            .icon-sm-4x {
                font-size: 4rem !important;
            }

            .icon-sm-5x {
                font-size: 5rem !important;
            }

            .icon-sm-6x {
                font-size: 6rem !important;
            }

            .icon-sm-7x {
                font-size: 7rem !important;
            }

            .icon-sm-8x {
                font-size: 8rem !important;
            }

            .icon-sm-9x {
                font-size: 9rem !important;
            }

            .icon-sm-10x {
                font-size: 10rem !important;
            }
        }
        @media (min-width: 768px) {
            .icon-md-ss {
                font-size: 0.5rem !important;
            }

            .icon-md-xs {
                font-size: 0.65rem !important;
            }

            .icon-md-sm {
                font-size: 0.75rem !important;
            }

            .icon-md-nm {
                font-size: 0.9rem !important;
            }

            .icon-md-ms {
                font-size: 1.15rem !important;
            }

            .icon-md-md {
                font-size: 1.25rem !important;
            }

            .icon-md-lg {
                font-size: 1.5rem !important;
            }

            .icon-md-xl {
                font-size: 1.75rem !important;
            }

            .icon-md-xxl {
                font-size: 2.25rem !important;
            }

            .icon-md-1x {
                font-size: 1rem !important;
            }

            .icon-md-2x {
                font-size: 2rem !important;
            }

            .icon-md-3x {
                font-size: 3rem !important;
            }

            .icon-md-4x {
                font-size: 4rem !important;
            }

            .icon-md-5x {
                font-size: 5rem !important;
            }

            .icon-md-6x {
                font-size: 6rem !important;
            }

            .icon-md-7x {
                font-size: 7rem !important;
            }

            .icon-md-8x {
                font-size: 8rem !important;
            }

            .icon-md-9x {
                font-size: 9rem !important;
            }

            .icon-md-10x {
                font-size: 10rem !important;
            }
        }
        @media (min-width: 992px) {
            .icon-lg-ss {
                font-size: 0.5rem !important;
            }

            .icon-lg-xs {
                font-size: 0.65rem !important;
            }

            .icon-lg-sm {
                font-size: 0.75rem !important;
            }

            .icon-lg-nm {
                font-size: 0.9rem !important;
            }

            .icon-lg-ms {
                font-size: 1.15rem !important;
            }

            .icon-lg-md {
                font-size: 1.25rem !important;
            }

            .icon-lg-lg {
                font-size: 1.5rem !important;
            }

            .icon-lg-xl {
                font-size: 1.75rem !important;
            }

            .icon-lg-xxl {
                font-size: 2.25rem !important;
            }

            .icon-lg-1x {
                font-size: 1rem !important;
            }

            .icon-lg-2x {
                font-size: 2rem !important;
            }

            .icon-lg-3x {
                font-size: 3rem !important;
            }

            .icon-lg-4x {
                font-size: 4rem !important;
            }

            .icon-lg-5x {
                font-size: 5rem !important;
            }

            .icon-lg-6x {
                font-size: 6rem !important;
            }

            .icon-lg-7x {
                font-size: 7rem !important;
            }

            .icon-lg-8x {
                font-size: 8rem !important;
            }

            .icon-lg-9x {
                font-size: 9rem !important;
            }

            .icon-lg-10x {
                font-size: 10rem !important;
            }
        }
        @media (min-width: 1200px) {
            .icon-xl-ss {
                font-size: 0.5rem !important;
            }

            .icon-xl-xs {
                font-size: 0.65rem !important;
            }

            .icon-xl-sm {
                font-size: 0.75rem !important;
            }

            .icon-xl-nm {
                font-size: 0.9rem !important;
            }

            .icon-xl-ms {
                font-size: 1.15rem !important;
            }

            .icon-xl-md {
                font-size: 1.25rem !important;
            }

            .icon-xl-lg {
                font-size: 1.5rem !important;
            }

            .icon-xl-xl {
                font-size: 1.75rem !important;
            }

            .icon-xl-xxl {
                font-size: 2.25rem !important;
            }

            .icon-xl-1x {
                font-size: 1rem !important;
            }

            .icon-xl-2x {
                font-size: 2rem !important;
            }

            .icon-xl-3x {
                font-size: 3rem !important;
            }

            .icon-xl-4x {
                font-size: 4rem !important;
            }

            .icon-xl-5x {
                font-size: 5rem !important;
            }

            .icon-xl-6x {
                font-size: 6rem !important;
            }

            .icon-xl-7x {
                font-size: 7rem !important;
            }

            .icon-xl-8x {
                font-size: 8rem !important;
            }

            .icon-xl-9x {
                font-size: 9rem !important;
            }

            .icon-xl-10x {
                font-size: 10rem !important;
            }
        }
        @media (min-width: 1400px) {
            .icon-xxl-ss {
                font-size: 0.5rem !important;
            }

            .icon-xxl-xs {
                font-size: 0.65rem !important;
            }

            .icon-xxl-sm {
                font-size: 0.75rem !important;
            }

            .icon-xxl-nm {
                font-size: 0.9rem !important;
            }

            .icon-xxl-ms {
                font-size: 1.15rem !important;
            }

            .icon-xxl-md {
                font-size: 1.25rem !important;
            }

            .icon-xxl-lg {
                font-size: 1.5rem !important;
            }

            .icon-xxl-xl {
                font-size: 1.75rem !important;
            }

            .icon-xxl-xxl {
                font-size: 2.25rem !important;
            }

            .icon-xxl-1x {
                font-size: 1rem !important;
            }

            .icon-xxl-2x {
                font-size: 2rem !important;
            }

            .icon-xxl-3x {
                font-size: 3rem !important;
            }

            .icon-xxl-4x {
                font-size: 4rem !important;
            }

            .icon-xxl-5x {
                font-size: 5rem !important;
            }

            .icon-xxl-6x {
                font-size: 6rem !important;
            }

            .icon-xxl-7x {
                font-size: 7rem !important;
            }

            .icon-xxl-8x {
                font-size: 8rem !important;
            }

            .icon-xxl-9x {
                font-size: 9rem !important;
            }

            .icon-xxl-10x {
                font-size: 10rem !important;
            }
        }
    </style>
</head>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            @include('admin.layouts.navbar')
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @include('admin.layouts.sidebar')
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('content')
                    <div id="kt_app_footer" class="app-footer">
                        <div
                            class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">@php echo date('Y'); @endphp &copy;</span>
                                <a href="#" target="_blank"
                                    class="text-gray-800 text-hover-primary">İçerik Yönetim Sistemi</a>
                            </div>
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="mailto:osmanustalar@gmail.com" target="_blank" class="menu-link px-2">İletişim</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
