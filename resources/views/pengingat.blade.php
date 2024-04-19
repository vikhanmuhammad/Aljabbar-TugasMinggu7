@extends('layouts.main')
    <link rel="stylesheet" href="{{ asset('assets/css/pengingat.css') }}">
@section('container')
    {{-- Background image --}}
    <div id="carouselSlide" class="carousel slide" style="margin-bottom: 150px">
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            @foreach ($datapengingat as $carousel)
                @if ($carousel->id == 1)
                    <img src="{{$carousel -> imageurl}}" class=" w-100 crsl1" alt="..." style="height: 1100px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="breadcumb mb-5"><a href="/" class="text-light">Beranda</a> / Monitor Armada</h5>
                        <h4>{{$carousel -> text}}</h4>
                    </div>
                @endif
            @endforeach
          </div>
        </div>
    </div>

    {{-- platform transport berkah armada --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <h4 class="text-center" style="color: #47a992">Platform Al-Jabbar untuk Industri Ekonomi</h4>
            <h2 class="text-center">Mudah dalam mengatur operasional armada dan perjalanan</h2>
            <h5 class="text-center text-secondary fw-normal" style="padding-left: 50px; padding-right: 50px;">Transport Berkah Armada bantu meningkatkan visibilitas dan kontrol terhadap armada dan pengemudi untuk memaksimalkan layanan dan kepuasan</h5>
            <div class="row justify-content-center" style="padding: 50px">
                @foreach ($datapengingat as $card)
                    @if ($card->id >= 2 && $card->id <= 4)
                        <div class="col-md-4">
                            <div class="card shadow border-0" style="width: 350px; height: 300px">
                                <h1 class="text-center" style="padding-top: 50px"><i class="{{$card->imageurl}}"></i></h1>
                                <div class="card-body">
                                    <h5 class="text-center">{{$card->header}}</h5>
                                    <p class="card-text text-center text-secondary">{{$card->text}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

    {{-- fitur --}}
    {{-- Visibilitas dan Transparansi --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            @foreach ($datapengingat as $fitur)
                @if ($fitur->id == 5)
                    <div class="row justify-content-center" style="padding: 50px">
                        <div class="col-md-6 justify-content-center pt-5" style="">
                            <h2 class="text-end">{{$fitur->header}}</h2>
                            <h5 class="text-secondary fw-normal text-end">{{$fitur->text}}</h5>
                        </div>
                        <div class="col-6">
                            <img src="{{$fitur->imageurl}}" alt="" class="" style="width: 500px; height: 350px">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Monitor biaya perjalanan --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            @foreach ($datapengingat as $fitur)
                @if ($fitur->id == 6)
                    <div class="row justify-content-center" style="padding: 50px">
                        <div class="col-md-6 justify-content-center" style="">
                            <img src="{{$fitur->imageurl}}" alt="" class="float-end" style="width: 500px; height: 350px">
                        </div>
                        <div class="col-6 pt-5">
                            <h2 class="">{{$fitur->header}}</h2>
                            <h5 class="text-secondary fw-normal">{{$fitur->text}}</h5>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Pantau perilaku berkendara --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            @foreach ($datapengingat as $fitur)
                @if ($fitur->id == 7)
                    <div class="row justify-content-center" style="padding: 50px">
                        <div class="col-md-6 justify-content-center pt-5" style="">
                            <h2 class="text-end">{{$fitur->header}}</h2>
                            <h5 class="text-secondary fw-normal text-end">{{$fitur->text}}</h5>
                        </div>
                        <div class="col-6">
                            <img src="{{$fitur->imageurl}}" alt="" class="" style="width: 500px; height: 350px">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Dokumentasi yang dapat diandalkan  --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            @foreach ($datapengingat as $fitur)
                @if ($fitur->id == 8)
                    <div class="row justify-content-center" style="padding: 50px">
                        <div class="col-md-6 justify-content-center" style="">
                            <img src="{{$fitur->imageurl}}" alt="" class="float-end" style="width: 500px; height: 350px">
                        </div>
                        <div class="col-6 pt-5">
                            <h2 class="">{{$fitur->header}}</h2>
                            <h5 class="text-secondary fw-normal">{{$fitur->text}}</h5>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>



    {{-- hardware --}}
    <!-- <div class="container-fluid" style="margin-bottom: 450px">
        <div class="container">
            <h4 class="text-center" style="color: #47a992">Hardware</h4>
            <h2 class="text-center">Perangkat dan Sensor untuk Lengkapi Armada</h2>
            <h5 class="text-center text-secondary" style="padding-left: 50px; padding-right: 50px;">Tingkatkan kontrol dengan sensor telematik sesuai kebutuhan bisnis Anda.</h5>
            <div class="row" style="padding: 50px">
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-trackvision-pro.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">TrackVision Basic</h5>
                            <p class="card-text text-secondary">Real-time video monitoring kendaraan dengan dual kamera yang menghadap ke jalan dan sekitar kabin kendaraan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-ultrasonic.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">iFuel Ultrasonic </h5>
                            <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar melalui sinyal ketinggian jumlah bahan bakar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-easy-track-1.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Easy Track </h5>
                            <p class="card-text text-secondary text-start">Pelacak armada yang terhubung dengan IoT dan sensor pada kendaraan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-stick.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">iFuel Stick </h5>
                            <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar dengan deteksi volume bahan bakar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
@endsection
