function hapusHelper(idHlp) {
    event.preventDefault();
    Swal.fire({
        title: 'Konfirmasi hapus helper',
        text: 'Apakah Anda yakin ingin menghapus helper tersebut?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $(`#formDeleteHlp-${idHlp}`).submit();
            Swal.fire('Berhasil', 'Data berhasil dihapus!', 'success');
        }
    });
}
