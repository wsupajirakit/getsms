<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery/dist/jquery.cookie.js"></script>
<script>
$.removeCookie('user', {
  path: '/'
});

location.href = 'login.php';
</script>
