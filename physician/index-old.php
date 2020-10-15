<?php
session_start();
include('../db.php');
include('../message.php');?>
<!DOCTYPE html>
<html lang="en-us">
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
	<title>Physicians, Nurses &amp; Staff | Crescent Medical Center, Lancaster TX</title>
			<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBTCQX6');</script>
<!-- End Google Tag Manager -->
			<!-- favicon & links -->
			<link rel="shortcut icon" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favicon.png" type="image/x-icon">
		
	 <link rel="canonical" href="https://cmclancaster.com/physician/">
 <link rel="alternate" href="https://cmclancaster.com/physician/" hreflang="en-us" />
 <meta property="og:description" content="At Crescent Medical Center Lancaster, Our physician and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients">

 <meta name="description" content="At Crescent Medical Center Lancaster, Our physician and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients">
		
			<meta property="og:type" content="website">
			<meta property="og:title" content="Physicians, Nurses &amp; Staff | Crescent Medical Center, Lancaster TX">
			<meta property="og:url" content="https://cmclancaster.com/physician/">

			<meta property="og:site_name" content="CMC Lancaster">
			<meta name="twitter:card" content="summary">
			<meta name="twitter:title" content="Physicians, Nurses &amp; Staff | Crescent Medical Center, Lancaster TX"  >
			<meta name="twitter:description" content="At Crescent Medical Center Lancaster, Our physician and staff work together to respond to patient needs as well as communication with other physician offices for referrals and follow up. They also provide the highest level of care to our patients" >
			
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
			<link rel="stylesheet" href="bootstrap.css" >
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >
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


			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/jquery-migrate.min.js"></script>
			<script type="text/javascript">
				 /* <![CDATA[ */
				 var mailchimp_public_data = {"site_url":""};
				 /* ]]> */
			</script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/mailchimp-woocommerce-public.min.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/script.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/modernizr.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/client-detect.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/lightcase.js"></script>
			<script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/frontend.js"></script>
			
			<!-- <script type="text/javascript">
				$(document).ready(function() {
				   $('#example').DataTable();
				   
				} );
			</script> -->

			<script type="text/javascript">
			$(document).ready(function() {
				$('#example').dataTable({
					 "pageLength": 25
				});
			});
		</script>
			<meta name="referrer" content="always">
			<script type="text/javascript">
				 window.ajaxurl = '';
			</script>
		 
		 
			<style>
				body{
  text-decoration: none !important;
}
				 .p-text a{
						text-transform: uppercase;
						font-size: 1rem;
						font-weight: 500;
						line-height: 0;
						color: #909194;
				 }
				 .p-text a:hover{
						color: #db1e11;

				 }
				 p{
						/*line-height: 1;*/
				 }
			</style>

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

