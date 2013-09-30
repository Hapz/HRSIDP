<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Home extends My_Controller{
	
	private $logged_in;	
		
	public function index(){

     $session_data = $this->session->userdata('logged_in');
     $this->load->view('view_home', $session_data);		
	}
	
	public function generatePayment(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('generate_payslip',$session_data);
	}

	
	public function logout(){
	
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('lastname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('validated');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}