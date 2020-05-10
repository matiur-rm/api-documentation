$(document).ready(function() {
    $('.menuBar > li > a').click(function(e) {
        $('.menuBar > li > a').removeClass('active');
        $(this).addClass('active');
    });
});