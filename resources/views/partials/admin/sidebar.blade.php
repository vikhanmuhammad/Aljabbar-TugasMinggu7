<div class="sidebar" id="side-nav">
    <ul class="list-unstyled px-2">
        <img class="rounded-circle mx-auto d-block col-md-6" src="{{asset('storage/'. $dataAdmin->foto_profil)}}" style="width: 200px; height: 200px;"/>
        <h2 class="text-center text-white mb-2 ms-2 me-2">PO. {{ $dataAdmin->nama_po }}</h2>
        <p class="text-center text-white ms-3 me-3">PT. {{ $dataAdmin->nama_pt }}</p>
        <li class="hovList"><a href="/admin" class="text-decoration-none px-3 py-2 d-block">Beranda</a></li>
        <li class="hovList"><a href="/admin/armada" class="text-decoration-none px-3 py-2 d-block">Armada</a></li>
        <li class="hovList"><a href="/admin/driver" class="text-decoration-none px-3 py-2 d-block">Driver</a></li>
        <li class="hovList"><a href="/admin/helper" class="text-decoration-none px-3 py-2 d-block">Helper</a></li>
        {{-- <li class="hovList"><a href="/admin/keuangan" class="text-decoration-none px-3 py-2 d-block">Keuangan</a></li> --}}
    </ul>
    <hr class="h-color mx-2">
</div>
