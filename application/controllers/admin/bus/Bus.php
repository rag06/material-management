<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->model('Bus_Model', 'bus_model');
	}
	
	/***************** bus List ***************************/
	public function index()
	{
		if(!isset($this->session->userdata['logged_in'])){
			redirect('admin/login/login/index');
		}
		$data['result'] = $this->bus_model->listBus();
		$this->load->view('admin/bus/bus',$data);
	}
	
	public function insertBus()
	{
				$data = array(
				'bus_number' => $this->input->post('busNo'),
				);
				
				$result = $this->bus_model->addBus($data);
				if ($result == TRUE) {
					redirect('admin/bus/bus/index');
				}
				 else {
						$this->load->view('admin/bus/bus', $data);
				}
		
	}
	
	public function deleteBus() {
				$id =$this->input->post('busNo');
				$result = $this->bus_model->deleteBus($id);
				if ($result == TRUE) {
					redirect('admin/bus/bus/index');
				}
				 else {
					$data = array(
						'error_message' => 'Error in deleting bus'
					);
					$this->load->view('admin/bus/bus', $data);
				}
		
	}
}
