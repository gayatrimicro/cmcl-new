<?php 

class Result extends MY_Model{

	public function insertoptionind($data){		
		$query = $this->db->insert('questoptinidividual',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function insertresultind($data){		
		$query = $this->db->insert('testresultind',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function insertresultorg($data){		
		$query = $this->db->insert('testresultorg',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	public function gettotaltest($table,$data){
		$this->db->select('testqty')
					->where($data);
		$query = $this->db->get($table);
		if($query->num_rows()>0)
		{
			
			return $query->result_array()[0]['testqty'];
		}
	}


	public function updatetestqty($table,$where,$set){
		$this->db->where($where);
		$query = $this->db->update('testdetailsindividual',$set);
		if($query)
		{
			
			return true;
		}
		else
		{
			
			return false;
		}
	}

	public function updatetestqtyemp($table,$where,$set){
		$this->db->where($where);
		$query = $this->db->update('assigntestempcan',$set);

		if($query){
			
			return true;
		}
		else{
			
			return false;
		}
	}


	public function insertetiresult($data){
		$query = $this->db->insert('etiresultind',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function insertetiresultorg($data)
	{
		$query = $this->db->insert('etiresultorg',$data);
		if($query){
			return true;
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







}


?>