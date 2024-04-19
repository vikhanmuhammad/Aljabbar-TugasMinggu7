@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
@section('containAdmin')
    {{-- breadcrumbs --}}
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a></p>
    <div class="container mt-3">
        <div class="card border-0 shadow card-bread ">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Awasi Armadamu!</h1>
                <h4>Atur manajemen armadamu disini</h4>
            </div>
        </div>
    </div>

    {{-- data Armada --}}
    <div class="dt mt-3 mb-3">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Daftar Armada</h3>
                    </div>

                    {{-- Button tambah --}}
                    <a class="btn btn-success float-end mb-3" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #47a992"><i class="fa-solid fa-plus"></i> Tambah</a>
                    <div class="card-item">

                    {{-- modal tambah armada --}}
                    @include('admin.crud.armada.modalTambah')

                    {{-- tabel armada --}}
                    <div class="card-item">
                      @include('admin.crud.armada.tableArmada')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>
    <script src="{{ asset('assets/js/admin/armada.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/js/admin/crud/armada/deleteArmada.js') }}"></script>
    <script src="{{ asset('assets/js/admin/crud/armada/tambahArmada.js') }}"></script>
@endsection
