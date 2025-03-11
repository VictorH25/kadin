jQuery(document).ready(function($) {
  var deskSelected 
  var orderSelected
  $(document).on('click', '.newCommandButton', function(){
    deskSelected = $(this).attr("desk")
    $('#newCommandModal').modal('show')
  })
  $('#newCommandModal').on('click', '.confirmCommandButton', function(){
    console.log("Click 1")
    $('#form').append(`
      <input type="hidden" id="desk" name="desk" value="${deskSelected}" />
      <input type="hidden" id="order" name="order"   />
    `);
    $( "#form" ).submit();

  })
  $(document).on('click', '.addCommandButton', function(){
    console.log("Click 2")
    deskSelected = $(this).attr("desk")
    orderSelected = $(this).attr("order")
    $('#formAdd').append(`
      <input type="hidden" id="desk" name="desk" value="${deskSelected}" />
      <input type="hidden" id="order" name="order" value="${orderSelected}" />
    `);
    $( "#formAdd" ).submit();
  })
});

