<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal">Tambah Data Armada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form id="form-tambah-armada" action="{{route('post.armada')}}" method="post" class="form-valid" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <input type="number" name="nomorArmada" id="id_armada" hidden>
                                <label for="plat_nomor" class="form-label">Plat nomor:</label>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="plat_depan" class="form-label">Plat depan:</label>
                                <input type="text" name="plat_depan" id="plat_depan" class="form-control text-center" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nomor_plat" class="form-label">Nomor plat:</label>
                                <input type="text" name="nomor_plat" id="nomor_plat" class="form-control text-center" required>
                            </div>
                            <div class="col-md-4">
                                <label for="plat_belakang" class="form-label">Plat belakang:</label>
                                <input type="text" name="plat_belakang" id="plat_belakang" class="form-control text-center" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="nomor_body" class="form-label">No Body:</label>
                                <input type="text" name="nomor_body" id="nomor_body" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <label for="foto_armada" class="form-label">Foto Armada :</label>
                                <input type="file" name="foto_armada" id="foto_armada" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="kelas" class="form-label">Kelas :</label>
                                <select name="kelas" id="kelas" class="form-control" required>
                                    <option value="" selected disabled>Pilih Kelas</option>
                                    <option value="Executive">Executive</option>
                                    <option value="VIP">VIP</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="kapasitas_kursi" class="form-label">Kapasitas :</label>
                                <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="julukan" class="form-label">Julukan/AKA :</label>
                                <input type="text" name="julukan" id="julukan" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="jarak_tempuh" class="form-label">Jarak Tempuh :</label>
                                <input type="number" name="jarak_tempuh" id="jarak_tempuh" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tgl_kir" class="form-label">Tanggal KIR :</label>
                                <input type="date" name="tgl_kir" id="tgl_kir" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="status" class="form-label">Status :</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option value="Perpal">Perpal</option>
                                    <option value="On Trip">On Trip</option>
                                    <option value="Perbaikan">Perbaikan</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tempat_awal" class="form-label">Tempat Awal :</label>
                                <input type="text" name="tempat_awal" id="tempat_awal" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tempat_akhir" class="form-label">Tempat Akhir :</label>
                                <input type="text" name="tempat_akhir" id="tempat_akhir" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <label for="jam_keberangkatan" class="form-label">Jam Keberangkatan :</label>
                                <input type="time" name="jam_keberangkatan" id="jam_keberangkatan" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan:</label>
                                <input type="date" name="tanggal_keberangkatan" id="tanggal_keberangkatan" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <!-- Bagian Inputan Driver -->
                            <div class="col-md-6">
                                <label for="id_driver" class="form-label">Driver :</label>
                                <select name="id_driver" id="id_driver" class="form-control" required>
                                    <option value="" selected disabled>Pilih Driver</option>
                                    @foreach ($dataDrv as $driver)
                                        <option value="{{ $driver->id_driver }}">{{ $driver->nama_driver }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Bagian Inputan Helper -->
                            <div class="col-md-6">
                                <label for="id_helper" class="form-label">Helper :</label>
                                <select name="id_helper" id="id_helper" class="form-control" required>
                                    <option value="" selected disabled>Pilih Helper</option>
                                    @foreach ($dataHlp as $helper)
                                        <option value="{{ $helper->id_helper }}">{{ $helper->nama_helper }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-md text-light" onclick="tambahArmada()" style="background-color: #47a992">Simpan</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
