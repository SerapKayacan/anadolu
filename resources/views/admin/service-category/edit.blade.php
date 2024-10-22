@section('title', 'Yeni Hizmet Kategorisi')
@section('css')
@endsection
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Düzenle: Hizmet Kategorisi
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('service-category.index') }}" class="text-muted text-hover-primary">Hizmet Kategori Listesi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Hizmet Kategorisi Düzenle
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('service-category.update', $content->id) }}" method="POST" id="form" enctype="multipart/form-data">
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
                                    <div class="card card-flush py-4">
                                        <div class="card-body pt-0">
                                            <div class="mb-10 row">
                                                <div class="col-sm-6">
                                                    <label class="form-label">Masaüstü Görseli Seçin</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                         <span class="input-group-btn">
                                                            <a class="uploadImage btn btn-primary text-white btn-sm">
                                                               <i class="far fa-file-image"></i> Seç
                                                            </a>
                                                               <input type="file" accept="image/jpeg, image/png, image/jpg" name="banner_image" class="d-none">
                                                               <input type="text" name="uploaded_banner_image" class="d-none" value="{{ $content->getFirstMediaUrl('banner', 'large') }}">
                                                            <a data-input="thumbnail" data-preview="holder"
                                                               class="removeImage btn btn-danger text-white btn-sm">
                                                               <i class="fa fa-trash"></i> Kaldır
                                                            </a>
                                                            <div class="row col-md-12 thumb-output p-2">
                                                                <img class="thumb img-thumbnail" src="{{ $content->getFirstMediaUrl('banner', 'large') }}">
                                                            </div>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted fs-7">(770 x 442) Medya görseli ekleyin.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Kategori</label>
                                                    <select name="category_id" class="form-control col-sm-3" required>
                                                        <option value="">-- Seçiniz --</option>
                                                        @foreach($categories as $category)
                                                            <option @if ($content->category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Başlık</label>
                                                    <input class="form-control" name="title" value="{{ $content->title }}" required/>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Kısa Açıklama</label>
                                                    <textarea class="form-control" name="sort_detail" rows="2" required>{{ $content->sort_detail }}</textarea>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Açıklama</label>
                                                    <input type="hidden" name="detail" />
                                                    <div id="kt_quil_1" style="height: 325px">{!! $content->detail !!}</div>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Anahtar Kelimeler</label>
                                                    <input class="form-control" name="keywords" value="{{ $content->keywords }}" required/>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Durum</label>
                                                    <select name="is_active" class="form-control col-sm-3" required>
                                                        <option @if ($content->is_active == 1) selected @endif value="1">Aktif</option>
                                                        <option @if ($content->is_active == 0) selected @endif value="0">Pasif</option>
                                                    </select>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
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
    <script src="{{ asset('') }}assets/js/plm/createPage.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('') }}assets/js/plm/media.js"></script>
    <script src="{{ asset('') }}assets/js/plm/dropzone.js"></script>

    <script>
        var KTQuilDemos = function() {

            // Private functions
            var demo1 = function() {
                var quill = new Quill('#kt_quil_1', {
                    modules: {
                        toolbar: [
                            [{ 'size': ['small', false, 'large', 'huge'] }],
                            ['bold', 'italic', 'underline'],
                            ['image', 'video'],
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                            [{ 'indent': '-1'}, { 'indent': '+1' }],
                            [{ 'color': [] }, { 'background': [] }],
                            [{ 'align': [] }]
                        ],
                    },
                    placeholder: "Detaylı açıklama alanı...",
                    theme: 'snow'
                });
            }

            return {
                init: function() {
                    demo1();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTQuilDemos.init();
        });

        $("#submit").click(function() {
            var myEditor = document.querySelector('#kt_quil_1');
            $("input[name='detail']").val(myEditor.children[0].innerHTML);
        });

        document.querySelector('#kt_quil_1').addEventListener('click', (event) => {
            if (event.target.tagName === 'IMG') {
                const img = event.target;
                img.style.cursor = 'pointer';
                img.addEventListener('mousedown', startResize);

                function startResize(e) {
                    e.preventDefault();
                    document.addEventListener('mousemove', resize);
                    document.addEventListener('mouseup', stopResize);

                    function resize(e) {
                        const rect = img.getBoundingClientRect();
                        const newWidth = e.clientX - rect.left;
                        const newHeight = e.clientY - rect.top;

                        img.style.width = newWidth + 'px';
                        img.style.height = newHeight + 'px';

                        img.setAttribute('width', newWidth);
                        img.setAttribute('height', newHeight);
                    }

                    function stopResize() {
                        document.removeEventListener('mousemove', resize);
                        document.removeEventListener('mouseup', stopResize);
                    }
                }
            }
        });

    </script>
@endsection
