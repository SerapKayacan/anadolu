@section('title', 'Randevu Düzenle')
@section('css')
@endsection
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Düzenle: Randevu
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('appointment.index') }}" class="text-muted text-hover-primary">Randevu Sistemi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Randevu Düzenle
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('appointment.update', $service->id) }}" method="POST" id="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">

                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#generalInformation">Genel Bilgiler</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="generalInformation" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush pt-5">
                                        <div class="card-body pt-5">
                                            <div class="mb-10 row">
                                                @foreach($days as $day => $times)
                                                    <div class="col">
                                                        @php
                                                            $formattedDate = \Carbon\Carbon::parse($day);
                                                        @endphp
                                                        <div class="form-check form-switch mb-3">
                                                            <input class="form-check-input" type="checkbox"  id="toggleAll-{{ $day }}" onclick="toggleDayCheckboxes('{{ $day }}', this)">
                                                            <label class="form-check-label" for="toggleAll-{{ $day }}">Tümü</label>
                                                        </div>
                                                        <p>{{ $formattedDate->translatedFormat('d F Y') }}<br>{{ $formattedDate->translatedFormat('l') }}</p>
                                                        @foreach($times as $time)
                                                            <div class="form-check form-switch mt-3">
                                                                <input type="hidden" name="{{ $day . '+' . $time['time'] }}" value="off">
                                                                <input class="form-check-input day-checkbox-{{ $day }}" type="checkbox" name="{{ $day . '+' . $time['time'] }}" id="flexSwitchCheck{{ $day . '-' . $time['time'] }}" value="on" @if($time['is_available']) checked @endif>
                                                                <label class="form-check-label" for="flexSwitchCheck{{ $day . '-' . $time['time'] }}">{{ $time['time'] }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('appointment.index') }}" class="btn btn-light me-5">Vazgeç</a>
                            <button type="submit" id="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Sayfa tamamen yüklendikten sonra çalışacak
        document.addEventListener("DOMContentLoaded", function() {
            // Tümünü Seç/Tümünü Kaldır fonksiyonu
            window.toggleDayCheckboxes = function(day, toggleCheckbox) {
                // Sınıf adını kullanarak o güne ait tüm checkboxları seçiyoruz
                const checkboxes = document.querySelectorAll('.day-checkbox-' + day);

                // Toggle checkbox durumuna göre diğer checkboxları işaretle veya kaldır
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = toggleCheckbox.checked;
                });
            };
        });
    </script>



@endsection
