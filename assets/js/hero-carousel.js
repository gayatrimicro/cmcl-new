jQuery(document).ready(function($) {
  $('.hero .carousel-slide > .bg').each(function(i, el){
    var $el = $(el);
    var src = $el.data('video');

    if(!src) return;

    var BV = new $.BigVideo({
      useFlashForFirefox: false,
      container: $el,
      doLoop: true
    });
    BV.init();
    BV.show(src);
  });

  window.setTimeout(function() {
    $('.hero-carousel').owlCarousel({
      autoPlay: 10000,
      autoHeight: true,
      singleItem : true,
      pagination: true,
      addClassActive: true,
      transitionStyle: 'fade',
      afterAction: updateVideoSlides,
      afterUpdate: function(){
        $(window).trigger('resize.bigvideo');
      }
    });
  }, 1);

  function updateVideoSlides() {
    var $heroCarousel = $('.owl-carousel').data('owlCarousel');

    var $videos = $('.hero .carousel-slide').find('> .bg video');
    $videos.each(function(i, el) {
      el.pause();
    });

    var currentItem = $heroCarousel ? $heroCarousel.currentItem : 0;

    var $video = $('.hero .carousel-slide').eq(currentItem).find('> .bg video');
    if($video.length)
      $video[0].play();
  }
});