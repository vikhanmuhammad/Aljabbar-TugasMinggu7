@extends('layouts.admin.mainAdmin')

{{-- sweet alert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/helper" class="text-none align-middle text-dark">Helper</a> <span class="text-secondary">/</span> <a href="/admin/helper/edit" class="text-none align-middle text-dark">Edit</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Update data Helper</h1>
                <h4>Perbaharui data helpermu disini</h4>
            </div>
        </div>
    </div>
    {{-- data helper --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <form action="{{ route('update.helper', $dataHlp->id_helper )}}" method="POST" class="form-valid" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <input type="number" name="idHelper" id="id_helper" value="1" hidden>
                                    <label for="nama_helper" class="form-label">Nama helper:</label>
                                    <input type="text" name="nama_helper" id="nama_helper" value="{{$dataHlp->nama_helper}}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" id="email" value="{{$dataHlp->email}}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tgl_lahir" class="form-label">Tanggal lahir:</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$dataHlp->tgl_lahir}}" required>
                                </div>

                            </div>
                            <div class="row pb-3">
                                <div class="col-md-8">
                                    <label for="foto_profile" class="form-label">Foto profile:</label>
                                    <input type="file" name="foto_profile" id="foto_profile" class="form-control" required>
                                    <img src="{{asset('storage/'. $dataHlp->foto_profile)}}" alt="" style="width: 250px; height:250px;">
                                </div>
                                <div class="col-md-4">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="number" name="nik" id="nik" value="{{$dataHlp->nik}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" onclick="editHelper()" style="background-color: #47a992">Simpan</button>
                                        <a href="/admin/helper" class="btn text-center btn-outline-danger">Batalkan</a>
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
    <script src="{{ asset('assets/js/admin/crud/helper/editHelper.js') }}"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
@endsection
