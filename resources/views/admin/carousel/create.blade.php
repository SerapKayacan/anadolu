<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Slider</title>
</head>
<body>
    <h1>Yeni Slider</h1>

<!-- Upload Form -->
<form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" required>
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="alt_text" placeholder="Alt Text">
    <input type="number" name="sort_order" placeholder="Sort Order">
    <button type="submit">Upload</button>
</form>
@section('title', 'Yeni Resim')
@section('css')
@endsection
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Yeni Resim
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('carousel.index') }}" class="text-muted text-hover-primary">Resim Listesi</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Yeni Resim
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <form class="form d-flex flex-column flex-lg-row" action="{{ route('carousel.store') }}" method="POST" id="form" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">

                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#generalInformation">Genel Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#search">Arama Motoru</a>
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
                                                               <input type="file" accept="image/jpeg, image/png, image/jpg" name="banner_image" class="d-none">
                                                            <a data-input="thumbnail" data-preview="holder"
                                                               class="removeImage btn btn-danger text-white btn-sm">
                                                               <i class="fa fa-trash"></i> Kaldır
                                                            </a>
                                                            <div class="row col-md-12 thumb-output p-2">
                                                                <img class="thumb img-thumbnail" src="">
                                                            </div>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted fs-7">Medya görseli ekleyin.</div>
                                                </div>
                                            </div>

                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label"> Başlık</label>
                                                    <textarea class="form-control ckeditors" id="title" name="title" rows="2"></textarea>
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label"> Açıklama</label>
                                                    <textarea class="form-control ckeditors" id="description" name="description" rows="2"></textarea>
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Buton Yazısı</label>
                                                    <input class="form-control" name="button_text" value="" required/>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="mb-10 row">
                                                <div class="col-sm-12">
                                                    <label class="required form-label">Buton Linki</label>
                                                    <input class="form-control" name="button_link" value="" required/>
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="required form-label" >Buton Yazısı Rengi</label>
                                                    <input
                                                        type="color"
                                                        class="form-control"
                                                        name="text_color"
                                                        value="{{ old('text_color', $carousel->text_color ?? '#000000') }}"
                                                        required
                                                    />
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Buton Çerçeve Rengi</label>
                                                    <input
                                                        type="color"
                                                        class="form-control"
                                                        name="border_color"
                                                        value="{{ old('border_color', $carousel->border_color ?? '#000000') }}"
                                                        required
                                                    />
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Buton Arka Plan Rengi</label>
                                                    <input
                                                        type="color"
                                                        class="form-control"
                                                        name="button_border_color"
                                                        value="{{ old('background_color', $carousel->background_color ?? '#000000') }}"
                                                        required
                                                    />
                                                    <div class="text-muted fs-7">Bu alan zorunludur.</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label class="required form-label">Sıra Sayısı</label>
                                                    <input class="form-control" name="sort_order" type="number" value="1" min="0" max="99"/>
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
                                                    <input class="form-control" name="tags" id="inputTagify" value="">
                                                    <div class="text-muted fs-7">Bu alan zorunlu değildir.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('carousel.index') }}" class="btn btn-light me-5">Vazgeç</a>
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
            selector: '.'+tagify.settings.classNames.tag,
            callbacks: {
                dragEnd: onDragEnd
            }
        })

        function onDragEnd(elm){
            tagify.updateValueByDOMTags()
        }
    </script>
@endsection
</body>
</html>
