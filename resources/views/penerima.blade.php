@extends('master')

@section('content')
<style type="text/css">
.navbar1{
    background: #e1e3e8;
    z-index: 2;
    position: fixed;
    list-style:none;
    margin:0;
    width: 95%;
    padding: 5px 0px;
    display: block;
}
.navbar1 li{
    display:inline;
}
.navbar1 a{
    display:inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
}

.navbar1 li a:hover {
    background-color: #efefef;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pendaftar yang diterima
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Peserta LKMM TL</h3>
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
                      <th class="col-md-2">Nama</th>
                      <th class="col-md-2">NIM</th>
                      <th class="col-md-2">Universitas</th>
                      <th class="col-md-2">Tanggal</th>
                      <th class="col-md-2">Nilai Akhir</th>
                      <th class="col-md-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr data-divisi="1">
                    <td>Anne</td>
                    <td>5114100181</td>
                    <td>Institut Teknologi</td>
                    <td>20 Januari 2017</td>
                    <td>70</td>
                    <td>
                      <!-- TOMBOL WAWANCARA -->
                      <a href="#pendf" class="hehe" id="hehe1" data-temp="1" data-wanid="1" data-toggle="modal" data-target="#hasil1" style="color:orange"\><b>Hasil Wawancara</b></a>
                      
                    </td>

<!-- MODAL HASIL WAWANCARA -->
                      <div class="modal fade" id="hasil1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="padding-bottom:10%; background:#efefef">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h3 class="modal-title" id="myModalLabel">Hasil Wawancara</h3>
                              <div id="navbar">
                                <ul class="navbar1">
                                      <li style="width:10px" class="orang" data-xnilai="70" data-xcom="cukup baik tapi biasa aja"><a href="#">Penguji 1</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Nilai</label>
                                    <input rows="4" class="form-control" name="comment" type="text" id="xnil" placeholder="Pilih nama diatas untuk melihat nilai yang diberikan" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label>Catatan / Komentar</label>
                                    <textarea rows="4" class="form-control" name="comment" type="text" id="xcom" value="dfs" disabled>Pilih nama diatas untuk melihat komentar yang diberikan</textarea>
                                  </div>
                                </div>
                              </div>
                            </div>                            
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>

<!-- MODAL WAWANCARA -->
                      <div class="modal fade" id="waw1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h3 class="modal-title" id="myModalLabel">Wawancara</h3>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <form method="post" action="{{url('/wawancara')}}">
                                  {{csrf_field()}}
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input class="form-control" name="nama" type="text" value="Anne" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Universitas</label>
                                      <input class="form-control" name="univ" type="text" value="Institut Teknologi" required="" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label>Nilai</label>
                                      <input class="form-control" name="nilai" type="number" value="" >
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group" style="text-align:center;"> 
                                      <label for="message" class="control-label">Foto Pendaftar</label>
                                      <img src="{{url('/img/avatar2.png')}}" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:180px;">                                      
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Catatan / Komentar</label>
                                      <textarea rows="4" class="form-control" name="comment" type="text" id="comment"></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-success">Save changes</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

<!-- MODAL DATA PENDAFTAR -->
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
  $('.orang').on('click', function(event){

      document.getElementById("xnil").value=this.dataset.xnilai;
      document.getElementById("xcom").value=this.dataset.xcom;

  });


</script>


@endsection
