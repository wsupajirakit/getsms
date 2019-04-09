if (user.role == "admin") {
    location.href = "management.php";
} else if (user.role == "manager") {
    location.href = "home_manager.php";
} else if (user.role == "user") {
    location.href = "home_user.php";
}

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
$(document).on('submit', '#form_login', function(e) {
    var username = $('#username').val();
    var password = $('#password').val();

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


    Swal.fire({
            title: "แจ้งเตือน",
            text: "กรุณารอสักครู่..",
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false
        }),
        Swal.showLoading();

    $.ajax({
        url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=SELECT%20username%20,%20role%20,%20id%20,%20email%20FROM%20MMember%20WHERE%20username%20=%27" + username + "%27%20AND%20password%20=%27" + password + "%27;",
        method: "POST",
        success: function(response) {

            // alert("http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=SELECT%20username%20,%20role%20,%20id%20,%20email%20FROM%20MMember%20WHERE%20username%20=%27" + username + "%27%20AND%20password%20=%27" + password + "%27;");
            if (response.result != "") {
                var user = {
                    'username': response.result[0].username,
                    'id': response.result[0].id,
                    'role': response.result[0].role,
                    'email': response.result[0].email,
                };
                $.removeCookie('user', {
                    path: '/'
                });
                $.cookie('user', JSON.stringify(user), {
                    expires: 7,
                    path: '/'
                });
                if (user.role == "admin") {
                    location.href = "management.php";
                } else if (user.role == "manager") {
                    location.href = "home_manager.php";
                } else if (user.role == "user") {
                    location.href = "home_user.php";
                }


            } else {

                sweetAlert2('error', 'Username หรือ Password ไม่ถูกต้อง');
                resetInput();
            }

        },
        error: function() {
            sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
        }
    });

    function resetInput() {

        $('#username').val('');
        $('#password').val('');
    }







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
// $(document).ready(function() {
//
//   var username = "tao111";
//
//     $.ajax({
//       // url:  "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20username%20from%20MMember%20where%20username=%27tao111%27;",
//       url:"http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=SELECT%20username%20,%20password%20FROM%20MMember%20WHERE%20" + username + "%20=%27tao111%27%20AND%20password%20=%27" + password + "%27;"
//       // url: "http://35.240.190.216/seedstorage/webservice.php?operation=query&sessionName=7e78e2605ca477c4eaf19&query=select%20username%20from%20MMember%20where%20username=%27" + username + "%27;",
//       method: "POST",
//       success: function(response) {
//         console.log(response);
//         // if (response.result != "") {
//         //   sweetAlert2('warning', 'Username มีผู้ใช้งานแล้ว');
//         //
//         // } else {
//         //   console.log(response);
//         // }
//
//       },
//       error: function() {
//         sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
//       }
//     });
//
// });