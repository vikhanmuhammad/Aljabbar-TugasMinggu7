@extends('layouts.admin.mainAdmin')

{{-- sweet alert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/driver" class="text-none align-middle text-dark">Driver</a> <span class="text-secondary">/</span> <a href="/admin/helper/editDriver" class="text-none align-middle text-dark">Edit</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Update Data Driver</h1>
                <h4>Perbaharui data drivermu disini</h4>
            </div>
        </div>
    </div>
    {{-- data driver --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <form action="{{ route('update.driver', $dataDrv->id_driver )}}" method="post" class="form-valid" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <input type="number" name="idHelper" id="id_helper" value="1" hidden>
                                    <label for="nama_driver" class="form-label">Nama Driver:</label>
                                    <input type="text" name="nama_driver" id="nama_driver" value="{{$dataDrv->nama_driver}}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" id="email" value="{{$dataDrv->email}}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{$dataDrv->tgl_lahir}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="foto_profile" class="form-label">Foto profile:</label>
                                    <input type="file" name="foto_profile" id="foto_profile" class="form-control" required>
                                    <img src="{{asset('storage/'. $dataDrv->foto_profile)}}" alt="" style="width: 250px; height:250px;">
                                </div>
                                <div class="col-md-4">
                                    <label for="nik" class="form-label">NIK:</label>
                                    <input type="number" name="nik" id="nik" value="{{$dataDrv->nik}}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nomor_sim" class="form-label">Nomor Sim:</label>
                                    <input type="text" name="nomor_sim" id="nomor_sim" class="form-control" value="{{$dataDrv->nomor_sim}}" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" onclick="editDriver()" style="background-color: #47a992">Simpan</button>
                                        <a href="/admin/driver" class="btn text-center btn-outline-danger">Batalkan</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- jbvalidator --}}
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>

    {{-- js --}}
    <script src="{{ asset('assets/js/admin/crud/driver/editDriver.js') }}"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
@endsection
