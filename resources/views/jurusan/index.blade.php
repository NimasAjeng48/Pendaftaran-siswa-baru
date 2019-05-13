@extends('layout.app')

@section('content')
<ul class="list-group">
    
        <a href="/jurusan/tambah"> + Tambah jurusan Baru</a>
    <li class="list-group-item">
    <table id="customers">
    <tr>
        <th>NO</th>
        <th>NISN</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>Opsi</th>
    </tr>
    @foreach($jurusan as $j)
    <tr>
        <td>{{ $j->id}}</td>
        <td>{{ $j->nisn}}</td>
        <td>{{ $j->nama}}</td>
        <td>{{ $j->nama_jurusan}}</td>
        <td>
            <a href="/jurusan/edit/{{ $j->id}}">Edit
            |
            <form action="{{route('jurusan.destroy',$j->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
            
        </td>
    </tr>
    </li>
</ul>

    @endforeach
    </table>
@endsection