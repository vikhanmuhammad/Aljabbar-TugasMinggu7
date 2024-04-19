$(document).ready( function () {
    $('#dataArmada').DataTable();
} );

$(function (){
    let validator = $('form.form-valid').jbvalidator({
        errorMessage: true,
        successClass: true,
        language: "https://emretulek.github.io/jbvalidator/dist/lang/en.json"
    });
    
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