<?php
class Claim_ctrl extends MY_Controller{
	

	//load submit claim page
	public function view_submit_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$this->claim_service->view_submit_claim();
	}
	
	//submit claim
	public function submit_claims(){
		
		//$date_incurr = $this->input->post('date_incurr');
		/*$select_claim[]= $this->input->post('select_claim[]');
		$date_incurr[] = $this->input->post('date_incurr[]');
		$project_id[] = $this->input->post('project_id[]');
		$claim_pic[] = $this->input->post('claim_pic[]');
		$type[] = $this->input->post('type[]');
		$claim_amount[] = $this->input->post('claim_amount[]');
		*/
		
		if(isset($_POST)==true && empty($_POST)==false){
			//$chkbox = $_POST['chk'];  
			//$select_claim =  $_POST['select_claim'];
			$date_incurr =  $_POST['date_incurr'];
			$project_id = $_POST['project_id'];
			$claim_pic = $_POST['claim_pic'];			
			$type = $_POST['type'];
			$claim_amount = $_POST['claim_amount'];			
		}		
		$this->load->model('claim_service');
		$this->claim_service->submit_claims($date_incurr,$project_id,$claim_pic,$type,$claim_amount);
		
	}
	
	//validate claim page
	public function view_pending_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$this->claim_service->view_pending_claim();
	}
	
	//update claim amount for validate claim
	public function update_claim_amount(){
		$new_amount = $_POST['amount'];
		$claim_no = $_POST['claim_no'];
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$result = $this->claim_service->update_claim_amount($claim_no, $new_amount);
	}
	
	//update claim status for validate claim
	public function update_claim_status(){
		$updated_status = "Validated";
		$claim_no = $_POST['claim_no'];
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$result = $this->claim_service->update_claim_status($claim_no, $updated_status);
	}
	
	//update claim status for approved claim in approve/reject claim page
	public function update_approve_claim(){
		$updated_status = "Approved";
		$claim_no = $_GET['claim_no'];
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$result = $this->claim_service->update_approve_claim($claim_no, $updated_status);
	}

	//update claim status for rejected claim in approve/reject claim page
	public function update_reject_claim(){
		$updated_status = "Rejected";
		$claim_no = $_GET['claim_no'];
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$result = $this->claim_service->update_reject_claim($claim_no, $updated_status);
	}
	
	//update claim amount for reject/approved claim
	public function edit_claim_amount(){
		$new_amount = $_GET['amount'];
		$claim_no = $_GET['claim_no'];
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$result = $this->claim_service->edit_claim_amount($claim_no, $new_amount);
	}
	
	//validate claim page
	public function view_validated_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$this->claim_service->view_validated_claim();
	}
	
	//approve/reject claim page
	//public function approve_reject_claim(){
		//$session_data = $this->session->userdata('logged_in');
		//$this->load->view('approve_reject_claim', $session_data);
	//}
	
	//view claim status page 
	public function view_claim_status(){
		$session_data = $this->session->userdata('logged_in');
		//$this->load->view('claim_status', $session_data);
		$this->load->model('claim_service');
		$this->claim_service->view_claim_status();
	}
	
	//generate claimslip
	public function generate_claimslip(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('generate_claimslip', $session_data);
	}
	
	//view claim anaylsis report
	public function view_claim_report(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$this->claim_service->test();
	}
	
	//view claim slip
	public function view_claimslip(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->model('claim_service');
		$this->claim_service->view_claimslip();
	}
	
	//get submitted claims; $type = search criteria; $val = the search value
	public function get_claim($type,$val){
		$this->load->model('claim_service');
		$this->claim_service->get_claim($type,$val);
	}
}
?>