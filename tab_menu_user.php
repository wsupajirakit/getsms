<div class="tab-bar">
  <div class="tab" onclick="location.href = 'home_user.php'">
    <i class="fa fa-home"></i>
    <span>Home</span>
  </div>
  <div class="tab" onclick="location.href = 'topup.php'">
    <i class="fa fa-coffee"></i>
    <span>Top Up</span>
  </div>
  <div class="tab" onclick="location.href = 'profile_user.php'">
    <i class="fa fa-user"></i>
    <span>Profile</span>
  </div>
  <div class="tab" onclick="location.href = 'logout.php'">
    <i class="fa fa-sign-out"></i>
    <span>Logout</span>
  </div>


</div>
<script>
  var pathname = window.location.pathname.match(/[^\/]+$/)[0];
  if (pathname == 'home_user.php') {
    $('.tab:eq(0)').addClass(' current');
  }else if (pathname == 'topup.php') {
    $('.tab:eq(1)').addClass(' current');
  }
  else if (pathname == 'profile_user.php') {
    $('.tab:eq(2)').addClass(' current');
  }

</script>
