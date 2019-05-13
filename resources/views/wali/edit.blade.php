<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DASHBOARD ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/pendaftaran">Home</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>EDIT DATA</h2>
  <p>
  <br>         
  <table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th> NIS</th>
            <th>NAMA</th>
            <th>NAMA WALI</th>
            <th>ALAMAT WALI</th>
            <th>PEKERJAAN WALI</th>
            <th>GAJI WALI</th>
        </tr>
    </thead>
    <tbody>
    <form action="{{route('wali.update',$wali->id)}}" method="POST">
         @csrf
        @method('PUT')
        <br>
        <tr>
            <td>
                    <input type="text" required="required" name="no" value="{{ $wali->id}}">
                </td>
                <td>
                    <input type="text" required="required" name="nis" value="{{ $wali->nis}}">
                </td>
                <td>
                    <input type="text" required="required" name="nama_pendaftaran" value="{{ $wali->nama_pendaftaran}}">
                </td>
                <td>
                    <input type="text" required="required" name="nama_wali" value="{{ $wali->nama_wali}}">
                </td>
                <td>
                    <input type="text" required="required" name="alamat_wali"  value="{{ $wali->alamat_wali}}">
                </td>
                <td>
                    <input type="text" required="required" name="pekerjaan_wali"  value="{{ $wali->pekerjaan_wali}}">
                </td>
                <td>
                    <input type="text" required="required" name="gaji_wali" value="{{ $wali->gaji_wali}}">
            </td>
        </tr>
</table>
<input type="submit" value="Simpan Data"> |  <a href="/wali">kembali</a>
</body>
</html>


