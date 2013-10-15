<?php

class Remuneration_ctrl extends MY_Controller{
	
	public function generate_all(){
		if(isset($_POST["payslip"])){
		$this->load->model("remuneration_service");
		echo"test";
		}
	}
	
	function generate_payment(){
		$this->load->helper('url');
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('remuneration_service');
		$result = $this->remuneration_service->generate_for_all();
		
// 		$this->load->view('generate_payslip',$session_data);
		
	}
	
	function generate_new_payment(){
		$this->load->model('remuneration_service');
		$result = $this->remuneration_service->change_generate();
		
	}
	
	public function viewSlip($no,$number){
		$session_data = $this->session->userdata('logged_in');
		//$this->load->view('view',$session_data);			
		$this->load->model('remuneration_service');
		$result = $this->remuneration_service->determine_age($no,$number);
	}
	
	//Update Payment Status
	function update_payment_status(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('payment_status',$session_data);
	}
	
	

	
	/* 
	public function generate_remuneration_for_lastname(){
		//based on the search requirement
		$this->load->model("employee_ctrl");
		 
		$result= $this->employee_ctrl->getEmployee("LastName", "Tan");	
		$this->load->view('generate_payslip', $result);
	}
	 */
	
	
}
