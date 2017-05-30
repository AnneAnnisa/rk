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
