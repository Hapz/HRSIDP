<?php
class Applied_leaves extends CI_Model{
	private $applied_leave_no;
	private $employee_no;
	private $leaves_details_no;
	private $submitted_date;
	private $leave_from_date;
	private $leave_to_date;
	private $serial_num_for_mc;
	private $approval_status;
	
	public function Applied_leaves($applied_leave_no=NULL,$employee_no=NULL,$leaves_details_no=NULL,$submitted_date=NULL,$leave_from_date=NULL,$leave_to_date=NULL,$serial_num_for_mc=NULL,$approval_status=NULL){
		$this->applied_leave_no  = $applied_leave_no;
		$this->employee_no  = $employee_no;
		$this->leaves_details_no  = $leaves_details_no;
		$this->submitted_date  = $submitted_date;
		$this->leave_from_date  = $leave_from_date;
		$this->leave_to_date  = $leave_to_date;
		$this->serial_num_for_mc  = $serial_num_for_mc;
		$this->approval_status  = $approval_status;
	}
	
	public function get_applied_leave_no($leave){
		return $leave->applied_leave_no;
	}
	
	public function set_applied_leave_no($applied_leave_no){
		$this->applied_leave_no = $applied_leave_no;
	}
	
	public function get_employee_no($leave){
		return $leave->employee_no;
	}
	
	public function set_employee_no($employee_no){
		$this->employee_no = $employee_no;
	}
	
	public function get_leaves_details_no($leave){
		return $leave->leaves_details_no;
	}
	
	public function set_leaves_details_no($leaves_details_no){
		$this->leaves_details_no = $leaves_details_no;
	}
	
	public function get_submitted_date($leave){
		return $leave->submitted_date;
	}
	
	public function set_submitted_date($submitted_date){
		$this->submitted_date=$submitted_date;
	}
	
	public function get_leave_from_date($leave){
		return $leave->leave_from_date;
	}
	
	public function set_leave_from_date($leave_from_date){
		$this->leave_from_date = $leave_from_date;
	}
	
	public function get_leave_to_date($leave){
		return $leave->leave_to_date;
	}
	
	public function set_leave_to_date($leave_to_date){
		$this->leave_to_date = $leave_to_date;
	}
	
	public function get_serial_num_for_mc($leave){
		return $leave->serial_num_for_mc;
	}
	
	public function set_serial_num_for_mc($serial_num_for_mc){
		$this->serial_num_for_mc=$serial_num_for_mc;
	}
	
	public function get_approval_status($leave){
		return $leave->approval_status;
	}
	
	public function set_approval_status($approval_status){
		$this->approval_status = $approval_status;
	}
	
}