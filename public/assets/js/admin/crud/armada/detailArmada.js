$(document).ready( function () {
    $('#dataKeuanganArmada').DataTable();
    // Membaca parameter dari URL
    var params = new URLSearchParams(window.location.search);
    var noBody = params.get('noBody');
    var nomor = params.get('nomor');
    var julukan = params.get('julukan');
    var kapasitas = params.get('kapasitas');
    var kelas = params.get('kelas');
    var kir = params.get('kir');
    var status = params.get('status');
    var driver1 = params.get('driver1');
    var driver2 = params.get('driver2');
    var helper = params.get('helper');
    var kotaawal = params.get('kotaawal');
    var kotatujuan = params.get('kotatujuan');
    var jamberangkat = params.get('jamberangkat');
    var tanggalberangkat = params.get('tanggalberangkat');

    // Menampilkan data yang sesuai pada label
    $('#noBodyLabel').text(noBody);
    $('#julukanLabel').text(julukan);
    $('#platNoLabel').text(nomor);
    $('#kapasitasLabel').text(kapasitas);
    $('#kelasLabel').text(kelas);
    $('#statusLabel').text(status);
    $('#driver1Label').text(driver1);
    $('#driver2Label').text(driver2);
    $('#helperLabel').text(helper);
    $('#kotaAwalLabel').text(kotaawal);
    $('#kotaTujuanLabel').text(kotatujuan);
    $('#jamBerangkatLabel').text(jamberangkat);
    $('#tanggalBerangkatLabel').text(tanggalberangkat);
} );

