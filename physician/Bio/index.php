<?php
session_start();
include('../../message.php');
include('../../db.php');?>
<!DOCTYPE html>
<html lang="en">
   <!--<![endif]-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta class="foundation-mq-small">
      <meta class="foundation-mq-small-only">
      <meta class="foundation-mq-medium">
      <meta class="foundation-mq-medium-only">
      <meta class="foundation-mq-large">
      <meta class="foundation-mq-large-only">
      <meta class="foundation-mq-xlarge">
      <meta class="foundation-mq-xlarge-only">
      <meta class="foundation-mq-xxlarge">
      <meta class="foundation-data-attribute-namespace">
      <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Physicians and Surgeons - Crescent Medical Center Lancaster</title>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBTCQX6');</script>
<!-- End Google Tag Manager -->
      <!-- favicon & links -->
      <link rel="shortcut icon" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favicon.png" type="image/x-icon">
     
      <meta name="description" content="At CMCL, Our physician, Surgeons and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients" >
        <!-- Open Graph data -->
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="CMC Lancaster" >

    <meta property="og:type" content="website">
    <meta property="og:title" content="Physicians and Surgeons - Crescent Medical Center Lancaster" >
    <meta property="og:description"  content="At CMCL, Our physician, Surgeons and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients">
    <!-- Open Graph data -->
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta name="twitter:title" content="Physicians and Surgeons - Crescent Medical Center Lancaster"  >
    <meta name="twitter:description" content="At CMCL, Our physician, Surgeons and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients" >
    <!-- Twitter Card data -->
   
    <link href="" rel="canonical">
    <link rel="alternate" href="" hreflang="en-US" />
      
      <style type="text/css">
         dl.variation, dl.variation p
         {  font-size: .875rem !important;
         letter-spacing: 1px;
         line-height: 16px;
         margin-bottom: 2%; 
         }
         .order-total .amount::before { 
         content: "AUD";
         margin-bottom:20%;
         padding-right:2px;
         font-size:80%;
         }
         .order-total .includes_tax .amount::before { 
         content: "";
         margin-bottom:0;
         padding-right:0px;
         font-size:100%;
         }
         .woocommerce-checkout .checkout-submit-button .disclaimer {
         -webkit-box-sizing: content-box;
         -moz-box-sizing: content-box;
         box-sizing: content-box;
         width: auto;
         padding: 28px;
         overflow: hidden;
         border: 2px solid #eee;
         text-align: left;
         -o-text-overflow: ellipsis;
         text-overflow: ellipsis;
         margin-top: -15px;
         }
         .woocommerce-checkout .checkout-submit-button p:first-child:before{
         content: 'Terms & Conditions \A';
         white-space: pre; /* or pre-wrap */
         color: #261c02;
         cursor: pointer;
         font-weight: 700;
         line-height: 2.2;
         margin-bottom: 0;
         text-transform: uppercase;
         margin-bottom:15px;
         }
         .datagrid table { 
         border-collapse: collapse; 
         text-align: left; 
         width: 100%; } 
         .datagrid {
         overflow: hidden; 
         }
         .datagrid table td, .datagrid table th { 
         padding: 10px 10px; 
         }
         .datagrid table tbody td { 
         }
         .datagrid table tbody .alt td { background: #E1EEF4; 
         color: #00496B; 
         }
         .datagrid table tbody td:first-child { 
         border-left: none; 
         }
         .datagrid table tbody tr:last-child td {
         border-bottom: none; 
         }
      </style>
      <!-- /SEO Ultimate -->
      <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
      <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/styles.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/jquery-ui.min.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/frontend.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/woocommerce-layout.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/woocommerce-smallscreen.css" media="only screen and (max-width: 768px)">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/style.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/style(1).css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/lightcase.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/main.min.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/frontend(1).css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/menu.css">

      <link rel="stylesheet" href="../../assets/css/footer.css">

      <!-- testimo -->
      <!-- testimo end -->
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery-migrate.min.js"></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var mailchimp_public_data = {"site_url":""};
         };
         /* ]]> */
      </script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/mailchimp-woocommerce-public.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/script.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/modernizr.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/client-detect.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/lightcase.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/frontend.js"></script>
      <meta name="referrer" content="always">
      <script type="text/javascript">
         window.ajaxurl = '';
      </script>
      <!-- Facebook Pixel Code -->
      <script></script>
      <!-- End Facebook Pixel Code -->
     <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '384637232098666');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=384637232098666&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
   </head>
   <body class="page-template page-template-template-landing page-template-template-landing-php page page-id-91 page-parent our-story">
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBTCQX6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <!-- language translator header start -->
      <div id="translatediv"></div>
      <div class="outer-container">
        <div style="position:relative;">
           <header class="header desktop-menu desktop-menu-mega" id="main">
        
        </header>
        <header class="header mobile-menu" id="mobile">
        </header>
        <div id="google_translate_element"></div>
      </div>
       <!--  language translator header end -->
         <main id="main" class="main-content" role="main">
             <section class="page-banner page-banner-landing full-page">
               <div class="bg bg-image"
                  style="background-image: url('https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/biohome.jpg');
                  background-position: 49% 48%;"
                  ></div>
               <div class="row">
                  <div class="column">
                     <div class="page-banner-content">
                        <h1><span class="dotted-underline">Physicians
