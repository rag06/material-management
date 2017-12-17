<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

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
		$this->load->model('Bus_Model', 'bus_model');
		$this->load->model('Transactional_Model', 'transactional_model');
	}
	
	/***************** Items Transaction ***************************/
	public function index()
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/login/index');
		}
		$data['result'] = $this->transactional_model->listTranactions();
		$this->load->view('admin/transaction/index',$data);
	}
	
	public function addTransaction()
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/index');
		}
		$data['items'] = $this->items_model->listItems();
		$data['bus'] = $this->bus_model->listBus();
		$this->load->view('admin/transaction/addTransaction',$data);
		
	}
	
	public function insertTransaction()
	{
				$data = array(
				'transaction_Item' => $this->input->post('item'),
				'transaction_Type' => $this->input->post('type'),
				'transaction_Qty' => $this->input->post('qty'),
				'transaction_To' => $this->input->post('to'),
				'transaction_Bus' => $this->input->post('bus'),
				'transaction_AddedBy' => 1,
				'transaction_CreatedOn' => date('Y-m-d H:i:s')
				);
				
				$result = $this->transactional_model->addTransaction($data);
				if ($result == TRUE) {
					redirect('admin/transaction/transaction');
				}
		
	}
	
	public function getTransaction($id)
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/index');
		}
		$data['result'] = $this->transactional_model->getTransaction($id);
		$this->load->view('admin/transaction/viewTransaction',$data);
		
	}
	
	public function reports(){
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/login/index');
		}
		$data['result'] = $this->transactional_model->listTransactions();
		$this->load->view('admin/transaction/index',$data);
	}
}
