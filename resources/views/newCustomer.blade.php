  <!-- Modal -->
  <div class="modal fade" id="customer" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Customer info</h4>
        </div>
        <div class="modal-body">
          <form  action="newCustomer" method="post" id="frmCustomer">
          <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
              <input type="text" name="name" id="name" placeholder="name"  class="form-control">
            </div>
            </div>

            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
              <input type="text" name="address" id="address" placeholder="Alamat" class="form-control">
            </div>
            </div>

            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
              <input type="text" name="phone" id="phone" placeholder="Telp" class="form-control">
            </div>
            </div>

            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
              <input type="text" name="order" id="order" placeholder="Order" class="form-control">
            </div>
            </div>

          </div>

        </div>
        <div class="modal-footer">
        <input type="button" value="Save" id="save" class="btn btn-primary" onclick="createCostumer()">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>