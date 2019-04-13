var id;
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
    "ordering": false,
    // "scrollCollapse": true,

    ajax: {
      url: 'http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20%2A%20from%20%20MMember%20ORDER%20BY%20createdtime%20DESC;',
      dataSrc: 'result',
    },
    columns: [{

        data: 'username'
      }, {
        data: 'email'
      },
      {
        data: 'role'
      },
      {
        // sortable: false,
        className: 'text-center',
        "render": function(data, type, full, meta) {
          return '<button class="btn btn-warning btn_update text-white" data-role=' + full.role + ' data-id=' + full.id + ' data-username=' + full.username + ' data-password=' + full.password + ' data-email=' + full.email + '  style="margin-right:5px"><i class="fa fa-edit"></i> แก้ไข</button>' + '<button class="btn btn-danger btn_delete"  data-id=' + full.id + ' data-username=' + full.username + '><i class="fa fa-trash"></i> ลบ</button>';
        }

      }
    ]


  });

  setInterval(function() {
    table.ajax.reload(null, false);
  }, 1000 * 500);

});

function validateEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

function sweetAlert2(icon, text) {
  Swal.fire({
    type: icon,
    title: 'แจ้งเตือน',
    text: text,
    confirmButtonText: 'ตกลง',
    confirmButtonColor: '#7cd1f9',
  });
}
//save
$(document).on('click', '#btn_save', function() {
  var username = $('#username').val();
  var password = $('#password').val();
  var confirm_password = $('#confirm_password').val();
  var email = $('#email').val();
  var role = $('#role').val();
  if (role == "") {
    $('#role').focus();
    sweetAlert2('warning', 'กรุณาเลือกตำแหน่ง');
    return false;
  }
  if (username.length == 0) {
    $('#username').focus();
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Username');
    return false;
  }
  if (username.length < 5) {
    $('#username').focus();
    sweetAlert2('warning', 'Username ต้องมีความยาว 5 ตัวอักษรขึ้นไป');
    return false;
  }
  if (password.length == 0) {
    $('#password').focus();
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Password');
    return false;
  }
  if (password.length < 8) {
    $('#password').focus();
    sweetAlert2('warning', 'Password ต้องมี 8 ตัวอักษรขึ้นไป');
    return false;
  }
  if (confirm_password.length == 0) {
    $('#confirm_password').focus();
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Confirm Password');
    return false;
  }
  if (confirm_password.length < 8) {
    $('#confirm_password').focus();
    sweetAlert2('warning', 'Confirm Password ต้องมี 8 ตัวอักษรขึ้นไป');
    return false;
  }
  if (confirm_password != password) {
    sweetAlert2('warning', 'Password และ Confirm Password ไม่ถูกต้อง');
    return false;
  }
  if (email.trim().length == 0) {
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Email');
    return false;
  }
  var check_email = validateEmail(email);
  if (check_email == false) {
    sweetAlert2('warning', 'Email ไม่ถูกต้อง');
    return false;
  }
  Swal.fire({
      title: "แจ้งเตือน",
      text: "กรุณารอสักครู่..",
      showConfirmButton: false,
      allowOutsideClick: false,
      allowEscapeKey: false
    }),
    Swal.showLoading();
  var formData = new FormData();
  formData.append("operation", "create");
  formData.append("sessionName", "7e78e2605ca477c4eaf19");
  formData.append("elementType", "MMember");
  data = {
    "username": username,
    "assigned_user_id": "19x1",
    "password": password,
    "email": email,
    "role": role,
    "verified": "false",
    // "image": "dddd.png",

  };

  dataJson = JSON.stringify(data);
  formData.append('element', dataJson);
  var settings = {
    "url": "http://35.240.190.216/seedstorage/webservice.php",
    "method": "POST",
    "processData": false,
    "contentType": false,
    "mimeType": "multipart/form-data",
    "data": formData,
    "success": function(response) {
      console.log(response);
      resetSave();
      $('#modal_save').modal('toggle');
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2500
      });
      Toast.fire({
        type: 'success',
        title: 'เพิ่มผู้ใช้งานเรียบร้อยแล้ว'
      });
      var table = $('#table').DataTable();
      table.ajax.reload();

    },
    "error": function() {
      sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
    }
  }
  Swal.fire({
      title: "แจ้งเตือน",
      text: "กรุณารอสักครู่..",
      showConfirmButton: false,
      allowOutsideClick: false,
      allowEscapeKey: false
    }),
    Swal.showLoading();
  $.ajax({
    url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20username%20from%20MMember%20where%20username=%27" + username + "%27;",
    method: "POST",
    success: function(response) {
      if (response.result != "") {
        sweetAlert2('warning', 'Username มีผู้ใช้งานแล้ว');

      } else {
        $.ajax({
          url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20email%20from%20MMember%20where%20email=%27" + email + "%27;",
          method: "POST",
          success: function(response) {
            if (response.result != "") {
              sweetAlert2('warning', 'Email มีผู้ใช้งานแล้ว');
            } else {
              $.ajax(settings).done(function(response) {

              });
            }

          },
          error: function() {
            sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
          }
        });
      }

    },
    error: function() {
      sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
    }
  });

  // e.preventDefault();
});
$(document).on('click', '#btn_add', function() {
  $('#modal_save').modal('toggle');
});

