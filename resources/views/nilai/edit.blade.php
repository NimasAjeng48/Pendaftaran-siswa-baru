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
            <th>No</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>NILAI UN</th>
            <th>NILAI RAPORT</th>
            <th>NILAI WAWANCARA</th>
            <th>NILAI MENGAJI</th>
        </tr>
    </thead>
    <tbody>
    <form action="{{route('nilai.update',$nilai->id)}}" method="post">
            @csrf
            @method('PUT')
        <tr>
            <td>
                <input type="text" required="required" name="id" value="{{ $nilai->id}}">
            </td>
            <th>
              <select name="pendaftaran_id">
              @foreach ($edit as $e)
                <option value="{{$e->id}}">{{$e->pendaftaran_id}}
                </option>
              @endforeach
            </th>
            <td>
                <input type="text" required="required" name="nama" value="{{ $nilai->nama}}">
            </td>
            <td>
                <input type="text" required="required" name="nilai_un"  value="{{ $nilai->nilai_un}}">
            </td>
            <td>
                <input type="text" required="required" name="nilai_raport" value="{{ $nilai->nilai_raport}}">
            </td>
            <td>
                <input type="text" required="required" name="nilai_wawancara" value="{{ $nilai->nilai_wawancara}}">
            </td>
            <td>
                <input type="text" required="required" name="nilai_mengaji" value="{{ $nilai->nilai_mengaji}}">
            </td>
        </tr>
    </body>
  </table>
<input type="submit" value="Simpan Data"> |  <a href="/pendaftaran">kembali</a>
</body>
</html>



