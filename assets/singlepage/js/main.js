/*
 * File       : js/main.js
 * Author     : STUDIO-JT (KMS)
 * Guideline  : JTstyle.1.0
 *
 * SUMMARY:
 * 1) INIT
 * 2) ON LOAD
 * 3) ON RESIZE
 * 3) FUNCTIONS
 * 4) HELPERS
 */



jQuery(function($) {



/* **************************************** *
 * GLOBAL
 * **************************************** */
// skrollr element
var skr = null;

// scrollTop button position
var scroll_top_right = 0;



/* **************************************** *
 * INIT
 * **************************************** */
minimize_header();
small_screen_nav_open();
small_screen_nav_toggle();
academy_menu_action();

scroll_top();
scroll_top_position();
scroll_down();
tabs('.tabs_component');
lang_menu_init();

main_visual_slider();
main_philosophy_slider();
main_recommend_slider();
main_sellers_slider();
main_board_slider();

// product_list_effect();
product_menu_check();
product_pager_split_word();
product_stickypager();
product_slider_arrows($('.products_list_slider'));
product_slider_check($('.products_list_slider'));
product_component_check($('.product_component_list'));
product_step_check($('.product_step_list'));

vimeo_play();
vimeo_thumbnail();
jt_fullvid();

sns_popup_init();
search_popup();
magnific_popup_init();

img_loaded_class();

// google_maps_init();
mapbox_init();
fullpage_init();
fullheight_section();
academy_datepicker();
around_slider();
message_slider();
purity_list();
raw_material_scroll();

coming_soon_alert();

arrow_tongtong();
smooth_scroll_init();
skrollr_int();
online_shop_motion();

ie_check();
ios_debugging();



/* **************************************** *
 * ON LOAD
 * **************************************** */
$(window).load(function() {

    add_load_class();
    isotope_init();
    match_height();
    // spidochescaler_init();

    waypoints_init();

});



/* **************************************** *
 * ON RESIZE
 * **************************************** */
// INITIALIZE RESIZE
function init_resize(){

    product_slider_check($('.products_list_slider'));
    product_component_check($('.product_component_list'));
    product_step_check($('.product_step_list'));

    fullheight_section();
    scroll_top_position();

    skr_init();

}

// Init resize on reisize
$(window).on('resize',init_resize);



/* **************************************** *
 * FUNCTIONS
 * **************************************** */
// FIX HEADER ANIMATION
function minimize_header() {

    var $window = $(window);
	var $header = $('#header');

	$(window).on('scroll', function() {
		if ($window.scrollTop() > $header.height()) {
			$header.addClass('minimize');
		} else {
			$header.removeClass('minimize');
		}
	});

}



// SMALL SCREEN NAV
function small_screen_nav_open(){

    var $body = $('body');
    var $menu_btn = $('#small_menu_btn');
    var $menu_container = $('.menu_container');
    var $menu_close_btn = $('#small_menu_close');
    var $menu_overlay = $('#small_menu_overlay');
    var $lang_menu_container = $('.lang_container');
    var $search_container = $('.search_container');
    var $help_btn = $('#helf');

	// open menu
	$menu_btn.on('click',function(){
        if($body.hasClass('open_menu')){
            $body.removeClass('open_menu');
            TweenLite.to($menu_overlay, .5, {autoAlpha: 0,onComplete: function() {$menu_overlay.css('display', 'none');}});
            TweenLite.to($menu_container, .5, {x: 300,onStart: function() {TweenLite.set($lang_menu_container, {autoAlpha: 0});TweenLite.set($search_container, {autoAlpha: 0});},onComplete: function() {$menu_container.css('display', 'none');}});
            TweenLite.to($menu_close_btn, .4, {x: 0});
            $help_btn.show();
        }
        else{
            $body.addClass('open_menu');
            TweenLite.to($menu_overlay, .3, {autoAlpha: 1,onStart: function() {$menu_overlay.css('display', 'none');}});
            TweenLite.fromTo($menu_container, .3, {x: 0}, {x: -300,onStart: function() {$menu_container.css('display', 'block');},onComplete: function() {TweenLite.to($lang_menu_container, .2, {autoAlpha: 1});TweenLite.to($search_container, .2, {autoAlpha: 0});}});
            TweenLite.to($menu_close_btn, .6, {x: 0});
            $help_btn.hide();
        }
	});

    // close menu
    $('#small_menu_close, #small_menu_overlay').on('click',function(){
        $body.removeClass('open_menu');

        TweenLite.to($menu_overlay, .5, {autoAlpha: 0,onComplete: function() {$menu_overlay.css('display', 'none');}});
        TweenLite.to($menu_container, .5, {x: 300,onStart: function() {TweenLite.set($lang_menu_container, {autoAlpha: 0});TweenLite.set($search_container, {autoAlpha: 0});},onComplete: function() {$menu_container.css('display', 'none');}});
        TweenLite.to($menu_close_btn, .4, {x: 0});
    });

}



// 2depth menu
function small_screen_nav_toggle(){

	// menu top level link
	$('#menu li.menu-item-has-children a').on('click',function(e){

        if( is_screen(1023) ) {

            var $parent = $(this).closest('ul');
            var $li = $(this).closest('li');

            if($li.find('> ul').length > 0) { // child가 있으면 실행

                e.preventDefault();

                if( !$parent.hasClass('sub-menu') ) { // 2depth

                    $('#menu > li.active > ul > li').removeClass('active').find('> ul').stop().slideUp(); // 3depth close

                    if($(this).closest('li').hasClass('active')) { // 열려있는 menu 클릭시 닫기

                        $(this).closest('li').removeClass('active').find('> ul').stop().slideUp();

                    } else {

                        $('#menu > li').removeClass('active').find('> ul').stop().slideUp();

                        $li.addClass('active');
                        $li.find('> ul').stop().slideDown();

                    }

                } else { // 3depth

                    if($(this).closest('li').hasClass('active')) { // 열려있는 menu 클릭시 닫기

                        $(this).closest('li').removeClass('active').find('> ul').stop().slideUp();

                    } else {

                        $('#menu > li.active > ul > li').removeClass('active').find('> ul').stop().slideUp();

                        $li.addClass('active');
                        $li.find('> ul').stop().slideDown();

                    }

                }

            } // endif

        }

	});

}



// scroll top button
function scroll_top(){

    var $window = $(window);
    var $document = $(document);
    var $footer = $('#footer');
    var $scrollBtn = $('#go_top');

    $scrollBtn.on('click',function(){
        $("html, body").stop().animate({
            scrollTop: 0
        }, 600);

        return false;
    });

    $window.on('scroll', function() {
        if ($window.scrollTop() < $document.height() - $window.height() - $footer.height() - ($scrollBtn.height()*2) - 15) {
            $('#go_top').css({
                'right': scroll_top_right
            });
            $scrollBtn.addClass('js_go_top_fix');
        } else {
            $scrollBtn.removeClass('js_go_top_fix');
            $scrollBtn.removeAttr('style');
        }

        if ($window.scrollTop() < $window.height()) {
            $scrollBtn.addClass('js_go_top_hide');
        } else {
            $scrollBtn.removeClass('js_go_top_hide');
        }
    });

}

// scroll top position setting
function scroll_top_position(){

    var window_width = $(window).width();
    var container_width = $('.main_container').width();
    var pos_padding = 0;

    if(!is_screen(1280)) {
        pos_padding = 15;
    } else {
        pos_padding = 10;
    }

    scroll_top_right = (window_width - container_width)/2 + pos_padding;

}



// scroll down button
function scroll_down(){

    $('.scroll_down').on('click',function(){

        if( $('#fullpage').length > 0 ) {

            if(is_screen(1023) && $(this).closest('.full_section').hasClass('perfection_visual')){
                $.fn.fullpage.moveTo(3);
            } else {
                $.fn.fullpage.moveSectionDown();
            }

        } else {
            var target = $(this).attr('href');
            var target_top = $(target).offset().top;
            var header_height = $('#header').height();

            $('html,body').animate({
                scrollTop : target_top - header_height + 20
            }, 800);
        }

        return false;

    });

}



// language menu selectric init
function lang_menu_init(){

    var url, next_url;

    // selectric
    $('.lang_selectric').selectric({
        disableOnMobile: true,
        onInit: function() {
            TweenMax.to('.lang_selectric', .3, {autoAlpha: 1});
        },
        onBeforeChange: function(){
            url = $(this).val();
        },
        onChange: function(){
            next_url = $(this).val();

            if(url != next_url) {
                window.location = next_url;
            }
        }
    });

    // original selectbox
    $('.lang_selectric').on('change', function(){
        window.location = $(this).val();
    });

}



// ADD LOAD CLASS
function add_load_class(){

    $('body').addClass('load');

}



// TABS COMPONEMT
function tabs(el){

	$(el).each(function(){

		var $this = $(this);

		// Hide tabs if not already hidden
		$this.find('> div > div').hide();

		// Init display the right tab
		if (location.hash !== "") {
			var current_hash = 	location.hash;
			var current_hash_index = $(current_hash).index();
			$this.find('> div > div').hide();
			$this.find('> div > div:eq('+current_hash_index+')').show();
			$this.find('> ul > li:first').removeClass('active');
		    $this.find('> ul > li:eq('+current_hash_index+')').addClass('active');
		} else{
		    $this.find('> div > div:first').show();
		    $this.find('> ul > li:first').addClass('active');
		}

		// Add click event
		$this.find('> ul li a').on('click',function(){

            var calc_pos;

            if(is_screen(640)) {
                calc_pos = 0;
            } else if(is_screen(767)) {
                calc_pos = 30;
            } else {
                calc_pos = 36;
            }

			$('html,body').animate({scrollTop: $this.offset().top - $('#header').outerHeight() - calc_pos});

			var $that = $(this);
			var hash = $that.attr('href');
			$this.find('> ul li').removeClass('active');
			$that.parent().addClass('active');

			var target_index = $that.parent().index();
			$this.find('> div > div').hide();
			$this.find('> div > div:eq('+target_index+')').show();

			// add hash
			history.pushState(null, null, hash)

			return false;
		});

		// Listner hash change
		// TODO DRY THIS CODE !!!
		if ("onhashchange" in window) {
			window.onhashchange = function locationHashChanged() {
				var _current_hash = location.hash;
				var _current_hash_index = $(_current_hash).index();
				$this.find('> div > div').hide();
				$this.find('> div > div:eq('+_current_hash_index+')').show();
				$this.find('> ul > li').removeClass('active');
				$this.find('> ul > li:eq('+_current_hash_index+')').addClass('active');
			}
		}

	});

}



// isotope init
function isotope_init() {

    // init setting
    var $container = $('.jt_isotope');
	var $isotope_target = $container.isotope({
		itemSelector: '.isotope_item',
		masonry: {
			columnWidth: '.isotope_grid_sizer',
			gutter: '.isotope_gutter_sizer',
            horizontalOrder: true
		},
		percentPosition: true
	});

	// layout Isotope after each image loads
	$isotope_target.imagesLoaded(function(){
		$isotope_target.isotope('layout');
		// If hidden with css, display it
		$container.css({'visibility': 'visible','opacity': 1})
	});

    // isotope loadmore
	if($('.jt_isotope').length > 0){
	    loadmore($isotope_target);
	} else {
        loadmore();
    }
}



// spidochescaler init
function spidochescaler_init(){

    // start point : maxWidth
    // destroy point : destroyAt

    // $('.product_step_list_wrap').spidochescaler({ maxWidth: 1100 });

}



// full height section setting
function fullheight_section(){

    var $full_el = $('.jt_full_section'),
        $window  = $(window),
        $header  = $('#header');

    if( !$full_el.length ) { return; }

    if($('body').hasClass('page-template-message')) { // LANNY’S MESSAGE
        $full_el.height($window.height());
        $('.message_scroll_target').css('margin-top', $window.height());
    } else {
        $full_el.height($window.height()-$header.outerHeight());
    }

}



// main visual slider
function main_visual_slider(){

    var $slider = $('#main_visual_slider');

    if( !$slider.length ){ return; }

    // pre init
    $(document).on('cycle-pre-initialize', $slider, function( event, opts ){

        if($(event.target).hasClass('main_visual_slider')) {
            // init motion
            slide_motion($slider.find('.main_visual_item:eq(0)')[0], true);
        }

    });

	// Run cycle
	$slider.cycle({
        slides          : '> div',
        timeout         : 5000,
		speed           : 1000,
        swipe           : true,
		log			    : false,
		prev            : '#main_visual_control .cycle_prev',
		next            : '#main_visual_control .cycle_next',
        caption         : "#main_visual_caption",
        captionTemplate : "<span class='main_caption_text current'>{{slideNum}}</span><span class='main_caption_text slug'>/</span><span class='main_caption_text total'>{{slideCount}}</span>"
	});

    // cycle-before
    $slider.on( 'cycle-before', function(event, opts, currEl, nextEl, fwdFlag)  {
        slide_motion(nextEl, false);
    })

    // motion
    function slide_motion(el, flag){

        var $el_txt = $(el).find('.main_visual_content');
        var y_pos = 0;

        if(flag) {
            TweenMax.set('.main_visual_content', {autoAlpha:1});
        }

        if(is_screen(768)) {
            y_pos = 25;
        } else {
            y_pos = 50;
        }

        TweenMax.fromTo($el_txt.find('h2'), 1.5, {y:y_pos, autoAlpha:0}, {y: 0, autoAlpha:1, force3D:true, ease: Power1.easeOut});
        TweenMax.fromTo($el_txt.find('p'), 1.5, {y:y_pos, autoAlpha:0}, {y: 0, autoAlpha:1, force3D:true, ease: Power1.easeOut, delay: 0.3});
        TweenMax.fromTo($el_txt.find('a'), 1.5, {y:y_pos, autoAlpha:0}, {y: 0, autoAlpha:1, force3D:true, ease: Power1.easeOut, delay: 0.5});

    }

	// Pause on mouseover
	$('.main_visual .jt_btn').hover(function(){
	    $slider.cycle('pause');
	}, function(){
        $slider.cycle('resume');
	});

}



// main philosophy slider
function main_philosophy_slider(){

    var $slider = $('.main_philosophy_slider');
    var $img_slider_01 = $('.main_philosophy_img_slider_first');
    var $img_slider_02 = $('.main_philosophy_img_slider_second');
    var $txt_slider = $('.main_philosophy_txt_slider');

    if( !$slider.length ){ return; }

    $img_slider_01.cycle({
        slides          : '> div',
        timeout         : 5000,
		speed           : 1000,
        log			    : false,
        prev            : '#main_philosophy_control .cycle_prev',
        next            : '#main_philosophy_control .cycle_next',
        swipe           : false,
        fx              : 'tileBlind',
        tileCount		: 1,
        easing			: 'easeOutCubic'
    });

    $img_slider_02.cycle({
        slides          : '> div',
        timeout         : 5000,
		speed           : 1000,
        log			    : false,
        prev            : '#main_philosophy_control .cycle_prev',
        next            : '#main_philosophy_control .cycle_next',
        swipe           : false,
        fx              : 'tileBlind',
        tileCount		: 1,
        easing			: 'easeOutCubic'
    });

    $txt_slider.cycle({
        slides          : '> div',
        timeout         : 5000,
		speed           : 1000,
        log			    : false,
        prev            : '#main_philosophy_control .cycle_prev',
        next            : '#main_philosophy_control .cycle_next',
        swipe           : true
    });

    // cycle-before
    $txt_slider.on( 'cycle-before', function(event, opts, currEl, nextEl, fwdFlag)  {

        var $current_el = $(currEl).find('.main_philosophy_txt_inner'),
            $next_el = $(nextEl).find('.main_philosophy_txt_inner');

        TweenMax.fromTo($current_el, .5, {autoAlpha: 1}, {autoAlpha: 0,force3D: true,ease: Sine.easeNone});
        TweenMax.staggerFromTo($next_el.children(), 1.2, {y: 30,autoAlpha: 0}, {y: 0,autoAlpha: 1,force3D: true,ease: Power2.easeOut,delay: 0.5,onStart: function(){TweenMax.set($next_el, {autoAlpha: 1})}}, 0.1);

    });

    // Pause on mouseover
	$('.main_philosophy_txt_inner').hover(function(){
	    $slider.cycle('pause');
	}, function(){
        $slider.cycle('resume');
	});

}



// main recommendation slider
function main_recommend_slider(){

    var $slider = $('.main_recommend_slider');

    if( !$slider.length ){ return; }

    // init
    $slider.slick({
		slidesToShow: 4,
		slidesToScroll: 1,
        speed: 1000,
        autoplay: true,
        arrows: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
	});

    // controler
    $('.main_recommend_prev').click(function(e){
        e.preventDefault();
        $slider.slick('slickPrev');
    });
    $('.main_recommend_next').click(function(e){
        e.preventDefault();
        $slider.slick('slickNext');
    });

}



// main recommendation slider
function main_sellers_slider(){

    var $slider = $('.main_sellers_slider');
    var $img_slider = $('.main_sellers_img_slider');
    var $txt_slider = $('.main_sellers_txt_slider');

    if( !$slider.length ){ return; }

    $slider.cycle({
        slides          : '> div',
        timeout         : 4000,
		speed           : 1400,
        log			    : false,
        prev            : '#main_sellers_control .cycle_prev',
        next            : '#main_sellers_control .cycle_next',
        swipe           : false
    });

    // cycle-before
    $txt_slider.on( 'cycle-before', function(event, opts, currEl, nextEl, fwdFlag)  {

        var $current_el = $(currEl).find('.main_sellers_txt'),
            $next_el = $(nextEl).find('.main_sellers_txt');

        TweenMax.fromTo($current_el, .5, {autoAlpha: 1}, {autoAlpha: 0,force3D: true,ease: Sine.easeNone});
        TweenMax.staggerFromTo($next_el.children(), 1.2, {y: 30,autoAlpha: 0}, {y: 0,autoAlpha: 1,force3D: true,ease: Power2.easeOut,delay: 0.4,onStart: function() {TweenMax.set($next_el, {autoAlpha: 1})}}, 0.1);

    });

    // Pause on mouseover
	$('.main_sellers_txt').hover(function(){
	    $slider.cycle('pause');
	}, function(){
        $slider.cycle('resume');
	});

}



// main board slider
function main_board_slider(){

    var $slider = $('.main_board_slider');

    if( !$slider.length ){ return; }

    $slider.each(function(){

        var $this = $(this);

        // init
        $this.cycle({
            slides          : '> li',
            timeout         : 3500,
            speed           : 1000,
            log			    : false
        });

        // Pause on mouseover
        $this.hover(function(){
            $this.cycle('pause');
        }, function(){
            $this.cycle('resume');
        });

    });

}



// product list slider arrows setting
function product_slider_arrows($product_list_slider){

    if( !$product_list_slider.length ){ return; }

    // controler
    $('.products_list_slider_prev').click(function(e){
        e.preventDefault();
        $product_list_slider.slick('slickPrev');
    });
    $('.products_list_slider_next').click(function(e){
        e.preventDefault();
        $product_list_slider.slick('slickNext');
    });

}

// product list init setting
function product_slider_check($product_list_slider){

    if( !$product_list_slider.length ){ return; }

    var slider_count = 0;

    if(!is_screen(1279)) {
        slider_count = 5;
    } else if(!is_screen(799)) {
        slider_count = 4;
    } else if(!is_screen(540)) {
        slider_count = 3;
    } else {
        slider_count = 2;
    }

    if ($product_list_slider.find('.product_slider_item:not(.slick-cloned)').length >= slider_count) {
        $('.products_slider_list_container .slick-control').show();

        if(!$product_list_slider.hasClass('slick-slider')){
            product_slider_init($product_list_slider);
        }
    } else {
        $('.products_slider_list_container .slick-control').hide();

        if($product_list_slider.hasClass('slick-slider')){
            $product_list_slider.slick('unslick');
        }
    }

}

// product list slider init
function product_slider_init($product_list_slider){

    // init
    $product_list_slider.slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 541,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

}



// AROOW YOYO AND HOVER EVENT
function arrow_tongtong() {

	var $scroll_down_target = $('.scroll_down');

	if( $scroll_down_target.length > 0 ){

        $scroll_down_target.each(function(){
            var tn1 = TweenMax.to($(this), .4, { y:-18, repeat:-1, yoyo:true, paused:true });

            tn1.play();

            $(this).mouseenter(function() {
                var currentTime = tn1.time();
                tn1.reverse(currentTime);
            });

            $(this).mouseleave(function() {
                tn1.play();
            });
        });

	}

}



// vimeo play function
function vimeo_play(){

    $('.jt_video_poster_overlay_btn').on('click', function(){

        if(!is_browser_ie9()) {
            if($('body').hasClass('page-template-message')) {
                // Lanny’s Message
                var $parent = $(this).closest('.message_video_wrap');
            } else if ($('body').hasClass('page-template-academy')) {
                // LAN'S Academy
                var $parent = $(this).closest('.academy_video');
            } else {
                var $parent = $(this).closest('.jt_video_wrap');
            }

            var $iframe = $parent.find('iframe');
            var $poster = $parent.find('.jt_video_poster');
            var js_iframe = $parent.find('iframe')[0];
    		var video = new Vimeo.Player(js_iframe);

            new TweenMax.set($iframe, {autoAlpha: 1, force3D: true});
            new TweenMax.to( $poster, .6, {autoAlpha: 0, onStart: function(){ video.play(); }});
        } else {
            alert('영상 재생을 지원하지 않는 브라우저를 사용 중입니다.');
        }

    });

}



// vimeo thimbnail function
function vimeo_thumbnail(){

    // find vimeo iframe
    var $vimeo_iframe = $('iframe').filter(function(){
        var output;
        var isVimeo = /(:?https:\/\/player\.vimeo\.com)/.test($(this).attr('src'));
        var $cycle = $(this).parents('.cycle-slide');

        // vimeo
        if(isVimeo){
            output = $(this);
            // cycle
            if(!!$cycle.length){
                output = !$cycle.hasClass('cycle-sentinel');
            }
        }
        return output;
    });

    var vimeo_iframe = $vimeo_iframe[0];

    if( !$vimeo_iframe.length ) return;

    // mobile debug
    if( $('body').hasClass('single-product') && is_mobile() ) {
        // products single
        $vimeo_iframe.remove();
    }

    if(is_browser_ie9()) {

        $vimeo_iframe.remove();

    } else {

        // set vimeo player
        var vimeo_players = new Vimeo.Player(vimeo_iframe);

        if( vimeo_players ){

            var flag = true;
            var $vimeo_poster = $vimeo_iframe.parents('.vimeo_wrap').find('.vimeo_poster');

            // thumbnail
            if( !!$vimeo_poster.length ){
                vimeo_players.on('timeupdate',function(data){
                    if(flag && data.seconds > 0) {
                        $vimeo_poster.fadeOut(400,function(){
                            $(this).show().css({
                                'visibility' : 'hidden',
                                'opacity' : 0
                            });
                        }).removeClass('active');
                        flag = false;
                    }
                });
            }

        }

    }

}



// JT embed fullvid (by spidoche ;)
function jt_fullvid(){

    var w_width = $(window).width();
    var w_height = $(window).height();
    var $iframe = $('iframe.jt_fullvid');
    var iframe_width = $iframe.width();
    var iframe_height = $iframe.height();
    var ratio = iframe_height / iframe_width;

    //
    var new_iframe_width =  w_width;
    var new_iframe_height = w_width * ratio;

    if(new_iframe_height < w_height){
        new_iframe_height = w_height;
        new_iframe_width = w_height / ratio;
    }

    //
    $iframe.css({width:new_iframe_width, height:new_iframe_height, position:'absolute', top:'50%', left:'50%', transform:'translate(-50%,-50%)', display:'block'})
           .wrap('<div class="jt_fullvid_container" style="overflow:hidden; position:relative; width:'+w_width+'px; height:'+w_height+'px" />');

    //
    $(window).on('resize',function(){

        var w_width = $(window).width();
        var w_height = $(window).height();

        var new_iframe_width =  w_width;
        var new_iframe_height = w_width * ratio;

        if(new_iframe_height < w_height){
            new_iframe_height = w_height;
            new_iframe_width = w_height / ratio;
        }

        $iframe.css({width:new_iframe_width, height:new_iframe_height});
        $('.jt_fullvid_container').css({width:w_width, height:w_height});

    });

}



// sns share popup
function sns_popup_init(){

    // SNS POPUP
    $('.jt_share_sns').each(function(){

        var element = this;
        var $element = $(element);

        $element.on('click', function(e){

            // return kakao share
            if($(this).hasClass('jt_share_kakao')) { return; }

            e.preventDefault();

            // OPTIONS
            var options = {
                href        : this.href,    // 주소
                title       : '',           // 타이틀
                width       : '600',        // { number } 열리는 창의 가로 크기
                height      : '600',        // { number } 열리는 창의 세로 크기
                top         : '0',          // { number } 열리는 창의 좌표 위쪽
                left        : '0',          // { number } 열리는 창의 좌표 왼쪽
                status      : 'no',         // { yes | no | 1 | 0 } 상태 표시바 보이거나 숨기기
                fullscreen  : 'no',         // { yes | no | 1 | 0 } 전체 창 (기본값은 no)
                channelmode : 'no',         // { yes | no | 1 | 0 } 채널모드 F11 키 기능이랑 같음
                location    : 'no',         // { yes | no | 1 | 0 } 주소창 (기본값은 yes)
                menubar     : 'no',         // { yes | no | 1 | 0 } 메뉴바 (기본값은 yes)
                toolbar     : 'no',         // { yes | no | 1 | 0 } 툴바 (기본값은 yes)
                resizable   : 'yes',        // { yes | no | 1 | 0 } 창 (기본값은 yes)
                scrollbars  : 'yes'         // { yes | no | 1 | 0 } 창 스크롤바 (기본값은 yes)
            };

            // ALIGN CENTER
            var align_center = {
                top : Math.round(($(window).height() / 2) - (options.height / 2)),
                left : Math.round(($(window).width() / 2) - (options.width / 2))
            };

            // WINDOW OPEN
            window.open(''+ options.href +'',''+ options.title +'','width='+ options.width +',height='+ options.height +',top='+ align_center.top +',left='+ align_center.left +',status='+ options.status +',fullscreen='+ options.fullscreen +', channelmode='+ options.channelmode+', location='+ options.location+', menubar='+ options.menubar +', toolbar='+ options.toolbar +', resizable='+ options.resizable +', scrollbars='+ options.scrollbars +'');

        });

    });

}



// fullpage init
function fullpage_init(){

    if($('#fullpage').length <= 0) { return; }

    $('#fullpage').fullpage({
        css3: true,
        // scrollBar: true,
        controlArrows: false,
        scrollingSpeed: 1200,
        navigation: true,
		navigationPosition: 'right',
        responsiveWidth: 1024,
        parallax: true,
        parallaxKey: 'bGFuYmVsbGUuY29tX3I2NGNHRnlZV3hzWVhnPVlRdA==',
        parallaxOptions: { type: 'cover', percentage: 100, property: 'translate'},
        afterRender: function(){
            fullpage_footer();

            // if(!is_browser_ie()){
            //     fullpage_bg_custom();
            // }

            // first script loading debugging
            $('#fullpage').css('opacity', 1);

        },
        afterResize: function(){
    		fullpage_footer();

            // if(!is_browser_ie()){
            //     fullpage_bg_custom();
            // }
    	},
        afterResponsive: function(){
            fullpage_footer();

            // if(!is_browser_ie()){
            //     fullpage_bg_custom();
            // }
        }
    });

    // save key
    // dev -> parallaxKey: 'c3R1ZGlvLWp0LmNvLmtyXzU3M2NHRnlZV3hzWVhnPTVXcg==',
    // prod -> parallaxKey: 'bGFuYmVsbGUuY29tX3I2NGNHRnlZV3hzWVhnPVlRdA==',

}

// fullpage helper
function fullpage_footer() {

    if(is_screen(1023)) {
        $('#footer').removeAttr('style');
    } else {
        var footer_width = $('.main_container').width();
        var footer_left = ($(window).width()-footer_width)/2;

        $('#footer').css({
            'width': footer_width,
            'left': footer_left
        });
    }

}

function fullpage_bg_custom() {

    if($('body').hasClass('page-template-simple-perfection')) {
        var bg_size = $('.perfection_info .fp-bg').height();
        bg_size = '-'+ bg_size + 'px';

        $('.perfection_info .fp-bg').css('background-position', 'center '+bg_size);
    }

}



// INIT GOOGL MAP IF ID EXIST
function google_maps_init(){

    if($('.google_map').length > 0){

		var google_map_url = "https://maps.google.com/maps/api/js?region=KR&key=AIzaSyBzC-JampBd_lsoLVUkqPPst4wqTZ6rK4A";
        var $google_map    = $('.google_map');

		$.getScript( google_map_url ).done(function( script, textStatus ) {

            $google_map.each(function(){

                var el = this;
                var $element = $(el);

                var id      = $element.attr('id');
                var marker  = $element.attr('data-marker');
                var lat     = $element.attr('data-lat');
                var lng     = $element.attr('data-lng');

    			var mapOptions = {
    				zoom            : 17,
    				center          : new google.maps.LatLng(lat, lng),
    				scrollwheel     : false,
    				mapTypeControl  : false
    			};

    			// disable draggable Mobile only
    			if((/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    				mapOptions.draggable = false;
    			}

    			var map = new google.maps.Map(document.getElementById(id), mapOptions);

    			var marker = new google.maps.Marker({
    				map      : map,
    				position : map.getCenter(),
    				icon     : marker
    			});

    			// 반응형
    			google.maps.event.addDomListener(window, "resize", function() {
    				var center = map.getCenter();
    				google.maps.event.trigger(map, "resize");
    				map.setCenter(center);

    			});

            }); // ENDEACH

		}).fail(function( jqxhr, settings, exception ) {

			// Handle Error

		});

	} // ENDIF

}



// mapbox init
function mapbox_init(){

    if($('.google_map').length > 0){

		var map_url = "https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js";

		$.getScript( map_url ).done(function( script, textStatus ) {

            $('.google_map').each(function(){

                var $el = $(this);
                var el_id = $el.attr('data-id');
                var $el_obj = $('#'+el_id);

                var id           = el_id;
                var image_w      = '121';
                var image_h      = '100';
                var image        = $el_obj.attr('data-marker');
                var lat          = $el_obj.attr('data-lat');
                var lng          = $el_obj.attr('data-lng');

                L.mapbox.accessToken = 'pk.eyJ1Ijoic2VvbGppc2VvayIsImEiOiJjajJ1Nm9tOGowMDc5MzJtcjRvdzdxZm91In0.-UAvk7ElQFu0u8Ahf8LI9Q';
                var map = L.mapbox.map(id)
                .setView([lat, lng], 17);

                map.scrollWheelZoom.disable();

                // disable draggable Mobile only
                if(is_mobile()){
                    map.dragging.disable();
                }

                // Use styleLayer to add a Mapbox style created in Mapbox Studio
                L.mapbox.styleLayer('mapbox://styles/seoljiseok/cj8mdo1796s502srowp9j03y2').addTo(map);
                var myLayer = L.mapbox.featureLayer().addTo(map);

                var geoJson = {
                    type: 'FeatureCollection',
                    features: [{
                        "type": "Feature",
                        "geometry": {
                            "type": "Point",
                            "coordinates": [lng, lat]
                        },
                        properties: {
                            //title: 'title',
                            //description: 'addr',
                            icon: {
                                iconUrl: image,
                                iconSize: [117, image_h], // size of the icon
                                iconAnchor: [53, image_h], // point of the icon which will correspond to marker's location
                                popupAnchor: [0, -image_h], // point from which the popup should open relative to the iconAnchor
                                className: "jt-marker"
                            }
                        }
                    }]
                };

                // Set a custom icon on each marker based on feature properties.
                myLayer.on('layeradd', function(e) {
                    var marker = e.layer,
                    feature = marker.feature;

                    marker.setIcon(L.icon(feature.properties.icon));
                });

                // Add features to the map.
                myLayer.setGeoJSON(geoJson);
            }); // each

		}).fail(function( jqxhr, settings, exception ) {

			// Handle Error

		});

	} // ENDIF

}



// Add class to images if loaded (used for motion)
function img_loaded_class(){

    // product single
	$('.product_header_img').imagesLoaded().progress(function( imgLoad, image ) {
		// change class if the image is loaded or broken
		var $container = $( image.img ).closest('.product_header');
		$container.addClass('product_header_loaded');
		if ( !image.isLoaded ) {
			$container.addClass('is_broken');
		}
	});

    // main
    $('.main_visual_slider').imagesLoaded({
            background: '.main_visual_bg'
        }, function( imgLoad ) {
            $('.main_visual').addClass('main_visual_load');
        }
    );

}



// Discovery cafe around slider
function around_slider(){

    var $slider = $('.around_slider');

    if( !$slider.length ){ return; }

    // init
    $slider.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 1200,
        arrows: false,
        infinite: true
	});

    // controler
    $('.around_slider_prev').click(function(e){
        e.preventDefault();
        $slider.slick('slickPrev');
    });
    $('.around_slider_next').click(function(e){
        e.preventDefault();
        $slider.slick('slickNext');
    });

}



// message slider
function message_slider(){

    var $slider = $('.message_slider');

    if( !$slider.length ){ return; }

    $slider.cycle({
        slides          : '> div',
        timeout         : 3000,
		speed           : 1000,
        log			    : false,
        prev            : '#message_slider_control .cycle_prev',
        next            : '#message_slider_control .cycle_next',
        swipe           : true
    });

}



// purity list view more event
function purity_list() {

    var $list = $('.purity_data_list'),
        $button = $('.purity_data_btn'),
        $item, cnt;

    // click event
    $button.on('click', function(){

        if($button.hasClass('close')){

            // close animation
            var $active_el, active_height=2;

            $active_el = $list.children().filter(function(index){ return index < 5; });
            $active_el.each(function() {
                active_height += $(this).outerHeight();
            });

            $("html, body").stop().animate({
                scrollTop: $list.offset().top-$('#header').outerHeight()-30
            }, 600);

            $list.animate({
                height: active_height
            }, 600, function() {
                // reset
                $item = $list.children().filter(function(index){ return index > 4; });
                $item.removeClass('active');
                $item.hide();

                $list.removeAttr('style');

                // button update
                $button.removeClass('close');
                $button.find('span').text('VIEW MORE');
            });

        } else {

            // get list element
            $item = $list.children().not('.active').filter(function(index){ return index < 10; });
            cnt = $list.children().not('.active').size() - $item.size();

            // show
            TweenMax.staggerFromTo($item, .8, {scale: 0.95,opacity: 0}, {scale: 1,opacity: 1,ease: Power3.easeOut,force3D: true,onStart: function(){$item.show();$item.addClass('active');}}, 0.05);

            // button update
            if (cnt <= 0) {
                $button.addClass('close');
                $button.find('span').text('CLOSE');
            }

        }

        return false;

    });


}



// 랑벨의 원료 visual click event
function raw_material_scroll(){

    $('.rawmaterial_visual_list a').on('click', function(){

        var target = $(this).attr('href');
        var target_top = $(target).offset().top;
        var header_height = $('#header').height();
        var calc = 0;

        if(!is_screen(1023)) {
            calc = 20;
        } else if(!is_screen(768)) {
            calc = 10;
        }

        $('html,body').animate({
            scrollTop : target_top - header_height + calc
        }, 800);

        return false;

    });

}



// academy datepicker init
function academy_datepicker(){

    if($("#your_date").length <= 0) { return; }

    var allowDays = $('input[name=allow_date_list]').val().split('|'); // ['2017-9-22','2017-9-26','2017-9-30'];

    $("#your_date").datepicker({
        dateFormat: 'yy-mm-dd',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1','2','3','4','5','6','7','8','9','10','11','12'],
        monthNamesShort: ['1','2','3','4','5','6','7','8','9','10','11','12'],
        dayNames: ['일','월','화','수','목','금','토'],
        dayNamesShort: ['일','월','화','수','목','금','토'],
        dayNamesMin: ['일','월','화','수','목','금','토'],
        showMonthAfterYear: true,
        yearSuffix: '.',
        minDate: 0,
        beforeShowDay: function (date) {

            var str_date = date.getFullYear() + '-' + ( '0' + ( date.getMonth() + 1 ) ).slice( -2 ) + '-' + date.getDate();

            if ( $.inArray( str_date, allowDays ) > -1 ) {
                return [true];
            }

            return [false];

        }
    });

}



// magnific popup init
function magnific_popup_init() {

    // contact privacy popup
    $('.contact_agree_anchor').magnificPopup({
        type            : 'ajax',
        ajax            : {
                            settings: null,
                            cursor: 'mfp-ajax-cur',
                            tError: '컨텐츠를 불러오는데 실패했습니다.'
                        },
        closeOnBgClick  : false,
        showCloseBtn    : false,
        // autoFocusLast   : false,
        mainClass       : 'mfp-with-zoom privacy-popup',
        zoom            : {
                            enabled: true,
                            duration: 300,
                            easing: 'ease-in-out'
                        },
        removalDelay    : 150,
        callbacks: {
            beforeOpen: function() {
                // close html
                var html = '<a class="privacy_popup_close" href="#"><div class="privacy_popup_close_inner"><span lang="en" class="privacy_close_text">CLOSE</span><span class="privacy_close_icon"></span></div></a>';
                if( $('.privacy_popup_close').length === 0 ){
                    $('body').append(html);
                }

                // close addeventlistener
                $(document).on('click', '.privacy_popup_close', function(e){
                    e.preventDefault();
                    TweenLite.fromTo('.privacy_popup_close', .2, {autoAlpha: 1,scale: 1,ease: Power2.easeOut}, {autoAlpha: 0,scale: 0,transformOrigin: "50% 50%",onComplete: function() {$.magnificPopup.close();}});
                });

				// Kill smoothscroll
				if(!is_browser_ie9() && !is_browser_firefox() && !is_mac_os() && !is_mobile()) {
                    if(!is_browser_chrome()) {
                       JTmouseWheel.kill();
                    }
                }

            },
            open: function() {
                if(!$('body').hasClass('privacy_popup_open')){
					$('body').addClass('privacy_popup_open');
				}

                $('.privacy_popup_close').show(300);
            },
            close: function(){
                if( $('.privacy_popup_close').length ){
                    $('.privacy_popup_close').remove();
                }

                if($('body').hasClass('privacy_popup_open')){
					$('body').removeClass('privacy_popup_open');
				}

				// Add again smoothscroll
				if(!is_browser_ie9() && !is_browser_firefox() && !is_mac_os() && !is_mobile()) {
                    if(!is_browser_chrome()) {
		                JTmouseWheel.addEvent();
                    }
                }

            }
        }
    });

}



// Ajax 더보기
function loadmore($list){

   var is_loading = false;

   $('#jt_loadmore a').off().on('click',function(e){

		e.preventDefault();

		if(is_loading) return;

	    var $this = $(this);
		var $loadmore = $this.parent();
		var url = $this.attr('href');
		is_loading = true;

		$loadmore.addClass('loading');

		$.get( url, function(response) {
			var next_url = $(response).find('#jt_loadmore a').attr('href');
            var $more_items = null;

            if($list !== undefined) {

                // isotope
                $more_items = $(response).find('.isotope_item');

                $list.isotope('remove', $list.data('isotope').$allAtoms );
                $list.isotope('insert', $more_items );
                $list.imagesLoaded( function() {
                    $list.isotope('layout');
                });

            } else if($(response).find('.jt_list_grid').length > 0) {

                // grid list
                $more_items = $(response).find('.grid_item');

                $more_items.imagesLoaded(function() {
					new TweenMax.set($more_items,{autoAlpha:0, scale:0.5});
					$('.jt_list_grid').append($more_items);
					new TweenMax.staggerTo($more_items,.3,{autoAlpha:1, scale:1},.1);
				});

            } else {
                // Nothing
            }

			// Update URL
			window.history.pushState(null, null, url)

			// Remove loading class after some delay to avoid
			setTimeout(function(){
				$loadmore.removeClass('loading');
			},300);

			if(next_url !== undefined){
				// Update url
				$this.attr('href', next_url);

				// Update flag
				is_loading = false;
		    }else{
				$('#jt_loadmore a').fadeOut(500,function(){
					$this.remove()
				});
				return;
			}

		});
	});

}



// smooth wheel scroll
function smooth_scroll_init(){

    //$('body').niceScroll();
	if(!$('#fullpage').length && !is_browser_ie9() && !is_browser_firefox() && !is_mac_os() && !is_mobile()) {

        // 크롬에서 터치패트 스크롤 안되어 추가해둠
        if(!is_browser_chrome()) {
            JTmouseWheel.addEvent();
        }

    }

}



// skrollr first load init
function skrollr_int() {

	if( !is_mobile() ) {
		skr_init();

		$(window).on('load',function(){
			// load again when img a load
			if( skr != null ) {
				skr.refresh();
			}
		})
	}

}

// skrollr init function
function skr_init(){

    if($(window).width() <= 1023) {
        if( skr != null ) {
            skr.destroy();
        }
    } else {
        skr = skrollr.init({
            smoothScrolling: false,
            forceHeight: false
        });
    }

}



// waypoints init
function waypoints_init(){

    // card motion
    $(".card_motion").each(function(){

        var $this = $(this);

        $this.waypoint(function() {

            $this.addClass('animate');

        }, {
            triggerOnce: !0,
            offset: "72%"
        });

    });

    // MAIN
    $(".main_message_container").waypoint(function() {
		$(this.element).addClass("animate");
	}, {
		triggerOnce: !0,
		offset: "80%"
	});

    $(".main_meeting_list").waypoint(function() {
		$(this.element).addClass("animate");
	}, {
		triggerOnce: !0,
		offset: "90%"
	});

    // 랑벨의 혁신
    $(".innovation_row").each(function(){

        var $this = $(this);

        $this.waypoint(function() {

            $this.addClass('animate');

        }, {
            triggerOnce: !0,
            offset: "48%"
        });

    });

}



// online shop load motion
function online_shop_motion(){

    if($('.online_shop_list').length > 0) {

        TweenMax.staggerFromTo(".online_shop_item", 1, {y: 20,opacity: 0}, {y: 0,opacity: 1,ease: Power3.easeOut,force3D: true}, 0.1);

    }

}



// ios debugging
function ios_debugging(){

    var target = $('.jt_underline_btn');

	if( is_mobile_ios() ){

		target.on('click touchend',function(e){
            window.location = this.href;
		});

	}

}



function product_list_effect() {

	// fallback if css blend not support
	if(is_browser_ie() || $('.product_list_item').length <= 0 ){
	    return;
	}

    // add video
    $('.product_list_item').each(function(){

        var $inner = $(this).find('.product_list_bg_box_inner');
        var video = '<video class="product_list_bg_mask" src="/wp-content/themes/lanbelle/video/ink.mp4" preload="auto"></video>';
        $inner.append(video);

    });

    // play/pause
    $('.product_list_item a').hover(function(){
        var $effect_video = $(this).find('video');
        $effect_video.get(0).play();
	}, function(){
        var $effect_video = $(this).find('video');
        $effect_video.get(0).pause();
        $effect_video.get(0).currentTime = 0;
        $effect_video.get(0).load();
	});

}



// gnb products 2depth menu counting
function product_menu_check(){

    var $sub_menu = $('#menu li.menu-item-type-products').find('.sub-menu');
    var sub_menu_count = $sub_menu.children().length;

    if(sub_menu_count%2 != 0) {
        $sub_menu.addClass('js_even_menu');
    }

}



// Split word and wrap into a span to simplify rwd 작업
function product_pager_split_word(){

	$(".product_pager_button .product_pager_text p").each(function(){

		var $this = $(this);
		var words = $this.text().split(" ");

		$this.empty();

		$.each(words, function(i, v) {
			$this.append(jQuery("<span>").text(v));
		});

	});

}



// product sticky pagination
function product_stickypager() {

    var $window = $(window);
	var $header = $('#header');
    var $end_el = $('.product_banner');
	var $stickypager = $('#product_pager');
    var space = 100;

	if( !$stickypager.length) { return; }

	$window.on('scroll', function() {
        if(!is_screen(1520)){
            product_stickypager_scroll_event();
        } else {
            if($stickypager.hasClass('js_product_pager_hide')) {
                $stickypager.removeClass('js_product_pager_hide');
            }
        }
	});

    function product_stickypager_scroll_event() {
        var calc = $header.height() + space;

        if ( $window.scrollTop() > $end_el.offset().top - calc ) {
            $stickypager.addClass('js_product_pager_hide');
        } else {
            $stickypager.removeClass('js_product_pager_hide');
        }
    }

}



// 주요성분 init setting
function product_component_check($component_slider){

    if( !$component_slider.length ) { return; }

    var slider_count = 0;

    if(!is_screen(1300)) {
        slider_count = 7;
    } else if(!is_screen(900)) {
        slider_count = 6;
    } else if(!is_screen(600)) {
        slider_count = 5;
    } else if(!is_screen(450)) {
        slider_count = 4;
    } else {
        slider_count = 3;
    }

    if ($component_slider.find('.component_list_item:not(.slick-cloned)').length >= slider_count) {
        if(!$component_slider.hasClass('slick-slider')){
            product_component_init($component_slider);
        }
    } else {
        if($component_slider.hasClass('slick-slider')){
            $component_slider.slick('unslick');
        }
    }

}

// 주요성분 slider init
function product_component_init($component_slider){

    $component_slider.slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        speed: 800,
        autoplay: false,
        arrows: false,
        infinite: true,
        dots: true,
        responsive: [
            {
                breakpoint: 1301,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
                }
            },
            {
                breakpoint: 901,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 451,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

}



// step init settings
function product_step_check($step_slider){

    if( !$step_slider.length ) { return; }

    var slider_count = 0;

    if(!is_screen(1300)) {
        slider_count = 7;
    } else if(!is_screen(1100)) {
        slider_count = 6;
    } else if(!is_screen(768)) {
        slider_count = 5;
    } else if(!is_screen(480)) {
        slider_count = 4;
    } else {
        slider_count = 3;
    }

    if ($step_slider.find('.product_step_list_item:not(.slick-cloned)').length >= slider_count) {
        if(!$step_slider.hasClass('slick-slider')){
            product_step_init($step_slider);
        }
    } else {
        if($step_slider.hasClass('slick-slider')){
            $step_slider.slick('unslick');
        }
    }

}

// step slider init
function product_step_init($step_slider){

    // init
    $step_slider.slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        speed: 800,
        autoplay: false,
        arrows: false,
        infinite: false,
        dots: true,
        responsive: [
            {
                breakpoint: 1301,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
                }
            },
            {
                breakpoint: 1101,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

}



/*
 * element height matching function
 * Reference : https://codepen.io/micahgodbolt/pen/FgqLc
 */
function match_height(){

    // element
    var $item = $('.product_step_list_item, .product_intro_pic_txt, .product_list_txt, .store_schedule li, .origin_grid_figure img');

    // init
    jt_equal_height();

    // resize
    $(window).resize(jt_equal_height);

    // Add closures to keep the $item alive
    function jt_equal_height(){

        var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;

        $item.each(function() {
            $el = $(this);
            $el.height('auto');
            topPostion = $el.position().top;

            if (currentRowStart != topPostion) {
                for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0;
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }

            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });

    } // jt_equal_height()

}



// search popup
function search_popup() {

    var $body = $('body');
    var $open_btn = $('#search_open_btn > a');
    var $close_btn = $('#search_close_btn');
    var $popup = $('#search_popup');
    var $popup_inner = $('.search_popup_inner');
    var $form = $('.search_form');
    var $label = $('.search_label');
    var $input = $('#search_field');

    // open
    $open_btn.on('click', function(){

        $body.addClass('search_open');

        new TweenLite.fromTo($popup, .2, {
            autoAlpha: 0,
            transformOrigin: "50% 50%"
        }, {
            autoAlpha: 1,
            ease: Power2.easeOut,
            onStart: function() {
                $popup.css('display', 'block');
            },
            onComplete: function() {
                $input.focus();
            }
        });
        new TweenLite.fromTo ( $form, .2, {scale: 1.02,autoAlpha: 0}, {scale: 1,autoAlpha: 1,ease: Power0.easeNone,delay: .1});
        new TweenLite.fromTo ( $close_btn, .2, {autoAlpha: 0,x: 20,y: -20}, {autoAlpha: 1,x: 0,y: 0,ease: Power0.easeNone,delay: .1,onStart: function(){$close_btn.css('display', 'block');}});

        return false;

    });

    // close
    $close_btn.on('click', function(){

        new TweenLite.to($popup, .3, {
            autoAlpha: 0,
            ease: Power2.easeOut,
            onComplete: function() {
                $popup.css('display', 'none');
                $close_btn.css('display', 'none');

                $input.val('');
                $input.blur();

                $body.removeClass('search_open');
            }
        });
        new TweenLite.to ( $form, .2, {scale: 1.02,ease: Power0.easeNone});
        new TweenLite.to ( $close_btn, .3, {x: 20,y: -20,ease: Power0.easeNone});

        return false;

    });

    // input
	$input.keydown(function(){
        $popup_inner.addClass('active');
    });

    $input.keyup(function(){
        if( $input.val() == '' ){
            $popup_inner.removeClass('active');
        } else {
            $popup_inner.addClass('active');
        }
    });

    $input.focusout(function(){
        if( $input.val() == '' ){
            $popup_inner.removeClass('active');
        } else {
            $popup_inner.addClass('active');
        }
    });

}



// 준비중 메뉴
function coming_soon_alert(){

    $('.lang_menu li.lang_menu_eng a, .lang_menu li.lang_menu_chn a').magnificPopup({
        items           : {
                            src: '<div class="incoming_popup">' +
                                     '<div class="incomming_popup_inner">' +
                                         '<div class="incomming_popup_content">' +
                                             '<b>조금만 기다려주세요</b>' +
                                             '<p>보다 좋은 서비스 제공을 위해 컨텐츠 준비중입니다 <br>빠른시일내에 준비하여 찾아뵙겠습니다</p>' +
                                         '</div>' +
                                     '</div>' +
                                 '</div>',
                            type: 'inline'
                        },
        closeMarkup     : '<div class="incoming_popup_close"><span>close</span></div>',
        mainClass       : 'mfp-with-zoom',
        zoom            : {
                            enabled: true,
                            duration: 300,
                            easing: 'ease-in-out'
                        },
        removalDelay    : 300,
        fixedContentPos : false,
        autoFocusLast   : false
    });

    $(document).on('click', '.incoming_popup_close', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

}



// internet explorer check
function ie_check(){

    if(is_browser_ie()) {
        $('body').addClass('ie');
    }

}



// LAN'S ACADEMY small screen menu click action
function academy_menu_action(){

    // academy page only
    if(!$('body').hasClass('page-template-academy')) { return; }

    // gnb : academy tabs menu type click
    $('#menu li.menu-item-type-academy > ul > li > a').on('click', function(){

        if(is_screen(1023)) {
            // first menu click
            if($(this).closest('li').index() < 1) {return;}

            // menu close action
            $('body').removeClass('open_menu');

            TweenLite.to($('#small_menu_overlay'), .5, {autoAlpha: 0,onComplete: function() {$('#small_menu_overlay').css('display', 'none');}});
            TweenLite.to($('.menu_container'), .5, {x: 300,onStart: function() {TweenLite.set($('.lang_container'), {autoAlpha: 0});TweenLite.set($('.search_container'), {autoAlpha: 0});},onComplete: function() {$('.menu_container').css('display', 'none');}});
            TweenLite.to($('#small_menu_close'), .4, {x: 0});

            // scroll action
            var calc_pos;

            if(is_screen(640)) {
                calc_pos = 0;
            } else if(is_screen(767)) {
                calc_pos = 30;
            } else {
                calc_pos = 36;
            }
			$('html,body').animate({scrollTop: $('.academy_contact').offset().top - $('#header').outerHeight() - calc_pos});
        } else {
            $('#menu').addClass('temp_closse');
            setTimeout(function(){$('#menu').removeClass('temp_closse');}, 500)
        }

    }); // click event

}



/* ********************************************* *
 * HELPERS
 * ********************************************* */
// SIMPLE MOBILE CHECK
function is_mobile(){
    return (/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera);
}
function is_mobile_ios(){
	return !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
}

// SIMPLE BROWSER CHECK
function is_browser_chrome(){
    return /Chrome/.test(navigator.userAgent);
}
function is_browser_safari(){
    return /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
}
function is_browser_firefox(){
    return /Firefox/.test(navigator.userAgent);
}
function is_browser_ie(){
	return ((navigator.appName == 'Microsoft Internet Explorer') || ((navigator.appName == 'Netscape') && (new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})").exec(navigator.userAgent) !== null)));
}
function is_browser_ie9(){
    return ($.browser.msie  && parseInt($.browser.version, 10) <= 9) ? true : false;
}

// SIMPLE OS CHECK
function is_mac_os(){
    return navigator.platform.indexOf('Mac') > -1;
}

// SIMPLE SCREEN CHECK
function is_screen(max_width){
    if(!!window.matchMedia){
        return window.matchMedia('(max-width:'+ max_width +'px)').matches;
    }
}



}); // End jQuery
