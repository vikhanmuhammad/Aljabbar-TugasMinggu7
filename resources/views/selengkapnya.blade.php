@extends('layouts.main')
{{-- untuk css/js --}}
<link rel="stylesheet" href="{{ asset('assets/css/selengkapnya.css') }}">


@section('container')
{{-- buat ngoding --}}
    {{-- front image --}}
    <div id="carouselSlide" class="carousel slide" style="margin-bottom: 150px">
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            @foreach ($dataselengkapnya as $carousel)
                @if ($carousel->id == 1)
                    <img src="{{$carousel -> imageurl}}" class=" w-100 crsl1" alt="..." style="height: 950px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="breadcumb mb-5"><a href="/" class="text-light">Beranda</a> / Selengkapnya</h5>
                        <h4>{{$carousel -> text}}</h4>
                    </div>
                @endif
            @endforeach
          </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 150px;margin-bottom: 150px">
      <div class="container">
        <h4 class="text-center" style="color: #47a992">Transport Berkah Armada</h4>
        <h2 class="text-center">Kami adalah jawaban lengkap untuk kebutuhan bisnis Anda.</h2>
        <h5 class="text-secondary fw-light text-center">Inovatif dan andal, bisnis kami di dunia ticketing bis memberikan pengalaman perjalanan yang mulus. Dengan teknologi canggih, kami memungkinkan Anda untuk mencari, membeli, dan melacak tiket bis dengan mudah. Kami berkomitmen untuk memberikan layanan yang efisien dan menyenangkan kepada pelanggan kami, menghadirkan kemudahan dalam merencanakan perjalanan mereka. Dari pemilihan kursi hingga konfirmasi instan, kami membuat perjalanan dengan bis menjadi lebih aman, efisien, dan menyenangkan.</h5>

        <div class="row justify-content-center">
            @foreach ( $dataselengkapnya as $fitur)
                @if ( $fitur->id >= 2)
                    <div class="col-md-4">
                        <div class="card border-0 shadow" style="height: 500px">
                        <i class="{{$fitur->imageurl}} text-center" style="margin-top: 20px"></i>
                            <div class="card-body">
                                <h2 class="card-title text-center">{{$fitur->header}}</h2>
                                <p class="card-text text-center text-secondary">{{$fitur->text}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        </div>
      </div>
    </div>


    </div>
    </div>


@endsection
