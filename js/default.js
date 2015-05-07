/**
 * Filename: default.js
 * Project: Plugins Theme
 * Copyright: (c) 2015 Antti Kuosmanen / Seravo Oy
 * License: The MIT License (MIT) http://opensource.org/licenses/MIT
 *
 * Edit this to add your own custom js to the theme.
 */

(function($) {

  // check the number every 4 seconds
  setInterval(function() {
    $.post('/wp-admin/admin-ajax.php', { action: 'get_downloads', url: 'http://profiles.wordpress.org/zuige/' }, function(data) {

      console.log('downloads: ' + data);

      if(data != $('.downloads').html()) {
        console.log('CHA-CHING!');

        var sfx = new Audio('/wp-content/themes/plugins-theme/assets/CashRegister.mp3');
        sfx.play();

        $('.downloads').html(data);
      }

    });
  }, 2000);

})(jQuery);
