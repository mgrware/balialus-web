@extends('layouts.app')
@section('content')

<div class="container">
  <div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
      <div class="panel-heading">
        <a href="{{ route('home.create') }}" button type="button" class="btn btn-info">Create</a></button>
      </div>
	  <div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Order</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($customers as $customers)
				<tr>
					<td>{{$customers->id}}</td>
					<td>{{$customers->name}}</td>
					<td>{{$customers->address}}</td>
					<td>{{$customers->phone}}</td>
					<td>{{$customers->order}}</td>
					<td>
						<form method="POST" action="{{ route('home.destroy', $customers->id) }}" accept-charset="UTF-8">
			                <input name="_method" type="hidden" value="DELETE">
			                <input name="_token" type="hidden" value="{{ csrf_token() }}">
			              	<a href="{{ route('home.edit', $customers->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
			                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
			            </form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	    </div>
	  </div>
  	</div>
  </div>
 </div>
@endsection
