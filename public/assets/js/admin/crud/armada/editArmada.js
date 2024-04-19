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

    validator.validator.tempatAwal = function(el, event) {
        if ($(el).is('[name=tempat_awal]')) {
            if (/[\d]/.test($(el).val())) {
                return 'Nama daerah tidak valid';
            }
        }
    };

    validator.validator.tempatAkhir = function(el, event) {
        if ($(el).is('[name=tempat_akhir]')) {
            if (/[\d]/.test($(el).val())) {
                return 'Nama daerah tidak valid';
            }
        }
    };

    validator.validator.platDepan = function(el, event) {
        if ($(el).is('[name=plat_depan]')) {
            // Format plat nomor: [huruf 1-2 karakter] [angka 1-4 karakter] [huruf 0-3 karakter]
            var platDepanRegex = /^[A-Za-z]{1,2}$/;

            // Menggunakan regex untuk memeriksa apakah nilai sesuai dengan format plat nomor
            if (!platDepanRegex.test($(el).val())) {
                return 'Format plat nomor tidak valid';
            }
        }
    }

    validator.validator.nomorPlat = function(el, event) {
        if ($(el).is('[name=nomor_plat]')) {
            // Format plat nomor: [huruf 1-2 karakter] [angka 1-4 karakter] [huruf 0-3 karakter]
            var nomorPlatRegex = /^\d{1,4}$/;

            // Menggunakan regex untuk memeriksa apakah nilai sesuai dengan format plat nomor
            if (!nomorPlatRegex.test($(el).val())) {
                return 'Format plat nomor tidak valid';
            }
        }
    }

    validator.validator.platBelakang = function(el, event) {
        if ($(el).is('[name=plat_belakang]')) {
            // Format plat nomor: [huruf 1-2 karakter] [angka 1-4 karakter] [huruf 0-3 karakter]
            var platBelakangRegex = /^[A-Za-z]{0,3}$/;

            // Menggunakan regex untuk memeriksa apakah nilai sesuai dengan format plat nomor
            if (!platBelakangRegex.test($(el).val())) {
                return 'Format plat nomor tidak valid';
            }
        }
    }

    //check form without submit
    // validator.checkAll(); //return error count

    //reload instance after dynamic element is added
    validator.reload();
})

var previousData = {
    plat_depan: "{{ $dataArm->plat_depan }}",
    nomor_plat: "{{ $dataArm->nomor_plat }}",
    plat_belakang: "{{ $dataArm->plat_belakang }}",
    nomor_body: "{{ $dataArm->nomor_body }}",
    foto_armada: "{{ $dataArm->foto_armada }}",
    kapasitas_kursi: "{{ $dataArm->kapasitas_kursi }}",
    julukan : "{{ $dataArm->julukan }}",
    jarak_tempuh: "{{ $dataArm->jarak_tempuh }}",
    tgl_kir: "{{ $dataArm->tgl_kir }}",
    tempat_awal: "{{ $dataArm->tempat_awal}}",
    tempat_akhir: "{{ $dataArm->tempat_akhir}}",
    jam_keberangkatan : "{{ $dataArm->jam_keberangkatan }}",
    tanggal_keberangkatan: "{{ $dataArm->tanggal_keberangkatan }}",
};

function editArmada() {
    event.preventDefault();
    var currentData = {
        plat_depan: document.getElementById('plat_depan').value,
        nomor_plat: document.getElementById('nomor_plat').value,
        plat_belakang: document.getElementById('plat_belakang').value,
        nomor_body: document.getElementById('nomor_body').value,
        foto_armada: document.getElementById('foto_armada').value,
        kapasitas_kursi: document.getElementById('kapasitas_kursi').value,
        julukan : document.getElementById('julukan').value,
        jarak_tempuh: document.getElementById('jarak_tempuh').value,
        tgl_kir: document.getElementById('tgl_kir').value,
        tempat_awal: document.getElementById('tempat_awal').value,
        tempat_akhir: document.getElementById('tempat_akhir').value,
        jam_keberangkatan : document.getElementById('jam_keberangkatan').value,
        tanggal_keberangkatan: document.getElementById('tanggal_keberangkatan').value,
    };
    // periksa apakah semua field required telah diisi
    if (isFormValid()) {
        // Semua field required diisi, tampilkan SweetAlert untuk konfirmasi
        Swal.fire({
            title: 'Konfirmasi simpan armada',
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
