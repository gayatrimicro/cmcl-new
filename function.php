<?php 

require 'mail/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//session_set_cookie_params(0, '/', '.70.32.97.149/plesk-site-preview/cmclancaster.com/70.32.97.149/');
session_start();
if($_REQUEST){
	$_REQUEST['act']();
}
extract($_REQUEST);
function apply_job(){
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        
		extract($_REQUEST);
		include('db.php');
		if(isset($_REQUEST['submit'])){
		$file = $_FILES['upload_doc'];
		$file_name = $file['name'];
		$file_type = $file ['type'];
		$file_size = $file ['size'];
		$file_path = $file ['tmp_name'];
		$ext = pathinfo($file_name, PATHINFO_EXTENSION);
		$document=time().'.'.$ext;
		$time=time();
		//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 
		if($file_name!="" && ($file_type="application/msword"||$file_type="application/pdf")&& $file_size<=500000){
			if(move_uploaded_file($file_path,'document/'.$document)){
				mysqli_query($conn,"INSERT INTO `applied_person`(`carrier_id`,`apply_person`,`email`,`message`,`upload_doc`,`time`)values('$carrier_id','$apply_person','$email','$message','$document','$time')");
				$career=mysqli_query($conn,"SELECT * FROM `carrier_details` WHERE `carrier_id`='$carrier_id'");
				$car=mysqli_fetch_assoc($career);

			}
		// $to="humanresources@cmclancaster.com";
			$to="humanresources@cmclancaster.com";
		$header="Job Application";
		$subject="Applied For".$car['carrier_title'];
		$message1 .="Name : ".$apply_person."\n";
		$message1 .="Mail Id : ".$email."\n";
		$message1 .="Message : ".$message."\n";
		$message1 .="Document: https://cmclancaster.com/document/".$document."\n";
		// $message1 .="On Date:" .date('d-m-Y',strtotime($time));


		
		mail($to,$subject,$message1,$header);
		$_SESSION['message']='Applied SuccessFully....';
		header('location:careers/job-openings/');
		}else{
			$_SESSION['message']='Please upload only PDF AND DOC FILE within 500 KB';
			header('location:careers/job-openings/');
		
		}
	}
}else{
	$_SESSION['message']='Robot Varification Failed..';
	header('location:careers/job-openings/');
	
}

		//header('Location:careers/job-openings/index.php');
}

function login(){
	include('db.php');
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	if(isset($_REQUEST['login'])){
		$data=mysqli_query($conn,"SELECT * FROM `admin` WHERE `admin_email`='$_REQUEST[username]' AND `admin_password`='$_REQUEST[password]' AND `access`='physician'");
		if(mysqli_affected_rows($conn)){
			$data1=mysqli_fetch_assoc($data);
			$_SESSION['physician_logged']=array('physician_email'=>$data1['admin_email'],'full_name'=>$data1['full_name']);
			
			header('Location:login/physician_details.php');
		}else{
			$_SESSION['message']="Fill Proper Data..";
			header('location:login/');
		}
	}
}

function update_physician(){
	include('db.php');
	//print_r($_SESSION['logged_in']);
	$physician_email=$_SESSION['physician_logged']['physician_email'];

				$file = $_FILES['userfile'];
				$file_name = $file['name'];
				$file_type = $file ['type'];
				$file_size = $file ['size'];
				$file_path = $file ['tmp_name'];
				if(!empty($file_name)){
					$path='ad_crescent/assets/images/event/';
					$ext = pathinfo($file_name, PATHINFO_EXTENSION);
					$document=time().'.'.$ext;
					$time=time();
					move_uploaded_file($file_path,$path.$document);
				}else{
					$document=$_REQUEST['images'];
				}
	mysqli_query($conn,"UPDATE `physician_details` SET `physician_name`='$_REQUEST[physician_name]',`physician_speciality`='$_REQUEST[physician_speciality]',`physician_discription`='$_REQUEST[physician_discription]',`images`='$document' WHERE `physician_email`='$physician_email'");
	$_SESSION['message']="Data Updated..";
	header('Location:physician/');
}

function checktime(){
	$data1=trim($_REQUEST['day']);
	$data=substr($data1,0,3);
	if($data =='Mon' || $data=='Tue' || $data=='Wed' || $data=='Thu' || $data=='Fri'){
	?>	
		<label> Select Time Slot: </label>
		<!-- <input type="checkbox" name ="time_slot[]" value="12:30 AM">12:30 AM &nbsp;
		<input type="checkbox" name ="time_slot[]" value="01:30 AM">01:30 AM  &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="02:30 AM">02:30 AM &nbsp;&nbsp; -->
		<input type="checkbox" name ="time_slot[]" value="07:30 PM">07:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="08:30 PM">08:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="10:30 PM">10:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="11:30 PM">11:30 PM &nbsp;&nbsp;
	<?php
	}elseif($data=='Sat'){
		?>
		<label> Select Time Slot: </label>
		<input type="checkbox" name ="time_slot[]" value="07:30 PM">07:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="08:30 PM">08:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="10:30 PM">10:30 PM &nbsp;&nbsp;
		<input type="checkbox" name ="time_slot[]" value="11:30 PM">11:30 PM &nbsp;&nbsp;
		<?php
	}else{
		echo "Time slot Not there";
	}
}
function take_appointment(){
	//print_r($_REQUEST);

	$date=trim($_REQUEST['appointment_date']);
	$date_time=substr($date,4,12);
	$to="operations@gmicro.us";
	$header="Appointment Request";
	$subject="Appointment Request";
	$message .="Name : ".$_REQUEST['f_name']." ".$_REQUEST['l_name']."\n";
	$message .="Contact No : ".$_REQUEST['phone_no']."\n";
	$message .="Reason : ".$_REQUEST['reason_appoint']."\n";
	$message .="Notes : ".$_REQUEST['notes']."\n";
	$message .="Appointment Time :" .$_REQUEST['appointment_time']."\n";
	$message .="On Date:" .$date_time;
	mail($to,$subject,$message,$header);
	?>
	<script type="text/javascript">
		alert('Your Appointment Sent SuccessFully');
		window.location="<?php echo $_REQUEST['redirect'];?>";
	</script>
	<?php
}


function subscribe_mail(){
	

include('db.php');
	
 	 $emailid  = $_POST["email_id"];
	 	
	$time=time();
	
	$query = mysqli_query($conn, "INSERT INTO subscribe_mail (id, first_name, last_name, email_id, time) VALUES (NULL, '', '', '".$emailid."', '".$time."')");

	$subject ="Subscriptions " . $emailid;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Subscriptions <' . $emailid .">" ."\r\n";
	
	   	$message= "Email: ".  $emailid;  
	              
	  	  if(mail("info@cmclancaster.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
			$_SESSION['message']='We wont spam you';
   	header('location:'.$_REQUEST["redirect"].'');
		}

}

?>
