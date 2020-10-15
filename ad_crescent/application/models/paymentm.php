<?php

class Paymentm extends MY_Model{


	public function makepayment($data){
		if(count($data)>0){
			if($data['type'] == 'admin'){
				unset($data['type'],$data['uniqid'],$data['username']);
				$query1 = $this->db->insert_batch('buytestorganization',$data['det']);
				$orgusername = '';
				$orgid = '';
				$testid = array();
				foreach ($data['det'] as $key => $value) {
					$test[$value['testname']] = $value['testid'];
					$paymentstatus[] = $value['paymentstatus'];
					$testqty[] = $value['testquantity'];
					$orgid = $value['orgid'];
					$orgusername = $value['orgusername'];
				}
				if($query1){
					$i = 0;
					foreach ($test as $key => $value) {
						if($paymentstatus[$i] == 'pending'){
							$testqty[$i] = '0';
						}
						$where = array('orgid' => $orgid, 'orgusername' => $orgusername, 'testid' => $value);
						$this->db->select('testqty')
								->where($where);
						$query = $this->db->get('testdetailsorganization');
						if($query->num_rows()>0){
							$qty = $query->result_array()[0]['testqty']+$testqty[$i];
							$data = array('testqty' => $qty);
							$this->db->where($where);
							$this->db->update('testdetailsorganization',$data);
						}
						else{
							$data = array('orgid' => $orgid, 'orgusername' => $orgusername, 'testid' => $value, 'testname' => $key, 'testqty' => $testqty[$i]);
							$this->db->insert('testdetailsorganization',$data);
						}
						
						$i++;
					}
					return true;
				}
				else{
					return false;
				}
			}
			if($data['type'] == 'individual'){
				unset($data['type']);
				/************************ Code for referal amount ********************/
				
				/*********************************************************************/
				$query1 = $this->db->insert_batch('buytestindividual',$data['det']);
				$username = '';
				$userid = '';
				$testid = array();
				foreach ($data['det'] as $key => $value) {
					$test[$value['testname']] = $value['testid'];
					$paymentstatus[] = $value['paymentstatus'];
					$testqty[] = $value['testquantity'];
					$userid = $value['userid'];
					$username = $value['username'];
				}
				
				if($query1){
					$i = 0;
					foreach ($test as $key => $value) {
						if($paymentstatus[$i] == 'completed'){
							$where = array('userid' => $userid, 'username' => $username, 'testid' => $value);
							$this->db->select('testqty')
									->where($where);
							$query = $this->db->get('testdetailsindividual');
							if($query->num_rows()>0){
								$qty = $query->result_array()[0]['testqty']+$testqty[$i];
								$data = array('testqty' => $qty);
								$this->db->where($where);
								$this->db->update('testdetailsindividual',$data);
							}
							else{
								$data = array('userid' => $userid, 'username' => $username, 'testid' => $value, 'testname' => $key, 'testqty' => $testqty[$i]);
								$this->db->insert('testdetailsindividual',$data);
							}
						}
						$i++;
					}
					return true;
				}
				else{
					return false;
				}
			}
		}
	}


}

?>