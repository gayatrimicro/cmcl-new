<?php 

$a = trim($_POST["first_name"]);
$b = trim($_POST["last_name"]);
$c = trim($_POST["user_phone"]);
$d = trim($_POST["user_email"]);
$e = trim($_POST["contactChoice"]);
$f = trim($_POST["rd1"]);
include '../../db.php';
//if($a != "" OR $b != ""){
	if($a != NULL  AND  $b != NULL AND $c != NULL  AND  $d != NULL AND $e != NULL  AND  $f != NULL ){

 	 $firstname = $_POST["first_name"];
 	 $lastname = $_POST["last_name"];
 	 $phone = $_POST["user_phone"];
	 $email = $_POST["user_email"];
	 $contactChoice1 = $_POST["contactChoice"];
	 $requesttype = $_POST["rd1"];
	 $name = $firstname . " " . $lastname;
	 $company_name = 'NA';
	 $Lead_source = 'Web';
	 $Crescent = 'Yes';

	 //echo $name;
	 
	 $question_comment = $_POST["questioncomment"];
	 // $location = $_POST["location"];

	 $subject ="Contact Request " . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $name . '<'. $email .'>' ."\r\n";

	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	if($question_comment!=""){
		$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Crescent Bariatric Lead Inquiry</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>Fisrt Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $firstname ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Last Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $lastname ."</td>
	                 </tr>

	                  <tr>
	                   <td align='left' width='35%'><strong>Business Phone :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $phone ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $email ."</td>
	                 </tr>
	   			  	<tr>
	                   <td align='left' width='35%'><strong>Preferred Contact :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $contactChoice1 ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Topic :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $requesttype ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Comments :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $question_comment ."</td>
	                  </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Company Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $company_name ."</td>
	                 </tr>
	                   <tr>
	                   <td align='left' width='35%'><strong>Lead Source :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $Lead_source ."</td>
	                 </tr>
	                  <tr>
	                   <td align='left' width='35%'><strong>Crescent :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $Crescent ."</td>
	                 </tr>
	                 
	                 
	               </table>";

	}
	else{
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Crescent Bariatric lead inquiry</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>Fisrt Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $firstname ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Last Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $lastname ."</td>
	                 </tr>
	                  <tr>
	                   <td align='left' width='35%'><strong>Business Phone :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $phone ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $email ."</td>
	                 </tr>
	   			  			<tr>
	                   <td align='left' width='35%'><strong>Preferred Contact :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $contactChoice1 ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Topic :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $requesttype ."</td>
	                 </tr>
	                 <tr>
	                   <td align='left' width='35%'><strong>Company Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $company_name ."</td>
	                 </tr>
	                   <tr>
	                   <td align='left' width='35%'><strong>Lead Source :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $Lead_source ."</td>
	                 </tr>
	                  <tr>
	                   <td align='left' width='35%'><strong>Crescent :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $Crescent ."</td>
	                 </tr>
	                 
	                 
	               </table>";
}
							 echo $message; 
							 
		//mail("testgmicro@cmclancaster.com", $subject, $message, $headers);
		mail("bariatric@cmclancaster.com", $subject, $message, $headers);
		mysqli_query($conn1,"INSERT INTO leads (id, fname, lname, email, message, business_phone, preferred_contact, topic, origine_from, lead_type, created_by, created_at, updated_by, updated_at, deleted_at, deleted_by) 
				VALUES (NULL, '$firstname', '$lastname', '$email', NULL, NULL, NULL, NULL, 'services > bariatric', '1', NULL, now(), NULL, now(), NULL, NULL)");
  	//mail("anonyibridge@gmail.com", $subject, $message, $headers);
	  	 // echo $message;
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		echo "Your enquiry has been sent successfully";
		
		}
		else{
			echo "submit fail";
		}
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>
