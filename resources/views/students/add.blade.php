@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Form Tambah Data Siswa</div>
                <div class="panel-body">
                    <form action=" {{ route('student.post') }} " method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Nama Siswa</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Alamat Siswa</label>
                            <div class="col-md-6">
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href=" {{ route('student') }} " class="btn btn-warning">Batal</a>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop