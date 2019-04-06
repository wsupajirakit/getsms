<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Krungsri</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables.net/css/datatables.css" />
    <link rel="stylesheet" href="css/style.css">




    <style>
      @import url("https://fonts.googleapis.com/css?family=Kanit:300,400,500,600,700");
      body {
        font-family: "Kanit", sans-serif;
        background-image: url("https://cdn.allwallpaper.in/wallpapers/1920x1200/13627/blue-mountains-clouds-distance-perspective-skies-1920x1200-wallpaper.jpg")!important;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        
      }

      table.dataTable {
        border-collapse: collapse !important;
      }


    </style>



  </head>

  <body>
<!-- -fluid -->
    <div class="container">
      <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">แก้ไขผู้ใช้งาน</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <div class="row" style="padding-top:20px;">
                <div class="col-md-12">
                  <div class="p-t-10 p-b-9">
                    <span class="txt1">
                      Username
                    </span>
                  </div>
                  <div class="wrap-input">
                    <input class="form-control" type="text" id="username_update" readonly onkeypress="return bannedKey(event)" maxlength="15">
                  </div>
                </div>
                <div class="col-md-12" style="padding-top:20px;">
                  <div class="p-t-13 p-b-9">
                    <span class="txt1">
                      Password
                    </span>
                  </div>
                  <div class="wrap-input">
                    <input class="input" type="password" id="password_update" maxlength="15">
                  </div>
                </div>
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">

                  <div class="p-t-13 p-b-9">
                    <span class="txt1">
                      Email
                    </span>
                  </div>
                  <div class="wrap-input">
                    <input class="input" type="text" id="email_update">
                  </div>
                </div>


              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal"> ยกเลิก</button>
              <button type="submit" id="btn_update" class="btn btn-success"> แก้ไข</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal_save" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">เพิ่มผู้ใช้งาน</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <div class="row" style="padding-top:20px;">
                <div class="col-md-12">
                  <div class="p-t-10 p-b-9">
        						<span class="txt1">
        							Username
        						</span>
        					</div>
        					<div class="wrap-input" >
        						<input class="input" type="text" id="username" onkeypress="return bannedKey(event)" maxlength="15">
        					</div>
                </div>
                <div class="col-md-12" style="padding-top:20px;">
                  <div class="p-t-13 p-b-9">
        						<span class="txt1">
        							Password
        						</span>
        					</div>
                  <div class="wrap-input" >
                    <input class="input" type="password"  id="password"  maxlength="15">
                  </div>
                </div>
                <div class="col-md-12" style="padding-top:20px;">
                  <div class="p-t-13 p-b-9">
                    <span class="txt1">
                      Confirm Password
                    </span>
                  </div>
                  <div class="wrap-input" >
                    <input class="input" type="password" id="confirm_password"  maxlength="15">
                  </div>
                </div>
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;">
                  <div class="p-t-13 p-b-9">
                    <span class="txt1">
                      Email
                    </span>
                  </div>
                  <div class="wrap-input">
                    <input class="input" type="text" id="email">
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal"> ยกเลิก</button>
              <button type="submit" id="btn_save" class="btn btn-success"> บันทึก</button>
            </div>
          </div>
        </div>
      </div>


      <div  style="padding-top:50px;padding-bottom:50px;">
        <div class="row" >
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-right">
                      <button class="btn btn-success" id="btn_add"> เพิ่มผู้ใช้งาน</button>
                    </div>
                  </div>
                </div>
                  <div class="table-responsiv" style="margin-top:20px;">
                    <table id="table" class="table table-bordered" style="height:200px;">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Email</th>
                          <th>จัดการ</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>



    <!-- start include tab menu -->
    <?php include "tab_menu.php" ?>
      <!-- end include tab menu -->


  </body>

  </html>

  <script src="assets/plugins/bootstrap/dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/plugins/datatables.net/js/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="js/tab_menu.js"></script>
  <script src="js/user.js"></script>
