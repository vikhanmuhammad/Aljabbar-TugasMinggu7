function tambahHelper() {
    event.preventDefault();
    Swal.fire({
        title: 'Konfirmasi data yang dimasukkan',
        text: 'Apakah Anda yakin data yang dimasukkan sudah benar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#formTambahHlp').submit();
            Swal.fire('Berhasil', 'Data berhasil ditambahkan!', 'success');
        }
    });
}
