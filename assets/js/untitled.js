


 jQuery(document).ready(function($) {
  $(document).foundation();

  function fullPage() {
    var offset = $('#wpadminbar').height();
    $('.full-page').css('min-height', $(window).height() - offset);
    $('.hero .content').css('min-height', $(window).height() - offset);

    var owl = $(".hero-carousel").data('owlCarousel');
    if(owl) {
      owl.updateVars();
    }
  }

  function updateMenu() {
    var $menu = $('.desktop-menu, .mobile-menu');

    if($(window).scrollTop() <= 0 && !$menu.is('.always-fixed'))
      return $menu.removeClass('menu-fixed');

    if($(window).scrollTop() >= $menu.height())
      return $menu.addClass('menu-fixed');
  }

  function updateMobileMenu() {
    var $menu = $('.mobile-menu');
    var $menuDropDown = $menu.find('.menu, .sub-menu');

    var height = window.innerHeight - $menu.height();
    $menuDropDown.outerHeight(height);
  }

  var pageResize =  Foundation.utils.debounce(function(){
    fullPage();
    updateMobileMenu();
    $(window).trigger('resize.bigvideo');
  }, 30);

  var pageScroll =  Foundation.utils.debounce(function(){
    updateMenu();
  }, 30);

  $(window).resize(pageResize);
  $(window).scroll(pageScroll);

  pageResize();
  pageScroll();

  // Page banner
  $('.page-banner .bg-video').each(function(i, el){
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

  // Lightbox
  $('[data-rel^=lightcase], .gallery-icon > a').lightcase({
    maxWidth: 1920,
    maxHeight: 1200,
    showSequenceInfo: false,
    shrinkFactor: 0.85,
    video: {
      width: 1920,
      height: 1080
    }
  });

  // Footer menu
  $('.global-footer .menu-item-has-children > a').on('click', function(e) {
    e.preventDefault();
    var $el = $(this).parent();

    $el.toggleClass('active');

    if($el.is('.active')) {
      setTimeout(function() {
        $('body').one('click', function() {
          $el.removeClass('active');
        });
      }, 0);
    }
  });

  // Language selector
  $('[data-language-selector]').on('change', function(e) {
    e.preventDefault();

    var location = $(this).val();

    if(location) {
      window.location.href = location;
    }
  });

  // Wine series carousel
  $('.wine-carousel').owlCarousel({
    pagination: false,
    navigation: true,
    navigationText : [
    "<span class='icon icon-arrow-left'></span>",
    "<span class='icon icon-arrow-right'></span>"
    ],

    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1]
  });

  // Related products carousel
  $('.related.products ul.products').owlCarousel({
    pagination: true,
    navigation: true,
    navigationText : [
    "<span class='icon icon-arrow-left'></span>",
    "<span class='icon icon-arrow-right'></span>"
    ],

    items : 3,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1]
  });

  // Woocommerce Add A Case
  $('[data-add-to-cart-multi]').on('click', function(e) {
    var $this = $(this);
    var quantity = +$this.attr('data-add-to-cart-multi') || 1;

    $this.parent().find('input.qty').val(quantity);
  });
  // header footer
 
         var header = 
         ' <div class="menu-wrap">'+
               '<div class="logo">'+
                '  <a class="logo-dark" href="/crescent/">'+
                 ' <img class="logo-icon" src="/crescent/assets/images/logo.png">'+
                  '</a>'+
                  '<a class="logo-light" href="#">'+
                  '<img class="logo-icon" src="/crescent/assets/images/logo.png">'+
                  '</a>'+
               '</div>'+
               '<div class="menu">'+
                  '<ul class="menu-list">'+
                    ' <li class="menu-item has-child">'+
                       ' <a href="#">Welcome</a>'+
                        '<div class="sub-menu" data-equalizer="">'+
                          ' <div class="mega-menu" data-equalizer-watch="" style="height: 455px;">'+
                              '<p class="title"><span class="dotted-underline">Patient  Information</span></p>'+
                              '<ul class="mega-menu-menu">'+
                                 '<li class="menu-item">'+
                                    '<a href="/crescent/patient_saftey/">Patient Safety</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">HIPAA / Bill of Rights</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Behavioral Health</a>'+
                                 '</li>'+
                                 
                                 '<li class="menu-item">'+
                                    '<a href="#">Reviews</a>'+
                                 '</li>'+
                              '</ul>'+
                           '</div>'+
                           '<div class="mega-menu" data-equalizer-watch="" style="height: 455px;">'+
                              '<p class="title"><span class="dotted-underline">Physicians</span></p>'+
                              '<ul class="mega-menu-menu">'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Login</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Register</a>'+
                                 '</li>'+
                              '</ul>'+
                           '</div>'+
                        '</div>'+
                     '</li>'+
                     '<li class="menu-item">'+
                        '<a href="/crescent/about/">About</a>'+
                     '</li>'+
                     '<li class="menu-item">'+
                        '<a href="/crescent/services/sleep_lab/">Sleep Lab</a>'+
                     '</li>'+
                     '<li class="menu-item has-child">'+
                        '<a href="#">Services</a>'+
                        '<div class="sub-menu" data-equalizer="">'+
                           '<div class="mega-menu" data-equalizer-watch="" style="height: 455px;">'+
                             ' <p class="title"><span class="dotted-underline">SURGICAL SPECIALTIES</span></p>'+
                              '<ul class="mega-menu-menu">'+
                                 '<li class="menu-item">'+
                                   ' <a href="/crescent/services/surgery/">Surgery</a>'+
                                ' </li>'+
                              
                              '</ul>'+
                          ' </div>'+
                           '<div class="mega-menu" data-equalizer-watch="" style="height: 455px;">'+
                              '<p class="title"><span class="dotted-underline">Other Services</span></p>'+
                              '<ul class="mega-menu-menu">'+
                                 '<li class="menu-item">'+
                                    ' <a href="/crescent/services/emergency-resp/">Emergency Response </a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    ' <a href="/crescent/services/nursing_philo/">Nursing Philosophy</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="/crescent/services/radiology/">Radiology </a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="/crescent/services/wound_care/">Wound Care</a>'+
                                 '</li>'+
                                 
                              '</ul>'+
                           '</div>'+
                        '</div>'+
                     '</li>'+
                     '<li class="menu-item">'+
                       ' <a href="#">Contact Us</a>'+
                     '</li>'+
                     '<li class="menu-item">'+
                        '<a href="/crescent/careers/">Carrers</a>'+
                     '</li>'+
                  '</ul>'+
               '</div>'+
            '</div>';
            
            $('#main').html(header);

   var navbar =  
            '<div class="row">'+
               '<div class="column">'+
                  '<div class="menu-wrap">'+
                     '<div class="logo">'+
                        '<a class="logo-dark" href="/crescent/">'+
                        '<img class="logo-text" src="/crescent/assets/images/logo.png">'+
                        '</a>'+
                        '<a class="logo-light" href="#">'+
                        '<img class="logo-text" src="/crescent/assets/images/logo.png">'+
                        '</a>'+
                     '</div>'+
                     '<div class="menu-buttons">'+
                        '<a class="menu-button" href="#"><span class="icon icon-menu"></span></a>'+
                     '</div>'+
                     '<div class="menu" style="height: 620px;">'+
                        '<ul class="menu-list menu" style="overflow: auto; height: 620px;">'+
                           '<li class="menu-item"><a href="/crescent/">Home</a></li>'+
                           '<li class="menu-item menu-item-has-children">'+
                              '<a href="#">Patient Information</a>'+
                              '<ul class="sub-menu" style="height: 620px;">'+
                                 '<li class="menu-item">'+
                                    '<a href="/crescent/patient_saftey/">Patient Safety</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">HIPAA / Bill of Rights</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Behavioral Health</a>'+
                                 '</li>'+
                                
                                 '<li class="menu-item">'+
                                    '<a href="#">Reviews</a>'+
                                 '</li>'+
                              '</ul>'+
                           '</li>'+
                           '<li class="menu-item">'+
                              '<a href="#">Physicion</a>'+
                           '</li>'+
                           '<li class="menu-item menu-item-has-children">'+
                              '<a href="#">Services</a>'+
                              '<ul class="sub-menu" style="height: 620px;">'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Behavioral Wellness</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Specialty Services</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Sleep Center</a>'+
                                 '</li>'+
                                 '<li class="menu-item">'+
                                    '<a href="#">Radiology</a>'+
                                 '</li>'+
                              '</ul>'+
                           '</li>'+
                           '<li class="menu-item">'+
                              '<a href="#">Contact</a>'+
                           '</li>'+
                        '</ul>'+
                     '</div>'+
                     '<div class="menu-search">'+
                        '<div class="row">'+
                           '<div class="column search-panel">'+
                              '<form action="#" autocomplete="off" method="get">'+
                                 '<input type="text" name="s" placeholder="Enter keyword to search">'+
                                 '<label>'+
                                 '<input type="submit">'+
                                 '<span class="icon-search"></span>'+
                                 '</label>'+
                                 '<input type="hidden" name="v" value="c86ee0d9d7ed">'+
                              '</form>'+
                           '</div>'+
                        '</div>'+
                     '</div>'+
                  '</div>'+
               '</div>'+
            '</div>';
       $('#mobile').html(navbar);
            
 


         var footer = '<div class="row">'+
               '<div class="large-11 large-offset-1 ">'+ 
                 ' <div class="cta-content content-block-content small-12 large-4 column" >'+
                     '<p>Specialty Clinic'+
                       ' <br>2500 W. Pleasant Run Rd.<br>'+
'Lancaster, TX  75146'+
'<br>'+
'Maps & Directions'+
'Parking (add a link)</p>'+
                     
                     
                  '</div>'+
                  '<div class="cta-content content-block-content small-12 large-4 column">'+
                     '<p>Hours<br>'+
'Monday – Friday<br>'+
'8:30am to 5:00pm<br>'+

'Contact Us <br>'+
'<a href="tel:469-297-5471">469-297-5471</a></p>'+
                     
                     
                  '</div>'+
                     '<div class="cta-content content-block-content small-12 large-4 column">'+
                     '<p id="grey"><a href="#">About</a><br>'+
'<a href="#">Patient Information</a><br>'+
'<a href="#">Services</a><br>'+
'<a href="#">Physicians</a><br>'+
'<a href="#">Contact </a><br>'+                    
 '<a href="#">News & Events </a> </p>'+                   
                  '</div>'+
               '</div>'+
'</div>'+
            '<div class="footer-brand">'+
               '<a href="http://ibridgedigital.com/" >'+
                  '<p style="font-size: 16px;">Web Design Company : iBridge Digital</p>'+
              '</a>'+
            '</div>';

            $('#footer').html(footer);
          


// end

  // Toggle Contact Map
  $('[data-show-contact-map]').on('click', function(e) {
    e.preventDefault();

    var $this = $(this);
    var $container = $('.contact-aside');

    $container.toggleClass('map-visible');

    if($container.is('.map-visible')) {
      $this.text('Hide Map');
    } else {
      $this.text('Show Map');
    }
  });

  // Woocommerce Quantity Control
  function woocommerceQualityControls() {
    $('[data-quantity-control]').each(function() {
      var $container   = $(this);
      var $input       = $container.find('input.qty');
      var $addBtn      = $container.find('button.qty-add-btn');
      var $subtractBtn = $container.find('button.qty-subtract-btn');

      var update = function() {
        var val  = +$input.val();
        var step = +$input.attr('step');
        var min  = +$input.attr('min') || 0;
        var max  = +$input.attr('max') || 99999999999;

        if(val < min) {
          val = min;
          $input.val(val);
        } else if(val > max) {
          val = max;
          $input.val(val);
        }

        $addBtn.prop('disabled', (val == max));
        $subtractBtn.prop('disabled', (val == min));
      };

      $input.off('change.tde')
            .on('change.tde', update);

      $addBtn.off('click.tde').on('click.tde', function(e) {
        e.preventDefault();
        var val = +$input.val() || 0;
        $input.val(val + 1);
          //alert(12);
          update();
        $( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false );
      });

      $subtractBtn.off('click.tde').on('click.tde', function(e) {
        e.preventDefault();
        var val = +$input.val() || 0;
        $input.val(val - 1);
        update();
        $( 'div.woocommerce > form input[name="update_cart"]' ).prop( 'disabled', false );
      });

      // Update on first load
      update();
    });
  }

  woocommerceQualityControls();

  $(document).ajaxComplete(function() {
    woocommerceQualityControls();
  });

  // Category filter widget toggle
  $('.widget_wc_category_filter_widget .widgettitle').on('click', function(e) {
    e.preventDefault();
    $(this).closest('.widget').toggleClass('open');
  });
});

