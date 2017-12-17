<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('Items_Model', 'items_model');
	}
	
	/***************** Items ***************************/
	public function index()
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/login/index');
		}
		$data['result'] = $this->items_model->listItems();
		$this->load->view('admin/items/index',$data);
	}
	
	public function addItems()
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/index');
		}
		$this->load->view('admin/items/addItems');
		
	}
	
	public function insertItems()
	{
				$data = array(
				'Items_Name' => $this->input->post('itemName'),
				'Items_Type' => $this->input->post('itemType'),
				'Items_Description' => $this->input->post('itemDesc'),
				'Items_Brand' => $this->input->post('itemBrand'),
				'Items_Active' => 1,
				'Items_AddedBy' => 1,
				'Items_CreatedOn' => date('Y-m-d H:i:s')
				);
				
				$result = $this->items_model->addItems($data);
				if ($result == TRUE) {
					redirect('admin/items/items');
				}
				 else {
					$data = array(
						'error_message' => 'Error in inserting Items'
					);
					$this->load->view('admin/items/editItems', $data);
				}
		
	}
	
	public function editItems($id)
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/index');
		}
		$data['result'] = $this->items_model->getItem($id);
		$this->load->view('admin/items/editItems',$data);
		
	}
	
	public function updateItems()
	{
				$data = array(
				'Items_Id' => $this->input->post('itemId'),
				'Items_Name' => $this->input->post('itemName'),
				'Items_Type' => $this->input->post('itemType'),
				'Items_Description' => $this->input->post('itemDesc'),
				'Items_Brand' => $this->input->post('itemBrand'),
				'Items_Active' => $this->input->post('itemStatus')
				);
				
				$result = $this->items_model->updateItems($data);
				if ($result == TRUE) {
					redirect('admin/items/items');
				}
		
	}
	
	public function deleteItems() {
				$id =$this->input->post('itemId');
				$result = $this->items_model->deleteItems($id);
				if ($result == TRUE) {
					redirect('admin/items/items');
				}
				 else {
					$data = array(
						'error_message' => 'Error in deleting items'
					);
					$this->load->view('admin/items/index', $data);
				}
		
	}
	public function reports(){
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/login/index');
		}
		$data['result'] = $this->items_model->listItems();
		$this->load->view('admin/items/index',$data);
	}
}
