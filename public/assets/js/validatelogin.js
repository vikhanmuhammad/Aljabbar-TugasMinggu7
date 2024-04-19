$(function (){
    let validator = $('form.form1').jbvalidator({
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

    //check form without submit
    // validator.checkAll(); //return error count

    //reload instance after dynamic element is added
    validator.reload();
})
