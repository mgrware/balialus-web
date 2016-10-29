@if (Session::has('info'))
    <div class="col-md-12">
        <div class="alert alert-success">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('info') }}
        </div>
    </div>
@endif