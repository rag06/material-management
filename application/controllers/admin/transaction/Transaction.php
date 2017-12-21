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
		$data['items'] = $this->items_model->listItems();
		$data['bus'] = $this->bus_model->listBus();
		$this->load->view('admin/transaction/customReports',$data);
	}
	
	
	public function downloadTransactionReport(){
		//load mPDF library
		$this->load->library('m_pdf');
		//now pass the data//
		$this->data['title']="Items Transaction Report";
		$this->data['description']="Contains items Transaction Reports";
		if(isset($_REQUEST['dateRange']))
			$daterange = explode(' - ',$_REQUEST['dateRange']);
		
		$this->data['result'] = $this->transactional_model->listTranactionsReports($_REQUEST['item'],$_REQUEST['bus'],$daterange[0],$daterange[1]);
		
		$html=$this->load->view('admin/transaction/pdfTransactionReport',$this->data, true);
		
		
		//this the the PDF filename that user will get to download
		$pdfFilePath ="transactionReport-".time()."-download.pdf";
		 
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		
		//generate the PDF!
		$pdf->WriteHTML($html,2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");
			
	}
}
