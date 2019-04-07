<!-- <script src="assets/plugins/jquery/dist/jquery.cookie.js"></script> -->

<script>

// var cookie = $.cookie('user');
// if (cookie!=null) {
// var user = JSON.parse(cookie);
// } else {
// var user = null;
// }

 // console.log(user);
</script>

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
  <div class="tab" onclick="location.href = 'user.php'">
    <i class="fa fa-users"></i>
    <span>User</span>
  </div>
  <div class="tab" onclick="location.href = 'register.php'">
    <i class="fa fa-user"></i>
    <span>Register</span>
  </div>
  <?php if (empty($_SESSION["user"])): ?>
    <div class="tab" onclick="location.href = 'login.php'" >
        <i class="fa fa-sign-in"></i>
        <span>Login</span>
    </div>

  <?php endif; ?>



</div>
