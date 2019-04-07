<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="css/util.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->

    <link rel="stylesheet" href="css/style.css">

    <script>
    </script>


    <style>
      @import url("https://fonts.googleapis.com/css?family=Kanit:300,400,500,600,700");

      .btn-circle.btn-xl {
        width: 200px;
        height: 200px;
        padding: 10px 16px;
        border-radius: 125px;
        font-size: 24px;
        line-height: 1.33;
      }

      .btn-circle {
        width: 73px;
        height: 73px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 45px;
      }

      .btn-xx {
        background-color: rgb(255, 255, 255, 0.4);
      }

      body {
        font-family: "Kanit", sans-serif;
        background-image: url("https://downloadwallpaper.org/wp-content/uploads/2017/07/papers-co-md-nature-earth-dark-asleep-mountain-night-iphone-plus-wallpaper-wp3609354.jpg")!important;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        padding-right: 0 !important;
        
      }

      table.dataTable {
        border-collapse: collapse !important;
      }
    </style>



  </head>

  <body>
      <div class="container">
        <div class="limiter">

      		<div class="container-login" >
      			<div class="wrap-login p-l-110 p-r-110 p-t-20">
      				<form class="login-form " id="form_login">
      					<span class="login-form-title p-b-5">
      						เข้าสู่ระบบ

      					</span>

      					<div class="p-t-10 p-b-9">
      						<span class="txt1">
      							Username
      						</span>
      					</div>
      					<div class="wrap-input" >
      						<input class="input" type="text" id="username" onkeypress="return bannedKey(event)" maxlength="15">
      					</div>

      					<div class="p-t-13 p-b-9">
      						<span class="txt1">
      							Password
      						</span>
      					</div>
                <div class="wrap-input" >
                  <input class="input" type="password" id="password" maxlength="15">
                </div>

      					<div class="container-login-form-btn m-t-30 p-b-33">
      						<button type="submit" class="login-form-btn" id="btn_login" >
      							ล็อกอิน
      						</button>
      					</div>
      				</form>
      			</div>
      		</div>
      	</div>

    </div>




<!-- start include tab menu -->
<?php include "tab_menu.php" ?>
<!-- end include tab menu -->



  </body>

  </html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="js/tab_menu.js"></script>
<script src="js/login.js"></script>
