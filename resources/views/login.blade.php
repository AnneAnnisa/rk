<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI LKMM TL | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('/plugins/iCheck/square/blue.css') }}">

  <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login">Halaman Login<br/><b>SILKMMTL</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- <p class="login-box-msg">Masuk sebagai peserta</p> -->

    <form action="/home_admin" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
        <label>
          <input type="checkbox"> Remember Me
        </label>
      </div>
    </form>

    <div class="social-auth-links text-center">
      <button class="btn btn-primary btn-block btn-flat" onclick="login();">Sign In</button>
    </div>
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br> -->
    <a href="register" class="text-center">Saya belum daftar</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- <link rel="stylesheet" href="{{ URL::asset('/plugins/jQuery/jquery-2.2.3.min.js') }}"> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="../../bootstrap/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="{{ URL::asset('/js/bootstrap.min.js') }}">
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- <link rel="stylesheet" href="{{ URL::asset('/plugins/iCheck/icheck.min.js') }}"> -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<!-- <script
	src="http://code.jquery.com/jquery-2.2.4.js"
	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
	crossorigin="anonymous">
</script> -->
<script type="text/javascript" src="js/sweetalert2.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
