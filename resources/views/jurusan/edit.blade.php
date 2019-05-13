<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> Edit Data Peserta </h3>
    <a href="/jurusan">kembali</a>
    <br>
    <br>
    @foreach($jurusan as $j)
    <form action="/jurusan/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $j->id}}">
        <br>
        NO <input type="text" required="required" name="id" value="{{ $j->id}}">
        <br>
        NISN <input type="text" required="required" name="nisn" value="{{ $j->nisn}}">
        <br>
        NAMA <input type="text" required="required" name="nama" value="{{ $j->nama}}">
        <br>   
        NAMA JURUSAN <input type="text" required="required" name="nama_jurusan" value="{{ $j->nama_jurusan}}">
        <br> 
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    
</body>
</html>