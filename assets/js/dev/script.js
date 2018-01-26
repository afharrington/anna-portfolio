jQuery(document).ready(function() {
  jQuery(window).load(function() {
  preloaderFadeOutTime = 500;
  function hidePreloader() {
    var preloader = jQuery('.spinner-wrapper');
    preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  });
});
