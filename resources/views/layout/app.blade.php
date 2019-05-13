<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="card card-default">
        <div class="card header">
        Data Pendaftar
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                        <a href="{{route('pendaftaran.index')}}">Pendaftar</a>
                        <br>
                        <br>
                        <a href="{{route('nilai.index')}}">Nilai</a>
                        <br>
                        <br>
                        <a href="{{route('jurusan.index')}}">Jurusan</a>
                </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        
        </div>
    
    </div>
    
    </div>
</body>
</html>