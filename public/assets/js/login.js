$(document).ready(function() {
    $(document).ready(function() {
        $('#id_icon').click(function(){
            if($(this).is('.icon')){
                $('#password').attr('type', 'text');
                $(this).removeClass('icon');
            }else{
                $('#password').attr('type', 'password');
                $(this).addClass('icon');
            }
        })
    })
})
