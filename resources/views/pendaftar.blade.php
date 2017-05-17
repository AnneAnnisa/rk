@extends('master')

@section('content')
<!-- START OF CONTENT -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 903px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pendaftar
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
            </div>

            <div class="modal fade" id="nilai2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <form method="post" action="#"></form>
                      <input name="_token" value="w2W31wikeOQ3KhCqiQ6DkksQDePWYPHMH0YUV9Fr" type="hidden">
                      <input name="id_pendaftar" value="2" type="hidden">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Nama</label>
                          <input class="form-control" name="nama" value="nisa" required="" disabled="" type="text">
                        </div>
                        <div class="form-group">
                          <label>NIM</label>
                          <input class="form-control" name="nim" value="99" required="" disabled="" type="text">
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                              <label>Universitas</label>
                              <input class="form-control" name="univ" value="Unair" required="" disabled="" type="text">
                            </div>
                            <div class="col-md-6">
                              <label>Jurusan</label>
                              <input class="form-control" name="jur" value="Bisnis" required="" disabled="" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Fakultas</label>
                          <input class="form-control" name="fak" value="Fakultas Ekonomi dan Bisnis" disabled="" type="text">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" name="email" value="z@z.z" disabled="" type="text">
                        </div>
                        <div class="form-group">
                          <label>No. Telepon</label>
                          <input class="form-control" name="telp" value="890" disabled="" type="text">
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input class="form-control" name="alamat" value="kertajaya" disabled="" type="text">
                        </div>
                        <div class="form-group">
                          <label>Alasan Mendaftar</label>
                          <textarea rows="4" class="form-control" name="alasan" type="text" id="alasan" disabled="">789</textarea>
                        </div>
                        <div class="form-group" style="text-align:center;"> 
                          <div class="col-md-6">
                            <label for="message" class="control-label">Foto Pendaftar</label>
                            <img src="http://localhost/silkmmtl/public/img/18.jpeg" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:200px;">
                          </div>
                          <div class="col-md-6">
                            <label for="message" class="control-label">Unduh CV Pendaftar</label>
                            <a href="http://localhost/silkmmtl/public/CV/ehe.doc"><img src="http://localhost/silkmmtl/public/img/download.ico" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="margin-top:25px; max-height:100px;"></a>
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

            </div><div class="modal fade" id="nilai1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <form method="post" action="#"></form>
                    <input name="_token" value="w2W31wikeOQ3KhCqiQ6DkksQDePWYPHMH0YUV9Fr" type="hidden">
                    <input name="id_pendaftar" value="1" type="hidden">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="anne" required="" disabled="" type="text">
                      </div>
                      <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" name="nim" value="123" required="" disabled="" type="text">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Universitas</label>
                            <input class="form-control" name="univ" value="Unair" required="" disabled="" type="text">
                          </div>
                          <div class="col-md-6">
                            <label>Jurusan</label>
                            <input class="form-control" name="jur" value="Bisnis" required="" disabled="" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Fakultas</label>
                        <input class="form-control" name="fak" value="Fakultas Ekonomi dan Bisnis" disabled="" type="text">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="a@a.a" disabled="" type="text">
                      </div>
                      <div class="form-group">
                        <label>No. Telepon</label>
                        <input class="form-control" name="telp" value="123" disabled="" type="text">
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="keputih" disabled="" type="text">
                      </div>
                      <div class="form-group">
                        <label>Alasan Mendaftar</label>
                        <textarea rows="4" class="form-control" name="alasan" type="text" id="alasan" disabled="">mau aja kenapa</textarea>
                      </div>
                      <div class="form-group" style="text-align:center;"> 
                        <div class="col-md-6">
                          <label for="message" class="control-label">Foto Pendaftar</label>
                          <img src="http://localhost/silkmmtl/public/img/18.jpeg" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:200px;">
                        </div>
                        <div class="col-md-6">
                          <label for="message" class="control-label">Unduh CV Pendaftar</label>
                          <a href="http://localhost/silkmmtl/public/CV/contoh.doc"><img src="http://localhost/silkmmtl/public/img/download.ico" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="margin-top:25px; max-height:100px;"></a>
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

          </div><div class="modal fade" id="nilai3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <form method="post" action="#"></form>
                  <input name="_token" value="w2W31wikeOQ3KhCqiQ6DkksQDePWYPHMH0YUV9Fr" type="hidden">
                  <input name="id_pendaftar" value="3" type="hidden">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input class="form-control" name="nama" value="Anne Annisa" required="" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <label>NIM</label>
                      <input class="form-control" name="nim" value="5114100181" required="" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Universitas</label>
                          <input class="form-control" name="univ" value="Institut Teknologi Sepuluh Nopember" required="" disabled="" type="text">
                        </div>
                        <div class="col-md-6">
                          <label>Jurusan</label>
                          <input class="form-control" name="jur" value="Teknik Informatika" required="" disabled="" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Fakultas</label>
                      <input class="form-control" name="fak" value="Fakultas Teknologi Informasi" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control" name="email" value="anne@gmail.com" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <label>No. Telepon</label>
                      <input class="form-control" name="telp" value="08212121" disabled="" type="text">
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input class="form-control" name="alamat" value="kemang 123" disabled="" type="text">
                    </div>
                    <div class="form-group">
                      <label>Alasan Mendaftar</label>
                      <textarea rows="4" class="form-control" name="alasan" type="text" id="alasan" disabled="">ingin melanjutkan KPP</textarea>
                    </div>
                    <div class="form-group" style="text-align:center;"> 
                      <div class="col-md-6">
                        <label for="message" class="control-label">Foto Pendaftar</label>
                        <img src="http://localhost/silkmmtl/public/img/avatar2.png" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="max-height:200px;">
                      </div>
                      <div class="col-md-6">
                        <label for="message" class="control-label">Unduh CV Pendaftar</label>
                        <a href="http://localhost/silkmmtl/public/CV/contoh.doc"><img src="http://localhost/silkmmtl/public/img/download.ico" class="img-responsive voc_list_preview_img center-block" alt="User Image" style="margin-top:25px; max-height:100px;"></a>
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

        </div><div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example2_info">
        <thead>
          <tr role="row"><th class="col-md-3 sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nama: activate to sort column descending">Nama</th><th class="col-md-2 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="NIM: activate to sort column ascending">NIM</th><th class="col-md-2 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th><th class="col-md-2 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Telp: activate to sort column ascending">Telp</th><th class="col-md-2 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Universitas: activate to sort column ascending">Universitas</th><th class="col-md-1 sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
        </thead>
        <tbody>



          <tr data-divisi="1" role="row" class="odd">
            <td class="sorting_1">anne</td>
            <td>123</td>
            <td>a@a.a</td>
            <td>123</td>
            <td>Unair</td>
            <td>
              <label style="color:orange">WAIT</label>
              <a href="#pendf" class="hehe" id="hehe1" data-temp="1" data-pendid="1" data-toggle="modal" data-target="#nilai1" \=""><span class="fa fa-file" title="lihat data" style="color:navy"></span></a>
              <a href="#hap" onclick="event.preventDefault(); document.getElementById('haps-form1').submit();"><span class="fa fa-trash" title="hapus data" style="color:red"></span></a>
              <form id="haps-form1" action="http://localhost/silkmmtl/public/pendaftar/hapus" method="POST" style="display: none;">
                <input name="_token" value="w2W31wikeOQ3KhCqiQ6DkksQDePWYPHMH0YUV9Fr" type="hidden">
                <input class="form-control" name="pendidhap" value="1" type="text">
                <!-- <input class="form-control" name="temp" type="text" value="1"> -->
              </form>
            </td>

          </tr><tr data-divisi="3" role="row" class="even">
          <td class="sorting_1">Anne Annisa</td>
          <td>5114100181</td>
          <td>anne@gmail.com</td>
          <td>08212121</td>
          <td>Institut Teknologi Sepuluh Nopember</td>
          <td>
            <label style="color:green">WAWANCARA</label>
          </td>

        </tr><tr data-divisi="2" role="row" class="odd">
        <td class="sorting_1">nisa</td>
        <td>99</td>
        <td>z@z.z</td>
        <td>890</td>
        <td>Unair</td>
        <td>
          <label style="color:red">GAGAL</label>
        </td>

      </tr></tbody>

  </div>
</div>
</div>
</div>
</section>

<script>
$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
});
</script>




@endsection
