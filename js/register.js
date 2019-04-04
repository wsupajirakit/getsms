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
$(document).on('submit', '#form_register', function(e) {
  var username = $('#username').val();
  var password = $('#password').val();
  var confirm_password = $('#confirm_password').val();
  var email = $('#email').val();


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
    "email": email
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
      $('#username').val('');
      $('#password').val('');
      $('#confirm_password').val('');
      $('#email').val('');
      sweetAlert2('success', 'สมัครสมาชิกเรียบร้อยแล้ว');
    },
    "error": function() {
      Swal.fire({
        type: 'warning',
        title: 'แจ้งเตือน',
        text: 'การเชื่อมต่อขัดข้อง',
        confirmButtonText: 'ตกลง',
        confirmButtonColor: '#7cd1f9',
      });

    }
  }
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
              $.ajax(settings).done(function(response) {});
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








  // $.ajax({
  // 	url: 'http://35.240.190.216/seedstorage/webservice.php',
  // 	method: "POST",
  //   processData:false,
  //   contentType:false,
  //   mimeType:"multipart/form-data"
  //   data: formData
  // 	// dataType: 'json',
  // 	success: function(response) {
  //     console.log(response);
  // 	},
  // 	error: function() {
  //
  // 	}
  // });
  e.preventDefault();
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
$(document).ready(function() {



});
