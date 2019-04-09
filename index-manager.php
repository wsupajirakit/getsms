<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Banking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/plugins/jquery/dist/jquery.cookie.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


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
      }

      table.dataTable {
        border-collapse: collapse !important;
      }
    </style>



  </head>

  <body>

    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <button type="button" class="btn btn-xx btn-circle btn-xl">
          <font color="white" size="4"> ยอดรวมทั้งหมด </font>
          <br>
          <font color="white" size="10"> 999 </font>
          <br>
          <font color="white" size="4">  บาท </font>
        </button>

        <br>
        <br>

      </div>
      <div class="row h-100 justify-content-center align-items-center">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <button type="button" class="btn btn-xx btn-circle"><img src="http://baanhathairak.org/wp-content/uploads/2017/12/ibank.png" alt="Smiley face" height="60" width="60"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="https://f.ptcdn.info/132/053/000/ouwyyvdzoS7lL7050LN-o.png" alt="Smiley face" height="60" width="60"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="https://upload.wikimedia.org/wikipedia/th/4/43/Baac2.png" alt="Smiley face" height="55" width="55"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="https://www.ramayanawaterpark.co.th/wp-content/uploads/krungsri_bank.png" alt="Smiley face" height="60" width="60"></button>


      </div>
      <div class="row h-50 justify-content-center align-items-center">

        <button type="button" class="btn btn-xx btn-circle"><img src="https://www.aia.co.th/content/dam/th/th/payment/P4_ATM/1BBL_ATM.png" alt="Smiley face" height="60" width="60"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="https://kasikornbank.com/SiteCollectionDocuments/about/img/logo/logo.png" alt="Smiley face" height="60" width="60"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="http://download.seaicons.com/download/i85599/graphicloads/100-flat/graphicloads-100-flat-pencil.ico" alt="Smiley face" height="60" width="60"></button>
        &nbsp;&nbsp; &nbsp;&nbsp;
        <button type="button" class="btn btn-xx btn-circle"><img src="https://number.whoscall.com/static/images/ndp_metaphor/has_info.png" alt="Smiley face" height="60" width="60"></button>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>




    <!-- start include tab menu -->
    <div id="tab_memnu"></div>
    <!-- end include tab menu -->



  </body>

  </html>
  <script src="js/tab_menu.js"></script>
  <script src="js/check_login.js"></script>
  <script src="js/check_role_manager.js"></script>
