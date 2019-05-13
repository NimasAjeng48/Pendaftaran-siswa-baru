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
    <center>
 </div>

 <br>
  <center> <h2>ISI FORM DATA NILAI</h2> </center>
  <br>


  <form action="{{route('walisiswa.store')}}" method="post" class="form-horizontal">
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
            <input type="text" class="form-control" name="nama_pendaftaran" required="required" placeholder="masukkan nama panjang" >
          </div> 
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nis">NAMA WALI:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="nama_wali" required="required" placeholder="jumlah total nilai UN" >
          </div> 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">ALAMAT WALI:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="alamat_wali" required="required" placeholder="Masukkan nilai rata-rata raport">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">PEKERJAAN WALI:</label>
      <BR>
      <div class="col-sm-5">
        
            <p><input type='radio' name='pekerjaan_wali' value='PNS' />PNS</p>
            <p><input type='radio' name='pekerjaan_wali' value='TNI/POLRI'/>TNI/POLRI</p>
         
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">GAJI WALI:</label>
      <div class="col-sm-5">

        <input type="text" class="form-control" name="gaji_wali" required="required" placeholder="tempat lahir">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="Simpan Data" class="btn btn-default">Submit 
        </button>
        <button type="reset" value="Reset" class="btn btn-default">Reset 
        </button>
         </a>
      </div>
    </div>
  </form>
</div>

</body>
</html>

@endsection
