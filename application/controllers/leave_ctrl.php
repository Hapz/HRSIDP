<?php
class Leave_ctrl extends MY_Controller{
	
	// Apply leave form (View)
	public function apply_leave_form(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('apply_leave',$session_data);
	}
	
	//View Leave
	function view_edit_leave(){		
		$this->load->model('leave_service');
		$this->leave_service->view_own_leaves();
		
	}
	
	// Delete leave
	function delete_leave(){		
		if(isset($_POST['applied_leave_no'])){
			$applied_leave_no = $_POST['applied_leave_no'];
		}
		
		$this->load->model('leave_service');
		$this->leave_service->delete_leaves($applied_leave_no);
	}
	
	// Edit leave form
	function edit_leave_form(){
		if(isset($_POST['applied_leave_no'])){
			$data['applied_leave_no'] = $_POST['applied_leave_no'];
			
		}
		
		if(isset($_POST['applied_leave_name'])){
			$data['applied_leave_name'] = $_POST['applied_leave_name'];
		}
		
		if(isset($_POST['from_date'])){
			$data['from_date'] = $_POST['from_date'];
		}
		
		if(isset($_POST['to_date'])){
			$data['to_date'] = $_POST['to_date'];
		}
		
		$this->load->model('leave_service');
		$this->leave_service->edit_leave_form($data);
	}
	
	// Edit leave (after form)
	function edit_leave(){
		if(isset($_POST["leaveType"]) && isset($_POST["leaveStartDate"]) && isset($_POST["leaveEndDate"]) && $_POST["leaveStartDate"]!="dd/mm/yyyy" && $_POST["leaveEndDate"]!="dd/mm/yyyy" ){
			// 		echo $_POST["leaveType"];
			// 		echo $_POST["leaveStartDate"];
			// 		echo $_POST["leaveEndDate"];
			//echo "Correct input!";
			
			$data['applied_leave_no']=$_POST["applied_leave_no"];
			$data['leaveTypeValue']=$_POST["leaveType"];
			$data['leaveStartDateValue']=$_POST["leaveStartDate"];
			$data['leaveEndDateValue']=$_POST["leaveEndDate"];
			$data['currentDate']=$_POST["current_dateTime"];
				
			$this->load->model("leave_service");
			$this->leave_service->edit_leave($data);
				
		} else{
			//VALIDATION
			if(isset($_POST["leaveType"])){
				$data['leaveTypeValue']=$_POST["leaveType"];
			} else{
				$data['leaveTypeValue']="";
			}
				
			if(isset($_POST["leaveStartDate"]) && $_POST["leaveStartDate"]!="dd/mm/yyyy"){
				$data['leaveStartDateValue']=$_POST["leaveStartDate"];
			} else{
				$data['leaveStartDateValue']="dd/mm/yyyy";
			}
				
			if(isset($_POST["leaveEndDate"]) && $_POST["leaveEndDate"]!="dd/mm/yyyy"){
				$data['leaveEndDateValue']=$_POST["leaveEndDate"];
			} else{
				$data['leaveEndDateValue']="dd/mm/yyyy";
			}
				
				
			// Should go controller instead
			$data['session_data'] = $this->session->userdata('logged_in');
			$this->load->view("apply_leave",$data);
		}
	}
	
	//Approve & Reject Leave for viewing
	function approve_reject_leave(){
		$session_data = $this->session->userdata('logged_in');
 		$this->load->view('approve_reject_leave',$session_data);

// 		$this->load->model('leave_service');
// 		$this->leave_service->view_to_approve_leave();
	}
	
	//Approve leave: View leaves after approving
	function view_approved_leave(){
		$session_data = $this->session->userdata('logged_in');
		$this->load->view('view_approved_leave',$session_data);
	}
	
	
	public function apply_leave(){
		$session_data = $this->session->userdata('logged_in');
		
		if(isset($_POST["leaveType"]) && isset($_POST["leaveStartDate"]) && isset($_POST["leaveEndDate"]) && $_POST["leaveStartDate"]!="dd/mm/yyyy" && $_POST["leaveEndDate"]!="dd/mm/yyyy" ){
// 		echo $_POST["leaveType"];
// 		echo $_POST["leaveStartDate"];
// 		echo $_POST["leaveEndDate"];
			//echo "Correct input!";
			$data['leaveTypeValue']=$_POST["leaveType"];
			$data['leaveStartDateValue']=$_POST["leaveStartDate"];
			$data['leaveEndDateValue']=$_POST["leaveEndDate"];
			$data['currentDate']=$_POST["current_dateTime"];
			
			$this->load->model("leave_service");
			$this->leave_service->apply_leave($data);
			
		} else{
			
			if(isset($_POST["leaveType"])){
				$data['leaveTypeValue']=$_POST["leaveType"];
			} else{
				$data['leaveTypeValue']="";
			}
			
			if(isset($_POST["leaveStartDate"]) && $_POST["leaveStartDate"]!="dd/mm/yyyy"){
				$data['leaveStartDateValue']=$_POST["leaveStartDate"];
			} else{
				$data['leaveStartDateValue']="dd/mm/yyyy";
			}
			
			if(isset($_POST["leaveEndDate"]) && $_POST["leaveEndDate"]!="dd/mm/yyyy"){
				$data['leaveEndDateValue']=$_POST["leaveEndDate"];
			} else{
				$data['leaveEndDateValue']="dd/mm/yyyy";
			}
			
			
			// Should go controller instead
			$data['session_data'] = $this->session->userdata('logged_in');
			$this->load->view("apply_leave",$data);
		}
		
	}
	
	
	
	
}


?>