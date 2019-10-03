function checkWidth() {
    if (jQuery(window).width() < 514) {
        jQuery('#navID').addClass('vertical');
    } else {
        jQuery('#navID').removeClass('vertical');
    }
}

jQuery(window).resize(checkWidth);


jQuery(function(){
  
  jQuery('.circle-button').click(oneDown)
  
  function oneDown (){
    jQuery('.first-rectangle').toggleClass('first-rectangle-down')
    
    jQuery('.third-rectangle').toggleClass('third-rectangle-up')
    
    jQuery('.second-rectangle').toggleClass('second-rectangle-rotate')
    
    jQuery('.overlay').toggleClass('overlay-show')
    jQuery('.circle-button').toggleClass('circle-button2')    
  }
});


jQuery.noConflict()
(function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})();