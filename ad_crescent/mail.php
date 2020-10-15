<?php
if (!is_writable(session_save_path())) {
   echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}

exit();

	// echo $Array[0];
	 $product = "Tyre";	
	 $vehicle = "Audi A8";
	
	 
	
	 
	 
	
	$subject ="Crescent Contact From " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Ibridgedigital <decoder@gmicro.us>' . "\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			  	<tr>
	                   <td align='left' width='35%'><strong>Product :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $product ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Color :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $color ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Vehicle :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $vehicle ."</td>
	                 </tr>
	               
	                
	               </table>";  
	              
	  	  mail("lamp@gmicro.us", $subject, $message, $headers);
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		echo "Your enquiry has been sent successfully";
	  	//$msg = "Your enquiry has been sent successfully.";	

?>          