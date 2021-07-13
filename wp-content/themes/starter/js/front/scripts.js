jQuery(function ($) {
  'use strict';
  $(function() {
    $('body').on('click', 'h1', function(){
      $.ajax({
        url: ajax_object.ajax_url,
        method: "POST",
        data: {
          name: "Paweł",
          action: "ajax_method",
          nonce: ajax_object.nonce
        },
        success: function(data){
          console.log(data)
        }
      })
    })
  });
});


















