@extends('layout.sidebar')

@section('content')
<center>
    <a href="/diri">
      <button class="au-btn au-btn-icon au-btn--blue">
         DATA DIRI
      </button>
    </a>
    <a href="/formnilai">
     <button class="au-btn au-btn-icon au-btn--blue">
    DATA NILAI</button>
    </a>

    <a href="/formwali">
    <button class="au-btn au-btn-icon au-btn--blue">
    DATA WALI</button>
    </a>
    </center>


 <br>
  <center> <h2>ISI FORM DATA DIRI</h2> </center>
  <br>
  <form action="{{route('daftar.store')}}" method="post" class="form-horizontal">
  {{ csrf_field() }}
    <div class="form-group">
       <label class="control-label col-sm-2" for="nis">NIS:</label>
         <div class="col-sm-5">
            <input type="text" class="form-control" name="nis" required="required" placeholder="masukkan NIS dengan benar" >
         </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nis">NAMA:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="nama" required="required" placeholder="masukkan nama panjang" >
          </div> 
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nis">JENIS KELAMIN:</label>
          <div class="col-sm-5">
            <input type="radio" name="jk" required="required" value="Laki-Laki">Laki-Laki <br>
            <input type="radio" name="jk" required="required" value="perempuan">Perempuan
          </div> 
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nis">ALAMAT:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="alamat" required="required" placeholder="masukkan nama panjang" >
          </div> 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">ASAL SEKOLAH:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="asal_sekolah" required="required" placeholder="Masukkan nama sekolah">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">TAHUN AJARAN:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="tahun_ajaran" required="required" placeholder="tahun ajaran">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">TEMPAT LAHIR:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="tempat_lahir" required="required" placeholder="tempat lahir">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">TANGGAL LAHIR:</label>
      <div class="col-sm-5">
        <input type="date" class="form-control" name="tanggal_lahir" required="required" placeholder="tanggal lahir">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">TELEPON:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="telepon" required="required" placeholder="telepon">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="Simpan Data" class="btn btn-default">Submit 
        </button>
        <button type="reset" value="Reset" class="btn btn-default">Reset 
        </button>
         
      </div>
    </div>
  </form>
</div>

</body>
</html>

@endsection
