var groups = {};
$('.gallery-item').each(function() {
  var id = parseInt($(this).attr('data-group'), 10);
  
  if(!groups[id]) {
    groups[id] = [];
  } 
  
  groups[id].push( this );
});


$.each(groups, function() {
  
  $(this).magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      gallery: { enabled:true },
      zoom: { enabled: true }
  }),

  $('.video').magnificPopup({
    type: 'iframe',
    iframe: {
     markup: '<div class="mfp-iframe-scaler">'+
      '<div class="mfp-close"></div>'+
      '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
      '<div class="mfp-title">Some caption</div>'+
      '</div>'
    },
    callbacks: {
      markupParse: function(template, values, item) {
        values.title = item.el.attr('title');
      }
    }
  })
});

function EnableDisableTextBox(passyes) {
  var onHavaAlani = document.getElementById("onHavaAlani");
  onHavaAlani.disabled = passyes.checked ? false : true;
  if (!onHavaAlani.disabled) {
      onHavaAlani.focus();
  }
};

jQuery(function($){
  $("#f_telno").mask("09999999999?");
  $("#mice_telno").mask("09999999999?");
  $("#on_telno").mask("09999999999?");
});

