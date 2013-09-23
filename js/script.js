/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */
 
 (function ($, Drupal, window, document, undefined) {

// Place your code here.
  //hide excess <p> on project pages...
  $(document).ready(function() {
    $('.page-projects .project .body').each(function() {
        $('p').hide();
        $('p:first-child').show();
      });
    });

  $(document).ready(function() {
    $('.page-activities .project .body').each(function() {
        $('p').hide();
        $('p:first-child').show();
      });
    });

// End OOKB JS

})(jQuery, Drupal, this, this.document);