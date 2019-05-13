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
            <th>NIS</th>
            <th>NAMA</th>
            <th>ASAL SEKOLAH</th>
            <th>TAHUN AJARAN</th>
        </tr>
    </thead>
    <tbody>
    <form action="{{route('pendaftaran.update',$pendaftaran->id)}}" method="POST">
         @csrf
        @method('PUT')
        
    <tr>
    <td>
            <input type="text" required="required" name="id" value="{{ $pendaftaran->id}}">
        </td>
        <td>
            <input type="text" required="required" name="nis" value="{{ $pendaftaran->nis}}">
        </td>
        <td>
            <input type="text" required="required" name="nama" value="{{ $pendaftaran->nama}}">
        </td>
        <td>
            <input type="text" required="required" name="asal_sekolah"  value="{{ $pendaftaran->asal_sekolah}}">
        </td>
        <td>
            <input type="text" required="required" name="tahun_ajaran" value="{{ $pendaftaran->tahun_ajaran}}">
        </td>

    </tr>
    </li>
</ul>
</table>

<input type="submit" value="Simpan Data"> |  <a href="/pendaftaran">kembali</a>

</body>
</html>

