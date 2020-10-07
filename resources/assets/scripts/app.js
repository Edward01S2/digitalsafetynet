/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import Flickity from 'flickity';

$(document).ready(() => {

  if($('.news-carousel').length) {
    var flkty = new Flickity('.news-carousel', {
      contain: true,
      pageDots: false,
      cellAlign: 'center',
      on: {
        ready: function() {
          $('.news-carousel .flickity-prev-next-button').wrapAll('<div class="flickity-btn-container" />');
          this.resize();
        }
      }
    });
  }

  Flickity.prototype._createResizeClass = function() {
    this.element.classList.add('flickity-resize');
  };
  
  Flickity.createMethods.push('_createResizeClass');
  
  var resize = Flickity.prototype.resize;
  Flickity.prototype.resize = function() {
    this.element.classList.remove('flickity-resize');
    resize.call( this );
    this.element.classList.add('flickity-resize');
  };
  

  $(window).smartresize(function(e){
    // console.log('resized')
    if(flkty) {
      flkty.resize();
      //console.log('flickity')
    }
  });

});

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');