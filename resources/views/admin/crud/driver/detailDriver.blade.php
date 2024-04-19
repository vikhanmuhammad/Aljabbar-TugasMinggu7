@extends('layouts.admin.mainAdmin')

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/driver" class="text-none align-middle text-dark">Driver</a> <span class="text-secondary">/</span> <a href="/admin/detailHelper" class="text-none align-middle text-dark">Detail Driver</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src={{asset('storage/'. $dataDrv->foto_profile)}} class="rounded-circle mt-3 ms-3 mb-3 me-3" style=" width: 175px; height: 175px;">
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <h1 class="nama-driver mt-4">{{$dataDrv->nama_driver}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- data Driver --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <div class ="profil-driver">
                            <div>
                                <h3 class="mb-5">Profil Driver</h3>
                            </div>
                            <table class="mt-3 mb-5">
                                <tr>
                                    <td><h5 class="me-5 mb-4">Tanggal Lahir</h5></td>
                                    <td><h4 class="me-5 mb-4">{{$dataDrv->tgl_lahir}}</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">NIK</h5></td>
                                    <td><h4 class="me-5 mb-4">{{$dataDrv->nik}}</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">Email</h5></td>
                                    <td><h4 class="me-5 mb-4">{{$dataDrv->email}}</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">Nomor SIM</h5></td>
                                    <td><h4 class="me-5 mb-4">{{$dataDrv->nomor_sim}}</h4></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
