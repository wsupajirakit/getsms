$(document).ready(function() {
    var pathname = window.location.pathname.match(/[^\/]+$/)[0];
    // var click = $('.tab').attr('onclick').split('location.href=\'').pop().slice(0, -2);
    if (pathname == 'index.php') {
        $('.tab:eq(0)').addClass(' current');
    } else if (pathname == 'scb.php') {
        $('.tab:eq(1)').addClass(' current');
    } else if (pathname == 'krungsri.php') {
        $('.tab:eq(2)').addClass(' current');
    } else if (pathname == 'krungthai.php') {
        $('.tab:eq(3)').addClass(' current');
    } else if (pathname == 'register.php') {
        $('.tab:eq(4)').addClass(' current');
    }

});