<?php

class Userm extends MY_Model{


	public function purchagedtest($data){
		$this->db->where($data);
		$query = $this->db->get('buytestindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function pass_exists($old_password)
	{
	    $this->db->where('actualpassword',$old_password);
	    $query = $this->db->get('regindividual');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}


	public function transactioninfo($txnid){
		$this->db->where('txnid',$txnid);
		$query = $this->db->get('buytestindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}




	public function userdata($where){	
		$this->db->select('fname,lname,age,gender,email,qualification,mobile,address,city,country,postal,image,aboutme,username,uniqid as id,referralbal,referralcode,referedby')
				->where($where);
		$query = $this->db->get('regindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function userdata1($userid){	
		$this->db->select('fname,lname,age,gender,email,qualification,mobile,address,city,country,postal,image,aboutme,username,uniqid as id')
				->where('uniqid',$userid);
		$query = $this->db->get('regindividual');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function remainingtest($data){
		$data['testqty >'] = '0';
		$this->db->where($data);
		$query = $this->db->get('testdetailsindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function userinfo($userid)
	{
		$this->db->select('username');
		$this->db->where('userid',$userid);
		$this->db->limit(1);
		$query = $this->db->get('testresultind');
		 return $query->result();
	}

	public function empinfo($userid)
	{
		$this->db->select('username');
		$this->db->where('userid',$userid);
		$this->db->limit(1);
		$query = $this->db->get('testresultorg');
		 return $query->result();
	}



	public function completedtest($data){
		$this->db->select('userid,username,testid,testname,testresult,testdate,testtime,resultuniqid as id')
				->where($data)
				->order_by('testtime');
		$query = $this->db->get('testresultind');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function newtest($data){
		$this->db->select('id,testname,testprice,testimage,testimage2,teststatus,uniqid,shortname,fullname');
		$query = $this->db->get('listoftest');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function updateprofile($data){
		$uniqid = $data['uniqid'];unset($data['uniqid']);
		$this->db->where('uniqid',$uniqid);
		$query = $this->db->update('regindividual',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
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


	public function contact_insert($data){
	$this->db->insert('contact', $data);
	}

	public function testimonial_insert($data){
	$this->db->insert('testimonial', $data);
	}


	public function showtestimonial(){
	$this->db->select('*');
	$query = $this->db->get('testimonial');
	 return $query->result();
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


	public function refer($data){
		$query = $this->db->insert_batch('referralhistory',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	public function getuniqidbyrefid($value){
		$query = $this->db->select('uniqid')->where('referralcode' , $value)->get('regindividual');
		if($query->num_rows()>0){
			return $query->result_array()[0]['uniqid'];
		}
		else{
			return false;
		}
	}


	public function checkifexistinbuytest($data){
		$query = $this->db->where($data)->get('buytestindividual');
		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}


	public function updatereferbal($id){
		$query = $this->db->select('referralbal')->where($id)->get('regindividual');
		if($query->num_rows()>0){
			$referralbal = $query->result_array()[0]['referralbal'];
			$referralbal = $referralbal+100;
			$update = array('referralbal' => $referralbal);
			$query = $this->db->where($id)->update('regindividual',$update);
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

	public function reflist($data){
		$query = $this->db->where($data)->get('referralhistory');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function cartprocess($data){
		$query = $this->db->insert_batch('cart',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function getcart($data){
		$query = $this->db->where($data)->get('cart');
    	if($query->num_rows()>0){
    		return $query->result_array();
    	}
    	else{
    		return false;
    	}
	}

	public function updatecart($data,$set){
		$query = $this->db->where($data)->update('cart',$set);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function deletecart($data){
		$set = array('status' => 'Inactive');
		$query = $this->db->where($data)->update('cart',$set);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function updatetmp($data,$set){
		$query = $this->db->select('username,userid')->where($data)->get('testusertmp');
		if($query->num_rows()>0){
			$query = $this->db->where($data)->update('testusertmp',$set);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			$query = $this->db->insert('testusertmp',$data);
		}
	}

}

?>