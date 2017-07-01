

document.addEventListener('DOMContentLoaded', function(){
    Typed.new('#typed', {
      stringsElement: document.getElementById('typed-strings'),
      loop: true,
      typeSpeed: 100,

    });
  });


  jQuery(document).ready(function(){
  // Select all links with hashes
  jQuery('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          jQuery('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var jQuerytarget = jQuery(target);
            jQuerytarget.focus();
            if (jQuerytarget.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              jQuerytarget.focus(); // Set focus again
            };
          });
        }
      }
    });
  });
