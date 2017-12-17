<?php
Class Items_Model extends CI_Model {
	
	public function addItems($data) {
		// Query to insert data in database
		$this->db->insert('items', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		}
		 else {
		return false;
		}
	}
	
	public function listItems() {
		
		$this->db->select('*');
		$this->db->from('items');
		$this->db->order_by('Items_CreatedOn','desc');
		$query = $this->db->get();
		$data=array();
		$data['result']=$query->result();
		$data['records']=$query->num_rows();
		return $data;
		
	}
	
	public function deleteItems($id) {
		
		$this->db->where('Items_Id', $id);
		$this->db->delete('items');
		if ($this->db->affected_rows() > 0) {
				return true;
				}
				return false;
		
	}
	
	public function getItem($id)
	{			$query=$this->db->query("SELECT * FROM items  WHERE Items_Id = $id");
				return $query->result_array();
	}
	
	public function updateItems($data)
	{			
		$this->db->where('Items_Id', $data['Items_Id']);
		$this->db->update('items' ,$data);
			if ($this->db->affected_rows() > 0) {
				return true;
				}
		
			return false;
		
		
	}
	
}
?>