<?php
session_start();
// include('../../db.php');
include('../../message.php');?>
<!DOCTYPE html>

   <html lang="en-us">
     
      <head>
         <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Latest News - Events - Reviews - CMC Lancaster TX</title>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBTCQX6');</script>
<!-- End Google Tag Manager -->
         <!-- favicon & links -->
         <link rel="shortcut icon" href="" type="image/x-icon">
         <link rel="pingback" href="" />





        
        <style>

          

          #calendar-container {
            /*position: fixed;*/
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
          }

          .fc-header-toolbar {
            /*
            the calendar will be butting up against the edges,
            but let's scoot in the header's buttons
            */
            padding-top: 1em;
            padding-left: 1em;
            padding-right: 1em;
          }

        </style>
        
         <meta name="description" content="Read about our Latest, News, Events and Reviews related to health at our webportal" />
         <meta property="og:type" content="website" />
         <meta property="og:title" content="Latest News - Events - Reviews - CMC Lancaster TX" />
         <meta property="og:description" content="Read about our Latest, News, Events and Reviews related to health at our webportal" />
         <meta property="og:url" content="https://cmclancaster.com/news/events/" />
         <meta property="og:site_name" content="CMC Lancaster" />
         <meta name="twitter:card" content="summary" />
         <meta name="twitter:title" content="Latest News - Events - Reviews - CMC Lancaster TX"  >
    <meta name="twitter:description" content="Read about our Latest, News, Events and Reviews related to health at our webportal" >
         <link rel="shortcut icon" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favicon.png" type="image/x-icon">
      <link rel="canonical" href="https://cmclancaster.com/news/events/">
 <link rel="alternate" href="https://cmclancaster.com/news/events/" hreflang="en-us" />
     
    <link rel="alternate" href="../../assets/css/footer.css" hreflang="en-us" />
    
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
            .calendar-section{
              width: 75%;
              margin: 0 auto;
            }
            @media (max-width: 600px){
              .calendar-section{
              width: 100%;
              margin: 0 auto;
            }
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


<link rel="stylesheet" type="text/css" href="../../assets/css/footer.css">
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
     
<!-- //cmc lancaster -->
<script type="application/ld+json">
{
  "@context": {
    "@vocab": "http://schema.org/"
  },
  "@graph": [
    {
      "@id": "https://cmclancaster.com/",
      "@type": "Organization",
      "name": "CMC Lancaster",
      "url" : "https://cmclancaster.com/",
      "logo" : "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo.png"
    },
    {
      "@type": "LocalBusiness",
      "parentOrganization": {
          "name" : "CMC Lancaster"
      },
     "name" : "CMC Lancaster",
      "address": {
          "@type" : "PostalAddress",
          "streetAddress": "2600 W Pleasant Run Rd",
          "addressLocality": "Lancaster",
          "addressRegion": "Texas",
          "postalCode": "TX 75146",
          "telephone" : "(972) 230-8888"
          },
      "openingHours": "24/7",
      "image": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/Neurology.jpg",
      "priceRange": "$$$" 
    }
    ]
    }
</script>

 <!-- // hospital schema -->
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
    "@type": "Hospital",
    "address": {
    "@type": "PostalAddress",
        "addressLocality": "Lancaster",
        "addressRegion": "TX",
        "postalCode": "75146",
        "streetAddress": "2600 W Pleasant Run Rd"
        
  },
    "location": {
    "@type": "Place",
        "geo": {
      "@type": "GeoCoordinates",
            "latitude": "32.602923",
            "longitude": "-96.812492"
      }
    },
    "image": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/Neurology.jpg",
    "description": "CMC Lancaster providing the best emergency, oncology, heart, pediatric, orthopedic care, & other medical services",
    "name": "CMC Lancaster",
    "telephone": "469-609-3062",
    "logo": "https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/logo.png",
    "url": "https://cmclancaster.com/",
    "priceRange" : "$$$"
  }
