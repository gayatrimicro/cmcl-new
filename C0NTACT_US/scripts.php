<?php 
//var_dump($_POST);
// exit();

$a = trim($_POST["user_name"]);
$b = trim($_POST["user_name1"]);
$c = trim($_POST["user_email"]);
$d = trim($_POST["message2"]);
$ph1 = trim($_POST["phone1"]);
$ph2 = trim($_POST["phone2"]);
$ph3 = trim($_POST["phone3"]);

include '../db.php';

//if($a != "" OR $b != ""){
if(($a != NULL AND $b != NULL AND $c != NULL AND $d != NULL) && ((strlen($a)<=20) && (strlen($b)<=20) && (strlen($c)<=50) && (strlen($ph1)==3) && (strlen($ph2)==3) && (strlen($ph3)==4) ) ){
 	$name = $_POST["user_name"];
 	$lastname = $_POST["user_name1"];
	$email = $_POST["user_email"];
	$phone = $_POST["phone1"] . "-" . $_POST["phone2"] . "-" . $_POST["phone3"];
	$message2 = $_POST["message2"];
	$Fullname = $name . " " . $lastname;
	// $location = $_POST["location"];

	$subject ="Contact Request " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $Fullname . '<'. $email .'>' ."\r\n";
	
	
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
	                   ". $message2 ."</td>
	                 </tr>
	                 
	                 
	               </table>";  
		   		$phone = $_POST["phone1"] . $_POST["phone2"] . $_POST["phone3"];       
				mail("info@cmclancaster.com", $subject, $message, $headers);
				// mail("laravel@gmicro.us", $subject, $message, $headers);
				mysqli_query($conn1,"INSERT INTO leads (id, fname, lname, email, message, business_phone, preferred_contact, topic, origine_from, lead_type, created_by, created_at, updated_by, updated_at, deleted_at, deleted_by) 
				VALUES (NULL, '$name', '$lastname', '$email', '$message2', NULL, '$phone', NULL, 'contact', '1', NULL, now(), NULL, now(), NULL, NULL)");
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		echo "Your enquiry has been sent successfully";
		
	  	//$msg = "Your enquiry has been sent successfully.";
	}
	else{
		echo "Submit fail";
		}
	
?>