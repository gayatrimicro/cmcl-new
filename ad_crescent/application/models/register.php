<?php

class Register extends MY_Model{

	public function regindividual($data){
		$data['uniqid'] = $this->checkuniqidinregistration($data['uniqid']);
		$query = $this->db->insert('regindividual',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function regorganization($data)
	{
		$query=$this->db->insert('regorganization',$data);
		if($query>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function email_exists($key){
	    $this->db->where('email',$key);
	    $query = $this->db->get('regindividual');
	    if ($query->num_rows() > 0){
	       return false;
	    }
	    else{
	        $this->db->where('email',$key);
		    $query = $this->db->get('regorganization');
		    if ($query->num_rows() > 0){
		        return false;
		    }
		    else{
		        return true;
		    }
	    }
	}

	public function superadminemail(){
		 $this->db->select('email');
		$query = $this->db->get('superadminlogin');
		return $query->result_array();
	}

	public function adminemail($orgid){
		 $this->db->select('email');
		 $this->db->where('uniqid',$orgid);
		$query = $this->db->get('regorganization');
		//$this->db->limit('1');
		return $query->result();
	}

	function sendEmail($to_email=null,$sub=null,$message=null,$replyTo=null,$cc=null,$bcc=null)
   	{
   
   		require_once('assets/phpmailer/PHPMailerAutoload.php');
   		$mail = new PHPMailer;
   		$mail->isSMTP();                                      // Set mailer to use SMTP
   		$mail->Host = 'md-in-33.webhostbox.net';  // Specify main and backup SMTP servers
   		$mail->SMTPAuth = true;                               // Enable SMTP authentication
   		$mail->Username = 'info@housexpart.com';                 // SMTP username
   		$mail->Password = 'rupesh@123';                           // SMTP password
   		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
   		$mail->Port = 465;                                    // TCP port to connect to
   
   		$mail->setFrom('info.adnacgroup.com', 'Adnac');
   		$mail->addAddress($to_email, 'rupeshchaudhari05');     // Add a recipient design@weblinkservices.net
   		//$mail->addAddress('rupeshchaudhari05@gmail.com');               // Name is optional
   		$mail->addReplyTo($replyTo, 'Information');
   		$mail->addCC($cc);
   		$mail->addBCC($bcc);
   
   		//$mail->addAttachment('test_mailer.csv');         // Add attachments
   		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   		$mail->isHTML(true);                                  // Set email format to HTML
   
   		$mail->Subject = $sub;//Here is the subject
   		$mail->Body    = $message ;
   		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
   
   
   
   		if(!$mail->send()) {
   		    echo 'Message could not be sent.';
   		    echo 'Mailer Error: ' . $mail->ErrorInfo;
   		} else {
   		   // echo 'Message has been sent';
   		    return true;
   		}
   		
   	}



	function username_exists($key){
	    $this->db->where('username',$key);
	    $query = $this->db->get('regindividual');
	    if ($query->num_rows() > 0){
	       return false;
	    }
	    else{
	        $this->db->where('username',$key);
		    $query = $this->db->get('regorganization');
		    if ($query->num_rows() > 0){
		        return false;
		    }
		    else{
		        $this->db->where('username',$key);
		        $query = $this->db->get('regemployee');
		        if($query->num_rows()>0){
		        	return false;
		        }
		        else{
		        	//return true;
		        	$this->db->where('username',$key);
			        $query = $this->db->get('regcandidate');
			        if($query->num_rows()>0){
			        	return false;
			        }
			        else{
			        	return true;
			        }
		        }
		    }
	    }

	}
}

?>