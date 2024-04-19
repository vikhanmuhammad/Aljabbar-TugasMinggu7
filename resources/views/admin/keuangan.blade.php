@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{asset('assets/css/keuanganAdmin.css')}}">
@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/keuanganAdmin" class="text-none align-middle text-dark">Keuangan</a></p>
    <div class="dt mt-2">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h1 class="judulHalaman">Keuangan</h1>
                    </div>
                    <div class="card-item mt-5">
                        <table id="dataKeuangan" class="display table" width="100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Body</th>
                                    <th>Pemasukkan</th>
                                    <th>Pengeluaran</th>
                                    <th>Sisa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>VT001</td>
                                    <td>Rp10.000.000</td>
                                    <td>Rp5.000.000</td>
                                    <td>Rp5.000.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #47A992;">
                                            Details
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>VT002</td>
                                    <td>Rp10.000.000</td>
                                    <td>Rp5.000.000</td>
                                    <td>Rp5.000.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #47A992;">
                                            Details
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/admin/keuanganAdmin.js') }}"></script>
@endsection
