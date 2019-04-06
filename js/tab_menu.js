$(document).ready(function() {
  var user = $.cookie('user');
  // $.removeCookie('user', { path: '/' });
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
  } else if (pathname == 'login.php') {
    $('.tab:eq(5)').addClass(' current');
  } else if (pathname == 'user.php') {
    $('.tab:eq(6)').addClass(' current');
  }
  checkLogin(user);

});

function checkLogin(user) {
  // console.log(user);
  $(document).on('click', '.tab:eq(0)', function() {
    if (user != null) {
      location.href = 'index.php';
    } else {
      location.href = 'login.php';
    }
  });
  $(document).on('click', '.tab:eq(1)', function() {
    if (user != null) {
      location.href = 'scb.php';
    } else {
      location.href = 'login.php';
    }
  });
  $(document).on('click', '.tab:eq(2)', function() {
    if (user != null) {
      location.href = 'krungsri.php';
    } else {
      location.href = 'login.php';
    }
  });
  $(document).on('click', '.tab:eq(3)', function() {
    if (user != null) {
      location.href = 'krungthai.php';
    } else {
      location.href = 'login.php';
    }
  });
  $(document).on('click', '.tab:eq(4)', function() {
  location.href = 'register.php';
  });
  $(document).on('click', '.tab:eq(5)', function() {
    location.href = 'login.php';
  });
  $(document).on('click', '.tab:eq(6)', function() {
    if (user != null) {
      location.href = 'user.php';
    } else {
      location.href = 'login.php';
    }
  });

}
var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
       // downscroll code
       $('.tab-bar').fadeOut(300);
    
       // $('.tab-bar').hide();
       console.log(st);
   } else {
     console.log(st);
     $('.tab-bar').fadeIn(300);

     // $('.tab-bar').show();


      // upscroll code
   }
   lastScrollTop = st;
});
// var currentMousePos = { x: -1, y: -1 };
// $(document).mousemove(function(event) {
//     currentMousePos.x = event.pageX;
//     currentMousePos.y = event.pageY;
//     console.log(currentMousePos);
// });