</script>
     
      </head>
      <body class="blog">
        
         
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
            <section class="page-banner ">
               <div class="bg bg-image"
                  style="background-image: url('https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/newshome.jpg');
                  background-position: 49% 53%;"
                  ></div>
               <div class="row">
                  <div class="column">
                     <div class="page-banner-content">
                        <h1><span class="dotted-underline">News & Reviews</span></h1>
                        <p></p>
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
             <section class="latest-news-region grey-bg">
               <div class="latest-news-region-inner">
                  <div class="row">
                     <div class="column latest-news-region-content">
                        <!-- category list start hear -->
                        <div class="category-listing">
                           <p class="h4">
                              <!-- <a href="../">All Posts</a> -->
                               <a href="../">News</a>
                              <span class="dotted-underline">Events</span>
                             <!--  <a href="../">News</a> -->
                              <!-- <a href="">Photos</a> -->
                              <a href="../reviews">Reviews</a>
                            <a href="../videos/">Videos</a>
                           </p>
                        </div> 
                        <!-- category list end hear -->
                        <!-- blog listing start here -->
                          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3" data-equalizer data-options="equalize_on_stack: true">
                           <?php 
                           $sql1=mysqli_query($conn,"SELECT * FROM `event_tbl` ORDER BY `time` DESC LIMIT 4 ");
                           if(mysqli_affected_rows($conn)){
                           while($sql=mysqli_fetch_array($sql1)){
                           ?>
                           <li>
                              <div class="news-card">
                                 <div class="card-content">
                                    <div class="card-inner" data-equalizer-watch>
                                       <p class="card-meta"><?php if(!empty($sql['event_date'])) echo date('d F Y',strtotime($sql['event_date']));?></p>
                                       <p class="card-title"><?php echo $sql['event_title'];?></p>
                                       <p>
                                         <img src="<?php echo '../../ad_crescent/assets/images/event/'.$sql['images'];?>" style="width: 300px;height:162px;">
                                       </p><br>
                                       <p class="card-excerpt">
                                          <?php echo substr($sql['event_details'],0,120);?>   
                                       </p>
                                       <p class="card-more"><a href="../feb/?event_id=<?php echo rtrim(base64_encode($sql['event_id']),'==');?>">Read more</a></p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <?php }}else{
                              echo "Data is Not Available";
                           }?>
                        </ul>
                        <!-- blog listing end here -->
                        <div class="news-pagination"></div>
                     </div>
                  </div>
               </div>
            </section>

            <section class="calendar-section">
               <div>
                  <div id='calendar-container'>
                    <div id='calendar'></div>
                  </div>
                  </div>
            </section>


            <!-- <script type="text/javascript">
              $(document).ready(function(){
                $.ajax({
                  method:"get",
                  url:"",
                  success:function(response){
                    alert("health");
                  }
                });

              });
            </script> -->
  
            <section class="subscribe-region grey-bg">
               <div class="row">
                  <div class="column">
                     <p class="h2 uppercase padding-bottom"><span class="dotted-underline">subscribe to our mailing list</span></p>
                    <!--  <p>Join us on our journey.</p> -->
                     <div class="subscribe-form">
                        <div role="form" class="wpcf7" id="wpcf7-f857-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response"></div>
                           <form action="../../function.php" method="post" >
                              <div style="display: none;">
                                 <input type="hidden" name="_wpcf7" value="857" />
                                 <input type="hidden" name="_wpcf7_version" value="4.9.2" />
                                 <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                 <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f857-o1" />
                                 <input type="hidden" name="_wpcf7_container_post" value="0" />
                              </div>
                              <div class="subscribe-form-col">
                                 <span class="wpcf7-form-control-wrap first-name"><input type="text" required="" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First name" /></span>
                              </div>
                              <div class="subscribe-form-col">
                                 <span class="wpcf7-form-control-wrap last-name"><input type="text" required="" name="last_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last name" /></span>
                              </div>
                              <div class="subscribe-form-col">
                                 <span class="wpcf7-form-control-wrap your-email"><input type="email" required="" name="email_id" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                              </div>
                              <div class="subscribe-form-col last">
                                 <input type="submit" name="submit" value="Submit" class="wpcf7-form-control wpcf7-submit button" />
                              </div>
                              <input type="hidden" name="act" value="subscribe_mail">
                              <input type="hidden" name="redirect" value="news/events/">
                              <div class="wpcf7-response-output wpcf7-display-none"></div>
                           </form>
                        </div>
                     </div>
                  <!--  <div class="subscribe-social">
                          <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="youtubefooter fa fa-youtube-play"></i></a>

                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram"></i></a>
                           <span class="subscribe-hash-tag">#CMCL</span>
                        </div> -->
                  </div>
               </div>
            </section>
           <footer>
          
             
         </footer>
         </div>

       <!--  language translator js start-->

       <?php include '../../footer.php' ?>
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
         
         <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.form.min.js"></script>

      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/scripts.js"></script>
  
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/add-to-cart.min.js"></script>
  
      
      <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.blockUI.min.js"></script>
     <!--  <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/geolocation.min.js"></script> -->
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
      <link href='../../assets/css/main-core.css' rel='stylesheet' />
        <link href='../../assets/css/main-daygrid.css' rel='stylesheet' />
        <link href='../../assets/css/main-timegrid.css' rel='stylesheet' />
        <link href='../../assets/css/main-list.css' rel='stylesheet' />
        <script src='../../assets/js/main-core.js'></script>
        <script src='../../assets/js/main-interaction.js'></script>
        <script src='../../assets/js/main-daygrid.js'></script>
        <script src='../../assets/js/main-timegrid.js'></script>
        <script src='../../assets/js/main-list.js'></script>

        <script type="text/javascript">
          jQuery(document).ready(function() {
            jQuery.ajax({
        type: "GET",
        url: "https://cmclancaster.com/API/calendar.php",
        
        success: function(data) {
          //alert(data['data']);
          var events = JSON.parse(data);
          var calendarEl = document.getElementById('calendar');
          var date = new Date();

                var calendar = new FullCalendar.Calendar(calendarEl, {
                  plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                  height: 'parent',
                  header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

                  
                  },
                  defaultView: 'dayGridMonth',
                  defaultDate: date,
                  navLinks: true, // can click day/week names to navigate views
                  editable: true,
                  eventLimit: true, // allow "more" link when too many events
                  events: events,
                  eventRender: function(event, eventElement) {
                    if (event.imageurl) {
                        eventElement.find("div.fc-content").prepend("<img src='" + event.imageurl +"' width='16' height='16'>");
                    }
                },
                   //[
                  //   {
                  //     title: 'All Day Event',
                  //     start: '2019-08-01',
                  //   },
                  //   {
                  //     title: 'Long Event',
                  //     start: '2019-08-07',
                  //     end: '2019-08-10'
                  //   },
                  //   {
                  //     groupId: 999,
                  //     title: 'Repeating Event',
                  //     start: '2019-08-09T16:00:00'
                  //   },
                  //   {
                  //     groupId: 999,
                  //     title: 'Repeating Event',
                  //     start: '2019-08-16T16:00:00'
                  //   },
                  //   {
                  //     title: 'Conference',
                  //     start: '2019-08-11',
                  //     end: '2019-08-13'
                  //   },
                  //   {
                  //     title: 'Meeting',
                  //     start: '2019-08-12T10:30:00',
                  //     end: '2019-08-12T12:30:00'
                  //   },
                  //   {
                  //     title: 'Lunch',
                  //     start: '2019-08-12T12:00:00'
                  //   },
                  //   {
                  //     title: 'Meeting',
                  //     start: '2019-08-12T14:30:00'
                  //   },
                  //   {
                  //     title: 'Happy Hour',
                  //     start: '2019-08-12T17:30:00'
                  //   },
                  //   {
                  //     title: 'Dinner',
                  //     start: '2019-08-12T20:00:00'
                  //   },
                  //   {
                  //     title: 'Birthday Party',
                  //     start: '2019-08-13T07:00:00'
                  //   },
                  //   {
                  //     title: 'Click for Google',
                  //     url: 'http://google.com/',
                  //     start: '2019-08-28'
                  //   }
                  // ]
                });

                calendar.render();
        }, error: function() {
          alert("error");
        }
      });});
              // document.addEventListener('DOMContentLoaded', function() {
              //   var calendarEl = document.getElementById('calendar');

              //   var calendar = new FullCalendar.Calendar(calendarEl, {
              //     plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
              //     height: 'parent',
              //     header: {
              //       left: 'prev,next today',
              //       center: 'title',
              //       right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'

                  
              //     },
              //     defaultView: 'dayGridMonth',
              //     defaultDate: '2019-08-12',
              //     navLinks: true, // can click day/week names to navigate views
              //     editable: true,
              //     eventLimit: true, // allow "more" link when too many events
              //     events: [
              //       {
              //         title: 'All Day Event',
              //         start: '2019-08-01',
              //       },
              //       {
              //         title: 'Long Event',
              //         start: '2019-08-07',
              //         end: '2019-08-10'
              //       },
              //       {
              //         groupId: 999,
              //         title: 'Repeating Event',
              //         start: '2019-08-09T16:00:00'
              //       },
              //       {
              //         groupId: 999,
              //         title: 'Repeating Event',
              //         start: '2019-08-16T16:00:00'
              //       },
              //       {
              //         title: 'Conference',
              //         start: '2019-08-11',
              //         end: '2019-08-13'
              //       },
              //       {
              //         title: 'Meeting',
              //         start: '2019-08-12T10:30:00',
              //         end: '2019-08-12T12:30:00'
              //       },
              //       {
              //         title: 'Lunch',
              //         start: '2019-08-12T12:00:00'
              //       },
              //       {
              //         title: 'Meeting',
              //         start: '2019-08-12T14:30:00'
              //       },
              //       {
              //         title: 'Happy Hour',
              //         start: '2019-08-12T17:30:00'
              //       },
              //       {
              //         title: 'Dinner',
              //         start: '2019-08-12T20:00:00'
              //       },
              //       {
              //         title: 'Birthday Party',
              //         start: '2019-08-13T07:00:00'
              //       },
              //       {
              //         title: 'Click for Google',
              //         url: 'http://google.com/',
              //         start: '2019-08-28'
              //       }
              //     ]
              //   });

              //   calendar.render();
              // });
          
        </script>
      </body>
   </html>