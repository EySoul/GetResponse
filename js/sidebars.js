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
    console.log(e);
    e.preventDefault();
    let id = e.currentTarget.value;
    
    let data = {
      "id": id,
    };
    $.ajax({
      type: "get",
      url: "/DictDisciplineID",
      data: data,
      async: false,
      success: function(result){
        $('#result').html(result);
      }
    });
  });
  return false;

});
$(function(){

  $('.show_element_qual').on('click',function(e){
    console.log(e);
    e.preventDefault();
    let id = e.currentTarget.value;
    
    let data = {
      "id": id,
    };
    $.ajax({
      type: "get",
      url: "/DictQualificationID",
      data: data,
      async: false,
      success: function(result){
        $('#result').html(result);
      }
    });
  });
  return false;

});
$(function(){

  $('.show_element_studform').on('click',function(e){
    console.log(e);
    e.preventDefault();
    let id = e.currentTarget.value;
    
    let data = {
      "id": id,
    };
    $.ajax({
      type: "get",
      url: "/DictStudyFormID",
      data: data,
      async: false,
      success: function(result){
        $('#result').html(result);
      }
    });
  });
  return false;

});
$(function(){

  $('.show_element_DictEducationDocTypes').on('click',function(e){
    console.log(e);
    e.preventDefault();
    let id = e.currentTarget.value;
    
    let data = {
      "id": id,
    };
    $.ajax({
      type: "get",
      url: "/DictEducationDocTypesID",
      data: data,
      async: false,
      success: function(result){
        $('#result').html(result);
      }
    });
  });
  return false;

});
$(function(){

  $('.show_element_categoryName').on('click',function(e){
    console.log(e);
    e.preventDefault();
    let id = e.currentTarget.value;
    
    let data = {
      "id": id,
    };
    $.ajax({
      type: "get",
      url: "/DictOrdersCategoryID",
      data: data,
      async: false,
      success: function(result){
        $('#result').html(result);
      }
    });
  });
  return false;

});