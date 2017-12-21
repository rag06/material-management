<?php
Class Transactional_Model extends CI_Model {
	
	public function addTransaction($data) {
		// Query to insert data in database
		$this->db->insert('items_transaction', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		}
		 else {
		return false;
		}
	}
	
	public function listTranactions() {
		
		$this->db->select('*');
		$this->db->from('items_transaction');
		$this->db->join('items','items.Items_Id = items_transaction.transaction_Item');
		$this->db->order_by('transaction_CreatedOn','desc');
		$query = $this->db->get();
		$data=array();
		$data['result']=$query->result();
		$data['records']=$query->num_rows();
		return $data;
		
	}
	public function listTranactionsReports($itemId='',$busNumber='',$startDate,$endDate) {
		
		$this->db->select('*');
		$this->db->from('items_transaction');
		$this->db->join('items','items.Items_Id = items_transaction.transaction_Item');
		$where = "";
		$where .= "	transaction_CreatedOn BETWEEN '".$startDate."' AND '".$endDate."'";
		if(!empty($itemId))
			$where .= " AND transaction_Item=".$itemId;
		if(!empty($busNumber))
			$where .= " AND 	transaction_Bus='".$busNumber."'";
			
		$this->db->where($where);
		$this->db->order_by('transaction_CreatedOn','desc');
		$query = $this->db->get();
		$data=array();
		$data['result']=$query->result();
		$data['records']=$query->num_rows();
		return $data;
		
	}
	public function deleteTransaction($id) {
		
		$this->db->where('transaction_Id', $id);
		$this->db->delete('items_transaction');
		if ($this->db->affected_rows() > 0) {
				return true;
				}
				return false;
		
	}
	
	public function getTransaction($id)
	{			$query=$this->db->query("SELECT * FROM items_transaction  WHERE transaction_Id = $id");
				return $query->result_array();
	}
	
	public function updateItems($data)
	{			
		$this->db->where('transaction_Id', $data['transaction_Id']);
		$this->db->update('items_transaction' ,$data);
			if ($this->db->affected_rows() > 0) {
				return true;
				}
		
			return false;
		
		
	}
	
}
?>