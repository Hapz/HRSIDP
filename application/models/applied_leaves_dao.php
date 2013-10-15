<?php
class Applied_leaves_dao extends CI_Model{
	//Add applied leave
	public function add_applied_leaves($employee_no,$leaves_details_no,$submitted_date,$leave_from_date,$leave_to_date,$serial_num_for_mc,$approval_status){
		$this->db->set("EmployeeNo", $employee_no);
		$this->db->set("LeavesDetailsNo", $leaves_details_no);
		$this->db->set("SubmittedDate", $submitted_date);
		$this->db->set("LeaveFromDate", $leave_from_date);
		$this->db->set("LeaveToDate", $leave_to_date);
		$this->db->set("SerialNumForMC", $serial_num_for_mc);
		$this->db->set("ApprovalStatus", $approval_status);
		$this->db->insert("tb_applied_leaves");
	}
	
	public function add_medical_leaves($employee_no,$leaves_details_no,$submitted_date,$leave_from_date,$leave_to_date,$serial_num_for_mc){
		$this->db->set("EmployeeNo", $employee_no);
		$this->db->set("LeavesDetailsNo", $leaves_details_no);
		$this->db->set("SubmittedDate", $submitted_date);
		$this->db->set("LeaveFromDate", $leave_from_date);
		$this->db->set("LeaveToDate", $leave_to_date);
		$this->db->set("SerialNumForMC", $serial_num_for_mc);
		$this->db->set("ApprovalStatus", "pending");
		$this->db->insert("tb_applied_leaves");
	}
	
	public function add_leaves($employee_no,$leaves_details_no,$submitted_date,$leave_from_date,$leave_to_date){
		$this->db->set("EmployeeNo", $employee_no);
		$this->db->set("LeavesDetailsNo", $leaves_details_no);
		$this->db->set("SubmittedDate", $submitted_date);
		$this->db->set("LeaveFromDate", $leave_from_date);
		$this->db->set("LeaveToDate", $leave_to_date);
		$this->db->set("SerialNumForMC", null);
		$this->db->set("ApprovalStatus", "pending");
		$this->db->insert("tb_applied_leaves");
		
		return true;
	}
	
	//Get all CURRENT leaves based on employee no.
	public function get_current_leaves($no, $current_date){
		$query = $this->db->query("SELECT * FROM tb_applied_leaves where EmployeeNo = '".$no."' AND LeaveFromDate <= '".$current_date."' AND LeaveToDate >= '".$current_date."'");
		return $query->result();
	}
	
	//Get all UPCOMING leaves based on employee no.
	public function get_upcoming_leaves($no, $current_date){
		$query = $this->db->query("SELECT * FROM tb_applied_leaves where EmployeeNo = '".$no."' AND LeaveFromDate > '".$current_date."'");
		return $query->result();
	}
	
	//delete leaves
	public function delete_leaves($applied_leave_no){
		$this->db->delete('tb_applied_leaves',array('AppliedLeaveNo'=>$applied_leave_no));
	}
	
	//For approval of leave: View all leaves that are pending (Temp method)
	public function get_pending_leaves(){
		$query = $this->db->query("SELECT * FROM tb_applied_leaves where ApprovalStatus = 'pending'");
		return $query;
	}
	
}