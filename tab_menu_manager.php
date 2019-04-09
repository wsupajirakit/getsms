<div class="tab-bar">
  <div class="tab" onclick="location.href = 'home_manager.php'">
    <i class="fa fa-home"></i>
    <span>Home</span>
  </div>
  <div class="tab" onclick="location.href = 'index-manager.php'">
    <i class="fa fa-coffee"></i>
    <span>Banking</span>
  </div>
  <div class="tab" onclick="location.href = 'profile_manger.php'">
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
  if (pathname == 'home_manager.php') {
    $('.tab:eq(0)').addClass(' current');
  }else if (pathname == 'index.php') {
    $('.tab:eq(1)').addClass(' current');
  }
  else if (pathname == 'profile_manger.php') {
    $('.tab:eq(2)').addClass(' current');
  }

</script>
