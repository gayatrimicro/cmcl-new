<?php 
Class Admin_data extends CI_Model{

	public function insert_details($table,$data,$where=null){
		if(!empty($where)){
			$this->db->where($where);
			$da=$this->db->update($table,$data);
		}else{
			$da=$this->db->insert($table,$data);
		}
		if($da){
			return true;
		}else{
			return false;
		}
	}

	public function get_carrier_details()
	{		
		$this->db->order_by('carrier_details.status', 'desc');
		$this->db->where('status', 1);
		$da=$this->db->get('carrier_details');
		
		return $da->result_array();
	}

	// public function get_details_job_persons(){
	// 	$this->db->from('applied_person');
	// 	$this->db->join('carrier_details', 'applied_person.carrier_id = carrier_details.carrier_id', 'left');
	// 	$this->db->where('carrier_details.status', 1);
	// 	$this->db->where('applied_person.status', 1);
	// 	$this->db->order_by('carrier_details.status', 'desc');
	// 	$this->db->order_by('applied_person.apply_id', 'desc');
	// 	$res = $this->db->get();
	// 	return $res->result_array();
	// }

	public function get_details_job_persons(){
		$this->db->from('applied_person');
		$this->db->join('carrier_details', 'applied_person.carrier_id = carrier_details.carrier_id');
		$this->db->where('carrier_details.status', 1);
		$this->db->where('applied_person.status', 1);
		$this->db->order_by('applied_person.apply_id', 'desc');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function backup_applied_person_data(){
		$this->db->from('applied_person');
		$this->db->join('carrier_details', 'applied_person.carrier_id = carrier_details.carrier_id', 'left');
		$this->db->where('carrier_details.carrier_title', null);
		$this->db->or_where('carrier_details.status', 0);
		$this->db->or_where('applied_person.status', 0);
		$this->db->order_by('applied_person.apply_id', 'desc');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function soft_delete($id, $col, $table)
	{
		$data = array('status'=>0);
		$this->db->where($col, $id);
		$da=$this->db->update($table, $data);
		
		if($da){
			return true;
		}else{
			return false;
		}
	}

	public function get_details($table,$data_id=null){
		if(!empty($data_id)){
			$this->db->where($data_id);
		}
		$da=$this->db->get($table);
		return $da->result_array();
	}
	public function delete_data($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}
	public function match_data($table,$where){
		$this->db->where($where);
		$da=$this->db->get($table);
		if($this->db->affected_rows()){
			return $da->result_array();
		}else{
			return false;
		}
	}
	public function get_data($table,$from,$to,$data){
		$this->db->where($from,$to);
		$da=$this->db->get($table);
		return $da->result_array()[0][$data];
	}
}

?>