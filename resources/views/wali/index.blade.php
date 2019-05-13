
@extends('layout.tabel')

@section('content')

<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>
                                            NISN
                                            </th>
                                            <th>NAMA</th>
                                            <th>NAMA WALI</th>
                                            <th>ALAMAT WALI</th>
                                            <th>PEKERJAAN WALI</th>
                                            <th>GAJI WALI</th>
                                            <th>Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($wali as $w)
                                            <tr>
                                                <td>{{ $w->id}}</td>
                                                <td>{{ $w->nis}}</td>
                                                <td>{{ $w->nama_pendaftaran}}</td>
                                                <td>{{ $w->nama_wali}}</td>
                                                <td>{{ $w->alamat_wali}}</td>
                                                <td>{{ $w->pekerjaan_wali}}</td>
                                                <td>{{ $w->gaji_wali}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{route('wali.edit',$w->id)}}" method="put" class="edit" data-toggle="modal">
                                                            @csrf
                                                            @method('EDIT')
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>

                                                        </button>
                                                        </a>
                                                        <form action="{{route('wali.destroy',$w->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')       
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        </form>
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                       
                                                    </div>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
     </td>
    </tr>
    </li>
</ul>
@endsection