<style type="text/css">
	.dataTables_filter input {
		border: 0px;
		border-bottom: 1px solid #909195;
		/*background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb) !important;*/
		background-size: 0 2px, 100% 1px;
		background-repeat: no-repeat;
		background-position: center bottom, center calc(100% - 1px);
		background-color: transparent;
		transition: background 0s ease-out;
		float: none;
		box-shadow: none;
		border-radius: 0;
		margin-left: 10px;
	}
	[type=search] {
			outline-offset: -2px;
			-webkit-appearance: none;
	}

	.dataTables_filter input:focus {
			outline: none;
			/*background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb) !important;*/
			background-size: 100% 2px, 100% 1px;
			box-shadow: none;
			transition-duration: 0.3s;
	}
	.search-filter input{
		border:0;
		background-color: #eee !important;
	 border-bottom: 1.5px solid #b1b8bb;
			 margin-left: 20px;
		width: 74.5%;
	}
	/*.search-filter input:focus{
		border-color: #1c4169;
	}*/
	/*#example_length{
		display: none;
	}*/
	.data-table-cont tr:hover {background-color:#b9daf1 !important;}
	/*.data-table-cont td:hover .data-table-cont tr{
			color:red !important;
	}*/
	.pagination>.active>a{
		background-color: #58b4e5 !important;
		color:#000 !important;
	}
	div.dataTables_wrapper div.dataTables_paginate ul.pagination {
		    font-size: 14px !important;
	}
	input[type=search]{
		height: auto !important;
		right: -172px !important;
	}

	.table tr td, .table tr th {
    color: #222;
    font-size: 1rem;
    padding: .5625rem .625rem;
    text-align: left;
}

.table thead tr th {
    color: #222;
    font-size: 1rem;
    font-weight: 700;
    padding: .5rem .625rem .625rem;
}
label {
    font-size: 1rem;
}
	
</style>

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
									style="background-image: url('https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/phyhome.jpg');"
									></div>
							 <div class="row">
									<div class="column">
										 <div class="page-banner-content">
												<h1><span class="dotted-underline">Physicians</span></h1>
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

						 <section class="latest-news-region grey-bg">
							 <div class="latest-news-region-inner">
									<div class="row">
										 <div class="column latest-news-region-content">
												<!-- category list start hear -->
												<div class="category-listing">
													 <b class="title" style="color: black;">COMPLETE PHYSICIANS LIST</b>


												</div>

									 
	
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            	

               <th>PHYSICIANS NAME</th>
               <th>SPECIALITY</th>
            </tr>
        </thead>
        <tbody class="data-table-cont">
          <!--   <tr>
					<td>BRIAN LONG, MD, FACS</td>
					<td>Bariatric Surgery, General Surgery</td>
				</tr>
				<tr>
					<td>THOMAS ROSHEK, MD, FACS</td>
					<td>Bariatric Surgery, General Surgery</td>
				</tr>
				<tr>
					<td>NICK NICHOLSON, MD, FACS</td>
					<td>Bariatric Surgery, General Surgery</td>
				 </tr>
				<tr>
					<td>THOMAS ROSHEK, MD, FACS</td>
					<td>Bariatric Surgery, General Surgery</td>
				</tr> -->


				<?php $query = "select * from physicians where deleted_at is NULL order by id DESC";
				$result = $conn1->query($query);
        	if ($result->num_rows > 0) { 
        		while($row = $result->fetch_assoc()) { ?>
            	<tr>
            		
					<td><a href="Bio/?physician_id=<?php echo rtrim(base64_encode($row['id']),'==');?>"><?php echo $row['first_middle_name'] .' '.$row['last_name']; ?></a></td>
					<td><a href="Bio/?physician_id=<?php echo rtrim(base64_encode($row['id']),'==');?>"><?php echo $row['specialty']; ?></a></td>
				</tr>
			<?php }} ?>
        </tbody>
    	</table>
	</div>
	<div class="col-md-1"></div>
												<!-- blog listing start here -->
											 
												
										 </div>
									</div>
							 </div>
						</section>



						<section class="latest-news-region pad-l  grey-bg show-icon">
							 <div class="latest-news-region-inner">
									<div class="row">
										 <div class="column latest-news-region-content">
												
										<!-- 	 <div class="subscribe-social">
                          <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="https://www.linkedin.com/company/crescent-medical-center-lancaster/about/" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
                      <a href="https://www.youtube.com/channel/UCa5ZP98K2y_JrN00FDOlcdw?view_as=subscriber/" target="_blank" rel="nofollow external" class="icon"><i class="youtubefooter fa fa-youtube-play"></i></a>

                      <a href="https://www.instagram.com/CMC_Lancaster/" target="_blank" rel="nofollow external" class="icon"><i class="instaf fa fab fa-instagram"></i></a>
                           <span class="subscribe-hash-tag">#CMCL</span>
                        </div> -->
										 </div>
									</div>
							 </div>
						</section>
				 </main>
				 <footer>
					 
				 </footer>
			</div>

			<!--  language translator js start-->
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
			 
			<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
			<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
				<style>
					/*@media screen and (max-width: 768px and min-width: 1080px){
						
						#example_filter{
					    	position: relative !important;
			    			right: -258px !important;
			    		}
					}*/
						.dataTables_filter input {
   								 padding: 0;
   						}
					@media screen and (max-width: 1024px){
						
						#example_filter{
					    	position: relative !important;
			    			/*right: -114px !important;*/
			    			    left: -142px;
			    		}
					}

					@media screen and (min-width: 1080px){
						
						#example_filter{
					    	position: relative !important;
			    			/*right: -170px !important;*/
			    			    left: -162px;
			    		}
					}
					@media screen and (max-width: 768px){
						
						#example_filter{
					    	position: relative !important;
			    			/*right: 0px !important;*/
			    			left: 0px;
			    		}
					}

					/*@media screen and (min-width: 768px and max-width: 1080px){
						
						#example_filter{
					    	position: relative !important;
			    			right: -102px !important;
			    		}
					}*/
					/*@media screen and (max-width: 768px){
						
						#example_filter{
					    	position: relative !important;
			    			right: -168px !important;
			    		}
					}*/
				</style>

				<style type="text/css">
		          .bg-image{
		            background-position: 49% 110px;
		            background-repeat: no-repeat;
		          }
		          @media only screen and (max-width: 1279px){
		            .bg-image {
		              background-position: 49% 95px;
		            }
		          }
		          @media only screen and (max-width: 573px){
		            .bg-image {
		              background-position: 0 80px;
		            }
		          }
		          @media only screen and (max-width: 411px){
		            .bg-image {
		              background-position: -40px 80px;
		            }
		          }
		      </style>
		      <style type="text/css">
        .fa-youtube-play:before{
              margin-top: 0px;
        }
        @media only screen and (max-width: 1024px){
            .global-footer {
              padding: 60px 20px 10px;
            }
            .subscribe-social{
              float: unset !important;
                  margin-bottom: 10px;
            }
            .global-footer .footer-brand{
                  height: auto;
            }
          }
      </style>
	 </body>
</html>