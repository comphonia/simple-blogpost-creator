$(document).ready(function () {



    $('#inputGroupFile02').on('change', function () {
        //get the file name
        var fileName = $(this).val();

        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    $('#uploadbtn').click(function (e) {
        $('#postform').attr('action', 'assets/php/uploads.php');
    });

    $('#previewbtn').click(function (e) {
        $('#postform').attr('action', 'assets/php/preview.php');
    });
    
    $('#publishbtn').click(function (e) {
        $('#postform').attr('action', 'assets/php/sql-publish.php');
    });

});
