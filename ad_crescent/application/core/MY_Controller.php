<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('notification');
		$this->load->model('adminm');
	}

	public function isloggedin(){
		if(isset($this->session->userdata['individual']['id'])){
			return true;
		}
		else{
			return false;
		}
	}


	public function isloggedinadmin(){
		if(isset($this->session->userdata['admin']['id'])){
			return true;
		}
		else{
			return false;
		}
	}

	public function isloggedinemployee(){
		if(isset($this->session->userdata['employee']['id'])){
			return true;
		}
		else{
			return false;
		}
	}

	public function isloggedincandidate(){
		if(isset($this->session->userdata['candidate']['id'])){
			return true;
		}
		else{
			return false;
		}
	}

	public function isloggedinsuperadmin(){
		if(isset($this->session->userdata['superadmin']['id'])){
			return true;
		}
		else{
			return false;
		}
	}


	public function getlogintype(){
		// print_r($this->session->userdata);
		$data = '';
		if(isset($this->session->userdata['individual'])){
			$data = 'user/';
		}
		if(isset($this->session->userdata['admin'])){
			$data = 'admin/';
		}
		if(isset($this->session->userdata['superadmin'])){
			$data = 'superadmin/';
		}
		if(isset($this->session->userdata['employee'])){
			$data = 'employee/';
		}
		if(isset($this->session->userdata['candidate'])){
			$data = 'candidate/';
		}
		return $data;
	}



	public function getvalue($table = null,$column = null,$where = null)
	{
		return $this->adminm->getvalue($table,$column,$where);
	}
	/************ download Excel Formate***********/
	public function excelDownload($data,$filename='download'){
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=\"$filename".".csv\"");
        header("Pragma: no-cache");
        header("Expires: 0");
        $handle = fopen('php://output', 'w');
        $i = 0;
        while($i<count($data)){
        	fputcsv($handle, $data[$i]);
        	$i++;
        }
        fclose($handle);
        exit;
    }
    /************************************************/


    public function insertresult($data = null){
    	if($data == null){
    		return false;
    	}
    	$date = date('Y-m-d');
    	$time = time();
    	if($this->isloggedin()){
    		$userid = $this->session->userdata['individual']['id'];
			$username = $this->session->userdata['individual']['uname'];
			$uniqid = uniqid();
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testoptions' => $data['options'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);
			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testresult' => $data['testresult'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid);
			if($this->result->insertresultind($array)){
				// $where = array('userid' => $userid, 'username' => $username,'testid' => $data['testid']);
				// if($count = $this->result->gettotaltest('testdetailsindividual',$where)){
				// 	$qty = $count-1;
				// 	$set = array('testqty' => $qty);
				// 	$this->result->updatetestqty('testdetailsindividual',$where,$set);
				// }
				return true;
			}
			else{
				return false;
			}
    	}
    	if($this->isloggedinemployee()){
    		$userid = $this->session->userdata['employee']['id'];
			$username = $this->session->userdata['employee']['uname'];
			$uniqid = uniqid();
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testoptions' => $data['options'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $data['orgid'],'usertype' => 'employee');
			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testresult' => $data['testresult'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $data['orgid'],'usertype' => 'employee');
			if($this->result->insertresultorg($array))
			{
				// $where = array('userid' => $userid,'testid' => $data['testid']);
				// if($count = $this->result->gettotaltest('assigntestempcan',$where))
				// {
				// 	$qty = $count-1;
				// 	$set = array('testqty' => $qty);
				// 	$this->result->updatetestqtyemp('assigntestempcan',$where,$set);
				// }
				return true;
			}
			else
			{
				return false;
			}
    	}
    	if($this->isloggedincandidate()){
    		$userid = $this->session->userdata['candidate']['id'];
			$username = $this->session->userdata['candidate']['uname'];
			$uniqid = uniqid();
    		$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testoptions' => $data['options'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $data['orgid'],'usertype' => 'candidate');
			$this->result->insertoptionind($array);
			$array = array('userid' => $userid, 'username' => $username, 'testid' => $data['testid'], 'testname' => $data['testname'], 'testresult' => $data['testresult'], 'testdate' => $date, 'testtime' => $time, 'resultuniqid' => $uniqid,'orgid' => $data['orgid'],'usertype' => 'candidate');
			if($this->result->insertresultorg($array))
			{
				// $where = array('userid' => $userid,'testid' => $data['testid']);
				// if($count = $this->result->gettotaltest('assigntestempcan',$where))
				// {
				// 	$qty = $count-1;
				// 	$set = array('testqty' => $qty);
				// 	$this->result->updatetestqtyemp('assigntestempcan',$where,$set);
				// }
				return true;
			}
			else
			{
				return false;
			}
    	}
    }

    public function getcart($data){
    	return $this->userm->getcart($data);
    }

    public function addnotification($data){
    	return $this->notification->addnotification($data);
    }

    public function getnotification($data){
    	return $this->notification->getnotification($data);
    }

    public function getnotificationcount($data){
    	return $this->notification->getnotificationcount($data);
    }

}

?>