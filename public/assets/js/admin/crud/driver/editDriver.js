$(function (){
    let validator = $('form.form-valid').jbvalidator({
        errorMessage: true,
        successClass: true,
        language: "https://emretulek.github.io/jbvalidator/dist/lang/en.json"
    });

    validator.validator.emailWithDomain = function(el, event) {
        if($(el).is('[name=email]')) {
            const email = $(el).val();
            if (!email.includes('@') || email.split('@')[1].length < 2) {
                return 'Email harus memiliki domain yang valid';
            }
        }
    }

    validator.validator.nomorSim = function(el, event){
        if($(el).is('[name=nomor_sim]') && $(el).val().length != 14){
            return 'Nomor SIM tidak valid';
        }
    }

    validator.validator.nik = function(el, event){
        if($(el).is('[name=nik]') && $(el).val().length != 16){
            return 'NIK tidak valid';
        }
    }
    //check form without submit
    // validator.checkAll(); //return error count

    //reload instance after dynamic element is added
    validator.reload();
})

var previousData = {
    nama_driver: "{{ $dataDrv->nama_driver }}",
    email: "{{ $dataDrv->email }}",
    tgl_lahir: "{{ $dataDrv->tgl_lahir }}",
    foto_profile: "{{ $dataDrv->foto_profile }}",
    nik: "{{ $dataDrv->nik }}",
    nomor_sim: "{{ $dataDrv->nomor_sim }}",
};

function editDriver() {
    event.preventDefault();
    var currentData = {
        nama_driver: document.getElementById('nama_driver').value,
        email: document.getElementById('email').value,
        tgl_lahir: document.getElementById('tgl_lahir').value,
        foto_profile: document.getElementById('foto_profile').value,
        nik: document.getElementById('nik').value,
        nomor_sim: document.getElementById('nomor_sim').value,
    };
    // periksa apakah semua field required telah diisi
    if (isFormValid()) {
        // Semua field required diisi, tampilkan SweetAlert untuk konfirmasi
        Swal.fire({
            title: 'Konfirmasi simpan driver',
            text: 'Anda yakin ingin menyimpan perubahan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lanjutkan dengan pengiriman formulir jika dikonfirmasi
                $('.form-valid').submit();
                Swal.fire('Berhasil', 'Data berhasil ditambahkan!', 'success');
            }
        });
    } else {
        // Tampilkan pesan kesalahan karena ada field required yang tidak diubah
        Swal.fire('Gagal', 'Gagal mengubah data. Pastikan semua field wajib diisi.', 'error');
    }
}

// Fungsi untuk memeriksa kesamaan dua objek
function isEqual(obj1, obj2) {
    return JSON.stringify(obj1) === JSON.stringify(obj2);
}

// Fungsi untuk memeriksa apakah semua field required telah diisi
function isFormValid() {
    var formElements = document.forms[0].elements;
    for (var i = 0; i < formElements.length; i++) {
        if (formElements[i].hasAttribute('required') && formElements[i].value.trim() === '') {
            return false;
        }
    }
    return true;
}
