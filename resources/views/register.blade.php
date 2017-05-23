<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI LKMM TL | Registration Page</title>
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
<div class="register-box" style="width: 600px">
  <div class="register-logo">
    <a href="register">Halaman Pendaftaran Peserta<br/><b>SILKMMTL</b></a>
  </div>

  <div class="register-box-body">
    <!-- <p class="login-box-msg">Register a new membership</p> -->

    <form action="../../index.html" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nomor Induk Mahasiswa (NIM)</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="5114100024">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Anne Annisa Aulia">
      </div>
      <div class="form-group">
        <label>Universitas Asal</label>
        <select class="form-control">
          <option>Institut Teknologi Sepuluh Nopember (ITS)</option>
          <option>Universitas Gadjah Mada (UGM)</option>
          <option>Universitas Sebelas Maret (UNS)</option>
        </select>
      </div>
      <div class="form-group">
        <label>Fakultas</label>
        <select class="form-control">
          <option>Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)</option>
          <option>Fakultas Tekni Sipil dan Perencanaan (FTSP)</option>
          <option>Fakultas Teknologi Industri (FTI)</option>
          <option>Fakultas Teknologi Kelautan (FTK)</option>
          <option>Fakultas Teknologi Informasi (FTIf)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="anne@outlook.com">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nomor Telepon</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="081357653904">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat Tempat Tinggal</label>
        <textarea class="form-control" rows="3" placeholder="Gebang Wetan No. 21, Sukolilo Surabaya"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Motivasi Mendaftar LKMM-TL 2017</label>
        <textarea class="form-control" rows="3" placeholder="Saya ingin mengikuti LKMM-TL 2017 karena ..."></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File CV</label>
        <input type="file" id="exampleInputFile">

        <p class="help-block">Format file cv berupa .pdf</p>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Foto</label>
        <input type="file" id="exampleInputFile">

        <p class="help-block">Format file cv berupa .jpg atau .jpeg dengan ukuran file maksimal 2 Mb</p>
      </div>
      <div class="form-group">
        <label>
          <input type="checkbox"> I agree to the <a href="#">terms</a>
        </label>
      </div>
        <!-- /.col -->
        <!-- <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div> -->
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
    	<button class="btn btn-primary btn-block btn-flat" onclick="register();">Register</button>
    </div>


    <a href="{{url('/login')}}" class="text-center">Saya sudah terdaftar sebagai peserta</a>

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
