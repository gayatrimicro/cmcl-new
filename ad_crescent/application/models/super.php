<?php

class Super extends MY_Model{


	/*--------------------------------For Login ------------------------------------------*/
	public function login($data)
	{
		$this->load->view('superadmin/login');

	}
	/* -------------------------------For profile superadmin-------------------------------*/
	/* view super admin profile */
	public function profile($where = null){
			$sessionid=$this->session->userdata('superadmin');
			$where['uniqid'] = $sessionid['id'];
			$this->db->select('*');
			$this->db->where($where);
			$query=$this->db->get('superadminlogin');
			if($query->num_rows()>0){
				return $query->result_array();
			}
			else{
				return false;
			}
	}



	public function contact(){
		$this->db->select('*');
		$query=$this->db->get('contact');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	/* update profile */
	public function updateprofile($data){
		//print_r($data);die;
		$this->db->where('uniqid',$data['hiddenid']);
		unset($data['hiddenid']);
   		$query = $this->db->update('superadminlogin',$data);
   		if($query>0){
   			return true;
   		}
   		else{
   			return false;
   		}
	}
	/*  -------------------------------- For Individual-------------------------------------*/
	/* For update and insert individual details */
	public function regindividual($data){
		$data['uniqid'] = $this->checkuniqidinregistration($data['uniqid']);
		if(!empty($data['hiddenid'])){
		$this->db->where('uniqid', $data['hiddenid']);
			unset($data['uniqid'],$data['date'],$data['time'],$data['username'],$data['hiddenid']);
   			$query = $this->db->update('regindividual',$data);
		}
		else{
			unset($data['hiddenid']);
			$query = $this->db->insert('regindividual',$data);	
		}
		
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/* show individual details (View)*/
	public function viewindividualdetail(){
		$this->db->select('*');
		$query=$this->db->get('regindividual');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	/* Delete individual*/
	public function individualdelete($data){
		$data=base64_decode($data);
		$this->db->where('uniqid', $data);
	    $query=$this->db->delete('regindividual'); 
	    if($query)
	    {
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}
	/* Edit Individual*/
	public function editindividual($data){
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('uniqid',$data);
		$query=$this->db->get('regindividual');

		if($query->num_rows()>0)
		{

			return $query->result_array();
		}
		else
		{
			return false;
		}

	}
	/* Details of individual what buy or not */
	public function viewindividual($data)
	{
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('userid',$data);
		$query=$this->db->get('testdetailsindividual');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}

	}
	/* count resultoftest*/
	public function countresultoftest($data1,$data2){
		$this->db->select('*');
		$this->db->where('userid',$data1);
		$this->db->where('testid',$data2);
		$query=$this->db->get('testresultind');
		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	/* What buy that details shown And Which Date*/
	public function buyingdataview($data){
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('id',$data);
		$query=$this->db->get('testdetailsindividual');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	/* update quantity details individual*/
	public function updatetestdetailsindividual($data){
		$id=base64_decode($data['id']);
		$this->db->where('id',$id);
		unset($data['id']);
		$query=$this->db->update('testdetailsindividual',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
		
	}
	/* from 'test result' table */
	public function testresulttable($data1,$data2){
		$this->db->select('*');
		$this->db->where('userid',$data1);
		$this->db->where('testid',$data2);
		$query=$this->db->get('testresultind');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
/*  -------------------------------- For Organization-------------------------------------*/
	public function regorganization($data){
		//$data['uniqid'] = $this->checkuniqidinregistration($data['uniqid']);

		if(!empty($data['hiddenid'])){
			$this->db->where('uniqid', $data['hiddenid']);
			unset($data['uniqid'],$data['date'],$data['time'],$data['username'],$data['hiddenid']);
   			$query = $this->db->update('regorganization',$data);
	}
	else{
		unset($data['hiddenid']);
		$query=$this->db->insert('regorganization',$data);
	}
		if($query>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	/* show individual details (View)*/
	public function vieworganizationdetail(){
		$this->db->select('*');
		$query=$this->db->get('regorganization');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	/* Delete individual*/
	public function organizationdelete($data){
		$data=base64_decode($data);
		$this->db->where('uniqid', $data);
	    $query=$this->db->delete('regorganization'); 
	    if($query)
	    {
	    	return true;
	    }
	    else{
	    	return false;
	    }
	}
	/* Edit individual*/
	public function editorganization($data){
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('uniqid',$data);
		$query=$this->db->get('regorganization');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	/* Display organization details*/
	public function vieworganization($data){
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('orgid',$data);
		$query=$this->db->get('testdetailsorganization');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	/* oragniaation test details*/
	public function testorganization($data){
		$data=base64_decode($data);
		$this->db->select('*');
		$this->db->where('id',$data);
		$query=$this->db->get('testdetailsorganization');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	/* update quantity details organization*/
	public function updatetestdetailsorganization($data){
		$id=base64_decode($data['id']);
		$this->db->where('id',$id);
		unset($data['id']);
		$query=$this->db->update('testdetailsorganization',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
		
	}
	/* Display employee Details by organization*/
	public function displayemployee($data){
		$orgid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('orgid',$orgid);
		$query=$this->db->get('regemployee');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/* Display candidate Details by organization*/
	public function displaycandidate($data){
		$orgid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('orgid',$orgid);
		$query=$this->db->get('regcandidate');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/* fetch employee details */
	public function editofemployeeupdate($data){
		$uniqid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('uniqid',$uniqid);
		$query=$this->db->get('regemployee');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	/* update employee  details*/
	public function updateemployeeorg($data){
		$uniqid=base64_decode($data['hiddenid']);
		$this->db->where('uniqid',$uniqid);
		unset($data['hiddenid']);
		$query=$this->db->update('regemployee',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/* fetch candidate details */
	public function editofcandidateupdate($data){
		$uniqid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('uniqid',$uniqid);
		$query=$this->db->get('regcandidate');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	/* update condidate  details*/
	public function updatecandidateorg($data){
		$uniqid=base64_decode($data['hiddenid']);
		$this->db->where('uniqid',$uniqid);
		unset($data['hiddenid']);
		$query=$this->db->update('regcandidate',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}

	/* pending test/completed of organization*/
	public function peddingtestbyorganization($data){
		$uniqid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('userid',$uniqid);
		$query=$this->db->get('assigntestempcan');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
	public function completedtestbyorganization($data){
		$uniqid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('userid',$uniqid);
		$query=$this->db->get('testresultorg');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
	/* -----------------Buying test Pending BY Indidvidual/Organization -----------------------------*/
	public function pendingtest(){
		$this->db->select('*');
		$this->db->group_by("username"); 
		$this->db->where('paymentstatus','pending');
		$query = $this->db->get('buytestindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	public function pendingtestindbyid(){
		$this->db->select('*');
		$this->db->where('paymentstatus','pending');
		$query = $this->db->get('buytestindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	public function pendingtestorg(){
		$this->db->select('*');
		$this->db->group_by("orgusername"); 
		$this->db->where('paymentstatus','pending');
		$query = $this->db->get('buytestorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function pendingtestorgbyid($where){
		$this->db->select('*');
		$this->db->where($where);
		$query = $this->db->get('buytestorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	/* Approve buying test by superadmin Individual*/
	public function approvetest($data){
		$this->db->where('id',$data['id']);
		unset($data['id']);
		$query=$this->db->update('buytestindividual',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	/* Fetch data from buyindividual by id*/
	public function fetchbuyindividual($data){
		$this->db->where('id',$data);
		$query=$this->db->get('buytestindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	/* Update testdetailindidual */
	public function updatetestdetailindividual($data){
		$this->db->where('userid',$data['userid']);
		$this->db->where('testid',$data['testid']);
		unset($data['userid'],$data['testid']);
		$query=$this->db->update('testdetailsindividual',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/* insert testdetailsindividual if not there */
	public function inserttestdetailsinidividual($data)
	{
		//print_r($data);
		$query=$this->db->insert('testdetailsindividual',$data);
		if($query>0){
			return true;
		}else{
			return false;
		}
	}
	/* Fetch testdetailsindicidual*/
	public function fetchtestindividual($data){
		$this->db->where('userid',$data['userid']);
		$this->db->where('testid',$data['testid']);
		$query=$this->db->get('testdetailsindividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/*------------------- Approve buying test by superadmin Organization ------------------*/
	public function approvetestorg($data){
		$this->db->where('id',$data['id']);
		unset($data['id']);
		$query=$this->db->update('buytestorganization',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/* Fetch buying testbuyingorganization */
	public function buytestorganization($data){
		$id=base64_decode($data);
		$this->db->where('id',$id);
		$query=$this->db->get('buytestorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/* check testdetailsorganization*/
	public function checktestorganization($data){
		$this->db->select('*');
		$this->db->where('orgid',$data['orgid']);
		$this->db->where('testid',$data['testid']);
		$query=$this->db->get('testdetailsorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/* insert data into testdetailsorganization*/
	public function inserttestdetailsorganization($data){
		$query=$this->db->insert('testdetailsorganization',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/* update data into testdetailsorganization*/
	public function updatetestdetailsorg($data){

		$this->db->where('orgid',$data['orgid']);
		$this->db->where('testid',$data['testid']);
		unset($data['orgid'],$data['testid']);
		$query=$this->db->update('testdetailsorganization',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}
	/*---
/*  -------------------------------- For Test-------------------------------------*/
	public function viewtest()
	{
		$this->db->select('*');
		$query = $this->db->get('listoftest');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	public function addtestlist($data){
		if(!empty($data['hiddenid'])){
			$hiddenid=base64_decode($data['hiddenid']);
			$this->db->where('uniqid',$hiddenid);
			unset($data['hiddenid'],$data['uniqid']);
			$query=$this->db->update('listoftest',$data);
		}
		else{
			$query=$this->db->insert('listoftest',$data);	
		}
		if($query>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function testdelete($data)
	{
		$data=base64_decode($data);
		$this->db->where('uniqid', $data);
    	$query=$this->db->delete('listoftest');
    	if($query)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
	    
	}
	public function selectbyidtest($data){
		$data=base64_decode($data);
		$this->db->where('uniqid', $data);
    	$query=$this->db->get('listoftest');
    	if($query->num_rows()>0)
    	{
    		return $query->result_array();
    	}
    	else
    	{
    		return false;
    	}
	}

	/*--------------------------- Result of test----------------------------------------*/
	/* result of individual*/
	public function resultofindividual(){
		$this->db->select('*');
		$query=$this->db->get('testresultind');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}

	}
	/* result of organization employee*/
	public function resultoforgemployee($data){
		$testid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('testid',$testid);
		$this->db->where('usertype','employee');
		$this->db->join('regemployee','regemployee.uniqid=testresultorg.userid');
		$query=$this->db->get('testresultorg');

		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	/* result of organization candidate*/
	public function resultoforgcandidate($data){
		$testid=base64_decode($data);
		$this->db->select('*');
		$this->db->where('testid',$testid);
		$this->db->where('usertype','candidate');
		$this->db->join('regcandidate','regcandidate.uniqid=testresultorg.userid');
		$query=$this->db->get('testresultorg');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
/*  -------------------------------- Extra function-------------------------------------*/
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
		        return true;
		    }
	    }
	}
	
	/* employee name of organizationof result */
	public function name($key){
		$this->db->where('uniqid',$key);
		    $query = $this->db->get('regemployee');
		    if ($query->num_rows() > 0){
		        return $query->result_array();
		    }
		    else{
		        return true;
		    }
	}
	/* Candidate name of organization result*/
	public function name1($key){
		$this->db->where('uniqid',$key);
		    $query = $this->db->get('regcandidate');
		    if ($query->num_rows() > 0){
		        return $query->result_array();
		    }
		    else{
		        return true;
		    }
	}

	/*-------------------------------------- Execel Formate ---------------------------*/
	public function exportexcelfile($data){
		if($data=='listoftest')
		{
			$this->db->select('`testname` as `Test Name`,`fullname` as `Full Name`,`testprice` as `Test Price`,`teststatus` as `Status`');
			
		}
		elseif($data=='regindividual')
		{
			$this->db->select('`fname` as `First Name`,`lname` as `Last Name`,`age` as `Age`,`gender` as `Gender`,`email` as `Email`,`qualification` as `Qualification`,`mobile` as `Mobile`,`address` as `Address`,`username` as `Username`,`actualpassword` as `Password`');
		}
		elseif ($data=='regorganization')
		{
			$this->db->select('`name` as `Name`,`orgname` as `Oragnization Name`,`website` as `Website`,`email` as `Email`,`mobile` as `Mobile`,`regno` as `Registration No`,`date` as `Date`,`aboutcompany` as `Description`,`address` as `Address`,`city` as `City`,`country` as `Country`,`username` as `Username`,`actualpassword` as `Password`');
			
		}
		$query=$this->db->get($data);
		return $query;
	}
	public function uploadexcelfile($data,$key){
		if($key=='viewindividualdetail')
		{
			$query=$this->db->insert_batch('regindividual',$data);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}
		if($key=='vieworganizationdetail')
		{
			$query=$this->db->insert_batch('regorganization',$data);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}
	}

	public function subsribe($data){
		$query = $this->db->insert('subscription',$data);
		if($query){
			return true;
		}
		else{
			return fasle;
		}
	}


	public function checkemailusername($data){
		$this->db->select('*');
		$this->db->from('regindividual, regorganization, regemployee, regcandidate,superadminlogin');
		$this->db->where('regindividual.email',$data); 
		$this->db->or_where('regorganization.email',$data); 
		$this->db->or_where('regemployee.email',$data);
		$this->db->or_where('regcandidate.email',$data);
		$this->db->or_where('superadminlogin.email',$data);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function getoption($data){
		$query = $this->db->where($data)->get('questoptinidividual');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}

	}

	public function getinvoicedetail($data,$table = null){
		$query = $this->db->where($data)->get($table);
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

}

?>