<?php 
	// var_dump($_POST);
	// exit();
 	 $fname = $_POST["first_name1"];
 	 $lname = $_POST["last_name1"];
 	 
	 $emailid = $_POST["email1"];
	 $pnumber = $_POST["po_number1"];
	 $dob = $_POST["DOB"];
	 $gender = $_POST["gender"];
	 $aboutus = $_POST["about_us"];
	 $msg =  $_POST["msg1"];
	 $psd =  $_POST["psd"];
	 $pst =  $_POST["pst"];
	 // $ped =  $_POST["ped"];
	 // $pet =  $_POST["pet"];
	 
	 // $contacted = implode(',', $_POST["contacted"]);

	 
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
	                   <td align='left' width='35%'><strong>Date Of Birth :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $dob ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Gender :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $gender ."</td>
	                 </tr>

	   			  	<tr>
	                   <td align='left' width='35%'><strong>How did you hear about us? </strong></td>
	                   <td align='left' width='60%'>
	                   ". $aboutus ."</td>
	                 </tr>


	                 <tr>
	                   <td align='left' width='35%'><strong>What is your primary medical issue? </strong></td>
	                   <td align='left' width='60%'>
	                   ". $msg ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Preffered Appointment Date & Time: </strong></td>
	                   <td align='left' width='60%'>
	                   ". $psd ." ". $pst ."</td>
	                 </tr>
	                 
	               </table>";  
	              
	  	  if(mail("alesapooja12@gmail.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		else{
			echo "error";
		}
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>