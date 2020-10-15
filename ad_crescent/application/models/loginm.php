<?php 
   class Loginm extends MY_Model{
   
   	public function checkloginind($data){
   		$where = array('username' => $data['username'], 'password' => $data['password']);
   		$this->db->select('id,username,uniqid')
   				->where($where);
   		$query = $this->db->get('regindividual');		
   		if($query->num_rows()>0){
   			return $query->result_array();
   		}
   		else{
   			return false;
   		}
   	}
   
   
   	public function checkloginsup($data){
   		$where = array('username' => $data['username'], 'password' => $data['password']);
   		$this->db->select('id,username,uniqid')
   				->where($where);
   		$query = $this->db->get('superadminlogin');		
   		if($query->num_rows()>0){
   			return $query->result_array();
   		}
   		else{
   			return false;
   		}
   	}
   
   
   	public function checkloginadmin($data){
   		$where = array('username' => $data['username'], 'password' => $data['password']);
   		$this->db->select('id,username,uniqid')
   				->where($where);
   		$query = $this->db->get('regorganization');		
   		if($query->num_rows()>0){
   			return $query->result_array();
   		}
   		else{
   			return false;
   		}
   	}
   
   
   	public function checkloginemployee($data){
   		$where = array('username' => $data['username'], 'password' => $data['password']);
   		$this->db->select('id,username,uniqid')
   				->where($where);
   		$query = $this->db->get('regemployee');		
   		if($query->num_rows()>0){
   			return $query->result_array();
   		}
   		else{
   			return false;
   		}
   	}
   
      public function checklogincandidate($data)
      {
         $where = array('username' => $data['username'], 'password' => $data['password']);
         $this->db->select('id,username,uniqid')
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

   	function sendEmail($to_email=null,$sub=null,$message=null,$replyTo=null,$cc=null,$bcc=null)
   	{
   
   		require 'assets/phpmailer/PHPMailerAutoload.php';
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
   
   
   
   
   public function checkforresetpassword($data){
   		$where=array('username'=>$data['username'],'email'=>$data['email']);
   		$this->db->select('id','username','email');
   		$this->db->where($where);
   		$query=$this->db->get('regindividual');
   		if($query->num_rows()>0){
   			$res=$query->result_array();
   			$where=array('id'=>$res[0]['id']);
   			$set=array('verify_password'=>base64_decode($data['rand']));
   			$this->db->update('regindividual',$set,$where);
   			$type='e';
   			return $type;
   		}
   		else{
   			$where=array('username'=>$data['username'],'email'=>$data['email']);
   			$this->db->select('id','username','email');
   			$this->db->where($where);
   			$query=$this->db->get('superadminlogin');
   			if($query->num_rows()>0){
   				$res=$query->result_array();
   				$where=array('id'=>$res[0]['id']);
   				$set=array('verify_password'=>base64_decode($data['rand']));
   				$this->db->update('superadminlogin',$set,$where);
   				$type='o';
   				return $type;
   			}
   			else{
   				$where=array('username'=>$data['username'],'email'=>$data['email']);
   				$this->db->select('id','username','email');
   				$this->db->where($where);
   				$query=$this->db->get('regorganization');
   				if($query->num_rows()>0){
   					$res=$query->result_array();
   					$where=array('id'=>$res[0]['id']);
   					$set=array('verify_password'=>base64_decode($data['rand']));
   					$this->db->update('regorganization',$set,$where);
   					$type='s';
   					return $type;
   				}
   				else{
   				$where=array('username'=>$data['username'],'email'=>$data['email']);
   				$this->db->select('id','username','email');
   				$this->db->where($where);
   				$query=$this->db->get('regemployee');
   				if($query->num_rows()>0){
   					$res=$query->result_array();
   					$where=array('id'=>$res[0]['id']);
   					$set=array('verify_password'=>base64_decode($data['rand']));
   					$this->db->update('regemployee',$set,$where);
   					$type='r';
   					return $type;
   				}
   				else{
   					return false;
   				}
   			}
   		}
   	}
   }

   public function verifyuser($id){
		$where=array('verify_password'=>$id);

		$this->db->select('id');
		$this->db->where($where);
		$query=$this->db->get('regindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			$where=array('verify_password'=>$id);
			$this->db->select('id');
			$this->db->where($where);
			$query=$this->db->get('superadminlogin');
			if($query->num_rows()>0){
				return $query->result_array();
			}
		else{
			$where=array('verify_password'=>$id);
			$this->db->select('id');
			$this->db->where($where);
			$query=$this->db->get('regorganization');
			if($query->num_rows()>0){
				return $query->result_array();
			}
			else{
				$where=array('verify_password'=>$id);
				$this->db->select('id');
				$this->db->where($where);
				$query=$this->db->get('regemployee');
				if($query->num_rows()>0){
					return $query->result_array();
				}
				else{
					return false;
				}
			}
		}
	}
   }

   	public function updatepassword($data){
   		if($data['type']=='e'){
   			$where=array('id'=>$data['id']);

   			$set=array('actualpassword'=>$data['newpass'],'verify_password'=>'','password'=>$data['password']);
   			$query=$this->db->update('regindividual',$set,$where);
   			if($query){
   				return true;
   			}
   			else{
   				return false;
   			}
   		}
   		elseif($data['type']=='r'){
   			$where=array('id'=>$data['id']);
   			$set=array('actualpassword'=>$data['newpass'],'verify_password'=>'','password'=>$data['password']);
   			$query=$this->db->update('regemployee',$set,$where);
   			if($query){
   				return true;
   			}
   			else{
   				return false;
   			}
   		}
   		elseif($data['type']=='o'){
   			$where=array('id'=>$data['id']);
   			$set=array('actualpassword'=>$data['newpass'],'verify_password'=>'','password'=>$data['password']);
   			$query=$this->db->update('superadminlogin',$set,$where);
   			if($query){
   				return true;
   			}
   			else{
   				return false;
   			}
   		}
   		elseif($data['type']=='s'){
   			$where=array('id'=>$data['id']);
   			$set=array('actualpassword'=>$data['newpass'],'verify_password'=>'','password'=>$data['password']);
   			$query=$this->db->update('regorganization',$set,$where);
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