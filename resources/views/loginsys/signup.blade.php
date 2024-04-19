@extends('layouts.mainloginsys')
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
@section('containLoginSys')
    <div class="">
        <div class="d-flex">
            <div class="col-md-9">
                <img src="https://images.unsplash.com/photo-1621166552781-f9620af013df?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 100%; height: 745px;" class="img-fluid">
            </div>
            <div class="col-md-3">
                {{-- judul --}}
                <div class="judul text-center mt-5">
                    <h3><a href="/" class="link-underline link-underline-opacity-0 text-dark">Transport Berkah Armada</a></h3>
                </div>
                <p class="text-center fw-bold">Daftar Akun</p>

                {{-- form --}}
                <div class="formcls">
                    <form action="" class="form-valid" novalidate>
                        <div class="mb-3 ">
                            <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control " id="namaLengkap" required placeholder="Masukkan Nama Lengkap" name="namaLengkap">
                        </div>
                        <div class="mb-3 ">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control inpEmail" id="email" required placeholder="Masukkan Email" name="email">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                                <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/login" class="btn text-center btn-light">Login</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- plugin jquery validation --}}
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>
    <script src="{{ asset('assets/js/validationForm.js') }}"></script>
    <script src="{{ asset('assets/js/showHidePass.js') }}"></script>
@endsection


