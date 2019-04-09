<div class="tab-bar">
  <div class="tab" onclick="location.href = 'index.php'">
    <i class="fa fa-home"></i>
    <span>Banking</span>
  </div>
  <div class="tab" onclick="location.href = 'scb.php'">
    <i class="fa fa-coffee"></i>
    <span>SCB</span>
  </div>
  <div class="tab" onclick="location.href = 'krungsri.php'">
    <i class="fa fa-archive"></i>
    <span>KRUNGSRI</span>
  </div>
  <div class="tab" onclick="location.href = 'krungthai.php'">
    <i class="fa fa-bell"></i>
    <span>KRUNGTHAI</span>
  </div>
  <div class="tab" onclick="location.href = 'management.php'">
    <i class="fa fa-users"></i>
    <span>Management</span>
  </div>
  <!-- <div class="tab" onclick="location.href = 'register.php'">
    <i class="fa fa-user"></i>
    <span>Register</span>
  </div> -->
  <div class="tab" onclick="location.href = 'logout.php'">
    <i class="fa fa-sign-out"></i>
    <span>Logout</span>
  </div>
</div>
<script>
  var pathname = window.location.pathname.match(/[^\/]+$/)[0];
  if (pathname == 'index.php') {
    $('.tab:eq(0)').addClass(' current');
  } else if (pathname == 'scb.php') {
    $('.tab:eq(1)').addClass(' current');
  } else if (pathname == 'krungsri.php') {
    $('.tab:eq(2)').addClass(' current');
  } else if (pathname == 'krungthai.php') {
    $('.tab:eq(3)').addClass(' current');
  } else if (pathname == 'management.php') {
    $('.tab:eq(4)').addClass(' current');
  }
  // else if (pathname == 'register.php') {
  //   $('.tab:eq(5)').addClass(' current');
  // }
  else if (pathname == 'login.php') {
    $('.tab:eq(5)').addClass(' current');
  }


</script>
