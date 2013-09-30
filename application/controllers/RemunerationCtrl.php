<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class RemunerationCtrl extends My_Controller{
	
	private $logged_in;	
		
	
	public function generatePayment(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('generate_payslip',$session_data);
	}
	
	public function viewSlip(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('view',$session_data);
	}
	
	public function updatePayment(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('payment_status',$session_data);
	}
	
}