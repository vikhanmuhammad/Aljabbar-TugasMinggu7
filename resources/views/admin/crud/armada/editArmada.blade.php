@extends('layouts.admin.mainAdmin')

{{-- sweet alert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a> <span class="text-secondary">/</span> <a href="/admin/armada/edit" class="text-none align-middle text-dark">Edit</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Update data Armada</h1>
                <h4>Perbaharui data armadamu disini</h4>
            </div>
        </div>
    </div>
    {{-- data helper --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <form action="{{ route('update.armada', $dataArm->id_armada )}}" method="post" class="form-valid" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="plat_depan" class="form-label">Plat depan:</label>
                                    <input type="text" name="plat_depan" id="plat_depan" class="form-control text-center" value="{{ $dataArm->plat_depan }}"required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nomor_plat" class="form-label">Nomor plat:</label>
                                    <input type="text" name="nomor_plat" id="nomor_plat" class="form-control text-center" value="{{ $dataArm->nomor_plat }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="plat_belakang" class="form-label">Plat belakang:</label>
                                    <input type="text" name="plat_belakang" id="plat_belakang" class="form-control text-center" value="{{ $dataArm->plat_belakang }}" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="nomor_body" class="form-label">No Body:</label>
                                    <input type="text" name="nomor_body" id="nomor_body" class="form-control" value="{{ $dataArm->nomor_body }}" required>
                                </div>
                                <div class="col-md-8">
                                    <label for="foto_armada" class="form-label">Foto Armada :</label>
                                    <input type="file" name="foto_armada" id="foto_armada" class="form-control mb-1" required>
                                    <img src="{{asset('storage/'. $dataArm->foto_armada)}}" alt="" style="width: 250px; height:250px;">
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="kelas" class="form-label">Kelas :</label>
                                    <select name="kelas" id="kelas" class="form-control" required>
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        <option value="Executive">Executive</option>
                                        <option value="VIP">VIP</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="kapasitas_kursi" class="form-label">Kapasitas :</label>
                                    <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" value="{{ $dataArm->kapasitas_kursi }}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="julukan" class="form-label">Julukan/AKA :</label>
                                    <input type="text" name="julukan" id="julukan" value="{{ $dataArm->julukan }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="jarak_tempuh" class="form-label">Jarak Tempuh :</label>
                                    <input type="number" name="jarak_tempuh" id="jarak_tempuh" value="{{ $dataArm->jarak_tempuh }}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tgl_kir" class="form-label">Tanggal KIR :</label>
                                    <input type="date" name="tgl_kir" id="tgl_kir" value="{{ $dataArm->tgl_kir }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Status :</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="" selected disabled>Pilih Status</option>
                                        <option value="Perpal">Perpal</option>
                                        <option value="On Trip">On Trip</option>
                                        <option value="Perbaikan">Perbaikan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tempat_awal" class="form-label">Tempat Awal :</label>
                                    <input type="text" name="tempat_awal" id="tempat_awal" value="{{ $dataArm->tempat_awal }}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tempat_akhir" class="form-label">Tempat Akhir :</label>
                                    <input type="text" name="tempat_akhir" id="tempat_akhir" value="{{ $dataArm->tempat_akhir }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-6">
                                    <label for="jam_keberangkatan" class="form-label">Jam Keberangkatan :</label>
                                    <input type="time" name="jam_keberangkatan" id="jam_keberangkatan" value="{{ $dataArm->jam_keberangkatan }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan:</label>
                                    <input type="date" name="tanggal_keberangkatan" id="tanggal_keberangkatan" value="{{ $dataArm->tanggal_keberangkatan }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <!-- Bagian Inputan Driver -->
                                <div class="col-md-6">
                                    <label for="id_driver" class="form-label">Driver :</label>
                                    <select name="id_driver" id="id_driver" class="form-control" required>
                                        <option value="" selected disabled>Pilih Driver</option>
                                        @foreach ($dataDrv as $driver)
                                            <option value="{{ $driver->id_driver }}">{{ $driver->nama_driver }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Bagian Inputan Helper -->
                                <div class="col-md-6">
                                    <label for="id_helper" class="form-label">Helper :</label>
                                    <select name="id_helper" id="id_helper" class="form-control" required>
                                        <option value="" selected disabled>Pilih Helper</option>
                                        @foreach ($dataHlp as $helper)
                                            <option value="{{ $helper->id_helper }}">{{ $helper->nama_helper }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" onclick="editArmada()" style="background-color: #47a992">Simpan</button>
                                        <a href="/admin/armada" class="btn text-center btn-outline-danger">Batalkan</a>
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
    <script src="{{ asset('assets/js/admin/crud/armada/editArmada.js') }}"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
@endsection
