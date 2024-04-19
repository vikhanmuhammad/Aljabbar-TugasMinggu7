@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    {{-- sweet alert --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
@section('containAdmin')
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/helper" class="text-none align-middle text-dark">Helper</a></p>
    <div class="container mt-3">
        <div class="card border-0 shadow card-bread ">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Awasi Helpermu!</h1>
                <h4>Atur manajemen helpermu disini</h4>
            </div>
        </div>
    </div>

    {{-- data helper --}}
    <div class="dt mt-3 mb-3">
        <div class="container" >
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Daftar Helper</h3>
                    </div>

                    {{-- button tambah --}}
                    <a class="btn float-end mb-3 text-light" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #47a992"><i class="fa-solid fa-plus"></i> Tambah</a>

                    {{-- modal tambah helper --}}
                    @include('admin.crud.helper.modalTambah')

                    {{-- tabel helper --}}
                    <div class="card-item">
                        @include('admin.crud.helper.tableHelper')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- datatable --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    {{-- jbvalidator --}}
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>

    {{-- js --}}
    <script src="{{ asset('assets/js/admin/helper.js') }}"></script>

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/js/admin/crud/helper/deleteHelper.js') }}"></script>
    <script src="{{ asset('assets/js/admin/crud/helper/tambahHelper.js') }}"></script>
@endsection
