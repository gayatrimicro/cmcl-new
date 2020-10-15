<?php 

class Notification extends MY_Model{


	public function addnotification($data){
		$query = $this->db->insert_batch('notification',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	public function getnotification($data){
		$query = $this->db->order_by('id','desc')->order_by('status','ur')->where($data)->get('notification');
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else{
			return false;
		}
	}


	public function updatenotification($data){
		$set = array('status' => 'r');
		$query = $this->db->where($data)->update('notification',$set);
		if($query){
			return true;
		}	
		else{
			return false;
		}
	}

	public function getnotificationcount($data){
		$query = $this->db->select('count(*) as count')->where($data)->get('notification');
		if($query->num_rows()>0){
			return $query->result_array()[0]['count'];
		}
		else{
			return false;
		}
	}
}

?>