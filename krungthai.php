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

        var table = $('#table').DataTable({
          "language": {
            "decimal": "",
            "emptyTable": "ไม่พบข้อมูล",
            "info": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "infoEmpty": "แสดง 0 ถึง 0 จาก 0 รายการ",
            "infoFiltered": "(ค้นหา จากทั้งหมด _MAX_ รายการ )",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "แสดง _MENU_ รายการ",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "search": "ค้นหา:",
            "zeroRecords": "ไม่พบข้อมูลที่ค้นหา",
            "paginate": {
              "first": "หน้าแรก",
              "last": "หน้าสุดท้าย",
              "next": "ถัดไป",
              "previous": "ย้อนกลับ"
            },
            "aria": {
              "sortAscending": ": activate to sort column ascending",
              "sortDescending": ": activate to sort column descending"
            }
          },
            "order": [[ 0, "desc" ]],
          // "ordering": false,
          ajax: {
            url: 'http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20*%20from%20%20SMSIncome%20where%20bank=%27krungthai%27%20ORDER%20BY%20createdtime%20DESC;',
            dataSrc: 'result',
          },
          columns: [{
              data: 'date'
            }, {
              data: 'time'
            }, {
              data: 'income'
            }, {
              data: 'bank'
            },


          ]



        });

        setInterval(function() {
          table.ajax.reload(null, false);
        }, 500);





      });
    </script>

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
        padding-right: 0 !important;/* sweetalert2 */


      }

      table.dataTable {
        border-collapse: collapse !important;
      }
    </style>



  </head>

  <body>
    <div class="container">
      <div class="row" style="margin-top:50px;">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive" style="margin-top:20px;">
                  <table id="table" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th width="13%">จำนวนเงิน</th>
                        <th>ธนาคาร</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
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
  <script src="js/tab_menu.js"></script>
