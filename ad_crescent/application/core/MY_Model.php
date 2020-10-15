<?php

class MY_Model extends CI_Model{
	
	public function checkuniqidinregistration($id){
		$this->db->select('uniqid')
				->where('uniqid',$id);
		$query = $this->db->get('regindividual');
		if($query->num_rows()>0){
			$id = uniqid();
			$this->checkuniqidinregistration($id);
		}
		return $id;
	}


	

}

?>