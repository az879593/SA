function loadUser(){
    $.ajax({
        type : 'GET',
        url: '../classes/UserInc.php',

        success: function (data) {
            $('.chatlist').html(data);
        },
        error: function (data) {

        }       
    });
}
loadUser();

