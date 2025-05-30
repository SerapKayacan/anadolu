@section('title', 'Yeni Hizmet')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Yeni Hizmet
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
                            Yeni Hizmet
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('service.store') }}" method="POST"
                      id="form" enctype="multipart/form-data">
                    @method('POST')
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
                        <input type="file" accept="image/jpeg, image/png, image/jpg"
                               name="images[]" id="image-input" class="d-none" multiple>
                        <a data-input="thumbnail" data-preview="holder"
                           class="removeImage btn btn-danger text-white btn-sm">
                            <i class="fa fa-trash"></i> Kaldır
                        </a>
                    </span>
                                                        </div>
                                                        <div class="row col-md-12 thumb-output p-2"
                                                             id="thumb-output"></div>
                                                    </div>
                                                    <div class="text-muted fs-7">Medya görseli ekleyin.</div>
                                                </div>
                                            </div>

                                            <div class="mb-10 row">
                                                <div class="col-sm-4">
                                                    <label class="required form-label">Kategori</label>
                                                    <select name="category_id" class="form-control col-sm-4" required>
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category->id}}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>

                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="required form-label">Başlık (TR)</label>
                                                        <input class="form-control" name="translations[tr][title]"
                                                               value="" required/>
                                                        <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="required form-label">Title (EN)</label>
                                                        <input class="form-control" name="translations[en][title]"
                                                               value="" required/>
                                                        <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="required form-label">Titre (FR)</label>
                                                        <input class="form-control" name="translations[fr][title]"
                                                               value="" required/>
                                                        <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Kategori Sayfası Açıklama (TR)</label>
                                                        <textarea class="form-control" id="category_page_detail"
                                                                  name="translations[tr][category_page_detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Category Page Detail (EN)</label>
                                                        <textarea class="form-control" id="category_page_detail"
                                                                  name="translations[en][category_page_detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Catégorie Page Détail (FR)</label>
                                                        <textarea class="form-control" id="category_page_detail"
                                                                  name="translations[fr][category_page_detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Açıklama (TR)</label>
                                                        <textarea class="form-control" id="detail"
                                                                  name="translations[tr][detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Detail (EN)</label>
                                                        <textarea class="form-control" id="detail"
                                                                  name="translations[en][detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Détail (FR)</label>
                                                        <textarea class="form-control" id="detail"
                                                                  name="translations[fr][detail]" rows="2"></textarea>
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label class="required form-label">Sıra Sayısı</label>
                                                        <input class="form-control" name="sort_order" type="number"
                                                               value="1" min="0" max="99"/>
                                                        <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="required form-label">Durum</label>
                                                        <select name="is_active" class="form-control col-sm-3" required>
                                                            <option selected value="1">Aktif</option>
                                                            <option value="0">Pasif</option>
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
                                                        <input class="form-control" name="meta_description" value="">
                                                        <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                    </div>
                                                </div>
                                                <div class="mb-10 row">
                                                    <div class="col-sm-12">
                                                        <label class="form-label">Anahtar Kelimeler</label>
                                                        <input class="form-control" name="tags" id="inputTagify"
                                                               value="">
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
        // Handle image selection and display preview
        document.getElementById('image-input').addEventListener('change', function (e) {
            const files = e.target.files;
            const previewContainer = document.getElementById('thumb-output');
            previewContainer.innerHTML = ''; // Clear any previous previews

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function (event) {
                    const imgElement = document.createElement('img');
                    imgElement.src = event.target.result;
                    imgElement.classList.add('thumb', 'img-thumbnail', 'mb-2');
                    imgElement.style.width = '120px';
                    imgElement.style.height = '120px';

                    const imagePreviewContainer = document.createElement('div');
                    imagePreviewContainer.classList.add('col-md-4', 'image-preview-container', 'mb-3');

                    const titleInput = document.createElement('input');
                    titleInput.type = 'text';
                    titleInput.name = `image_titles[]`;
                    titleInput.classList.add('form-control', 'mb-2');
                    titleInput.placeholder = 'Görsel başlığını girin';

                    const descriptionInput = document.createElement('textarea');
                    descriptionInput.name = `image_descriptions[]`;
                    descriptionInput.classList.add('form-control');
                    descriptionInput.rows = 2;
                    descriptionInput.placeholder = 'Görsel açıklaması girin';

                    const removeButton = document.createElement('a');
                    removeButton.href = '#';
                    removeButton.classList.add('remove-preview', 'btn', 'btn-danger', 'btn-sm', 'mt-2');
                    removeButton.textContent = 'Kaldır';
                    removeButton.addEventListener('click', function (e) {
                        e.preventDefault();
                        imagePreviewContainer.remove();
                    });

                    imagePreviewContainer.appendChild(imgElement);
                    imagePreviewContainer.appendChild(titleInput);
                    imagePreviewContainer.appendChild(descriptionInput);
                    imagePreviewContainer.appendChild(removeButton);

                    previewContainer.appendChild(imagePreviewContainer);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>

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
    {{--    <script>document.getElementById("image-input").addEventListener("change", function(event) {--}}
    {{--            const thumbOutput = document.getElementById("thumb-output");--}}
    {{--            thumbOutput.innerHTML = ""; // Clear previous thumbnails--}}
    {{--            const files = event.target.files; // Get selected files--}}

    {{--            if (files) {--}}
    {{--                Array.from(files).forEach(file => {--}}
    {{--                    if (file.type.startsWith("image/")) { // Check if file is an image--}}
    {{--                        const reader = new FileReader();--}}
    {{--                        reader.onload = function(e) {--}}
    {{--                            const img = document.createElement("img");--}}
    {{--                            img.src = e.target.result; // Set image source--}}
    {{--                            img.className = "thumb img-thumbnail m-2"; // Add styling classes--}}
    {{--                            img.style.maxWidth = "150px"; // Set thumbnail size--}}
    {{--                            img.style.maxHeight = "150px";--}}
    {{--                            thumbOutput.appendChild(img); // Add to the output div--}}
    {{--                        };--}}
    {{--                        reader.readAsDataURL(file); // Read the file as data URL--}}
    {{--                    }--}}
    {{--                });--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
