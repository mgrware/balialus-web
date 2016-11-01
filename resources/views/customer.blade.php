<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Customer</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{ !! csrf_token() !! }" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/costumers.js"></script>>
  </head>
  <body>

    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <button type="button" class="btn btn-info" id="add">New Costumer</button>
        </div>
        <div class="panel-body">
        @include('newCustomer')
          <table class="table table-hover">
            <caption> Customer Info </caption>
            <thead>
              <th>ID</th>
              <th>Username</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Order</th>
              <th>Action</th>
            </thead>
            <tbody>
              @foreach($customers as $key => $customer)
              <tr id="customer{{$customer->id}}">
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->order}}</td>
                <td>
                  <button type="button" class="btn btn-success btn-edit">Edit</button>
                  <button type="button" class="btn btn-danger btn-delete">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('#add').on('click', function(){
    $('#customer').modal('show');
  })

  $('#frmCustomer').on('click', function(e){
    e.preventDefault();
    var form=$('frmCustomer');
    var formData=form.serialize();
    var url=form.attr('action');
    $.ajax ({
      type : 'post',
      url : url,
      data : formData,
      success:function(data){
        console.log(data);
      }

    });

  })
</script>
    </div>
  </body>
</html>
