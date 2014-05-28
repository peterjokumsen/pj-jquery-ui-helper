//object used in localize script is pjjuh_tabs, array of ids with tabs
(function($) {
  if (pjjuh_tabs.length > 0) {
    for (var x=0; x < pjjuh_tabs.length; x++) {
      $(pjjuh_tabs[x]).tabs();
    }
  }
})(jQuery);
