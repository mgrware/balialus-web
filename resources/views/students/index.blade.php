@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Form Data Siswa</div>
                <div class="panel-body">
                    <a href=" {{ route('student.add') }}" class="btn btn-success">Tambah</a>
                </div>
                <table class="table table-hover table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Pilihan</th>
                        </tr>                            
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-xs">Ubah</a>
                                    <a href="" class="btn btn-danger btn-xs">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop