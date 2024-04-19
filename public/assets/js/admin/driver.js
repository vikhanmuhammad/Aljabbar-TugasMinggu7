$(document).ready( function () {
    $('#dataDriver').DataTable();
} );

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
