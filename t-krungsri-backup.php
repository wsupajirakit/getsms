<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Krungsri</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


      <link rel="stylesheet" href="css/style.css">


      <script>

      $(document).ready(function() {

            var table = $('#example').DataTable( {
          ajax: {
              url: 'http://35.187.245.178/ballbackend/webservice.php?operation=query&sessionName=65bf072b5c7fa8570c45c&query=select%20*%20from%20%20SMSIncome%20where%20bank=%27krungsri%27%20ORDER%20BY%20createdtime%20DESC;',
              dataSrc: 'result',
          },
                // "order": [[ 2, "DESC" ]],
               columns: [
                 { data: 'date' },
                 { data: 'time' },
                 { data: 'income' },
                 { data: 'bank' },
                  // { data: 'cf_971' }

                               ]



                        } );
          //
          // setInterval(function(){
          //   $("#example").dataTable().fnDestroy();
          //   $('#example').DataTable( {
          //   ajax: {
          //       url: 'http://35.186.154.13/pdkbackend1/webservice.php?operation=query&sessionName=7748431c5c98b43c15910&query=select%20*%20from%20IncomeX%20ORDER%20BY%20date%20DESC;',
          //       dataSrc: 'result'
          //   },
          //   "aaSorting": [ [1,'desc'], [2,'desc'] ],
          //            columns: [
          //
          //              { data: 'date' },
          //              { data: 'time' },
          //              { data: 'income' },
          //               { data: 'cf_969' },
          //               { data: 'cf_971' }
          //
          //                            ]
          //                     } );
          //
          //                     // alert('refresh')
          //
          //
          //
          //
          //
          //         },1000);

                  setInterval(function(){
                    table.ajax.reload(null,false);
                          },500);





                });



      </script>

      <style>
      body {
        background-image: url("https://cdn.allwallpaper.in/wallpapers/1920x1200/13627/blue-mountains-clouds-distance-perspective-skies-1920x1200-wallpaper.jpg")!important;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;

      }
      table.dataTable{border-collapse:collapse !important;}
      </style>



</head>

<body>

  <?php

  $uri1 = "http://35.186.154.13/pdkbackend1/webservice.php?operation=query&sessionName=7748431c5c98b43c15910&query=select%20*%20from%20IncomeX%20where%20cf_969=%27krungthai%27%20ORDER%20BY%20createdtime%20DESC;";
  $response1 = \Httpful\Request::get($uri1)->send();
  $all_array = json_decode($response1,true);

  $all = count($all_array['result']);

  $uri = "http://35.186.154.13/pdkbackend1/webservice.php?operation=query&sessionName=7748431c5c98b43c15910&query=select%20*%20from%20IncomeX%20where%20cf_969=%27krungthai%27%20ORDER%20BY%20createdtime%20DESC;";
  $response = \Httpful\Request::get($uri)->send();

  $data = json_decode($response,true);

  foreach($data["result"] as $item) {

    $income=$income+$item['income'];

    $per = 2000000/100;
    $per = $income/$per;
  }

  ?>
  <br>






  <br>
    <div class="row">
<table id="example" style="width:100%" class="table table-light table-striped table-hover">
        <thead>
            <tr>
                <th>วันที่</th>
                <th>เวลา</th>
                <th width="13%">จำนวนเงิน</th>
                <th>ธนาคาร</th>
                <!-- <th>ข้อความ</th> -->

            </tr>


        </thead>
      </tr>

    </table>
    </div>
    <br>
    <div class="row">
<!--
          <div class="col-sm-3 card bg-success text-white">
        <div class="card-body"><center><?php echo $all;?> จำนวนรายการ </center></div>
        </div>

        <div class="col-sm-1">
      <div class="card-body"></div>
      </div>

        <div class="col-sm-3 card bg-success text-white">
      <div class="card-body"><center>รวมทั้งหมด <?php echo $income;?> บาท </center></div>
      </div>

      <div class="col-sm-1">
    <div class="card-body"></div>
    </div>

    <?php
      // $per = 100;

     if($per == 100){

         ?>
         <div class="col-sm-4 card bg-danger text-white">
       <div class="card-body"><center>คิดเป็น % <?php echo $per."\n";?> <br>(ของ 2 ล้านบาท) </center></div>
       </div>

             <?php
     }else{
              ?>
              <div class="col-sm-4 card bg-success text-white">
            <div class="card-body"><center>คิดเป็น % <?php echo $per."\n";?> <br>(ของ 2 ล้านบาท) </center></div>
            </div>

          <?php


             }
            ?> -->



  </div>


  <div class="tab-bar">
  <div class="tab" onclick="location.href='index.php';">
    <i class="fa fa-home"></i>
    <span>Banking</span>
  </div>
  <div class="tab" onclick="location.href='scb.php';">
    <i class="fa fa-coffee"></i>
    <span>SCB</span>
  </div>
  <div class="tab" onclick="location.href='krungsri.php';">
    <i class="fa fa-archive"></i>
    <span>KRUNGSRI</span>
  </div>
  <div class="tab current" onclick="location.href='krungthai.php';">
    <i class="fa fa-bell"></i>
    <span>KRUNGTHAI</span>
  </div>
  <div class="tab" onclick="location.href='register.php';">
    <i class="fa fa-user"></i>
    <span>Register</span>
  </div>
</div>



</body>

</html>
