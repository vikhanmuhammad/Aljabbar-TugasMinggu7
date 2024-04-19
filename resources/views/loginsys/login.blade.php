@extends('layouts.mainloginsys')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@section('containLoginSys')
    <div class="d-flex">
        <div class="row">
            <div class="col-md-9 banner">
                <img src="https://images.unsplash.com/photo-1557223562-6c77ef16210f?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 100%; height: 745px;" class="img-fluid">
            </div>
            <div class="col-md-3 form">
                <div class="mt-4 text-center">
                    <h3><a href="/" class="link-underline link-underline-opacity-0 text-dark">Transport Berkah Armada</a></h3>
                </div>
                <form action="/login" class="form1" method="POST">
                    @csrf

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <h4 class="text-center">Masuk ke Akun</h4>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') 
                            is-invalid
                        @enderror" id="email" name="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                            <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button type="submit" class="btn btn-primary border-0" style="background-color: #47a992">Masuk</button>
                        {{-- <button type="button" class="btn btn-light">Lupa Sandi</button> --}}
                        <a href="/bergabung" class="btn text-center btn-light">Bergabung</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>
    <script src="{{ asset('assets/js/validatelogin.js') }}"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>
@endsection
