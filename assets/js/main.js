jQuery(document).ready(function($) {
    $(document).foundation();
    // function googleTranslateElementInit() {
    //     new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, autoDisplay: false}, 'google_translate_element');
    // }


    function fullPage() {
        var offset = $('#wpadminbar').height();
        $('.full-page').css('min-height', $(window).height() - offset);
        $('.hero .content').css('min-height', $(window).height() - offset);

        var owl = $(".hero-carousel").data('owlCarousel');
        if (owl) {
            owl.updateVars();
        }
    }

    function updateMenu() {
        var $menu = $('.desktop-menu, .mobile-menu');

        if ($(window).scrollTop() <= 0 && !$menu.is('.always-fixed'))
            return $menu.removeClass('menu-fixed');

        if ($(window).scrollTop() >= $menu.height())
            return $menu.addClass('menu-fixed');
    }

    function updateMobileMenu() {
        var $menu = $('.mobile-menu');
        var $menuDropDown = $menu.find('.menu, .sub-menu');

        var height = window.innerHeight - $menu.height();
        $menuDropDown.outerHeight(height);
    }

    var pageResize = Foundation.utils.debounce(function() {
        fullPage();
        updateMobileMenu();
        $(window).trigger('resize.bigvideo');
    }, 30);

    var pageScroll = Foundation.utils.debounce(function() {
        updateMenu();
    }, 30);

    $(window).resize(pageResize);
    $(window).scroll(pageScroll);

    pageResize();
    pageScroll();

    // Page banner
    $('.page-banner .bg-video').each(function(i, el) {
        var $el = $(el);
        var src = $el.data('video');

        if (!src) return;

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

        if ($el.is('.active')) {
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

        if (location) {
            window.location.href = location;
        }
    });

    // Wine series carousel
    $('.wine-carousel').owlCarousel({
        pagination: false,
        navigation: true,
        navigationText: [
            "<span class='icon icon-arrow-left'></span>",
            "<span class='icon icon-arrow-right'></span>"
        ],

        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });

    // Related products carousel
    $('.related.products ul.products').owlCarousel({
        pagination: true,
        navigation: true,
        navigationText: [
            "<span class='icon icon-arrow-left'></span>",
            "<span class='icon icon-arrow-right'></span>"
        ],

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1]
    });

    // Woocommerce Add A Case
    $('[data-add-to-cart-multi]').on('click', function(e) {
        var $this = $(this);
        var quantity = +$this.attr('data-add-to-cart-multi') || 1;

        $this.parent().find('input.qty').val(quantity);
    });
    // header footer

    var session_data=$('input[name="session_data"]').val();
    //alert(session_data);
    if(session_data!=''){
        login_fild ='<a href="/function.php?act=logout" class="shop button small">LOGOUT</a>' ;
    }else{
        login_fild = '<a href="" class="shop button small" data-toggle="modal" data-target="#login_page">LOGIN</a>' ;
                    
    }
        var es= "es";
    var header =
        ' <div class="menu-wrap">' +
        '<div class="logo">' +
        '  <a class="logo-dark" href="/">' +
        ' <img class="logo-icon" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo-new.png">' +
        '</a>' +
        '<a class="logo-light" href="/">' +
        '<img class="logo-icon" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo-new.png">' +
        '</a>' +
        '</div>' +
        '<div class="menu">' +
        '<ul class="menu-list">' +
       
        // new menu
        '<li class="menu-item">' +
        '<a href="/" >Home</a>' +
        // '<div class="sub-menu" data-equalizer="">' +
        // '<div class="mega-menu" data-equalizer-watch="" style="width:50%">' +
        // ' <p class="title"><span class="dotted-underline">Patient  Information</span></p>' +
        // '<ul class="mega-menu-menu">' +

        // '<li class="menu-item">' +
        // ' <a href="/news/">News and Reviews</a>' +
        // ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/services/patient-safety/">Patient Safety</a>' +
        // ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/physician/">Physicians</a>' +
        // ' </li>' + 
        
        // '<li class="menu-item">' +
        // ' <a href="/insurance-acceptance/">Insurance Acceptance</a>' +
        // ' </li>' +  
 

        // '</ul>' +
        // ' </div>' +

        // '<div class="mega-menu" data-equalizer-watch="" style=" width:50%">' +
        // ' <p class="title"><span class="dotted-underline">About Us</span></p>' +
        // '<ul class="mega-menu-menu">' +

        

        //  '<li class="menu-item">' +
        // ' <a href="/ceo-message/">MESSAGE FROM THE CEO</a>' +
        // ' </li>' +


        //   '<li class="menu-item">' +
        // ' <a href="/services/nursing-philo/">NURSING PHILOSOPHY</a>' +
        // ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        // ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/your-care/">Your Care</a>' +
        // ' </li>' +
        
        

        // '</ul>' +
        // ' </div>' +

        // '</div>'+
        '</li>' +
// new menu end

        

        '<li class="menu-item has-child">' +
        '<a href="#" onclick="showMenu(2)">Services</a>' +
        '<div class="sub-menu" data-equalizer="">' +
        '<div class="mega-menu" data-equalizer-watch="">' +
        ' <p class="title"><span class="dotted-underline">SURGICAL SPECIALTIES</span></p>' +
        '<ul class="mega-menu-menu">' +

        '<li class="menu-item">' +
        ' <a href="/services/bariatric/">Bariatric</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/services/gastroenterology/">Gastroenterology</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/services/surgery/">General Surgery</a>' +
        ' </li>' + 
        
        '<li class="menu-item">' +
        ' <a href="/services/gynecology/">GYNECOLOGY</a>' +
        ' </li>' +  
 '<li class="menu-item">' +
        ' <a href="/services/orthopedic-surgery/">Orthopedics</a>' +
        ' </li>' +  
 '<li class="menu-item">' +
        ' <a href="/services/pain-management/">PAIN MANAGEMENT</a>' +
        ' </li>' +  

 '<li class="menu-item">' +
        ' <a href="/services/podiatry/">PODIATRY</a>' +
        ' </li>' +  

        '<li class="menu-item">' +
        ' <a href="/services/spinal-health/">SPINAL HEALTH</a>' +
        ' </li>' +  

        
        
        '<li class="menu-item">' +
        ' <a href="/services/urology/">UROLOGY</a>' +
        ' </li>' +  

        '<li class="menu-item">' +
        ' <a href="/services/vascular-surgery/"> Vascular Surgery </a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/services/vascular-surgery/" style="visibility:hidden;"> Testing </a>' +
        ' </li>' +  

        '</ul>' +
        ' </div>' +
        '<div class="mega-menu" data-equalizer-watch="">' +
        ' <p class="title"><span class="dotted-underline">Specialty Services</span></p>' +
        '<ul class="mega-menu-menu">' +

        // '<li class="menu-item">' +
        // ' <a href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/pdf/Referal-Forms.pdf" target="_blank">Referral form</a>' +
        // ' </li>' +

         '<li class="menu-item">' +
        ' <a href="/services/breakthru/">BreakThru program</a>' +
        ' </li>' +


          '<li class="menu-item">' +
        ' <a href="/services/physical-rehab/">Physical Rehab</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/services/sleep-lab/">Sleep Lab</a>' +
        ' </li>' +
        '<li class="menu-item">' +
        ' <a href="/services/specialty-clinic/">Specialty Clinic</a>' +
        ' </li>' +

      

        '<li class="menu-item">' +
        ' <a href="/services/weight-loss/">Weight Loss</a>' +
        ' </li>' +

'<li class="menu-item">' +
        '<a href="/services/wound-care/">Wound Care</a>' +
        '</li>' +
        

        '</ul>' +
        ' </div>' +
        '<div class="mega-menu" data-equalizer-watch="" style="width: 34% !important;">' +
        ' <p class="title"><span class="dotted-underline">Hospital Services</span></p>' +
        '<ul class="mega-menu-menu">' +


        '<li class="menu-item">' +
        ' <a class="title" href="/services/emergency-department/">Emergency Department </a>' +
        '</li>' +

'<li class="menu-item">' +
        ' <a class="title" href="/services/inpatient-services/">Inpatient Services</a>' +
        ' </li>' + 

       '<li class="menu-item">' +
        '<a class="title" href="/occupational-medicine/">OCCUPATIONAL MEDICINE </a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a class="title" href="/services/radiology/">Radiology </a>' +
        '</li>' +


        
        // '<li class="menu-item">' +
        // '<a class="title" href="https://www.doctalkgo.com/crescent/" target="_blank">TELEMEDICINE<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"> </a>' +
        // '</li>' +

        '<li class="menu-item">' +
        '<a class="title" href="https://cmclancaster.com/auto-accidents">AUTO ACCIDENTS </a>' +
        '</li>' +

        '<li class="has-child custom-item">' +
        '<span class="menu-item"><a class="title custom-item"  href="#" style="line-height: 20px !important;">worker &apos;s Comp </a></span>' +

        '<div class="sub-menu-base custom-class" id="work" data-equalizer="">' +

        '<div class="mega-menu" data-equalizer-watch="" style="width:100% !important;box-shadow: 1px 1px 5px #d6cece;">' +
        '<ul class="mega-menu-menu">' +


        
        

        '<li class="menu-item">' +
        '<a href="/workers-comp/workers-compensation-specialist">Workers Compensation Specialist</a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a href="/workers-comp/workers-compensation-primary-care">Workers Compensation Primary Care</a>' +
        '</li>' +

        '</ul>' +

        '</div>' +
        '</div>' +
         '</li>' +

        
         

        '</ul>' +
        '</div>' +


        '</div>'+
        '</li>' +

// new menu2


// new menu
        '<li class="menu-item has-child">' +
        '<a href="#" onclick="showMenu(3)">Resources </a>' +
        '<div class="sub-menu" data-equalizer="">' +
        '<div class="mega-menu" data-equalizer-watch="" style="width:50%">' +
        ' <p class="title"><span class="dotted-underline">Patient Information</span></p>' +
        '<ul class="mega-menu-menu">' +

        '<li class="menu-item">' +
        ' <a href="/news/events/">Events</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/bill-rights/">Bill of Rights</a>' +
        '</li>' +

        '<li class="menu-item">' +
        ' <a href="/insurance-acceptance/">Insurance Acceptance</a>' +
        ' </li>' +  
        
        '<li class="menu-item">' +
        ' <a href="/medical-records/">Medical Records</a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/services/patient-safety/">Patient Safety</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/physician/">Physicians</a>' +
        ' </li>' + 
        
        '<li class="menu-item">' +
        ' <a href="/pricing-transparency/">PRICING TRANSPARENCY</a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/news/reviews/">Reviews </a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/news/videos/">Videos </a>' +
        ' </li>' + 

        '</ul>' +
        ' </div>' +

        '<div class="mega-menu" data-equalizer-watch="" style=" width:50%">' +
        ' <p class="title"><span class="dotted-underline">About Us</span></p>' +
        '<ul class="mega-menu-menu">' +

        

         '<li class="menu-item">' +
        ' <a href="/ceo-message/">MESSAGE FROM THE CEO</a>' +
        ' </li>' +


          '<li class="menu-item">' +
        ' <a href="/services/nursing-philo/">NURSING PHILOSOPHY</a>' +
        ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        // ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/your-care/">Your Care</a>' +
        ' </li>' +
        
        

        '</ul>' +
        ' </div>' +
        
        '<div class="mega-menu" data-equalizer-watch="" style=" width:50%">' +
        ' <p class="title"><span class="dotted-underline">Health Care Professionals</span></p>' +
        '<ul class="mega-menu-menu">' +

        '<li class="menu-item">' +
        ' <a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        ' </li>' +

        '</ul>' +
        ' </div>' +


        '</div>'+
        '</li>' +
// new menu end


// '<li class="menu-item has-child">' +
//         '<a href="#" onclick="showMenu(3)">Resources - Billing</a>' +
//         '<div class="sub-menu" data-equalizer="" style="width:35% !important;left:150px;">' +
       
        
//         '<div class="mega-menu" data-equalizer-watch="" style="width: 100% !important;">' +
//         '<ul class="mega-menu-menu">' +


//         '<li class="menu-item">' +
//         ' <a class="title" href="/bill-rights/">Bill of Rights</a>' +
//         '</li>' +

//         '<li class="menu-item">' +
//         ' <a class="title" href="/pricing-transparency/">PRICING TRANSPARENCY</a>' +
//         ' </li>' + 


//          '</ul>' +
//         '</div>' +

//         // ' <div class="mega-menu" data-equalizer-watch="" style="height: 455px;">' +



//         // '</div>' +
//         // '<div class="mega-features" data-equalizer-watch="" style="height: 455px;">' +
//         // '<a class="mega-feature" href="#" style="background-image: url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/wel1.jpg)">' +
       
//         // '</a>' +
        
//         // '</div>' +


//         '</div>'+
//         '</li>' +
// new menu2 end



        '<li class="menu-item">' +
        ' <a href="/blog/">Blog</a>' +
        '</li>' +
        
        '<li class="menu-item">' +
        ' <a href="/C0NTACT_US/">Contact Us</a>' +
        '</li>' +


        ' <li class="menu-item has-child">' +
        ' <a href="#" onclick="showMenu(6)">Careers</a>' +
        '<div class="sub-menu" data-equalizer="" style="left: 498px;width: 23% !important;">' +
        ' <div class="mega-menu" data-equalizer-watch="" style="width:100% !important;">' +
        '<p class="title"><span class="dotted-underline">Overview</span></p>' +
        '<ul class="mega-menu-menu">' +
        
        '<li class="menu-item">' +
        '<a href="/careers/job-openings/">Job Openings</a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a href="/careers/">Overview</a>' +
        '</li>' +



        '</ul>' +
        '</div>' +
        // ' <div class="mega-menu" data-equalizer-watch="" style="height: 455px;">' +



        // '</div>' +
        // '<div class="mega-features" data-equalizer-watch="" style="height: 455px;">' +
        // '<a class="mega-feature" href="#" style="background-image: url(https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/wel3.jpg)">' +
        // // '<div class="mega-feature-content">' +
        // // '<p class="sub-title">Crescent</p>' +
        // // '<p class="title">text</p>' +
        // // '</div>' +
        // '</a>' +
        
        // '</div>' +

        '</div>' +
        '</li>' +


        '</ul>' +
        '</div>' +
       //  ' <div class="secondary-menu">' +


       // '<a href="" class="shop button small" data-toggle="modal" data-target="#login_page">LOGIN</a>' +

		

       //  '</div>' +

// ' <div class="secondary-menu" style="margin-left: 78px;">' +
// '<a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle" style="font-size: 32px;"></a>' +
// '<a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle" style="font-size: 32px;"></a>'+
// '<a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle" style="font-size: 32px;"></a>'+
// '<a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="fa fa-youtube-play fa-2x"></i></a>'+

// '</div>'+
// ' <div class="secondary-menu"><div id="google_translate_element"></div>' +

// '<ul class="list-unstyled ultrans">'+
//                 '<li class="ct-language li1"><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>'+
//                 '<li class="ct-language"><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"></a>'+
                
//                 '</li>'+
// '</ul>'+
'</div>' +
        '</div>'+
        ' <div class="menu-wrap" id="corona" style="background-color:#ff7f30;width:100%;position: absolute;left: 0;text-decoration:underline;">' +
        '<h5 style="padding-left:25px;text-transform:capitalize;"><a href="/coronavirus/" style="color:#fff;"><i class="fa fa-exclamation-triangle" style="padding:0px 10px;"></i>COVID-19 : <span style="color:#fff;">What you need to know about the current outbreak of 2019 novel coronavirus</span>&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></h5>' +
        '</div>';

        // "<script type='text/javascript'>function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:'en',layout:google.translate.TranslateElement.FloatPosition.TOP_LEFT},'google_translate_element')}function triggerHtmlEvent(e,t){var n;document.createEvent?((n=document.createEvent('HTMLEvents')).initEvent(t,!0,!0),e.dispatchEvent(n)):((n=document.createEventObject()).eventType=t,e.fireEvent('on'+n.eventType,n))}jQuery('.lang-select').click(function(){console.log('clicked');var e=jQuery(this).attr('data-lang');jQuery('.goog-te-combo').val(e),location.reload()});</script>";

    $('#main').html(header);
// new code strat
// var translatediv = 
//     '<div class="exbar">'+
        
//     // '<div class="secondary-menu">' +
//     // '<div class="translate-timing-div">'+
//     // 'Monday – Sunday <span style="">Open 24/7</span> <a href="tel:972-230-8888"> (972) 230-8888</a>'+
//     // '</div>'+
    
//     '<div class="translateselect" id="google_translate_element">'+
//     '</div>'+
//     '</div>' +
//     '</div>';
//     $('#translatediv').html(translatediv);
    // new code end
    var selected_lang="en";
    var navbar =
        '<div class="row">' +
        '<div class="column">' +
        '<div class="menu-wrap">' +
        '<div class="logo">' +
        '<a class="logo-dark" href="/">' +
        '<img class="logo-text" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo-new.png">' +
        '</a>' +
        '<a class="logo-light" href="/">' +
        '<img class="logo-text" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo-new.png">' +
        '</a>' +
        '</div>' +
        
        // ' <div class="secondary-menu"><div id="google_translate_element"></div>' +

// '<ul class="list-unstyled ultrans">'+
//                 '<li class="ct-language li1"><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://www.solodev.com/assets/google-translate/flag-usa.png" alt="USA"></a></li>'+
//                 '<li class="ct-language"><a href="#googtrans(en|es)" class="lang-es lang-select" data-lang="es"><img src="https://www.solodev.com/assets/google-translate/flag-mexico.png" alt="MEXICO"></a>'+
                
//                 '</li>'+
// '</ul>'+
// '</div>' +
        '<div class="menu-buttons">' +
        '<a class="menu-button" href="/"><span class="icon icon-menu"></span></a>' +
        '</div>' +
        '<div class="menu" style="height: 620px;">' +
        '<ul class="menu-list menu" style="overflow: auto; height: 620px;">' +
        '<li class="menu-item"><a href="/">Home</a></li>' +

        
      //   '<li class="menu-item menu-item-has-children">' +
      //   '<a href="#">Patient Information</a>' +
      //   '<ul class="sub-menu" style="height: 620px;">' +
        

      //   '<li class="menu-item">' +
      //   '<a href="/news/">News & Reviews</a>' +
      //   '</li>' +

      // '<li class="menu-item">' +
      //   '<a href="/services/patient-safety/">Patient Safety</a>' +
      //   '</li>' +


      //   '<li class="menu-item">' +
      //   '<a href="/physician/">Physicians</a>' +
      //   '</li>' +


      //   '<li class="menu-item">' +
      //   '<a href="/insurance-acceptance/">Insurance Acceptance</a>' +
      //   '</li>' +

      //   '</ul>' +
      //   '</li>' +


      //   '<li class="menu-item menu-item-has-children">' +
      //   '<a href="#">About Us</a>' +
      //   '<ul class="sub-menu" style="height: 620px;">' +


      //   '<li class="menu-item">' +
      //   '<a href="/ceo-message/">MESSAGE FROM THE CEO</a>' +
      //   '</li>' +
      //   '<li class="menu-item">' +
      //   '<a href="/services/nursing-philo/">NURSING PHILOSOPHY</a>' +
      //   '</li>' +
        
      //   '<li class="menu-item">' +
      //   '<a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
      //   '</li>' +

      //   '<li class="menu-item">' +
      //   '<a href="/your-care/">Your Care</a>' +
      //   '</li>' +
        
      //   '</ul>' +
      //   '</li>' +



        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">SURGICAL SPECIALTIES</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +

        '<li class="menu-item">' +
        ' <a href="/services/bariatric/">Bariatric</a>' +
        ' </li>' +

       '<li class="menu-item">' +
        ' <a href="/services/gastroenterology/">Gastroenterology</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/services/surgery/">General Surgery</a>' +
        ' </li>' + 
        
        '<li class="menu-item">' +
        ' <a href="/services/gynecology/">GYNECOLOGY</a>' +
        ' </li>' +  
 '<li class="menu-item">' +
        ' <a href="/services/orthopedic-surgery/">Orthopedics</a>' +
        ' </li>' +  
 '<li class="menu-item">' +
        ' <a href="/services/pain-management/">PAIN MANAGEMENT</a>' +
        ' </li>' +  

 '<li class="menu-item">' +
        ' <a href="/services/podiatry/">PODIATRY</a>' +
        ' </li>' +  

        '<li class="menu-item">' +
        ' <a href="/services/spinal-health/">SPINAL HEALTH</a>' +
        ' </li>' +  

        '<li class="menu-item">' +
        ' <a href="/services/urology/">UROLOGY</a>' +
        ' </li>' +  

         '<li class="menu-item">' +
        ' <a href="/services/vascular-surgery/">Vascular Surgery</a>' +
        ' </li>' +  
        
        '<li class="menu-item">' +
        ' <a href="/services/vascular-surgery/" style="visibility:hidden;"> Testing</a>' +
        ' </li>' + 


        '</ul>' +
        '</li>' +




     '<li class="menu-item menu-item-has-children">' +
        '<a href="#">SPECIALTY SERVICES</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +

        // '<li class="menu-item">' +
        // ' <a href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/pdf/Referal-Forms.pdf" target="_blank">Referral form</a>' +
        // ' </li>' +

        '<li class="menu-item">' +

        ' <a href="/services/breakthru/">BreakThru program</a>' +
        ' </li>' +

         '<li class="menu-item">' +
        ' <a href="/services/physical-rehab/">Physical Rehab</a>' +
        ' </li>' +

         '<li class="menu-item">' +
        ' <a href="/services/sleep-lab/">Sleep Lab</a>' +
        ' </li>' +
        '<li class="menu-item">' +
        ' <a href="/services/specialty-clinic/">Specialty Clinic</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/services/weight-loss/">Weight Loss</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        '<a href="/services/wound-care/">Wound Care</a>' +
        '</li>' +
        
        '</ul>' +
        '</li>' +


        
        


        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">Hospital Services</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +
         '<li class="menu-item">' +
        ' <a href="/services/emergency-department/">Emergency Department </a>' +
        '</li>' +

         '<li class="menu-item">' +
        ' <a href="/services/inpatient-services/">Inpatient Services</a>' +
        ' </li>' + 

         '<li class="menu-item">' +
        '<a href="/occupational-medicine/">Occupational Medicine</a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a href="/services/radiology/">Radiology </a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a href="/workers-comp/workers-compensation-specialist">Workers Compensation Specialist</a>' +
        '</li>' +

        '<li class="menu-item">' +
        '<a href="/workers-comp/workers-compensation-primary-care">Workers Compensation Primary Care</a>' +
        '</li>' +

        



        // '<li class="menu-item menu-item-has-children">' +
        // '<a href="#">worker &apos;s Comp</a>' +
        // '<ul class="sub-menu-base" style="height: 620px;">' +
        // '<li class="">' +
        // '<a href="http://spacegm.com/crescent/workers-comp/workers-compensation-specialist">Workers Compensation Specialist</a>' +
        // '</li>' +
        // '<li class="">' +
        // '<a href="http://spacegm.com/crescent/workers-comp/workers-compensation-primary-care">Workers Compensation Primary Care</a>' +
        // '</li>' +
        // '</ul>' +
        // '</li>' +
        

        // '<li class="menu-item">' +
        // '<a href="https://www.doctalkgo.com/crescent/" target="_blank">TELEMEDICINE <img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        // '</li>' +


        '<li class="menu-item">' +
        '<a href="https://cmclancaster.com/auto-accidents">AUTO ACCIDENTS </a>' +
        '</li>' +
       
        
        '</ul>' +
        '</li>' +

        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">Patient Information</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +

         '<li class="menu-item">' +
        ' <a href="/news/events/">Events</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/bill-rights/">Bill of Rights</a>' +
        '</li>' +

        '<li class="menu-item">' +
        ' <a href="/insurance-acceptance/">Insurance Acceptance</a>' +
        ' </li>' +  
        
        '<li class="menu-item">' +
        ' <a href="/medical-records/">Medical Records</a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/services/patient-safety/">Patient Safety</a>' +
        ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/physician/">Physicians</a>' +
        ' </li>' + 
        
        '<li class="menu-item">' +
        ' <a href="/pricing-transparency/">PRICING TRANSPARENCY</a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/news/reviews/">Reviews </a>' +
        ' </li>' + 

        '<li class="menu-item">' +
        ' <a href="/news/videos/">Videos </a>' +
        ' </li>' + 
        

        '</ul>' +
        '</li>' +

        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">About Us</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +

         '<li class="menu-item">' +
        ' <a href="/ceo-message/">MESSAGE FROM THE CEO</a>' +
        ' </li>' +


          '<li class="menu-item">' +
        ' <a href="/services/nursing-philo/">NURSING PHILOSOPHY</a>' +
        ' </li>' +

        // '<li class="menu-item">' +
        // ' <a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        // ' </li>' +

        '<li class="menu-item">' +
        ' <a href="/your-care/">Your Care</a>' +
        ' </li>' +
        

        '</ul>' +
        '</li>' +

        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">Health Care Professionals</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +

        '<li class="menu-item">' +
        ' <a href="/Referral-forms/">REFERRAL FORMS<img src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/new.png" style="width:40px;position:relative;top:-11px;"></a>' +
        ' </li>' +     

        '</ul>' +
        '</li>' +

         '<li class="menu-item">' +
        '<a href="/blog/">Blog</a>' +
        '</li>' +
        '<li class="menu-item">' +
        '<a href="/C0NTACT_US/">Contact</a>' +
        '</li>' +

        '<li class="menu-item menu-item-has-children">' +
        '<a href="#">Careers</a>' +
        '<ul class="sub-menu" style="height: 620px;">' +
        '<li class="menu-item">' +
        '<a href="/careers/job-openings/">Job Openings</a>' +
        '</li>' +
        '<li class="menu-item">' +
        '<a href="/careers/">Overview</a>' +
        '</li>' +
        

        '</ul>' +
        '</li>' +
        // '<li class="menu-footer secondary-menu">' +

        //     login_fild +
        // '</li>' +

        '</ul>' +
        

        

        '</div>' +
        '<div class="menu-search">' +
        '<div class="row">' +
        '<div class="column search-panel">' +
        '<form action="/login/" autocomplete="off" method="get">' +
        '<input type="text" name="s" placeholder="Enter keyword to search">' +
        '<label>' +
        '<input type="submit">' +
        '<span class="icon-search"></span>' +
        '</label>' +
        // '<input type="hidden" name="v" value="c86ee0d9d7ed">' +
        '</form>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="row" id="corona" style="background-color:#ff7f30">' +
        '<div class="column" style="padding:10px;">' +
        '<marquee><a href="/coronavirus/" style="font-size:20px;color:#fff;text-decoration:underline;"><i class="fa fa-exclamation-triangle" style="padding:0px 10px;"></i>COVID-19 : What you need to know about the current outbreak of 2019 novel coronavirus&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></marquee>'
        '</div>' +
        '</div>' ;
        // "<script type='text/javascript'>function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:'en',layout:google.translate.TranslateElement.FloatPosition.TOP_LEFT},'google_translate_element')}function triggerHtmlEvent(e,t){var n;document.createEvent?((n=document.createEvent('HTMLEvents')).initEvent(t,!0,!0),e.dispatchEvent(n)):((n=document.createEventObject()).eventType=t,e.fireEvent('on'+n.eventType,n))}jQuery('.lang-select').click(function(){console.log('clicked');var e=jQuery(this).attr('data-lang');jQuery('.goog-te-combo').val(e),location.reload()});</script>";
    $('#mobile').html(navbar);







var footer ='<div class="container-fluid p-2 custom-back">'+

'<div class="row text-left">'+


'<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+

    '<div class="inner-address">'+
     '<ul class="ul-list">'+

     '<li class="li-list">Crescent Medical Center Lancaster</li>'+

     '<li class="li-list">2600 W. Pleasant Run Rd.</li>'+

     '<li class="li-list">Lancaster, TX 75146</li>'+

     '<li class="li-list">'+

      '<a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a>'+

    '</li>'+

'</ul>'+

'</div>'+

  '</div>'+



  '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+



    '<div class="inner-address">'+

     '<ul class="ul-list">'+
     '<li class="li-list"><a href="#" class="footer-link">Monday - Sunday</a></li>'+
     '<li class="li-list"><a href="#" class="footer-link">Open 24/7</a></li>'+
     '<li class="li-list"><a href="tel:9722308888" class="iBridge footer-link" class="footer-link iBridge">(972) 230-8888</a></li>'+
     
    '</ul>'+

    '</div>'+


  '</div>'+



'</div>'+

'</div>'+



'<div class="container-fluid p-2 custom-back">'+
  '<div class="row">'+



    '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+

    '<div class="inner-address">'+
     '<ul class="ul-list">'+

     '<li class="li-list">Crescent Medical Center O. R. HOPD</li>'+

     '<li class="li-list">729 W. Bedford Rd.</li>'+

     '<li class="li-list">Hurst, TX 76053</li>'+

     '<li class="li-list">'+

      '<!-- <a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a> -->'+

    '</li>'+

'</ul>'+

'</div>'+

  '</div>'+



  '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+



    '<div class="inner-address">'+

     '<ul class="ul-list">'+
     '<li class="li-list"><a href="#" class="footer-link">Monday - Friday</a></li>'+
     '<li class="li-list"><a href="#" class="footer-link">7:30 A.M. - 3:00 P.M.</a></li>'+
     '<li class="li-list"><a href="tel:8172821001" class="iBridge footer-link">(817) 282-1001</a></li>'+
     
   '</ul>'+

    '</div>'+


  '</div>'+




  '<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center p-3" style="padding-top: 30px;">'+
    '<div class="inline-links">'+
  
'<a href="/your-care/" class="inline-inline-links footer-link">Your Care</a><span class="pipes">|</span>'+
'<a href="/bill-rights/" class="inline-inline-links footer-link">Bill of Rights</a><span class="pipes">|</span>'+
'<a href="/workers-comp/" class="inline-inline-links footer-link">Workers Comp</a><span class="pipes">|</span>'+

'<a href="/physician/" class="inline-inline-links footer-link">Physicians</a><span class="pipes">|</span>'+
'<a href="/C0NTACT_US/" class="inline-inline-links footer-link">Contact Us</a><span class="pipes">|</span>'+
'<a href="/news/" class="inline-inline-links footer-link">News & Events</a><span class="pipes">|</span>'+
'<a href="/blog/" class="inline-inline-links footer-link">Blog</a>'+


'</div>'+
'</div>'+




'<div class="col-sm-12 col-xl-6 col-lg-6 text-center" style="padding-top: 35px;">'+
   '<div class="text-center clearfix">'+
 ' <div class="text-left" style="position: relative; left:0px;">Designed by <a href="https://ibridgedigital.com/" target="_blank" rel="nofollow">iBridge Digital</a></div>'+

 ' </div>'+
   '</div>'+



   '<div class="col-sm-12 col-xl-6 col-lg-6" style="padding-top: 35px;">'+
   '<div class="text-right clearfix padding">'+


    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-facebook" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-twitter" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram instagram" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-linkedin" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-youtube-play youtube" style="color: #04244a;"></i></a>'+
   
  
   '</div>'+
   '</div>'+


'</div>'+
'</div>'+





























    // var footer = '<div class="row">' +
    //     '<div class="large-11 large-offset-1 ">' +

    //     ' <div class="cta-content content-block-content small-12 large-4 column" >' +
    //     '<p>Crescent Medical Center Lancaster' +
    //     ' <br>2600 W. Pleasant Run Rd.<br>' +
    //     'Lancaster, TX  75146' +
    //     '<br>' +
    //     '<a href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB" target="_blank">Get Directions</a>' +
    //     '</p>' +


    //     '</div>' +


       // ' <div class="cta-content content-block-content small-12 large-4 column" >' +
       //  '<p style="font-size:17px;">Wednesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:30 AM - 3:00 PM' +
       //  '<br>Thurday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:30 AM - 3:00 PM' +
       //  '<br>Friday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:30 AM - 3:00 PM'+
       //  '<br>Saturday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; closed'+
       //  '<br>Sunday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;closed'+
       //  '<br>Munday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:30 AM - 3:00 PM'+
       //  '<br>Tuesday &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7:30 AM - 3:00 PM<br><br>'+
       //  'Phone: <a href="tel:(817) 282 1001" target="_blank">(817) 282 1001</a>' +
       //  '<br><br>' +
       //  '<a href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB" target="_blank">Get Directions</a>' +
       //  '</p>' +


       //  '</div>' +





// '<div class="cta-content content-block-content small-12 large-4 column">' +
//         '<p id="grey"><a href="/your-care/">Your Care</a><br>' +
//         '<a href="/bill-rights/">Bill of Rights</a><br>' +
//         '<a href="/workers-comp/">Worker&apos;s Comp</a><br>' +
//         '<a href="/physician/">Physicians</a><br>' +
//         '<a href="/C0NTACT_US/">Contact Us</a><br>' +
//         '<a href="/news/">News & Events </a><br>' +
//          '<a href="/blog/">Blog </a></p>' +
         
//         '</div>' +










        
        
        // '</div>' +


        // '<div class="cta-content content-block-content small-12 large-4 column custom-footer" style="position:relative;left:104px;">' +
        // '<p id="grey" class="l1">' +
        // 'Monday  &ndash; Sunday<br>' +
        // 'Open 24/7<br>' +

        // '' +
        // '<a href="tel:972-230-8888">(972) 230-8888</a></p>' +


        // '</div>' +

        // '</div>' +
        // '<div class="footer-brand">' +
        
        // '<p class="footer-end-para" style="font-size: 16px;display: inline-block;">Designed by '+ 
        // '<a href="https://ibridgedigital.com/" target="_blank" style="color: #8bbdf5;">' +
        //  'iBridge Digital</a>' +
        // '</p>' +
        // '<div class="subscribe-social" style="float:right;margin-top:0">' +
        //                   '<a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>' +
        //                    '<a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>' +
        //                    '<a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>' +
        //                     '<a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="youtubefooter fa fa-youtube-play" style="color: #04244a;"></i></a>' +

        //                     '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram"  style="color: #04244a;"></i></a>' +
        //                    '<span class="subscribe-hash-tag">#CMCL</span>' +
        //                 '</div>'+
                        
        '</div>';



    $('#footer').html(footer);



    // end

    // Toggle Contact Map















'<div class="container-fluid p-2 custom-back">'+

'<div class="row text-left">'+


'<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+

    '<div class="inner-address">'+
     '<ul class="ul-list">'+

     '<li class="li-list">Crescent Medical Center Lancaster</li>'+

     '<li class="li-list">2600 W. Pleasant Run Rd.</li>'+

     '<li class="li-list">Lancaster, TX 75146</li>'+

     '<li class="li-list">'+

      '<a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a>'+

    '</li>'+

'</ul>'+

'</div>'+

  '</div>'+



  '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+



    '<div class="inner-address">'+

     '<ul class="ul-list">'+
     '<li class="li-list"><a href="#" class="footer-link">Monday - Sunday</a></li>'+
     '<li class="li-list"><a href="#" class="footer-link">Open 24/7</a></li>'+
     '<li class="li-list"><a href="tel:9722308888" class="iBridge footer-link" class="footer-link iBridge">(972) 230-8888</a></li>'+
     
    '</ul>'+

    '</div>'+


  '</div>'+



'</div>'+

'</div>'+



'<div class="container-fluid p-2 custom-back">'+
  '<div class="row">'+



    '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+

    '<div class="inner-address">'+
     '<ul class="ul-list">'+

     '<li class="li-list">Crescent Medical Center O. R. HOPD</li>'+

     '<li class="li-list">729 W. Bedford Rd.</li>'+

     '<li class="li-list">Hurst, TX 76053</li>'+

     '<li class="li-list">'+

      '<!-- <a class="footer-link iBridge" href="https://www.google.com/maps/place/Crescent+Medical+Center+Lancaster/@32.602923,-96.812492,16z/data=!4m5!3m4!1s0x0:0xa68c5e2cc2158de3!8m2!3d32.6029232!4d-96.8124921?hl=en-GB">Get Directions</a> -->'+

    '</li>'+

'</ul>'+

'</div>'+

  '</div>'+



  '<div class="col-md-6 col-sm-12 col-lg-4 col-xl-4">'+



    '<div class="inner-address">'+

     '<ul class="ul-list">'+
     '<li class="li-list"><a href="#" class="footer-link">Monday - Friday</a></li>'+
     '<li class="li-list"><a href="#" class="footer-link">7:30 A.M. - 3:00 P.M.</a></li>'+
     '<li class="li-list"><a href="tel:8172821001" class="iBridge footer-link">(817) 282-1001</a></li>'+
     
   '</ul>'+

    '</div>'+


  '</div>'+




  '<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-center p-3" style="padding-top: 30px;">'+
    '<div class="inline-links">'+
  
'<a href="/your-care/" class="inline-inline-links footer-link">Your Care</a><span class="pipes">|</span>'+
'<a href="/bill-rights/" class="inline-inline-links footer-link">Bill of Rights</a><span class="pipes">|</span>'+
'<a href="/workers-comp/" class="inline-inline-links footer-link">Workers Comp</a><span class="pipes">|</span>'+

'<a href="/physician/" class="inline-inline-links footer-link">Physicians</a><span class="pipes">|</span>'+
'<a href="/C0NTACT_US/" class="inline-inline-links footer-link">Contact Us</a><span class="pipes">|</span>'+
'<a href="/news/" class="inline-inline-links footer-link">News & Events</a><span class="pipes">|</span>'+
'<a href="/blog/" class="inline-inline-links footer-link">Blog</a>'+


'</div>'+
'</div>'+




'<div class="col-sm-12 col-xl-6 col-lg-6 text-center" style="padding-top: 35px;">'+
   '<div class="text-center clearfix">'+
 ' <div class="text-left" style="position: relative; left:0px;">Designed by <a href="https://ibridgedigital.com/" target="_blank" rel="nofollow">iBridge Digital</a></div>'+

 ' </div>'+
   '</div>'+



   '<div class="col-sm-12 col-xl-6 col-lg-6" style="padding-top: 35px;">'+
   '<div class="text-right clearfix padding">'+


    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-facebook" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-twitter" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram instagram" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-linkedin" style="color: #04244a;"></i></a>'+
    '<a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-youtube-play youtube" style="color: #04244a;"></i></a>'+
   
  
   '</div>'+
   '</div>'+


'</div>'+
'</div>'+






















    $('[data-show-contact-map]').on('click', function(e) {
        e.preventDefault();

        var $this = $(this);
        var $container = $('.contact-aside');

        $container.toggleClass('map-visible');

        if ($container.is('.map-visible')) {
            $this.text('Hide Map');
        } else {
            $this.text('Show Map');
        }
    });


    

    // Woocommerce Quantity Control
    function woocommerceQualityControls() {
        $('[data-quantity-control]').each(function() {
            var $container = $(this);
            var $input = $container.find('input.qty');
            var $addBtn = $container.find('button.qty-add-btn');
            var $subtractBtn = $container.find('button.qty-subtract-btn');

            var update = function() {
                var val = +$input.val();
                var step = +$input.attr('step');
                var min = +$input.attr('min') || 0;
                var max = +$input.attr('max') || 99999999999;

                if (val < min) {
                    val = min;
                    $input.val(val);
                } else if (val > max) {
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
                $('div.woocommerce > form input[name="update_cart"]').prop('disabled', false);
            });

            $subtractBtn.off('click.tde').on('click.tde', function(e) {
                e.preventDefault();
                var val = +$input.val() || 0;
                $input.val(val - 1);
                update();
                $('div.woocommerce > form input[name="update_cart"]').prop('disabled', false);
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

