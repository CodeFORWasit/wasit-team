$(function () {
    //   ./view/profile/create.php  File Uploade id=#file line(67,76)
    $('#file').change(function(evn){
        $('#img').val($("#file input").val());
    });
});
