<!DOCTYPE html>
<?php include('./httpful.phar'); ?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Krungthai</title>

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

        var table = $('#example').DataTable({
          "language": {
              "lengthMenu": "แสดง _MENU_ ต่อหน้า",
              "zeroRecords": "ไม่พบข้อมูล",
              "info": "แสดงหน้า _PAGE_ จากทั้งหมด _PAGES_ หน้า",
              "infoEmpty": "ไม่มีข้อมูล",
              "infoFiltered": "(ค้นหาจากทั้งหมด _MAX_ total ข้อมูล)",
              "search": "ค้นหา",
              "paginate": {
                "first": "หน้าแรก",
                "last": "หน้าสุดท้าย",
                "next": "ต่อไป",
                "previous": "ก่อนหน้า"
              }
            }, 
          ajax: {
            url: 'http://35.187.245.178/ballbackend/webservice.php?operation=query&sessionName=65bf072b5c7fa8570c45c&query=select%20*%20from%20%20SMSIncome%20where%20bank=%27krungthai%27%20ORDER%20BY%20createdtime%20DESC;',
            dataSrc: 'result',
          },
          // "order": [[ 2, "DESC" ]],
          columns: [{
              data: 'date'
            }, {
              data: 'time'
            }, {
              data: 'income'
            }, {
              data: 'bank'
            },
            // { data: 'cf_971' }

          ]



        });
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

        setInterval(function() {
          table.ajax.reload(null, false);
        }, 500);





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

      table.dataTable {
        border-collapse: collapse !important;
      }
    </style>



  </head>

  <body>

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



    </div>


<!-- start include tab menu -->
<?php include "tab_menu.php" ?>
<!-- end include tab menu -->



  </body>

  </html>
  <script src="js/tab_menu.js"></script>