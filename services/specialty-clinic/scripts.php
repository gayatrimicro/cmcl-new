<?php 


	$a = trim($_POST["user_name"]);
	$b = trim($_POST["user_name1"]);
	$c = trim($_POST["user_email"]);
	$d = trim($_POST["message1"]);
	include '../../db.php';
	
	//if($a != "" OR $b != ""){
		if($a != NULL AND $b != NULL AND $c != NULL AND $d != NULL ){
 	 $name = $_POST["user_name"];
 	 $lastname = $_POST["user_name1"];
	 $email = $_POST["user_email"];
	 $phone = $_POST["phone1"] . "-" . $_POST["phone2"] . "-" . $_POST["phone3"];
	 $message1 = $_POST["message1"];
	 // $location = $_POST["location"];
	 $fullname = $name . " " . $lastname;

	 $subject ="Contact Request " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $fullname . '<'. $email .'>' ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>First name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $name ."</td>
	                 </tr>

	                  <tr>
	                   <td align='left' width='35%'><strong>Last name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $lastname ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $email ."</td>
					 </tr>
					 <tr>
	                   <td align='left' width='35%'><strong>Phone :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $phone ."</td>
	                 </tr>
	   			  	<tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $message1 ."</td>
	                 </tr>
	                 
	                 
	               </table>";  
				   $phone = $_POST["phone1"] . $_POST["phone2"] . $_POST["phone3"];
				 mail("Specialty@CMCLancaster.com", $subject, $message, $headers);
				//mail("testgmicro@CMCLancaster.com", $subject, $message, $headers);
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		mysqli_query($conn1,"INSERT INTO leads (id, fname, lname, email, message, business_phone, preferred_contact, topic, origine_from, lead_type, created_by, created_at, updated_by, updated_at, deleted_at, deleted_by) 
				VALUES (NULL, '$name', '$lastname', '$email', '$message1', NULL, '$phone', NULL, 'services > speciality-clinic', '1', NULL, now(), NULL, now(), NULL, NULL)");
		echo "Your enquiry has been sent successfully";
		
	  	//$msg = "Your enquiry has been sent successfully.";
		}
		{
			echo "Fail to load";
		}	
	
?>