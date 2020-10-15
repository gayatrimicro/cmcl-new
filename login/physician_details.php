<?php 
session_start();
include('../db.php');
if(!isset($_SESSION['physician_logged'])){
   header("location:index.html");
}
?>
<!DOCTYPE html>

   <html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
      
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
      <title> Login | Crescent
</title>
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBTCQX6');</script>
<!-- End Google Tag Manager -->
      <!-- favicon & links -->
      <link rel="shortcut icon" href="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/favicon.png" type="image/x-icon">
    
         
     <script src="https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/js/kvi7xjm.js"></script>
      <style type="text/css">.tk-futura-pt {
         font-family: "futura-pt", sans-serif;
         }
      </style>
      <style type="text/css">@font-face {
         font-family: tk-futura-pt-n5;
         src: url(https://use.typekit.net/af/069586/00000000000000000001008f/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("woff2"), url(https://use.typekit.net/af/069586/00000000000000000001008f/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("woff"), url(https://use.typekit.net/af/069586/00000000000000000001008f/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("opentype");
         font-weight: 500;
         font-style: normal;
         }
         @font-face {
         font-family: tk-futura-pt-i5;
         src: url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("woff2"), url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("woff"), url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("opentype");
         font-weight: 500;
         font-style: italic;
         }
         @font-face {
         font-family: tk-futura-pt-i3;
         src: url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff2"), url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff"), url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("opentype");
         font-weight: 300;
         font-style: italic;
         }
         @font-face {
         font-family: tk-futura-pt-n4;
         src: url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"), url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"), url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");
         font-weight: 400;
         font-style: normal;
         }
         @font-face {
         font-family: tk-futura-pt-i4;
         src: url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff2"), url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff"), url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("opentype");
         font-weight: 400;
         font-style: italic;
         }
         @font-face {
         font-family: tk-futura-pt-n3;
         src: url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff2"), url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff"), url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("opentype");
         font-weight: 300;
         font-style: normal;
         }
      </style>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
      <meta property="og:type" content="article">
      <meta property="og:title" content="Home">
      <meta property="og:url" content="#">
      <meta property="article:published_time" content="">
      <meta property="article:modified_time" content="">
      <meta property="article:tag" content="">
      <meta property="article:tag" content="">
      <meta property="article:tag" content="">
      <meta property="og:site_name" content="">
      <meta name="twitter:card" content="">
      
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
      <meta name="referrer" content="always">
      <script type="text/javascript">
         window.ajaxurl = '';
      </script>
     
      <style type="text/css">@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/069586/00000000000000000001008f/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("woff2"),url(https://use.typekit.net/af/069586/00000000000000000001008f/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("woff"),url(https://use.typekit.net/af/069586/00000000000000000001008f/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n5&v=3) format("opentype");font-weight:500;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("woff2"),url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("woff"),url(https://use.typekit.net/af/0da7c3/000000000000000000010090/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i5&v=3) format("opentype");font-weight:500;font-style:italic;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff2"),url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("woff"),url(https://use.typekit.net/af/3d72b8/000000000000000000010093/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i3&v=3) format("opentype");font-weight:300;font-style:italic;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/3489f3/000000000000000000013365/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/3ba171/000000000000000000010095/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}@font-face{font-family:futura-pt;src:url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/5da6f6/000000000000000000010096/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;}</style>
      <style></style>
   </head>
      <body class="page page-id-7 woocommerce-account woocommerce-page my-account">
         
         <!-- Google Tag Manager -->
         <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5WGZ6N"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5WGZ6N');
         </script>
         <!-- End Google Tag Manager -->
         <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBTCQX6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <div class="outer-container">
           <header class="header desktop-menu desktop-menu-mega" id="main">
        
        </header>
        <header class="header mobile-menu" id="mobile">
        </header>
            <main id="main" class="main-content" role="main">
               <section class="page-banner ">
                  <div class="bg bg-image"
                     style="background-image: url('https://s3.ap-south-1.amazonaws.com/gwsprojects/websites/crescent/assets/images/loginhome.jpg');
                     background-position: 60% 74%;"
                     ></div>
                  <div class="row">
                     <div class="column">
                        <div class="page-banner-content">
                           <h1><span class="dotted-underline">Your Details</span></h1>
                           <p></p>
                        </div>
                     </div>
                  </div>
                   <div class="page-banner-social">
                <a href="https://business.facebook.com/cmcl.us/?business_id=852487431465578" target="_blank" rel="nofollow external" class="icon icon-facebook-with-circle"></a>
                     <a href="https://twitter.com/cmc_lancaster" target="_blank" rel="nofollow external" class="icon icon-twitter-with-circle"></a>
                     <a href="#" target="_blank" rel="nofollow external" class="icon icon-linkedin-with-circle"></a>
               </div>
               </section>
               <section class="page-content">
                  <div class="row">
                     <div class="column large-10 large-centered">
                        <ul class="breadcrumbs">
                           <li><a href="../">Home</a> </li>
                           <li class="active">Your Details</li>
                        </ul>
                        <?php 
                        //print_r($_SESSION['logged_in']['physician_email']);
                        $physician_email=$_SESSION['physician_logged']['physician_email'];
                        $sql1=mysqli_query($conn,"SELECT * FROM `physician_details` WHERE `physician_email`='$physician_email' ");
                        $sql=mysqli_fetch_assoc($sql1);
                        ?>
                        <div class="woocommerce">
                           <div class="row" id="customer_login">
                              <div class="large-6 columns">
                                 <h2>Login</h2>
                                <form action="../function.php" method="post" enctype="multipart/form-data" class="form-horizontal" name="form_apply">
                          
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Name</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_name" placeholder="Name" class="form-control" value="<?php echo $sql['physician_name'];?>">
                              
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Email</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_email" placeholder="Email" class="form-control" value="<?php echo $sql['physician_email']?>" readonly>
                              
                            </div>
                            
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Physician Speciality</label></div>
                            <div class="col-12 col-md-6"><input type="text" id="text-input" name="physician_speciality" placeholder="Speciality" class="form-control" value="<?php echo $sql['physician_speciality']?>">
                              
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-6">
                              <textarea name="physician_discription" id="textarea-input" rows="9" placeholder="Description" class="form-control">
                               <?php if(!empty($sql['physician_discription'])){echo $sql['physician_discription'];}?>
                              </textarea>
                              
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="image" class=" form-control-label">Upload Image</label></div>
                            <div class="col-12 col-md-6">
                              <input type="file" name="userfile" id="image" accept="image/*"> 
                            </div>
                            <input type="hidden" name="images" value="<?php if(!empty($sql['images'])){ echo $sql['images'];}?>">
                          </div>
                          <input type="hidden" name="act" value="update_physician">
                          <div class="row form-group">
                            <div class="col col-md-2">
                            </div>
                            <div class="col-12 col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <!-- <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                                </button> -->
                               
                           </div>
                          </div>
                          
                        </form>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Edit regions/_cta-featured-banner -->
              
            </main>
             <footer>
          
             
         </footer>
         </div>
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
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
      <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
        CKEDITOR.replace( 'physician_discription' );
      </script>
      <script type="text/javascript">
            $(document).on('submit','form[name="form_apply"]',function() {
           var iSize = ($('input[name="userfile"]')[0].files[0].size); 
           if(iSize <= 500000){
            var myfile= $('input[name="userfile"]').val();
            var ext = myfile.split('.').pop();
            if(ext=="png" || ext=="jpeg" || ext=="jpg" || ext=="gif"){
                
            } else{
               alert("Please Upload Image File Only..");
               return false;
            }
            }else{
               alert("Please Upload Less Than 500 KB..");
               return false;
            }
           });
        
      </script>
      </body>
   </html>