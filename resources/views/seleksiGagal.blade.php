@extends('master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Seleksi Pendaftar
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Pendaftar</h3>
              </div>
              <div class="box-body table-responsive" style="overflow: auto; overflow-y:hidden; max-height: 100%;">

<div class="apus">
            @if (session('status'))
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session('status') }}
              </div>
            @endif
</div>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="col-md-3">Nama</th>
                      <th class="col-md-2">NIM</th>
                      <th class="col-md-2">Email</th>
                      <th class="col-md-2">Telp</th>
                      <th class="col-md-2">Universitas</th>
                      <th class="col-md-1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr data-divisi="1">
                    <td>Anne</td>
                    <td>5114100181</td>
                    <td>anneannisa@hotmail.com</td>
                    <td>082110227872</td>
                    <td>Institut Teknologi Sepuluh Nopember</td>
                    <td>
                          <label style="color:red">GAGAL</label>
                          <a href="{{ url('/seleksi') }}"><span class="glyphicon glyphicon-remove" style="color:red" title="cancel"></span></a>
                    </td>

                      <div class="modal fade" id="nilai1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <form method="post" action="#">
                                  <input type="hidden" name="id_pendaftar" value="1">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input class="form-control" name="nama" type="text" value="Anne" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>NIM</label>
                                      <input class="form-control" name="nim" type="text" value="5114100181" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Universitas</label>
                                          <input class="form-control" name="univ" type="text" value="Institut Teknologi Sepuluh Nopember" required="" disabled>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Jurusan</label>
                                          <input class="form-control" name="jur" type="text" value="Teknik Informatika" required="" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Fakultas</label>
                                      <input class="form-control" name="fak" type="text" value="Fakultas Teknologi Informasi" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input class="form-control" name="email" type="text" value="anneannisa@hotmail.com" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>No. Telepon</label>
                                      <input class="form-control" name="telp" type="text" value="082110227872" disabled>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <input class="form-control" name="alamat" type="text" value="Keputih 123" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Alasan Mendaftar</label>
                                      <textarea rows="4" class="form-control" name="alasan" type="text" id="alasan" disabled>mau aja</textarea>
                                    </div>
                                    <div class="form-group" style="text-align:center;"> 
                                      <div class="col-md-6">
                                        <label for="message" class="control-label">Foto Pendaftar</label>
                                        <img src="{{url('/img/avatar.png')}}" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:200px;">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="message" class="control-label">Unduh CV Pendaftar</label>
                                         <a href="{{url('/CV/contoh.zip')}}"><img src="{{url('/img/download.ico')}}" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="margin-top:25px; max-height:100px;"></a>
                                      </div>
                                    </div>
                                  </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </tr>
                  <tr data-divisi="2">
                    <td>Bidu</td>
                    <td>5114100999</td>
                    <td>aa@hotmail.com</td>
                    <td>934784965</td>
                    <td>Institut Teknologi Sepuluh Nopember</td>
                    <td>
                      <a href="#lolos" onclick="event.preventDefault();"><span class="glyphicon glyphicon-ok" style="color:green" title="lolos"></span></a>
                      <form id="lolos-form" action="{{ url('/seleksi/lolos') }}" method="GET" style="display: none;">\
                          <input class="form-control" name="idpend" type="text" value="">
                      </form>

                      <a href="#gagal" onclick="event.preventDefault();"><span class="glyphicon glyphicon-remove" style="color:red" title="gagal"></span></a>
                      <form id="gagal-form" action="{{ url('/seleksi/gagal') }}" method="GET" style="display: none;">
                          <input class="form-control" name="idpend" type="text" value="">
                          <!-- <input class="form-control" name="temp" type="text" value="1"> -->
                      </form>
                      <a href="#pendf" class="hehe" id="hehe2" data-temp="1"  data-toggle="modal" data-target="#nilai2"\><span class='fa fa-file' title="lihat data" style="color:navy"></span></a>
                      <a href="#hap" onclick="event.preventDefault(); "><span class='fa fa-trash' title="hapus data" style="color:red"></span></a>
                      <form id="haps-form1" action="{{ url('/seleksi/hapus') }}" method="GET" style="display: none;">
                          <input class="form-control" name="pendidhap" type="text" value="">
                          <!-- <input class="form-control" name="temp" type="text" value="1"> -->
                      </form>
                    </td>

                      <div class="modal fade" id="nilai2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <form method="post" action="#">
                                  <input type="hidden" name="id_pendaftar" value="1">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input class="form-control" name="nama" type="text" value="Bidu" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>NIM</label>
                                      <input class="form-control" name="nim" type="text" value="5114100999" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <label>Universitas</label>
                                          <input class="form-control" name="univ" type="text" value="Institut Teknologi Sepuluh Nopember" required="" disabled>
                                        </div>
                                        <div class="col-md-6">
                                          <label>Jurusan</label>
                                          <input class="form-control" name="jur" type="text" value="Teknik Informatika" required="" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Fakultas</label>
                                      <input class="form-control" name="fak" type="text" value="Fakultas Teknologi Informasi" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input class="form-control" name="email" type="text" value="aa@hotmail.com" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>No. Telepon</label>
                                      <input class="form-control" name="telp" type="text" value="829193" disabled>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Alamat</label>
                                      <input class="form-control" name="alamat" type="text" value="Keputih 123" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Alasan Mendaftar</label>
                                      <textarea rows="4" class="form-control" name="alasan" type="text" id="alasan" disabled>mau aja</textarea>
                                    </div>
                                    <div class="form-group" style="text-align:center;"> 
                                      <div class="col-md-6">
                                        <label for="message" class="control-label">Foto Pendaftar</label>
                                        <img src="{{url('/img/avatar2.png')}}" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:200px;">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="message" class="control-label">Unduh CV Pendaftar</label>
                                         <a href="{{url('/CV/contoh.zip')}}"><img src="{{url('/img/download.ico')}}" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="margin-top:25px; max-height:100px;"></a>
                                      </div>
                                    </div>
                                  </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
<script type="text/javascript">

var article = document.getElementById('ambilnih');
var res = article.value;
alert(res);
$('#tglwawan'+res).datetimepicker({
  format: 'YYYY-MM-DD',
  useCurrent: false,
  allowInputToggle: true
  
});
</script>


@endsection
