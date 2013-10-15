<?php

class Leave_service extends CI_Model{
	public function apply_leave($data){
		
		
		//echo $data['leaveTypeValue'];
		
		$leave_details = $this->get_leave_details($data['leaveTypeValue']);
		
		// Get leave_no from Leaves_details table
		$this->load->model("Leaves_details");
		$leave_no = $this->Leaves_details->get_leave_details_no($leave_details);
		$leaves_details_no = $leave_no;
		
		// Date values
		$submitted_date = $data['currentDate'];
		
		
		$from_date_str = $data['leaveStartDateValue'];
		//echo $from_date_str;
		$from_date = DateTime::createFromFormat('d/m/yy',$from_date_str);
		$leave_from_date = $from_date->format('Y-m-d');
		//echo $leave_from_date;
		//echo "<br/>";
		
		$to_date_str = $data['leaveEndDateValue'];
		$to_date = DateTime::createFromFormat('d/m/yy',$to_date_str);
		$leave_to_date = $to_date->format('Y-m-d');
		//echo $leave_to_date;
	
		
		// Employee no.
		$session_data = $this->session->userdata('logged_in');
		$employee_no = $session_data["no"];
		
		// To add new leave in database
		$this->load->model("Applied_leaves_dao");
		$success = $this->Applied_leaves_dao->add_leaves($employee_no,$leaves_details_no,$submitted_date,$leave_from_date,$leave_to_date);
 		//echo $success;
 		
		//$session_data = $this->session->userdata('logged_in');
		
		//get all applied leave
		$this->view_own_leaves();
	}
	
	
	public function get_leave_details($leaveType){
		
		//echo "NEW".$leaveType;
		
		$this->load->model("Leaves_details_dao");
		$leave_details = $this->Leaves_details_dao->get_leave_details($leaveType);
		
		foreach ( $leave_details as $leave_detail) {
			// assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $leave_detail->LeaveDetailsNo;
			$leave_type_name = $leave_detail->LeaveTypeName;
			$leave_notes = $leave_detail->LeaveNotes;
			$leave_doc_data = $leave_detail->LeaveDocumentsData;
			
			$this->load->model("Leaves_details");
			$leave_details_obj = new Leaves_details($no,$leave_type_name,$leave_notes,$leave_doc_data);

			return $leave_details_obj;
		}		
	}
	
	public function get_leave_details_no($leave_no){
	
		//echo "NEW".$leaveType;
	
		$this->load->model("Leaves_details_dao");
		$leave_details = $this->Leaves_details_dao->get_leave_details_no($leave_no);
	
		foreach ( $leave_details as $leave_detail) {
			// assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $leave_detail->LeaveDetailsNo;
			$leave_type_name = $leave_detail->LeaveTypeName;
			$leave_notes = $leave_detail->LeaveNotes;
			$leave_doc_data = $leave_detail->LeaveDocumentsData;
				
			$this->load->model("Leaves_details");
 			$leave_details_obj = new Leaves_details($no,$leave_type_name,$leave_notes,$leave_doc_data);
			
		}
		
		$this->load->model("Leaves_details");
		$leave_name = $this->Leaves_details->get_leave_type_name($leave_details_obj);
		return $leave_name;
		
	}
	
	
	
