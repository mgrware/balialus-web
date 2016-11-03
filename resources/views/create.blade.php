@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4>CREATE</h4>
      </div>
      <div class="panel-body">
		<div class="table-responsive">
            {!! Form::open(['route'=>'home.store'])  !!}
            <div class="col-lg-10 col-sm-10">
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Name : </label>
                    {!! Form::text('name', null, ['placeholder' => 'Masukkan Nama']) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Alamat : </label>
                    {!! Form::text('address', null, ['placeholder' => 'Masukkan ALamat']) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Phone : </label>
            	   {!! Form::text('phone', null, ['placeholder' => 'Masukkan Phone']) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Order : </label>
                    {!! Form::text('order', null, ['placeholder' => 'Masukkan Orderan']) !!}
            	</div>
                <div class="form-group">
                {!! Form::submit('Simpan') !!}
                </div>
            </div>

            {!! Form::close() !!}
            @endsection

        </div>
      </div>
      </div>
    </div>
  </div>
</div>