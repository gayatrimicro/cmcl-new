jQuery(document).ready(function($) {
  function updateMobileMenu() {
    var $menu = $('.mobile-menu');
    var $menuDropDown = $menu.find('.menu, .sub-menu');
    var $adminbar = $('#wpadminbar');

    var height = window.innerHeight - $menu.height() - ($adminbar.length ? $adminbar.height() : 0);
    $menuDropDown.outerHeight(height);
  }

  var pageResize = Foundation.utils.debounce(function(){
    updateMobileMenu();
  }, 30);

  $(window).resize(pageResize);

  pageResize();

  (function initMobileMenu($) {
    var $mobileMenu = $('.mobile-menu');
    var $menus = $mobileMenu.find('.sub-menu');
    var menuOpen = false;

    $mobileMenu.find('.menu-list').css('overflow', 'auto');

    $('body').on('touchmove', '.menu-wrap > .menu', function(e) {
      e.stopPropagation();
    });

    $(document).on('touchmove touchstart', function(e){
      if(menuOpen && !$(e.target).is('a, select') && $(e.target).closest('a, select').length != 1) {
        e.preventDefault();
      }
    });

    $menus.each(function(i, el){
      var $el = $(el);
      var $link = $el.siblings('a');

      var title = $link.text();
      var url = $link.attr('href');

      $el.prepend('<li class="menu-item"><a class="menu-parent" href="' + url + '">' + title + '</a></li>');
      $el.prepend('<li class="menu-item"><a class="menu-back" href="#">Back</a></li>');
    });

    $('.mobile-menu .menu-button').click(function(e) {
      e.preventDefault();

      if($(e.currentTarget).hasClass('open')) {
        $('.mobile-menu').removeClass('open');
        $('.menu-button').removeClass('open');
        $('.menu').removeClass('open');
        menuOpen = false;
        return false;
      }

      $('.menu-search').removeClass('open');
      $('.search-button').removeClass('open');

      $('.mobile-menu').addClass('open');
      $('.menu-button').addClass('open');
      $('.menu').addClass('open');
      menuOpen = true;

      return false;
    });

    $('.mobile-menu .search-button').click(function(e) {
      e.preventDefault();

      if($(e.currentTarget).hasClass('open')) {
        $('.mobile-menu').removeClass('open');
        $('.search-button').removeClass('open');
        $('.menu-search').removeClass('open');
        return false;
      }

      $('.menu').removeClass('open');
      $('.menu-button').removeClass('open');

      $('.mobile-menu').addClass('open');
      $('.search-button').addClass('open');
      $('.menu-search').addClass('open');

      return false;
    });

    $('.mobile-menu .menu-item-has-children > a').click(function(e){
      e.preventDefault();

      var $el = $(e.currentTarget);

      var $subMenu = $el.siblings('.sub-menu');
      var $menu = $el.closest('.menu, .sub-menu');

      $subMenu.addClass('open');
      $menu.addClass('close').removeClass('open');

      $menu.css('overflow', '');
      setTimeout(function(){
        $subMenu.css('overflow', 'auto');
      },300);

      return false;
    });

    $('.mobile-menu .menu-back').click(function(e){
      e.preventDefault();

      var $close = $(e.currentTarget).closest('.open');
      var $open = $(e.currentTarget).closest('.close');

      $close.closest('.open')
      .removeClass('open')
      .css('overflow', '');

      $open.closest('.close')
      .removeClass('close')
      .addClass('open');

      setTimeout(function(){
        $open.css('overflow', 'auto');
      },300);

      return false;
    });

  })(jQuery);
});