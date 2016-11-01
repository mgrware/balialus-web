function createCostumer(){
      data = $("#frmCustomer").serialize();
  jQuery.ajax({
    beforeSend: function(req){

    },
    complete: function(req){
      console.log(req)
      // teresrah ade di sini
    },
    method: "POST",
    dataType: "JSON",
    data: data,
    url: "/newCustomer"
  })
}