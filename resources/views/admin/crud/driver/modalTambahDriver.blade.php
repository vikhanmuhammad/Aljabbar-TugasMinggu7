<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal">Tambah Data Driver</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="form-tambah-driver" action="{{route('post.driver')}}" method="POST" class="form-valid" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-3">
                            <div class="col-md-4">
                                {{-- <input type="number" name="nomordriver" id="id_driver" hidden> --}}
                                <label for="nama_driver" class="form-label">Nama Driver:</label>
                                <input type="text" name="nama_driver" id="nama_driver" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir:</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-8">
                                <label for="foto_profile" class="form-label">Foto profile:</label>
                                <input type="file" name="foto_profile" id="foto_profile" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nik" class="form-label">NIK:</label>
                                <input type="number" name="nik" id="nik" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nomor_sim" class="form-label">Nomor Sim:</label>
                                <input type="text" name="nomor_sim" id="nomor_sim" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-md text-light" onclick="tambahDriver()" style="background-color: #47a992">Simpan</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
