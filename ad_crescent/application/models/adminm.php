<?php 

class Adminm extends MY_Model{


	public function userdata($where){
		$this->db->select('name,orgname,email,website,mobile,address,image,uniqid as id,username,city,country,postal,aboutcompany')
				->where($where);
		$query = $this->db->get('regorganization');
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

	public function pass_exists($old_password)
	{
	    $this->db->where('actualpassword',$old_password);
	    $query = $this->db->get('regorganization');
	    if ($query->num_rows() > 0){
	        return true;
	    }
	    else{
	        return false;
	    }
	}

	public function updateprofile($data){
		$uniqid = $data['uniqid'];unset($data['uniqid']);
		$this->db->where('uniqid',$uniqid);
		$query = $this->db->update('regorganization',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	public function insertemployee($data){
		$query = $this->db->insert('regemployee',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function updateemployee($data){
		// echo "<pre>";
		// print_r($data);
		$where = array('uniqid' => $data['empid'], 'orgid' => $data['orgid'], 'orgusername' => $data['orgusername']);
		unset($data['empid'],$data['orgid'],$data['orgusername']);
		$this->db->where($where);
		$query = $this->db->update('regemployee',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function insertcandidate($data){
		$query = $this->db->insert('regcandidate',$data);
		if($query>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function updatecandidate($data){
		//print_r($data);die;
		$where = array('uniqid' => $data['canid'], 'orgid' => $data['orgid'], 'orgusername' => $data['orgusername']);
		unset($data['canid'],$data['orgid'],$data['orgusername']);
		$this->db->where($where);
		$query = $this->db->update('regcandidate',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	public function getemployees($where){
		$this->db->select('fname,lname,email,mobile,uniqid as id,username,password,actualpassword,description,gender')
				->where($where);
		$query = $this->db->get('regemployee');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function getcandidate($where){
		$this->db->select('fname,lname,gender,designation,email,mobile,uniqid as id,username,password,actualpassword,description')
				->where($where);
		$query = $this->db->get('regcandidate');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function gettest($where){
		// $where['testqty'] = 
		$this->db->select('testid,testname,testqty')
				->where($where);
		$query = $this->db->get('testdetailsorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function checktestqty($where){
		$this->db->select('testqty,testname')
					->where($where);
		$query = $this->db->get('testdetailsorganization');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function assigntestempcan($data){
		if(count($data)>0){
			foreach ($data as $key => $value) {
				$where = array('orgid' => $value['orgid'], 'orgusername' => $value['orgusername'], 'userid' => $value['userid'], 'usertype' => $value['usertype'], 'testid' => $value['testid']);
				$query = $this->db->select('userid,username,orgid,orgusername,usertype,testid,testqty')
						->where($where)
						->get('assigntestempcan');
				if($query->num_rows()>0){
					$res = $query->result_array()[0];
					/**** Update employee test qty **********/
					$testqty = $res['testqty']+$value['testqty'];
					$update = array('testqty' => $testqty);
					$query = $this->db->where($where)->update('assigntestempcan',$update);					
				}
				else{
					/****** insert ******/
					$query = $this->db->insert('assigntestempcan',$value);
				}
				if($query){
					$where = array('orgid' => $value['orgid'], 'orgusername' => $value['orgusername'], 'testid' => $value['testid']);
					$query = $this->db->select('testid,testqty')->where($where)->get('testdetailsorganization');
					if($query->num_rows()>0){
						$res = $query->result_array()[0];
						$testqty = $res['testqty']-$value['testqty'];
						$set = array('testqty' => $testqty);
						$this->db->where($where)->update('testdetailsorganization',$set);
					}
				}
			}
			return true;
		}		
		else{
			return false;
		}
	}


	public function getassigntest($where){
		$query=$this->db->query("SELECT (a.`testqty`) as testqty,(a.`testid`)as testid,(t.`testname`) as testname,(a.`orgid`),(a.`orgusername`),(a.`userid`),(a.`usertype`)as type FROM `assigntestempcan` a INNER join listoftest t on a.`testid`=t.`uniqid` where a.`userid`='$where[userid]' AND a.`orgid` = '$where[orgid]' AND a.`orgusername` = '$where[orgusername]' ");
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function getvalue($table,$column,$wherecondition){
		//print_r($wherecondition);die;
		$this->db->select($column);
		if($wherecondition!=null){
			$this->db->where($wherecondition);
		}
		$query = $this->db->get($table);
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return true;
		}
	}

	public function getcount($table,$where){
		$query = $this->db->select('count(*) as total')->where($where)->get($table);
		if($query->num_rows()>0){
			return $query->result_array()[0]['total'];
		}
		else{
			return false;
		}
	}

	public function gettestresult($where){
		// $where['testqty'] = 
		$this->db->select('testid,testname,testdate,testtime,testresult,userid,orgid,resultuniqid,status')
				->where($where);
		$query = $this->db->get('testresultorg');
		if($query->num_rows()>0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function importempcan($table=null,$data=null){
		$query = $this->db->insert_batch($table,$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function permission($data){
		if(empty($data['resultid'])){
			$set['status'] = 'f';
			$where = array('usertype' => $data['type'], 'orgid' => $data['orgid'], 'testid' => $data['testid']); 
			$query = $this->db->where($where)->update('testresultorg',$set);
			if($query){
				return true;
			}
			else{
				return false;
			}
		}
		$set['status'] = 't';
		$data['resultuniqid'] = $data['resultid'];
		unset($data['resultid']);
		$query = $this->db->where('orgid',$data['orgid'])->where_in('resultuniqid',$data['resultuniqid'])->update('testresultorg',$set);
		if($query){
			$set['status'] = 'f';
			$where = array('orgid' => $data['orgid'], 'usertype' => $data['type'], 'testid' => $data['testid']);
			$query = $this->db->where($where)->where_not_in('resultuniqid',$data['resultuniqid'])->update('testresultorg',$set);
			return true;
		}
		else{
			return false;
		}
	}

	public function editassignment($data){
		$where = $data;
		$where = array('orgid' => $data['orgid'], 'orgusername' => $data['orgusername'], 'testid' => $data['testid'], 'testqty >=' => $data['testqty']);
		$query = $this->db->select('testqty')->where($where)->get('testdetailsorganization');
		if($query->num_rows()>0){
			$res = $query->result_array()[0];
			$set['testqty'] = ($res['testqty']-$data['testqty']);unset($where['testqty']);
			$update = $this->db->where($where)->update('testdetailsorganization',$set);
			if($update){
				$where = array('orgid' => $data['orgid'], 'orgusername' => $data['orgusername'], 'testid' => $data['testid'], 'userid' => $data['userid']);
				$query = $this->db->select('testqty')->where($where)->get('assigntestempcan');
				if($query->num_rows()>0){
					$res = $query->result_array()[0];
					$set['testqty'] = $res['testqty'] + $data['testqty'];
					$update = $this->db->where($where)->update('assigntestempcan',$set);
					if($update){
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