</span></h1>
                        <p>
                        
                        <p>
                           <br />
                        </p>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="page-banner-social">
                <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon p-rel"><i class="fa fa-youtube-play"></i></a>
                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="insta fa fab fa-instagram"></i></a>
                     
               </div>
            </section>
            <section style="background-color: #CCD9CE;" class="content-block content-block-content-right-image physician-sec" data-equalizer>
               <div class="content-block-content-wrap physician-cont phycmm" data-equalizer-watch >
                  <?php
                  if(!empty($_REQUEST['physician_id'])){
                     $physician_id=base64_decode($_REQUEST['physician_id']);
                     $data1=mysqli_query($conn1,"SELECT * FROM physicians WHERE `id`='$physician_id'");
                     $data=mysqli_fetch_array($data1);
                  ?>
                  <div class="content-block-content phycmm" style="background-color: #CCD9CE;" >
                     <p class="title" style="margin-bottom: 1%;"><?php echo $data['first_middle_name'].' '.$data['last_name'];?></p>
                     <p class="sub-title"><b style="font-size: 1.2rem;
    color: #0c66d2"><?php echo $data['specialty'];?></b></p>
                     <br>
                     <div class="text" style="color: #143e6c; font-weight: bold;">
                        <?php if(!empty($data['address'])) { echo $data['address'];} else{echo "";}?>
                     </div>
                     <div class="text" style="color: #143e6c; font-weight: bold;">
                        <?php if(!empty($data['city'])) { echo $data['city'];} else{echo "";}?>
                     </div>
                     <div class="text" style="color: #143e6c; font-weight: bold;">
                        <?php if(!empty($data['state'])) { echo $data['state'];} else{echo "";}?>
                     </div>
                     <div class="text" style="color: #143e6c; font-weight: bold;">
                        <?php if(!empty($data['zip'])) { echo $data['zip'];} else{echo "";}?>
                     </div>
                     <label style="font-size: 1.1rem;">Office : </label> <p class="sub-title" style="color: #ee3124"><b><?php if(!empty($data['office_phone'])) { echo $data['office_phone'];} else{echo "";}?></b></p>
                     <label style="font-size: 1.1rem;">Fax : </label> <p class="sub-title" style="color: #ee3124"><b><?php if(!empty($data['fax'])) { echo $data['fax'];} else{echo "";}?></b></p>
                     <br>

                    <div class="text">
                        <?php if(!empty($data['description'])) { echo $data['description'];} else{echo "";}?>
                     </div>
                     
                  </div>
                  <?php }?>
               </div>
               <div class="content-block-content-wrap" style="
                  background-color: #CCD9CE;
                  /*background-position: 10% 70%;*/
                  background-size:cover;"
                  data-equalizer-watch
                  >
                <div class="content-block-content phycmm">
                     <?php 
                     if(!empty($data['image'])){
                     ?>
                    <img class="phys-body-img" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/physician-images/<?php echo $data['image'];?>" > 
                     <?php }?>  
                  </div>
                  </div>
            </section>
            <!-- Edit regions/_content-block-image-content -->
            <!-- TEstimo -->
            <!-- TEstimo end -->
            <section class="latest-news-region pad-l  grey-bg show-icon">
               <!-- <div class="latest-news-region-inner">
                  <div class="row">
                     <div class="column latest-news-region-content">
                          <div class="subscribe-social">
                          <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="youtubefooter fa fa-youtube-play"></i></a>

                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram"></i></a>
                           <span class="subscribe-hash-tag">#CMCL</span>
                        </div>
                     </div>
                  </div>
               </div> -->
            </section>
         </main>
         <footer>
         </footer>
      </div>

     <!--  language translator js start-->

     <?php include "../../footer.php"?>


     <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({includedLanguages: 'en,es', multilanguagePage: true, layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}

$('document').ready(function () {
    var iFrameID = document.getElementById('idIframe');
      if(iFrameID) {
           var cont =  iFrameID.contentWindow.document.body || frame.contentDocument.body
            // here you can make the height            
            iFrameID.height = cont.scrollHeight + "px";
      }   

    // RESTYLE THE DROPDOWN MENU
    $('#google_translate_element').on("click", function () {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            .css({
                'color': '#544F4B',
                'font-family': 'Roboto',
                'width':'100%',
                'font-size':'unset'
                // 'border-bottom': '1px solid rgba(128, 128, 128, 0.2)'
            });
        $("iframe").contents().find(".goog-te-menu2-item div")
            .css({
                'border-bottom': '1px solid rgba(128, 128, 128, 0.2)'
            });
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
      
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
      
        // Change the padding of the languages
        $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '2px');
        $("iframe").contents().find('.goog-te-menu2-item div').css('font-size', '9pt');
        $("iframe").contents().find('.goog-te-menu2-item div').css('border', ' 1px solid rgba(128, 128, 128, 0.2)');
        // $("iframe").contents().find('.goog-te-menu2-item div:last-child').css('border-top', '0px');
               
         $("iframe").contents().find('.goog-te-menu2-item div').css('width','unset');
        // Change the width of the languages
        $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
        $("iframe").contents().find('td').css('width', '100%');
      
        // Change hover effects
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            $(this).css('background-color', '#43b2ec').find('span.text').css('color', 'white');
        }, function () {
            $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

        // Change the iframe's box shadow
        // $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
        
      
      
        // Change the iframe's size and position?
        $(".goog-te-menu-frame").css({
            'height': '100%',
            'width': '100%',
            'top': '0px',
            'box-shadow':'none',
            '-webkit-box-shadow':'none',
            'left': '1190px'
            // 'border':' 1px solid rgba(128, 128, 128, 0.2)'
        });
        // Change iframes's size
        $("iframe").contents().find('.goog-te-menu2').css({
            // 'height': '100%',
            'width': '100%'
        });
    });
     $('.goog-te-menu2-item').on("click", function () {
        $("iframe").contents().find('.goog-te-menu-frame').css ('height', '100px !important');
     });
      
});
// $('.when-element-with-this-class').ready(function() {
//     alert( "ready!" );
// });
</script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- language translator js end -->

<!-- lang translator css start -->
<link rel="stylesheet" type="text/css" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/css/lang.css">
   
   <!-- lang translator css end --> 
     
      <!-- /outer-container -->
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.form.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/scripts.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/add-to-cart.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.blockUI.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/woocommerce.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.cookie.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/cart-fragments.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.equalizer.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/foundation.accordion.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/owl.carousel.min.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/video.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/bigvideo.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/main.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/hero-carousel.js"></script>
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/mobile-menu.js"></script>
       <script type="text/javascript" src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/menu.js"></script>
   </body>
</html>