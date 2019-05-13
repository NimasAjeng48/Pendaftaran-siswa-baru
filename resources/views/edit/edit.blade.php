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
    <a href="/pendaftaran">kembali</a>

    <br>
    <br>

    @foreach($pendaftaran as $p)
    <form action="/pendaftaran/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->nisn}}">
        <br>
        
</body>
</html>