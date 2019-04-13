function sweetAlert2(icon, text) {
  Swal.fire({
    type: icon,
    title: 'แจ้งเตือน',
    text: text,
    confirmButtonText: 'ตกลง',
    confirmButtonColor: '#7cd1f9',
  });
}
$(document).ready(function() {
  if (user.image != "") {
    $('#profile_image').attr('src', 'image/' + user.image);
  } else {
    $('#profile_image').attr('src', 'assets/images/no_image.png');
  }

  $('#username').html('Username : ' + user.username);
  $('#email').html('Email : ' + user.email);



  console.log(user);
  $('.dropify').dropify({
    tpl: {
      wrap: '<div class="dropify-wrapper"></div>',
      loader: '<div class="dropify-loader"></div>',
      message: '<div class="dropify-message"><span class="file-icon" /><br /> {{ default }}</div>',
      preview: '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
      filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
      clearButton: '<button type="button" class="dropify-clear">{{ remove }}</button>',
      errorLine: '<p class="dropify-error">ตรวจสอบชนิดไฟล์ให้ถูกต้อง</p>',
      errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
    }
  });
});
$(document).on('click', '#btn_update', function() {

  var drEvent = $('#image').dropify();
  drEvent = drEvent.data('dropify');
  drEvent.resetPreview();
  drEvent.clearElement();
  $('#modal_update').modal('toggle');

});

function getFileExtension(filename) {
  var ext = /^.+\.([^.]+)$/.exec(filename);
  return ext == null ? "" : ext[1];
}
$(document).on('click', '#btn_upload', function(e) {
  var image = $('#image').val();
  if (image == "") {
    sweetAlert2('warning', 'การกรุณาเลือกรูปภาพ');
    return false;
  }
  image = document.getElementById('image').files[0];
  var file_name = Math.floor(Date.now() / 1000);
  var type_file = getFileExtension(image.name);
  // + user.id +
  file_name = file_name + user.username + '.' + type_file;
  var formData = new FormData();

  formData.append('image', image);
  formData.append('file_name', file_name);

  // console.log(file_name);

  Swal.fire({
      title: "แจ้งเตือน",
      text: "กรุณารอสักครู่..",
      showConfirmButton: false,
      allowOutsideClick: false,
      allowEscapeKey: false
    }),
    Swal.showLoading();

  $.ajax({
    url: "upload_image.php",
    method: "POST",
    data: formData,
    type: 'POST',
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS

    success: function(response) {
      data = {
        "id": user.id,
        "username": user.username,
        "assigned_user_id": "19x1",
        "password": user.password,
        "email": user.email,
        "role": user.role,
        "image": file_name
      };

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
          $('#modal_update').modal('toggle');
          var update_response = JSON.parse(response);
          $.removeCookie('user', {
            path: '/'
          });
          var user = {
            'username': update_response.result.username,
            'id': update_response.result.id,
            'role': update_response.result.role,
            'email': update_response.result.email,
            'image': update_response.result.image,
            'password': update_response.result.password,
          };
          $.cookie('user', JSON.stringify(user), {
            expires: 7,
            path: '/'
          });
          $('#profile_image').attr('src', 'image/' + update_response.result.image);
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500
          });
          Toast.fire({
            type: 'success',
            title: 'Update Success'
          });
        },
        error: function() {
          sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
        }
      });

    },
    error: function() {
      sweetAlert2('warning', 'การเชื่อมต่อขัดข้อง');
    }
  });

  e.preventDefault();


});
