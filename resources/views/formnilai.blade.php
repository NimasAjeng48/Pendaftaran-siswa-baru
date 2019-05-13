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
 </div>

 <br>
  <center> <h2>ISI FORM DATA NILAI</h2> </center>
  <br>


  <form action="{{route('nilaisiswa.store')}}" method="post" class="form-horizontal">
  {{ csrf_field() }}
    <div class="form-group">
    <label class="control-label col-sm-2" for="pendaftaran_id">NIS:</label>
    <div class="col-sm-5">
    <th>
                            <select name="pendaftaran_id" class="form-control">
                                @foreach ($pendaftaran as $p)
                                    <option value="{{$p->nis}}">{{ $p->nis}}</option>
                                @endforeach
                            </select>
                            </th>
    </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nama">NAMA:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="nama" required="required" placeholder="masukkan nama panjang" >
          </div> 
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="nis">NILAI UN:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="nilai_un" required="required" placeholder="jumlah total nilai UN" >
          </div> 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NILAI RAPORT:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nilai_raport" required="required" placeholder="Masukkan nilai rata-rata raport">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NILAI WAWANCARA:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nilai_wawancara" required="required" placeholder="nilai wawancara">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">NILAI MENGAJI:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nilai_mengaji" required="required" placeholder="tempat lahir">
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
