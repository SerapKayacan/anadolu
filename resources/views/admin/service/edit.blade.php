@section('title', 'Hizmet Düzenle')
@section('css')
@endsection
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Düzenle: Hizmet
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('service-category.index') }}" class="text-muted text-hover-primary">Hizmet
                                Listesi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Hizmet Düzenle
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('service.update', $service->id) }}"
                      method="POST" id="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">

                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                   href="#generalInformation">Genel Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#search">Arama
                                    Motoru</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="generalInformation" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush pt-5">
                                        <div class="card-body pt-5">
                                            <div class="mb-10 row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Görsel Seçin</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <a class="uploadImage btn btn-primary text-white btn-sm">
                                                                  <i class="far fa-file-image"></i> Seç
                                                                </a>
                                                                   <input type="file"
                                                                          accept="image/jpeg, image/png, image/jpg"
                                                                          name="images[]"
                                                                          id="image-input" class="d-none" multiple>
                                                                 <a data-input="thumbnail" data-preview="holder"
                                                                    class="removeImage btn btn-danger text-white btn-sm">
                                                                   <i class="fa fa-trash"></i> Kaldır
                                                                        </a>
                                                            </span>
                                                        </div>
                                                        <div class="row col-md-12 thumb-output p-2" id="thumb-output">
                                                            @foreach ($service->getMedia('images') as $image)
                                                                <div class="col-md-4 image-preview-container mb-3">
                                                                    <img class="thumb img-thumbnail mb-2"
                                                                         src="{{ $image->getUrl() }}"
                                                                         alt="Service Image"
                                                                         style="width: 120px; height: 120px;">

                                                                    <!-- Input for Image Title -->
                                                                    <input
                                                                        type="text"
                                                                        name="image_titles[{{ $image->id }}]"
                                                                        class="form-control mb-2"
                                                                        placeholder="Görsel başlığını girin"
                                                                        value="{{ $image->getCustomProperty('image_title') }}"
                                                                    >

                                                                    <!-- Input for Image Description -->
                                                                    <textarea
                                                                        name="image_descriptions[{{ $image->id }}]"
                                                                        class="form-control"
                                                                        rows="2"
                                                                        placeholder="Görsel açıklaması girin">
                {{ $image->getCustomProperty('image_description') }}
            </textarea>

                                                                    <a href="#"
                                                                       class="remove-preview btn btn-danger btn-sm mt-2">Kaldır</a>
                                                                </div>
                                                            @endforeach
                                                        </div>


                                                    </div>
                                                    <div class="text-muted fs-7">Medya görseli ekleyin ve açıklamalarını
                                                        düzenleyin.
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $locales = ['tr' => 'Türkçe', 'en' => 'English', 'fr' => 'Français'];
                                            @endphp

                                            <div class="mb-10 row">
                                                <div class="col-sm-4">
                                                    <label class="required form-label">Kategori</label>
                                                    <select name="category_id" class="form-control col-sm-4" required>
                                                        @foreach($categories as $category)
                                                            <option @if($category->id == $service->category_id) selected @endif value="{{ $category->id }}">
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>

                                            @foreach ($locales as $locale => $language)
                                                @php
                                                    $translation = $service->translations->where('locale', $locale)->first();
                                                @endphp

                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="required form-label">Başlık ({{ strtoupper($locale) }} - {{ $language }})</label>
                                                        <input class="form-control"
                                                               name="translations[{{ $locale }}][title]"
                                                               value="{{ old("translations.$locale.title", $translation?->title) }}"
                                                               required />
                                                        <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                    </div>
                                                </div>

                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Kategori Sayfası Açıklama ({{ strtoupper($locale) }} - {{ $language }})</label>
                                                        <textarea class="form-control"
                                                                  name="translations[{{ $locale }}][category_page_detail]"
                                                                  rows="2">{{ old("translations.$locale.category_page_detail", $translation?->category_page_detail) }}</textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>

                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Açıklama ({{ strtoupper($locale) }} - {{ $language }})</label>
                                                        <textarea class="form-control"
                                                                  name="translations[{{ $locale }}][detail]"
                                                                  rows="2">{{ old("translations.$locale.detail", $translation?->detail) }}</textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Durum</label>
                                                    <select name="is_active" class="form-control col-sm-3" required>
                                                        <option @if ($service->is_active == 1) selected
                                                                @endif value="1">Aktif
                                                        </option>
                                                        <option @if ($service->is_active == 0) selected
                                                                @endif value="0">Pasif
                                                        </option>
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="search" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush pt-5">
                                        <div class="card-body pt-5">
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">Açıklama</label>
                                                    <input class="form-control" name="meta_description"
                                                           value="{{ $service->meta_description }}">
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label">Anahtar Kelimeler</label>
                                                    <input class="form-control" name="tags" id="inputTagify"
                                                           value="{{ json_encode($tags) }}">
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('service-category.index') }}" class="btn btn-light me-5">Vazgeç</a>
                            <button type="submit" id="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}assets/js/admin/media.js"></script>
    <script src="{{ asset('') }}assets/dragsort/dragsort.js"></script>
    <script src="{{ asset('') }}assets/plugins/custom/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('') }}assets/js/admin/ckeditor.js"></script>
    <script>
        var input = document.querySelector('#inputTagify');
        var tagify = new Tagify(input)

        var dragsort = new DragSort(tagify.DOM.scope, {
            selector: '.' + tagify.settings.classNames.tag,
            callbacks: {
                dragEnd: onDragEnd
            }
        })

        function onDragEnd(elm) {
            tagify.updateValueByDOMTags()
        }
    </script>
    <script>
        $(document).ready(function () {
            function checkAppointmentVisibility() {
                var canBeAppointment = $('#can_be_appointment').find(':selected').val();
                if (canBeAppointment === "1") {
                    $('#appointment_times').show();
                    $('#appointment_start_time').prop('required', true);
                    $('#appointment_end_time').prop('required', true);
                } else {
                    $('#appointment_times').hide();
                    $('#appointment_start_time').prop('required', false).val('');
                    $('#appointment_end_time').prop('required', false).val('');
                }
            }

            checkAppointmentVisibility();

            $('#can_be_appointment').on('change', function () {
                checkAppointmentVisibility();
            });

            function validateTimes() {
                var startTime = $('#appointment_start_time').val();
                var endTime = $('#appointment_end_time').val();

                if (startTime && endTime) {
                    if (startTime >= endTime) {
                        alert('Başlangıç saati, bitiş saatinden büyük olamaz!');
                        $('#appointment_start_time').val('');
                    }
                }
            }

            $('#appointment_start_time, #appointment_end_time').on('change', function () {
                validateTimes();
            });
        });
    </script>
    <script>
        document.getElementById("image-input").addEventListener("change", function (event) {
            let output = document.getElementById("thumb-output");

            Array.from(event.target.files).forEach((file, index) => {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let div = document.createElement("div");
                    div.classList.add("col-md-4", "image-preview-container", "mb-3");

                    // Create preview image, title input, description input, and remove button
                    div.innerHTML = `
                    <img src="${e.target.result}" class="img-thumbnail mb-2" style="width: 120px; height: 120px;">
                    <!-- Image title input -->
                    <input type="text" name="new_image_titles[]" class="form-control mb-2" placeholder="Görsel başlığını girin">
                    <!-- Image description input -->
                    <textarea name="new_image_descriptions[]" class="form-control" rows="2" placeholder="Görsel açıklaması girin"></textarea>
                    <a href="#" class="remove-preview btn btn-danger btn-sm mt-2">Kaldır</a>
                `;

                    output.appendChild(div);

                    // Handle image removal
                    div.querySelector(".remove-preview").addEventListener("click", function (e) {
                        e.preventDefault();

                        // Get the media ID or some identifier for the image
                        const mediaId = div.querySelector('img').dataset.mediaId;

                        // AJAX call to delete the image
                        if (mediaId) {
                            fetch(`/service/delete-image/${mediaId}`, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                }
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // Remove the image from the preview container
                                        div.remove();
                                    } else {
                                        alert('Error removing image');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        } else {
                            div.remove();
                        }
                    });
                };
                reader.readAsDataURL(file);
            });
        });
    </script>



@endsection
