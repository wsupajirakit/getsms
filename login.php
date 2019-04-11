<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>

    <script src="assets/plugins/jquery/dist/jquery.cookie.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->

    <link rel="stylesheet" href="css/style.css">

    <script>
    </script>


    <style>
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
        background-image: url("assets/images/bg/bg2.jpg")!important;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        padding-right: 0 !important;
        /* sweetalert2 */
      }

      table.dataTable {
        border-collapse: collapse !important;
      }
    </style>



  </head>

  <body>
    <div class="container">
      <div class="limiter">

        <div class="container-login">
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
              <div class="wrap-input">
                <input class="input" type="text" id="username" onkeypress="return bannedKey(event)" maxlength="15">
              </div>

              <div class="p-t-13 p-b-9">
                <span class="txt1">
      							Password
      						</span>
              </div>
              <div class="wrap-input">
                <input class="input" type="password" id="password" maxlength="15">
              </div>

              <div class="container-login-form-btn m-t-30 p-b-33">
                <button type="submit" class="login-form-btn" id="btn_login">
                  ล็อกอิน
                </button>
              </div>
              <div class="w-full text-center p-t-10 p-b-10">
            <span class="password-reset">
							ลืมรหัสผ่าน ?
						</span>
              <a href="javascript:void(0)" class="password-reset" id="password_reset">
							รีเซ็ตรหัสผ่าน
						  </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- modal -->

<div class="modal fade" id="modal_password_reset"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ลืมรหัสผ่าน</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <div class="row" >
          <div class="col-md-12" style="padding-top:10px;">
            <div class="p-t-13 p-b-9">
              <span class="txt1">
                กรอกอีเมลเพื่อทำการส่งข้อมูลรีเซ็ตรหัสผ่านไปยังอีเมลของคุณ
              </span>
            </div>

          </div>
          <div class="col-md-12" style="padding-top:10px;padding-bottom:20px;">
            <div class="p-t-13 p-b-9">
              <span class="txt1">
                Email
              </span>
            </div>
            <div class="wrap-input">
              <input class="input" type="text" id="email_reset">
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer" style="padding-left: 33%;">
      <button type="button" class="login-form-btn mr-auto" id="reset_password" style="width:300px;">รีเซ็ตรหัสผ่าน</button>

      </div>
    </div>
  </div>
</div>

    <!-- start include tab menu -->
    <div id="tab_memnu"></div>
    <!-- end include tab menu -->



  </body>

  </html>
  <script src="assets/plugins/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="js/tab_menu.js"></script>
  <script src="js/login.js"></script>
