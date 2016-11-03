@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4>EDIT</h4>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            {!! Form::model($customers, ['route'=>['home.update', $customers->id], 'method'=> 'PATCH'])  !!}
            <div class="col-lg-10 col-sm-10">
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Name : </label>
                	{!! Form::text('name', null) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Alamat : </label>
                	{!! Form::text('address', null) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Phone : </label>
                	{!! Form::text('phone', null) !!}
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2">Order : </label>
                    {!! Form::text('order', null) !!}
                </div>
                <div class="form-group">
                {!! Form::submit('Ubah') !!}
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