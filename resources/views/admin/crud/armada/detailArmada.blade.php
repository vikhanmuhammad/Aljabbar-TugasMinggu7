@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin/crud/detailArmada.css') }}">
@section('containAdmin')
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a> <span class="text-secondary">/</span> <a href="/admin/detailArmada" class="text-none align-middle text-dark">Detail Armada</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="{{asset('storage/'. $dataArm->foto_armada)}}" class="rounded-circle mt-3 ms-3 mb-3 me-3" style=" width: 175px; height: 175px;">
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <h1>{{$dataArm->nomor_body}}</h1>
                        <h5>{{$dataArm->julukan}}</h5>
                        <h5>{{$dataArm->plat_depan . ' ' . $dataArm->nomor_plat . ' ' . $dataArm->plat_belakang}}</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <div class="d-flex">
                            <i class="fa-solid fa-chair ikon"></i></i><h4>{{$dataArm->kapasitas_kursi}} Kursi</h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-crown ikon"></i></i><h4>{{$dataArm->kelas}}</h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-clock-rotate-left ikon"></i></i><h4>{{$dataArm->status}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body mt-4">
                        <div class="d-flex">
                            <i class="fa-solid fa-user ikon"></i><h4>{{ $dataDrv->nama_driver }}</h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-regular fa-user ikon"></i><h4>{{ $dataHlp->nama_helper }}</h4>
                        </div>
                        <div>
                            <a class="btn btn-success border border-0" href="/admin/armada/{{$dataArm->id_armada}}/edit" style="background-color: #47a992"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- data Armada --}}
    {{-- <div class="dt mt-3"> --}}
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Keberangkatan</h3>
                    </div>
                    <div class="card-item mt-3 ms-4">
                        <div class="d-flex">
                            <h5 class="col-md-2">{{$dataArm->tempat_awal}}</h5>
                            <i class="fa-solid fa-repeat col-md-2"></i>
                            <h5 class="col-md-5">{{$dataArm->tempat_akhir}}</h5>
                            <i class="fa-regular fa-calendar col-md-0"></i>
                            <h5 class="col-md-1">{{$dataArm->jam_keberangkatan}}</h5>
                            <h5 class="col-md-2">{{$dataArm->tanggal_keberangkatan}}</h5>
                        </div>
                        <h5 class="mt-3">30 Penumpang</h5>
                    </div>
                    <div class="card-title mt-3">
                        <h3>Live Location</h3>
                    </div>
                    <div class="map ms-4 me-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307499364223!2d107.62910511023743!3d-6.973001668248973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1697050539864!5m2!1sid!2sid" class="w-100"  height="400" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="card-title mt-3">
                        <h3>Keuangan</h3>
                    </div>
                    <div class="card-item mt-2">
                        <div class="d-flex mt-3 ms-4">
                            <h5>Uang Jalan : </h5>
                            <h5 class="ms-2">Rp5.000.000</h5>
                        </div>
                        <div class="mt-3">
                            <table id="dataKeuanganArmada" class="display table" width="100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Pengeluaran</th>
                                        <th>Jumlah</th>
                                        <th>Waktu, Tanggal</th>
                                        <th>Bukti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataArm->keuangan as $num => $keuangan)
                                        <tr>
                                            <td>{{ $num + 1 }}</td>
                                            <td>{{ $keuangan->jenis}}</td>
                                            <td>Rp{{ number_format($keuangan->jumlah, 0, ',', '.') }}</td>
                                            <td>{{ $keuangan->jam }}, {{ $keuangan->tanggal }}</td>
                                            <td>
                                                <a class="btn btn-success border border-0" data-bs-toggle="modal" data-bs-target="#buktiModal{{ $keuangan->id }}" style="background-color: #47a992" type="button" aria-expanded="false">
                                                Bukti
                                                <i class="fa-regular fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="buktiModal{{ $keuangan->id }}" tabindex="-1" aria-labelledby="buktiModalLabel{{ $keuangan->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="buktiModalLabel{{ $keuangan->id }}">Bukti Transaksi {{ $keuangan->jenis }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $keuangan->foto_bukti) }}" alt="Bukti Pengeluaran" class="w-100">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Transaksi {{  }}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      {{ ... }}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div> --}}
        </div>
    {{-- </div> --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/admin/crud/armada/detailArmada.js') }}"></script>
@endsection
