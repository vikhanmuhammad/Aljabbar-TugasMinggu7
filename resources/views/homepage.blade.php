@extends('layouts.main')
{{-- css --}}
<link rel="stylesheet" href="{{asset('assets/css/homepage.css')}}">

{{-- dataTable --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@section('container')

    {{-- background image --}}

    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
            <div class="carousel-item active crslItem ">
                @foreach ($data as $carousel)
                    @if ($carousel->id == 1)
                        <img src="{{$carousel-> imageurl}}" alt="" class="img-fluid " style="width:100%; height: 85%; object-fit: cover; filter: brightness(50%)">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="breadcumb mb-5">Transport Berkah Armada</h5>
                            <h4>{{$carousel -> text}}</h4>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navLand" tabindex="0" >
        {{-- Platform Al-Jabbar--}}
        <div class="container-fluid" style="margin-top: 150px; padding-top: 70px;" id="scrollspyPlatform">
            <div class="platform">
                <div class="container">
                    <div class="judul text-center">
                        <h4 class="text-center" style="color: #47a992" >Platform Al-Jabbar untuk Industri Ekonomi</h4>
                        <h2 class="text-center">Transportasi untuk masa depan bangsa</h2>
                    </div>
                    <div class="row mt-5">
                        @foreach ($data as $image)
                            @if ($image->id >= 8 && $image->id <= 11)
                                <div class="col-md-3">
                                    <div class="col-md-3 card shadow border-0" style="height: 500px; width: 18rem;">
                                        <img src="{{$image-> imageurl}}" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$image-> header}}</h5>
                                            <p class="card-text text-secondary text-start">{{$image -> text}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        {{-- testimoni --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 150px; padding-top: 70px;" id="scrollspyTesti">
            <div class="testimoni">
                <div class="container">
                    <div class="text-center">
                        <h2 class="judulTesti">Yang Dirasakan Oleh Pelanggan</h2>
                    </div>
                    <div class="row mt-5">
                        @foreach ($data as $image)
                            @if ($image->id >= 12 && $image->id <= 15)
                                <div class="col-md-3">
                                    <div class="col-md-3 card shadow border-0" style="height: 500px; width: 18rem;">
                                        <img src="{{$image-> imageurl}}" alt="" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$image-> header}}</h5>
                                            <p class="card-text text-secondary text-start">{{$image -> text}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- integrasi --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 300px; padding-top: 150px;" id="scrollspyIntegrasi">
            <div class="container">
                <h3 class="text-center mt-5">Perusahaan Al-Jabbar yang telah terintegrasi dengan Transport Berkah Armada</h3>
                <div class="row" style="padding-top: 50px;">
                    @foreach ($data as $image)
                        @if ($image->id >= 2 && $image->id <= 7)
                            <img src="{{$image -> imageurl}}" alt="" class="row col-2" style="padding-top: 50px; margin-right: 10px;">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- map keberangkatan --}}
        <div class="container-fluid" style="margin-top: 150px; margin-bottom: 150px; padding-top: 70px;" id="scrollspyMap">
            <h2 class="judulMap text-center">Map Keberangkatan</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    @foreach ($data as $image)
                        @if ($image->id == 16)
                        <iframe src="{{$image -> imageurl}}" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6" style="padding: 50px">
                    <table id="dataJadwal" class="table" style="width:100%;">
                        <thead class="table-success">
                          <tr>
                            <th class="th-sm">No</th>
                            <th class="th-sm">Nama Kendaraan</th>
                            <th class="th-sm">Nama Daerah</th>
                            <th class="th-sm">Jam Keberangkatan</th>
                            <th class="th-sm">Kuota</th>
                            <th class="th-sm">Stasiun</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $image)
                                @if ($image->id >= 17 && $image->id <= 18)
                                    <tr>
                                        <td>{{$image -> no}}</td>
                                        <td>{{$image -> nama_kendaraan}}</td>
                                        <td>{{$image -> nama_daerah}}</td>
                                        <td>{{$image -> jam_keberangkatan}}</td>
                                        <td>{{$image -> kuota}}</td>
                                        <td>{{$image -> stasiun}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- data Table --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataJadwal').DataTable();
        } );
    </script>
@endsection
