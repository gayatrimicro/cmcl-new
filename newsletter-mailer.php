<?php 
include('db.php');
	// var_dump($_POST);
	// exit();
 	 $emailid  = $_POST["newsletter-email"];
	 
 	// $conn= mysqli_connect("localhost","crescent_db","crescent_db12345","crescent_db");
	$time=time();
	// mysqli_query($conn,"INSERT INTO subscribe_mail (first_name,`last_name`,`email_id`,`time`)VALUES('','','$emailid','$time')");
	// mysqli_query($conn,
	$query = mysqli_query($conn, "INSERT INTO subscribe_mail (id, first_name, last_name, email_id, time) VALUES (NULL, '', '', '".$emailid."', '".$time."')");
	 

	// if(mysqli_query($conn, $query) === TRUE)
	// {
	// 	// echo "sucess";
	// }
	// else
	// {
	// 	// echo "not done";
	// }
	// exit();

	 // $location = $_POST["location"];

	$subject ="Newsletter Request by " . $emailid;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: <' . $emailid .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   

	                  <tr>
	                   <td align='left' width='35%'><strong>Email:</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $emailid ."</td>
	                 </tr>

	                 
	               </table>";  
	              
	  	  // if(mail("roxanetlowry@gmail.com", $subject, $message, $headers))
	  	  	if(mail("info@cmclancaster.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		// else{
		// 	echo "error";
		// }

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
