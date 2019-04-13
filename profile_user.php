<!DOCTYPE html>

<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>

    <meta charset="UTF-8">
    <title>Profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/jquery/dist/jquery.cookie.js"></script>
    <link href="assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="assets/plugins/dropify/dist/css/dropify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <style>

      body {

        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
        padding-right: 0 !important;
        /* sweetalert2 */
      }
      .btn-circle.btn-xl {
        width: 220px;
        height: 200px;
        /* padding: 10px 16px; */
        border-radius: 200px;
        font-size: 24px;
        line-height: 1.33;
      }

    </style>



  </head>

  <body>

    <!-- -fluid -->
    <div class="container">
      <div style="padding-top:5%;padding-bottom:10%;">
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-center">
              <div class="row" >
                <div class="col-md-12">
                  <img class="btn btn-xx btn-circle btn-xl"  id="profile_image">
                  </img>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top:20px;">
          <div class="col-12">
            <div class="d-flex justify-content-center">
              <div class="row">
              <h3 class="text-black" id="username"></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top:20px;">
          <div class="col-12">
            <div class="d-flex justify-content-center">
              <div class="row">
              <h3 class="text-black" id="email"></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px;">
          <div class="col-12">
            <div class="d-flex justify-content-center">
              <div class="container-login-form-btn m-t-30 p-b-33" style="width:33%">
              <button type="button" id="btn_update" class="login-form-btn" style="border: none;outline:none;">
                Update
              </button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="modal_update"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>

          <div class="modal-body">
            <div class="row" >

              <div class="col-md-12" style="padding-top:10px;padding-bottom:20px;">
                <div class="p-t-13 p-b-9">
                  <span class="txt1">
                    รูปภาพ
                  </span>
                </div>
                <div class="wrap-input">
                <input type="file" class="dropify" id="image" name="image" data-height="200" data-allowed-file-extensions="png jpg" />

                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer" >
            <div class="col-md-2">

            </div>
              <div class="col-md-8 text-md-center">
                <button type="button" class="btn-upload" id="btn_upload" style="border: none;outline:none;">Upload</button>
              </div>
              <div class="col-md-2">

              </div>
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
  <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <script src="js/tab_menu.js"></script>
  <script src="js/check_login.js"></script>
  <script src="js/check_role_user.js"></script>
  <script src="js/profile_user.js"></script>
