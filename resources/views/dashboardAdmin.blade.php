@extends('master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                
                <h3>Selamat datang di Sistem Informasi Latihan Keterampilan Manajemen Mahasiswa Tingkat Lanjut (SILKMMTL). Setelah melakukan login pertama kali ke sistem informasi ini, harap tidak memberitahukan password kepada siapapun guna menanggulangi hal-hal yang tidak diinginkan</h3>
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
      judul.innerHTML='Edit Data Pendidikan';

      var formgan = document.getElementById("formganti");
      formgan.action="{{ url('/pendidikan/update')}}";

      document.getElementById("univ").value=this.dataset.univ;
      document.getElementById("fak").value=this.dataset.fak;
      document.getElementById("jur").value=this.dataset.jur;
      document.getElementById("alamat").value=this.dataset.alamat;
      document.getElementById("telp").value=this.dataset.telp;
      document.getElementById("pendid").value=this.dataset.pendid;

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
