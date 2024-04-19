<link rel="stylesheet" href="{{ asset('assets/css/partials/navbar.css') }}">

{{-- navbar --}}
<nav class="navbar navbar-expand-lg fixed-top shadow-inner border-body shadow" id="navLand">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2 text-dark" href="/">Transport Berkah Armada</a>
      <div class="collapse navbar-collapse " id="navbarButtonsExample">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="/">Beranda</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuBeranda">
              Beranda
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuBeranda">
                <li><a class="dropdown-item" href="#scrollspyPlatform">Platform Al-Jabbar</a></li>
                <li><a class="dropdown-item" href="#scrollspyTesti">Testimoni</a></li>
                <li><a class="dropdown-item" href="#scrollspyIntegrasi">Integrasi</a></li>
                <li><a class="dropdown-item" href="#scrollspyMap">Map Keberangkatan</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="/bergabung">Bergabung</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLayanan">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLayanan">
              <li><a class="dropdown-item" href="/monitor">Monitor Armada</a></li>
              <li><a class="dropdown-item" href="/pengingat">Pengingat Registrasi Armada</a></li>
              <li><a class="dropdown-item" href="/keuangan">Manajemen Keuangan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/selengkapnya">Selengkapnya</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex align-items-center">
          <a class="btn btn-masuk px-3 me-2" href="/login">
            Masuk
          </a>
          <a class="btn me-3 text-light" href="/bergabung" style="background-color: #47a992">
            Gabung
          </a>
        </div>
      </div>
    </div>
</nav>
