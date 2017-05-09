<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI LKMM TL | Cek Status</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('/plugins/iCheck/square/blue.css') }}">
  <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box" style="width: 800px">
  <div class="register-logo">
    <a href="../../index2.html">Halaman Cek Status Peserta<br/><b>SILKMMTL</b></a>
  </div>

  <div class="register-box-body">
    <!-- <p class="login-box-msg">Register a new membership</p> -->

    <div class="form-group">
	    <center><h3><label for="exampleInputEmail1">Masukkan NRP</label></h3></center>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="5114100001">
	</div>

    

    <div class="social-auth-links text-center">
    	<button class="btn btn-primary btn-block btn-flat" onclick="statusLolosWawancara();">Cek Status</button>
    </div>

    <!-- <a href="/login" class="text-center">Saya sudah terdaftar sebagai peserta</a> -->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ URL::asset('/js/bootstrap.min.js') }}">
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript" src="js/sweetalert2.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
