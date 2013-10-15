<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Link_ctrl extends My_Controller {
	private $logged_in;
	
	/*
	 * All the link for the Renumeration
	 * */
	
	//View Payment Record
	//function view_payment_record(){}
	
	//Generate All Payment Record
	function generate_payment(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('generate_payslip',$session_data);
	}
	
	//Update Payment Statys
	function update_payment_status(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('payment_status',$session_data);
	}
	

	/*
	 * All the link for the Claim
	* */

	//Submit Claim
	function submit_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('submit_claim',$session_data);
	}
	
	//Validate Claim
	function validate_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('validate_claim',$session_data);
	}
	
	//Generate Claim Slip
	function generate_claimslip(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('generate_claimslip',$session_data);
	}
	
	//Approve/Reject Claim
	function approve_reject_claim(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('approve_reject_claim',$session_data);
	}
	
	//View Claim Status
	function view_claim_status(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('claim_status', $session_data);
	}
	
	//View Claim Analysis Report
	//function claim_analysis_report{}
	
	
	/*
	 * All the links for Leave
	* */
	
// 	//Apply Leave
// 	function apply_leave(){
// 		$session_data = $this->session->userdata('logged_in');
// 		$this->load->view('apply_leave',$session_data);
// 	}
	
	
	
// 	//View & Edit Leave
// 	function view_edit_leave(){
// 		$session_data = $this->session->userdata('logged_in');
// 		$this->load->view('view_edit_leave',$session_data);
// 	}
	
// 	//Approve & Reject Leave
// 	function approve_reject_leave(){
// 		$session_data = $this->session->userdata('logged_in');
// 		$this->load->view('approve_reject_leave',$session_data);	
// 	}
	
	//View Leave History
	//function view_leave_history(){}
	
	//Validate Medical Leave
	//function validate_medical_leave(){}
	
	//Generate Leave Report
	//function generate_leave_report{}
	
	
	/*
	 * All the link for the Training & Development
	* */
	
	//manage course > propose training course
	//function propose_training_course(){}	
	
	//manage course > assign trainer for internal training
	//function assign_trainer(){}
	
	//manage course feedback > add course feedback
	//function add_course_feedback(){}
	
	//manage course feedback > review course feedback
	//function review_course_feedback(){}
	
	//manage course feedback > manage report
	//function manage_report(){}
	
	//manage employee training record > view employee training report
	//function view_employee_training_report(){}
	
	//manage training report > report 1
	//function training_report1(){}
	
	//manage training report > report 2
	//function training_report2(){}
	
	//manage training report > report 3
	//function training_report3(){}
	
}
