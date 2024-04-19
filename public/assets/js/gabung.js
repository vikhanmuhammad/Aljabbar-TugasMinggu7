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

    validator.validator.example = function(el, event){
        if($(el).is('[name=password]') && $(el).val().length < 8){
            return 'Password anda tidak valid';
        }
    }

    validator.validator.telepon = function(el, event){
        if($(el).is('[name=telepon]') && ($(el).val().length < 11 || $(el).val().length > 13)){
            return 'Nomor Telepon anda tidak valid';
        }
    }

    validator.validator.provinsi = function(el, event) {
        if ($(el).is('[name=provinsi]')) {
            if (/[\d]/.test($(el).val())) {
                return 'Nama daerah tidak valid';
            }
        }
    };

    validator.validator.namaLengkap = function(el, event) {
        if ($(el).is('[name=nama_lengkap]')) {
            if (/[\d]/.test($(el).val())) {
                return 'Nama tidak valid';
            }
        }
    };

    //check form without submit
    // validator.checkAll(); //return error count

    //reload instance after dynamic element is added
    validator.reload();
})
