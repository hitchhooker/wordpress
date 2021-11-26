(function($) {

$('#footer .contact-form-button').on('click', function() {
  $(this).hide();
  $('#footer .contact-form-content').slideDown();
  $('footer#footer').css("position", "relative");
  $('html, body').scrollTop($(document).height());
});

})( jQuery );