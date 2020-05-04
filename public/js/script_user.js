$(function () {
    // const like = document.querySelector('#like');
    // const likes = document.querySelector('.likes'); 
     $('#jumlah').keyup(function(){
        if ($(this).val() == "") {
            $('#btn-submit').prop('disabled', true);
        }else{
            $('#btn-submit').prop('disabled', false);
        }
    });
});
