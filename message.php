<input type="hidden" name="session_data" value="<?php if(isset($_SESSION['physician_logged'])){ print_r($_SESSION['physician_logged']); }?>">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
       .button:hover{
         text-decoration: none;
      }
      .button:focus{
         text-decoration: none;
      }
      a:hover{
         text-decoration: none;
      }
      a:focus{
         text-decoration: none;
      }
   </style>
  
<!--  Show Message Start -->
<button type="button" class="btn btn-info btn-lg message" data-toggle="modal" data-target="#message" style="display: none;">Open Modal</button>

<!-- Modal -->
<div id="message" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thank You for your Subscription </h4>
      </div>
      <div class="modal-body">
        <p><?php echo $_SESSION['message'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Show message End -->
<!-- Login Page  -->
 <div id="login_page" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content log">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login </h4>
      </div><br>
      <div class="modal-body">
        <form method="post" action="https://cmclancaster.com/function.php" class="login">
            <p class="form-row form-row-wide">
               <label for="username">Username or email address <span class="required">*</span></label>
               <input type="text" class="input-text" name="username" id="username" value="" />
            </p>
            <p class="form-row form-row-wide">
               <label for="password">Password <span class="required">*</span></label>
               <input class="input-text" type="password" name="password" id="password" />
            </p>
            
<p><div class="g-recaptcha" data-sitekey="6Lf8C00UAAAAAHXI3n9fbwXkG4io8BtjWclq0lV3"></div></p><br>


            <input type="hidden" name="act" value="login">
            <p class="form-row">
               <input type="hidden" id="_wpnonce" name="_wpnonce" value="94cf4b4fb2" /><input type="hidden" name="_wp_http_referer" value="/my-account/?v=c86ee0d9d7ed" />        <input type="submit" class="button" name="login" value="Login" />
            </p>
         
         </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div> 
<!-- Login Page -->
 <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php
  if(isset($_SESSION['message'])){
  // print_r($_SESSION['message']);
   ?>
   <script type="text/javascript">
   $(document).ready(function(){
    $(".message").trigger('click');
   });
   </script>
   <?php
   session_destroy();
  }

?>
