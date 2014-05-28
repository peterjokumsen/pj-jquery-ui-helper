//Will localize pjjuh_dialogs for use in script
(function($) {
  var hash = "#";
  if (pjjuh_dialogs.length > 0) {
    for (var y=0; y < pjjuh_dialogs.length; y++) {
      var dialog = pjjuh_dialogs[y];
      $(hash.concat(dialog['dialog_id'])).dialog({
        autoOpen: false,
        height: dialog['height'],
        width: dialog['width'],
        modal: dialog['modal'],
        open: function () {
          $(hash.concat(dialog['dialog_id'])).scrollTop(0);
        }
      }).removeClass('ui-helper-hidden');

      $( hash.concat(dialog['button_id']))
        .button()
        .click(function() {
          $(hash.concat(dialog['dialog_id'])).dialog( "open" );
          return false;
        });
    }
  }
})(jQuery);