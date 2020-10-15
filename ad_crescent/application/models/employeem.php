<?php 
class Employeem extends MY_Model{


	public function userdata($where)
	{
		$this->db->select('id, fname, lname, email, mobile, username, password, actualpassword, description, orgusername, orgid, uniqid,gender,image')
				->where($where);
		$query = $this->db->get('regemployee');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}


	public function emppass_exists($old_password)
	{
	    $this->db->where('actualpassword',$old_password);
	    $query = $this->db->get('regemployee');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}


	public function canpass_exists($old_password)
	{
	    $this->db->where('actualpassword',$old_password);
	    $query = $this->db->get('regcandidate');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}



	public function userdata1($where){
		//print_r($where);die;
		//$where="QUNISUVWRVI=";
		$this->db->select('id, fname, lname, gender, designation, email, mobile, username, password, actualpassword, description, orgusername,image, orgid, uniqid')
				->where($where);
		$query = $this->db->get('regcandidate');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function viewemployeetest($array)
	{
		
		$id= $array['uniqid'];
		
        $query=$this->db->query("SELECT (a.`testqty`) as testqty,(a.`testid`)as testid,(t.`testname`)as testname,(t.`fullname`)as testfullname FROM `assigntestempcan` a LEFT join listoftest t on a.`testid`=t.`uniqid` where a.`userid`='$id' ");
        return $query->result_array(); 
	}

	public function testquest($data){
		if(!empty($data)){
			$this->db->select('questionid,testid,question')
					->where('testid',$data);
			$query = $this->db->get('questionoftest');
			if($query->num_rows()>0){
				return $query->result_array();
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	public function empdetails($id)
	{
		$query=$this->db->query("SELECT * FROM `assigntestempcan` where userid='$id' ");
        return $query->result_array();
	}

	public function questopt($data){
		if(!empty($data)){
			$this->db->select('questionid,testid,questionsoption')
					->where('testid',$data);
			$query = $this->db->get('optionofquestion');
			if($query->num_rows()>0){
				return $query->result_array();
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	public function completedtest($data){
		$data['status'] = 't';
		$this->db->select('userid,username,testid,testname,testresult,testdate,testtime,resultuniqid as id')
				->where($data)
				->order_by('testtime');
		$query = $this->db->get('testresultorg');
		if($query->num_rows()>0)
		{
			
			return $query->result_array();
		}
		else
		{	
			return false;
		}
	}


	public function userdata12($userid){	
		$this->db->select('fname,lname,age,gender,email,qualification,mobile,address,city,country,orgid,postal,image,aboutme,username,uniqid as id')
				->where('uniqid',$userid);
		$query = $this->db->get('regemployee');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}


	public function userdata13($userid){	
		$this->db->select('fname,lname,age,gender,email,qualification,mobile,address,city,orgid,country,postal,image,aboutme,username,uniqid as id')
				->where('uniqid',$userid);
		$query = $this->db->get('regcandidate');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
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
   
   		$mail->setFrom('info@housexpart.com', 'HouseXpart');
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


	public function updateprofile($table = null, $data = null){
		$where['uniqid'] = $data['uniqid'];unset($data['uniqid']);
		if($table != null && $data != null){
			$query = $this->db->where($where)->update($table,$data);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}









}





?>