<?php
Class Bus_Model extends CI_Model {
	
	/******************* Bus List ************************/
	
	public function listBus() {
		
		$this->db->select('*');
		$this->db->from('bus_list');
		$this->db->order_by('bus_number','asc');
		$query = $this->db->get();
		$data=array();
		$data['result']=$query->result();
		$data['records']=$query->num_rows();
		return $data;
		
	}
	
	public function updateBus($data)
	{			
		$this->db->where('bus_number', $data['bus_number']);
		$this->db->update('bus_list' ,$data);
			if ($this->db->affected_rows() > 0) {
				return true;
				}
		
			return false;
		
		
	}
	
	public function deleteBus($id) {
		
		$this->db->where('bus_number', $id);
		$this->db->delete('bus_list');
		if ($this->db->affected_rows() > 0) {
				return true;
				}
				return false;
		
	}
	
	public function addBus($data) {
		// Query to insert data in database
		$this->db->insert('bus_list', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		}
		 else {
		return false;
		}
	}
	
}
?>