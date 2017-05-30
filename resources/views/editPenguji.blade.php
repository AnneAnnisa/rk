@extends('master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Penguji
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Penguji</h3>
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
                      <th class="col-md-4">Nama</th>
                      <th class="col-md-3">NIM</th>
                      <th class="col-md-3">Telp</th>
                      <th class="col-md-1">Status</th>
                      <th class="col-md-1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Ratna</td>
                    <td>536174848595959</td>
                    <td>0897864232422</td>
                    <td>Boleh</td>
                    <td>
                      <a href="#peng" class="hehedit" id="hehe" data-temp="1" data-nim="536174848595959" data-nama="Ratna" data-telp="0897864232422" data-stat="1"><span class='fa fa-file' title="lihat data" style="color:navy"></span>  <span class='fa fa-edit' title="edit data" style="color:orange"></span></a>
                      <a href="{{url('hapusPenguji')}}" onclick=""><span class='fa fa-trash' title="hapus data" style="color:red"></span></a>
                      <form id="haps-form536174848595959" action="{{ url('/penguji/hapus') }}" method="GET" style="display: none;">
                          {{ csrf_field() }}
                          <input class="form-control" name="pendidhap" type="text" value="536174848595959">
                          <!-- <input class="form-control" name="temp" type="text" value="1"> -->
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>Edi</td>
                    <td>53617486775759</td>
                    <td>0812364232422</td>
                    <td>Boleh</td>
                    <td>
                      <a href="#peng" class="hehedit" id="hehe" data-temp="1" data-nim="53617486775759" data-nama="Adi" data-telp="0812364232422" data-stat="1"><span class='fa fa-file' title="lihat data" style="color:navy"></span>  <span class='fa fa-edit' title="edit data" style="color:orange"></span></a>
                      <a href="{{url('hapusPenguji')}}" onclick=""><span class='fa fa-trash' title="hapus data" style="color:red"></span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Wahyu</td>
                    <td>55683715987678</td>
                    <td>0812368976452</td>
                    <td>Tidak</td>
                    <td>
                      <a href="#peng" class="hehedit" id="hehe" data-temp="1" data-nim="55683715987678" data-nama="Wahyu" data-telp="0812368976452" data-stat="1"><span class='fa fa-file' title="lihat data" style="color:navy"></span>  <span class='fa fa-edit' title="edit data" style="color:orange"></span></a>
                      <a href="#hap" onclick="event.preventDefault(); document.getElementById('haps-form55683715987678').submit();"><span class='fa fa-trash' title="hapus data" style="color:red"></span></a>
                      <form id="haps-form55683715987678" action="{{ url('/penguji/hapus') }}" method="GET" style="display: none;">
                          {{ csrf_field() }}
                          <input class="form-control" name="pendidhap" type="text" value="55683715987678">
                          <!-- <input class="form-control" name="temp" type="text" value="1"> -->
                      </form>
                    </td>
                  </tr>
                  <tr>
                    <td>Tono</td>
                    <td>5361748673654</td>
                    <td>089876245366</td>
                    <td>Boleh</td>
                    <td>
                      <a href="#peng" class="hehedit" id="hehe" data-temp="1" data-nim="5361748673654" data-nama="Tono" data-telp="089876245366" data-stat="1"><span class='fa fa-file' title="lihat data" style="color:navy"></span>  <span class='fa fa-edit' title="edit data" style="color:orange"></span></a>
                      <a href="{{url('hapusPenguji')}}" onclick=""><span class='fa fa-trash' title="hapus data" style="color:red"></span></a>
                      <form id="haps-form5361748673654" action="{{ url('/penguji/hapus') }}" method="GET" style="display: none;">
                          {{ csrf_field() }}
                          <input class="form-control" name="pendidhap" type="text" value="5361748673654">
                          <!-- <input class="form-control" name="temp" type="text" value="1"> -->
                      </form>
                    </td>
                  </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-6" id="isitambah">
        <div class="row">
          <div class="col-md-12">
            <div class="box" style="overflow: auto; overflow-x: hidden; max-height: 100%;">
              <div class="box-header" id="ganti-form" data-formm="0">
                <h3 class="box-title" id="ganti-judul" data-tambah="0">Tambah Data Penguji</h3>
                <div class="row" >        
                  <div class="col-md-12">
                    <form action="{{ url('/penguji/tambah')}}" method="POST" id="formganti" style="margin-bottom:0;">
                      <div class="box-body">
                        {{ csrf_field() }}

                        <div class="apus">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                        @endif
                        
                        @if (session('status1'))
                          <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              {{ session('status1') }}
                          </div>
                        @endif

                        @if (session('status2'))
                          <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              {{ session('status2') }}
                          </div>
                        @endif
                        </div>


                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Nama Penguji</label>
                                <input class="form-control" name="nama" type="text" id="nama" placeholder="ex : Zikrul Ihsan">
                              </div>
                              <div class="form-group">
                                <label>NIM Penguji</label>
                                <input class="form-control" name="nim" type="hidden" id="nim" placeholder="ex : 5114100181">
                                <input class="form-control" name="nimubah" type="text" id="nimubah" placeholder="ex : 5114100181">
                              </div>
                            </div>
                            <div class="col-md-6"> 
                              <div class="form-group">
                                <label>Telp Penguji</label>
                                <input class="form-control" name="telp" type="number" id="telp" placeholder="ex : 082110227872">
                              </div>
                              <div class="form-group">
                                <label>Status Penguji</label>
                                  <select class="form-control" id="sel1" name="stat">
                                    <option value="1">Boleh Mewawancarai</option>
                                    <option value="0">Tidak Boleh Mewawancarai</option>
                                  </select>
                              </div>
                            </div>
                          </div>
                      </div>
                        <div class="modal-footer" id="foot">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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

  var judul = document.getElementById("ganti-judul");
  if(judul.dataset.tambah == 0)
  {
    var isitambah = document.getElementById("isitambah");
    var clonee0 = isitambah.cloneNode(true);
  }

  $('.hehedit').on('click', function(event){

      var judul = document.getElementById("ganti-judul");
      judul.innerHTML='Edit Data Penguji';

      var formgan = document.getElementById("formganti");
      formgan.action="{{ url('/editPenguji')}}";

      document.getElementById("nim").value=this.dataset.nim;
      document.getElementById("nimubah").value=this.dataset.nim;
      document.getElementById("nama").value=this.dataset.nama;
      document.getElementById("telp").value=this.dataset.telp;
      document.getElementById("stat").value=this.dataset.stat;

      // JQUERY
      // $('#nip1').val(this.dataset.nip);
      // $('#nip11').val(this.dataset.nip);

      // alert(judul.dataset.tambah);

      if(judul.dataset.tambah == 0)
      {    
        var fooo = document.getElementById("foot");
        var but2 = document.createElement('button');

        but2.setAttribute('onclick', "balikcoy()");
        but2.setAttribute('class', 'btn btn-danger');
        but2.setAttribute('type','button');
        but2.innerHTML='Cancel';
        fooo.appendChild(but2);

        judul.dataset.tambah = 1;
      }
  });
  function balikcoy()
  {
      var hhh = document.getElementById("isitambah");
      hhh.innerHTML = clonee0.innerHTML;
      $('.apus').empty();
  }

</script>


@endsection
  