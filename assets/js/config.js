$(document).ready(function(){
    $('#inputBuku').on('keyup', function(){
        let value = $(this).val().toLowerCase();
        $('#book-card').filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    })
})