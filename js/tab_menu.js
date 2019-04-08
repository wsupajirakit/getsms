var user = $.cookie('user');

// console.log(user);
if (user != null) {
  user = JSON.parse(user);
} else {
  user = {
    'role': ""
  }
}

// console.log(user);
// $.removeCookie('user', {
//   path: '/'
// });
$(document).ready(function() {

  if (user.role == "admin") {
    $("#tab_memnu").load('tab_menu_admin.php');
  } else if (user.role == "manager") {
    $("#tab_memnu").load('tab_menu_manager.php');
  } else if (user.role == "user") {
    $("#tab_memnu").load('tab_menu_user.php');
  } else {
    $("#tab_memnu").load('tab_menu_login.php');
    // location.href = "login.php";
  }

  // if (pathname == 'index.php') {
  //   $('.tab:eq(0)').addClass(' current');
  // } else if (pathname == 'scb.php') {
  //   $('.tab:eq(1)').addClass(' current');
  // } else if (pathname == 'krungsri.php') {
  //   $('.tab:eq(2)').addClass(' current');
  // } else if (pathname == 'krungthai.php') {
  //   $('.tab:eq(3)').addClass(' current');
  // } else if (pathname == 'management.php') {
  //   $('.tab:eq(4)').addClass(' current');
  // } else if (pathname == 'register.php') {
  //   $('.tab:eq(5)').addClass(' current');
  // } else if (pathname == 'login.php') {
  //   $('.tab:eq(6)').addClass(' current');
  // }



});

var lastScrollTop = 0;
$(window).scroll(function(event) {
  var st = $(this).scrollTop();
  if (st > lastScrollTop) {
    // downscroll code
    $('.tab-bar').fadeOut(30);

    // $('.tab-bar').hide();
    // console.log(st);
  } else {
    // console.log(st);
    $('.tab-bar').fadeIn(30);
    // $('.tab-bar').show();
  }
  lastScrollTop = st;
  // console.log(lastScrollTop);
});
var currentMousePos = {
  x: -1,
  y: -1
};
$(document).mousemove(function(event) {
  currentMousePos.x = event.pageX;
  currentMousePos.y = event.pageY;
  var w = window.innerWidth;
  var h = window.innerHeight;
  var body = $('body').height();

  // var posFromBottom = h-event.pageY;
  //   console.log(lastScrollTop);
  // console.log(currentMousePos);
  // console.log($(window).width() - event.pageX);
  // var check = $(window).height() - event.pageY;
  // console.log('h'+body);
  // console.log(currentMousePos.y);

  if (currentMousePos.y + 100 > body) {
    $('.tab-bar').fadeIn(30);
  }

});

// $(window).on("scroll", function() {
// 	var scrollHeight = $(document).height();
// 	var scrollPosition = $(window).height() + $(window).scrollTop();
// 	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
// 	    // when scroll to bottom of the page
//        $('.tab-bar').fadeIn(300);
// 	}
// });



// $.removeCookie('user', { path: '/' });