$(document).on('click', '.btn_update', function() {
  id = $(this).data("id");
  var username = $(this).data("username");
  var password = $(this).data("password");
  var email = $(this).data("email");
  var role = $(this).data("role");

  $('#username_update').val(username);
  $('#password_update').val(password);
  $('#email_update').val(email);
  $('#role_update').val(role);
  $('#modal_update').modal('toggle');

});
$(document).on('click', '#btn_update', function() {
  var username = $('#username_update').val();
  var password = $('#password_update').val();
  var email = $('#email_update').val();
  var role = $('#role_update').val();

  // if (username.length == 0) {
  //   $('#username').focus();
  //   sweetAlert2('warning', 'กรุณากรอกข้อมูล Username');
  //   return false;
  // }
  // if (username.length < 5) {
  //   $('#username').focus();
  //   sweetAlert2('warning', 'Username ต้องมีความยาว 5 ตัวอักษรขึ้นไป');
  //   return false;
  // }
  if (password.length == 0) {
    $('#password').focus();
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Password');
    return false;
  }
  if (password.length < 8) {
    $('#password').focus();
    sweetAlert2('warning', 'Password ต้องมี 8 ตัวอักษรขึ้นไป');
    return false;
  }

  if (email.trim().length == 0) {
    sweetAlert2('warning', 'กรุณากรอกข้อมูล Email');
    return false;
  }
  var check_email = validateEmail(email);
  if (check_email == false) {
    sweetAlert2('warning', 'Email ไม่ถูกต้อง');
    return false;
  }
  Swal.fire({
      title: "แจ้งเตือน",
      text: "กรุณารอสักครู่..",
      showConfirmButton: false,
      allowOutsideClick: false,
      allowEscapeKey: false
    }),
    Swal.showLoading();
  $.ajax({
    url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20email%20from%20MMember%20where%20email=%27" + email + "%27;",
    method: "POST",
    success: function(response) {
      data = {
        "id": id,
        "username": username,
        "assigned_user_id": "19x1",
        "password": password,
        "email": email,
        "role": role

      };
      if (response.result != "") {
        if (response.result[0].id != id) {
          if (response.result[0].email == email) {
            sweetAlert2('warning', 'Email มีผู้ใช้งานแล้ว');
            return false;
          }
        } else {
          updateUser(data);
        }

      } else {
        updateUser(data);
      }

    },
    error: function() {
      sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
    }
  });

});
$(document).on('click', '.btn_delete', function() {
  id = $(this).data("id");
  var username = $(this).data("username");
  var password = $(this).data("password");


  Swal.fire({
      type: 'warning',
      title: 'แจ้งเตือน',
      text: 'ยืนยันการลบผู้ใช้งาน ' + username,
      confirmButtonText: 'ตกลง',
      confirmButtonColor: '#7cd1f9',
      showCancelButton: true,
      cancelButtonText: 'ยกเลิก',
      reverseButtons: true,
    })
    .then((result) => {
      if (result.value) {
        var formData = new FormData();
        formData.append("operation", "delete");
        formData.append("sessionName", "7e78e2605ca477c4eaf19");
        formData.append("id", id);
        var settings = {
          // "async": true,
          // "crossDomain": true,
          "url": "http://35.240.190.216/seedstorage/webservice.php",
          "method": "POST",
          "processData": false,
          "contentType": false,
          "mimeType": "multipart/form-data",
          "data": formData,
          "success": function(response) {
            // console.log(response);
          },
          "error": function() {
            sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
          }
        }
        Swal.fire({
            title: "แจ้งเตือน",
            text: "กรุณารอสักครู่..",
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false
          }),
          Swal.showLoading();
        $.ajax(settings).done(function(response) {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500
          });
          Toast.fire({
            type: 'success',
            title: 'ลบผู้ใช้งานเรียบร้อยแล้ว'
          });
          var table = $('#table').DataTable();
          table.ajax.reload();
        });

      }

    });
});

function bannedKey(evt) {
  var oparation = false;
  var symbol = false;
  var thai = false;
  var num = true;
  var eng = true;
  var k = event.keyCode;

  if (k == 42 || k == 43 || k == 46 || k == 47 || k == 45 || k == 32) {
    return oparation;

  }
  if ((k >= 161 && k <= 255) || (k >= 3585 && k <= 3675)) {
    return false;
  }
  if ((k >= 33 && k <= 37) || k == 39 || k == 40 || k == 41 || k == 44 || k == 58 || k == 59 || k == 60 || k == 62 || k == 63 || k == 64 || k == 93 || k == 94 || k == 125) {
    return symbol;

  }
  if (k >= 48 || k <= 57) {
    return num;

  }
  if ((k >= 65 && k <= 90) || (k >= 97 && k <= 122)) {
    return eng;
  }

}

function resetSave() {
  $('#username').val('');
  $('#password').val('');
  $('#role').val('');
  $('#confirm_password').val('');
  $('#email').val('');
}

function updateUser(data) {
  var formData = new FormData();
  formData.append("operation", "update");
  formData.append("sessionName", "7e78e2605ca477c4eaf19");
  formData.append("elementType", "MMember");
  dataJson = JSON.stringify(data);
  formData.append('element', dataJson);
  $.ajax({
    url: "http://35.240.190.216/seedstorage/webservice.php",
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
    mimeType: "multipart/form-data",
    success: function(response) {
      // console.log(response);
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2500
      });
      Toast.fire({
        type: 'success',
        title: 'แก้ไขผู้ใช้งานเรียบร้อยแล้ว'
      });
      var table = $('#table').DataTable();
      table.ajax.reload();
      $('#modal_update').modal('toggle');

    },
    error: function() {
      sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
    }
  });
}
// function checkMember(data) {
//
//   $.ajax({
//     url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20email%20from%20MMember%20where%20username=%27" + email + "%27;",
//     method: "POST",
//     success: function(response) {
//       console.log(response);
//
//     },
//     error: function() {
//       sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
//     }
//   });
// }
