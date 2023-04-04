/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()


$(function(){

  $('.show_element').on('click',function(e){

    document.getElementById()
    e.preventDefault();
    let data = $(this).serialize();
    $.ajax({
      type: "POST",
      url: SYTE_URL+'?id='+'e907c1e0-e588-42ea-860e-7fd55d354d0b',
      data: data,
      seccess: function(result){
        $('#result').html(result);
      }
    });
    return false;
  });

});