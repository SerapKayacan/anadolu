@section('title', 'Tab-Panel Listesi')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Tab Panel Listesi</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Tab Panel Listesi</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end::Toolbar-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                              rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-find="search"
                                       class="form-control form-control-solid w-250px ps-14" placeholder="Arama" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('tab-panel.create') }}" class="btn btn-primary">Yeni Tab Panel</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="dataTable">
                            <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    No
                                </th>
                                <th class="min-w-250px">Başlık</th>
                                <th class="min-w-150px">Durum</th>
                                <th class="text-end min-w-70px">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            @foreach ($tabPanels as $tabPanel)
                                <tr id="order-{{  $tabPanel->id }}">
                                    <td> {{ $loop->iteration  }} </td>
                                    <td><a href="{{ route('tab-panel.edit', $tabPanel->id) }}" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1">{!!$tabPanel->title !!} </a></td>
                                    <td>
                                        @if ($tabPanel->is_active === 1)
                                            <div class="badge badge-light-success">Aktif</div>
                                        @else
                                            <div class="badge badge-light-danger">Pasif</div>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('tab-panel.edit', $tabPanel->id) }}" data-toggle="tooltip" title="Düzenle" class="btn btn-icon btn-light btn-hover-primary btn-sm"><i class="far fa-edit text-warning icon-lg"></i></a>
                                        <a href="#" type="button" data-toggle="tooltip" title="Sil" class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                           data-url="{{ route('tab-panel.destroy',$tabPanel->id) }}"
                                           data-method="delete"
                                           data-id="{{ $tabPanel->id }}"
                                           data-count="0"><i class="far fas fa-trash-alt text-danger icon-lg"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/admin/datatable.js"></script>
    <script src="{{ asset('') }}assets/js/admin/delete.js"></script>
@endsection
