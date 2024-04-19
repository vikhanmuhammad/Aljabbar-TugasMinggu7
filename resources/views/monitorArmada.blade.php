@extends('layouts.main')
    <link rel="stylesheet" href="{{ asset('assets/css/monitorArmada.css') }}">
@section('container')
            <div id="carouselSlide" class="carousel slide">
                <div class="carousel-inner crsl">
                <div class="carousel-item active crslItem ">
                    @foreach ($datamonitor as $carousel)
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
        <div class="container-fluid mt-5" style="margin-bottom: 150px">
            <div class="container">
                <div class="text-center justify-content-center">
                    <h4 style="color: #47A992;">Platform Al-Jabbar untuk Industri Ekonomi</h4>
                    <h2>Mudah dalam memonitor armada dan kinerja pengemudi</h2>
                    <h5 class="text-secondary fw-normal mb-5">Transport Berkah Armada dapat mengoptimalkan visibilitas dan kendali pada armada dan pengemudi, untuk meningkatkan pelayanan dan kepuasan penumpang.</h5>
                </div>
                <div class="row justify-content-center" style="padding: 50px;">
                    @foreach ($datamonitor as $card)
                        @if ($card->id >= 2 && $card->id <= 3)
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

        <div class="container-fluid" style="margin-bottom: 150px">
            <div class="container">
                @foreach ($datamonitor as $fitur)
                    @if ($fitur->id == 4)
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

        <div class="container-fluid" style="margin-bottom: 150px">
            <div class="container">
                @foreach ($datamonitor as $fitur)
                    @if ($fitur->id == 5)
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
@endsection
