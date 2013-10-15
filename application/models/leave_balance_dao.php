<?php
class Leave_balance_dao extends CI_Model{
	
	//Add new leave balance
	public function add_leave_balance($no,$annual_leave_entitlement,$annual_leave_balance_current_yr,$annual_leave_balance_next_yr,
 			$medical_leave_outpatient_entitlement,$medical_leave_hospitalisation_entitlement,$medical_leave_outpatient_balance,$medical_leave_hospitalisation_balance){
		$this->db->set("No",$no);
		$this->db->set("AnnualLeaveEntitlement",$annual_leave_entitlement);
		$this->db->set("AnnualLeaveBalanceCurrentYr",$annual_leave_balance_current_yr);
		$this->db->set("AnnualLeaveBalanceNextYr",$annual_leave_balance_next_yr);
		$this->db->set("MedicalLeaveOutpatientEntitlement", $medical_leave_outpatient_entitlement);
		$this->db->set("MedicalLeaveHospitalisationEntitlement", $medical_leave_hospitalisation_entitlement);
		$this->db->set("MedicalLeaveOutpatientBalance", $medical_leave_outpatient_balance);
		$this->db->set("MedicalLeaveHospitalisationBalance", $medical_leave_hospitalisation_balance);
		$this->db->insert("tb_leave_balance");
	}	
	
	//Get leave balance based on employee no
	public function get_leave_balance($no){
		$query = $this->db->query("SELECT * FROM tb_leave_balance where No = ?",array($no));
		return $query->result();
	}
}