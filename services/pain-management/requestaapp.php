<?php 
	// var_dump($_POST);
	// exit();
 	 $fname = $_POST["first_name2"];
 	 $lname = $_POST["last_name2"];
 	 
	 $emailid = $_POST["email"];
	 $pnumber = $_POST["po_number"];
	 $msg = $_POST["msg"];
	 $contacted = implode(',', $_POST["contacted"]);

	 
	 // $location = $_POST["location"];

	 $subject ="Contact Request " . $fname;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Crescent <' . $emailid .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>First name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $fname ."</td>
	                 </tr>

	                 

	                 <tr>
	                   <td align='left' width='35%'><strong>Last name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $lname ."</td>
	                 </tr>
	                  <tr>
	                   <td align='left' width='35%'><strong>Email:</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $emailid ."</td>
	                 </tr>


	   			  	<tr>
	                   <td align='left' width='35%'><strong>Phone number :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $pnumber ."</td>
	                 </tr>

	   			  	<tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $msg ."</td>
	                 </tr>


	                 <tr>
	                   <td align='left' width='35%'><strong>Contacted by :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $contacted ."</td>
	                 </tr>
	                 
	                 
	               </table>";  
	              
	  	  if(mail("painleads@cmclancaster.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		// else{
		// 	echo "error";
		// }

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>