	public function view_own_leaves(){
		$session_data = $this->session->userdata('logged_in');
		$employee_no = $session_data["no"];
		//echo $employee_no; 
		
		//PART 1
		//BALANCES
		$this->load->model("Leave_balance_dao");
		$leave_balance = $this->Leave_balance_dao->get_leave_balance($employee_no);
		
		foreach($leave_balance as $balance){
			$annual_leave_balance_current_yr = $balance->AnnualLeaveBalanceCurrentYr;
			$annual_leave_balance_next_yr = $balance->AnnualLeaveBalanceNextYr;
			$MedicalLeaveOutpatientBalance = $balance->MedicalLeaveOutpatientBalance;
			$MedicalLeaveHospitalisationBalance = $balance->MedicalLeaveHospitalisationBalance;
		}
								
		$data['session_data']=$session_data;		
		
		//Get annual leave balance for current year
		$data['annual_leave_current']=$annual_leave_balance_current_yr;
		
		//Get annual leave balance for next year
		$data['annual_leave_next']=$annual_leave_balance_next_yr;
		
		//Get medical leave balance for current year (Outpatient)
		$data['medical_leave_outpatient']=$MedicalLeaveOutpatientBalance;
		
		//Get medical leave balance for current year (Hospitalisation)
		$data['MedicalLeaveHospitalisationBalance']=$MedicalLeaveHospitalisationBalance;
		
		//PART 2
		//LEAVES: S/N, Application Date, Type, From, To, No. of days, Approved by Line Manager, Edit
		date_default_timezone_set("Asia/Singapore");
		$current_date = date('Y-m-d');
		
		$this->load->model("applied_leaves_dao");		
		
		//Get current leaves(from date<=current date && to date>=current date)
		$current_leaves = $this->applied_leaves_dao->get_current_leaves($employee_no,$current_date);
		
		foreach($current_leaves as $current){
			$applied_no = $current->AppliedLeaveNo;
			$emp_no = $current->EmployeeNo;
			$leaves_details_no = $current->LeavesDetailsNo;
			$submitted_date = $current->SubmittedDate;
			$from_date = $current->LeaveFromDate;
			$to_date = $current->LeaveToDate;
			$mc_serial_no = $current->SerialNumForMC;
			$approval = $current->ApprovalStatus;
			
			$this->load->model("Applied_leaves");
			$current_leave = new Applied_leaves($applied_no,$emp_no,$leaves_details_no,$submitted_date,$from_date,$to_date,$mc_serial_no,$approval);
			$list_of_current_leaves [] = $current_leave;
		}
		
		if(isset($list_of_current_leaves)){
			$data['list_of_current_leaves'] = $list_of_current_leaves;
		} else{
			$data['list_of_current_leaves'] = "";
		}
		
		
		//Get upcoming leaves (from date> current date) (arrange according to date)
		$upcoming_leaves = $this->applied_leaves_dao->get_upcoming_leaves($employee_no,$current_date);
		
		foreach($upcoming_leaves as $upcoming){
			$applied_no = $upcoming->AppliedLeaveNo;
			$emp_no = $upcoming->EmployeeNo;
			$leaves_details_no = $upcoming->LeavesDetailsNo;
			$submitted_date = $upcoming->SubmittedDate;
			$from_date = $upcoming->LeaveFromDate;
			$to_date = $upcoming->LeaveToDate;
			$mc_serial_no = $upcoming->SerialNumForMC;
			$approval = $upcoming->ApprovalStatus;
				
			$this->load->model("Applied_leaves");
			$upcoming_leave = new Applied_leaves($applied_no,$emp_no,$leaves_details_no,$submitted_date,$from_date,$to_date,$mc_serial_no,$approval);
			$list_of_upcoming_leaves [] = $upcoming_leave;
		}		
		
		if(isset($list_of_upcoming_leaves)){
			$data['list_of_upcoming_leaves'] = $list_of_upcoming_leaves;
		} else{
			$data['list_of_upcoming_leaves'] = "";
		}
		
		
					
		//get past leaves (from date<=current date)
		
		
		
		//$this->load->view("view_edit_leave",$session_data);
		$this->load->view("view_edit_leave",$data);
		
	}
	
	public function delete_leaves($applied_leave_no){
		$this->load->model("applied_leaves_dao");
		$this->applied_leaves_dao->delete_leaves($applied_leave_no);
		
		$this->view_own_leaves();
	}
	
	public function edit_leave_form($edit_leave_details){
		$this->load->view("edit_leave",$edit_leave_details);		
	}
	
	public function edit_leave($edit_leave_new){
		$this->load->model("applied_leaves_dao");
		$this->applied_leaves_dao->delete_leaves($edit_leave_new['applied_leave_no']);
		
		$this->apply_leave($edit_leave_new);		
	}
	
	//Faulty Method
	public function view_to_approve_leave(){
		$this->load->model("applied_leaves_dao");
		
		//Get pending leaves
		$pending_leaves = $this->applied_leaves_dao->get_pending_leaves();
		
		foreach($pending_leaves as $pending){
			echo "hello";
			$applied_no = $pending->AppliedLeaveNo;
			$emp_no = $pending->EmployeeNo;
			$leaves_details_no = $pending->LeavesDetailsNo;
			$submitted_date = $pending->SubmittedDate;
			$from_date = $pending->LeaveFromDate;
			$to_date = $pending->LeaveToDate;
			$mc_serial_no = $pending->SerialNumForMC;
			$approval = $pending->ApprovalStatus;
				
			$this->load->model("Applied_leaves");
			$pending_leave = new Applied_leaves($applied_no,$emp_no,$leaves_details_no,$submitted_date,$from_date,$to_date,$mc_serial_no,$approval);
			$list_of_pending_leaves [] = $pending_leave;
			
		}
		$data['list_of_pending_leaves'] = $list_of_pending_leaves;
		
		$session_data = $this->session->userdata('logged_in');
		$data['session_data']=$session_data;
		
		$this->load->view("approve_reject_leave",$data);
	}

}
?>