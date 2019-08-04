$(document).ready(function() {
  $('.button-collapse').sideNav();
  
  $('select').material_select();
  
  $('.datepicker').pickadate({
    format: 'yyyy-mm-dd',
  });

  /*
  tinymce.init({
    selector: '#deskripsi',
    plugins : 'advlist autolink link lists charmap print preview'
  });
  */
});