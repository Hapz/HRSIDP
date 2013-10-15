<?php
class Claim_service extends CI_Model{
	
//get submitted claims
	public function view_pending_claim(){
		$this->load->model('claim_dao');
		$search_claims = $this->claim_dao->get_claim('Status', 'Pending');
		$list_of_pending_claims = array();
		$emp_name = array();

		foreach($search_claims as $claim){
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip, $no, $status, $remarks);
			$list_of_pending_claims[] = $claim; // add it into the list
	
			//Call employeeDAO to get FamilyName and Given Name
			$this->load->model ( "employee_dao" );
	
			//search for this employee thru his/her no from the database
			$search = $this->employee_dao->get_employee( "No", $no );
			$emp = $search[0]; //there should only be 1 result found
	
			//Get names
			$family_name = $emp->FamilyName;
			$given_name = $emp->GivenName;
			$emp_name[] = $given_name. ' ' . $family_name;
		}
		$data['list_of_pending_claims'] = $list_of_pending_claims;
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$data['emp_name'] =$emp_name;
		$this->load->view('validate_claim', $data );
	}
	
	//get validated claims
	public function view_validated_claim(){
		$this->load->model('claim_dao');
		$search_claims = $this->claim_dao->get_claim('Status','Validated');
		$list_of_validated_claims = array();
		$emp_name = array();
	
		foreach($search_claims as $claim){
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip, $no, $status, $remarks);
			$list_of_validated_claims[] = $claim; // add it into the list
	
			//Call employeeDAO to get FamilyName and Given Name
			$this->load->model ( "employee_dao" );
	
			//search for this employee thru his/her no from the database
			$search = $this->employee_dao->get_employee( "No", $no );
			$emp = $search[0]; //there should only be 1 result found
	
			//Get names
			$family_name = $emp->FamilyName;
			$given_name = $emp->GivenName;
			$emp_name[] = $given_name. ' ' . $family_name;
		}
		$data['list_of_validated_claims'] = $list_of_validated_claims;
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$data['emp_name'] =$emp_name;
		$this->load->view('approve_reject_claim', $data);
	}
	
	//update claim amount from the list of pending claims
	public function update_claim_amount($claim_no, $new_amount){
		$this->load->model('claim_dao');
		$search_result = $this->claim_dao->get_claim('ClaimNo',$claim_no);
		foreach($search_result as $claim){
	
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $new_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $status,$remarks);
			$update_claims = $this->claim_dao->update_claim_amount($claim);
			$this->view_pending_claim();
		}
	}
	
	//update claim status
	public function update_claim_status($claim_no, $updated_status){
		$this->load->model('claim_dao');
		$search_result=$this->claim_dao->get_claim('ClaimNo',  $claim_no);
		foreach($search_result as $claim){
	
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
				
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $updated_status,$remarks);
			$update_status = $this->claim_dao->update_claim_status($claim);
			$this->view_pending_claim();
		}
	}
	
	public function update_approve_claim($claim_no, $updated_status){
		$this->load->model('claim_dao');
		$search_result=$this->claim_dao->get_claim('ClaimNo', $claim_no);
		foreach($search_result as $claim){
	
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $updated_status,$remarks);
			$update_status = $this->claim_dao->update_claim_status($claim);
			$this->view_validated_claim();
		}
	}
	
	public function update_reject_claim($claim_no, $updated_status){
		$this->load->model('claim_dao');
		$search_result=$this->claim_dao->get_claim('ClaimNo',  $claim_no);
		foreach($search_result as $claim){
	
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $updated_status,$remarks);
			$update_status = $this->claim_dao->update_claim_status($claim);
			$this->view_validated_claim();
		}
	}
	
	//update claim amount from the list of pending claims
	public function edit_claim_amount($claim_no, $new_amount){
		$this->load->model('claim_dao');
		$search_result = $this->claim_dao->get_claim('ClaimNo',$claim_no);
		foreach($search_result as $claim){
	
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
	
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $new_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $status,$remarks);
			$update_claims = $this->claim_dao->update_claim_amount($claim);
			$this->view_validated_claim();
		}
	}
	
	//load submit_claim page
	public function view_submit_claim(){
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$data['successful'] = Null ; //preset the message; 
		$this->load->view('submit_claim', $data);
	}
	
	//submit claim
	public function submit_claims($date_incurr,$project_id,$claim_pic,$types,$claim_amount){
		$this->load->model('claim');
		$this->load->model('claim_dao');			
			for($i = 1; $i <count($claim_amount); $i++){ // must start from 1, if start from 0 all the value pass over is 0
			//get the value from the array
			$amount =  $claim_amount[$i];
			$type = $types[$i];
			$id = $project_id[$i];
			$date_i = $date_incurr[$i];
			$today = date('Y-m-d');
			$pic = $claim_pic[$i];
			$no = 1;//hard code no
			$claim = new Claim("",$amount,$type,$id,$date_i,$today,$pic,"",$no,"","");
		//	$list_of_claim[] = $claim;
			$this->claim_dao->add_claim($claim);			
		}
		//pass the login session
		$session_data= $session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		//pass the indication that the submitting is successful
		$data['successful'] = 1; //set the successful message; 1= success; 2 = fail 
		$this->load->view('submit_claim',$data);
	}
	
		
	//view claim slip
	public function view_claimslip(){
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$this->load->view("view_claimslip",$data);
	}
	
	//view claim status
	public function view_claim_status(){
		$this->load->model('claim_dao');
		$search_claims = $this->claim_dao->get_all_claim();
		$list_of_claims = array();
		foreach($search_claims as $claim){
				
			// assign the "Column" of data to a variable; e.g claimNo  = the column name in the database
			$claim_no = $claim->ClaimNo;
			$claim_amount = $claim->ClaimAmount;
			$claim_type = $claim->ClaimType;
			$project_id = $claim->ProjectId;
			$date = $claim->Date;
			$claim_reference_date = $claim->ClaimReferenceDate;
			$claim_pic = $claim->ClaimPic;
			$claim_slip = $claim->ClaimSlip;
			$no = $claim->No;
			$status = $claim->Status;
			$remarks = $claim->Remarks;
			
			//assigning it to the claim object
			$this->load->model('claim');
			$claim = new Claim ($claim_no, $claim_amount, $claim_type, $project_id, $date, $claim_reference_date, $claim_pic, $claim_slip,$no, $status,$remarks);
			$list_of_claims[] = $claim;			
		}
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$data['list_of_claims'] = $list_of_claims;
		$this->load->view('claim_status', $data);
	}
	
}