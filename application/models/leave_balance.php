<?php
class Leave_balance extends CI_Model{
	private $leave_balance_no;
	private $no;
	private $annual_leave_entitlement;
	private $annual_leave_balance_current_yr;
	private $annual_leave_balance_next_yr;
	private $medical_leave_outpatient_entitlement;
	private $medical_leave_hospitalisation_entitlement;
	private $medical_leave_outpatient_balance;
 	private $medical_leave_hospitalisation_balance;
 	
 	public function Leave_balance($leave_balance_no=NULL,$no=NULL,$annual_leave_entitlement=NULL,$annual_leave_balance_current_yr=NULL,$annual_leave_balance_next_yr=NULL,
 			$medical_leave_outpatient_entitlement=NULL,$medical_leave_hospitalisation_entitlement=NULL,$medical_leave_outpatient_balance=NULL,$medical_leave_hospitalisation_balance=NULL){
 		$this->leave_balance_no=$leave_balance_no;
 		$this->no=$no;
 		$this->annual_leave_entitlement=$annual_leave_entitlement;
 		$this->annual_leave_balance_current_yr=$annual_leave_balance_current_yr;
 		$this->annual_leave_balance_next_yr=$annual_leave_balance_next_yr;
 		$this->medical_leave_outpatient_entitlement=$medical_leave_outpatient_entitlement;
 		$this->medical_leave_hospitalisation_entitlement=$medical_leave_hospitalisation_entitlement;
 		$this->medical_leave_outpatient_balance=$medical_leave_outpatient_balance;
 		$this->medical_leave_hospitalisation_balance=$medical_leave_hospitalisation_balance;
 	}
 	
 	public function get_leave_balance_no(){
 		return $this->leave_balance_no;
 	}
 	
 	public function set_leave_balance_no($leave_balance_no){
 		$this->leave_balance_no=$leave_balance_no;
 	}
 	
	public function get_no(){
		return $this->no;
	}
	
	public function set_no($no){
		$this->no=$no;
	}
	
	public function get_annual_leave_entitlement(){
		return $this->annual_leave_entitlement;
	}
	
	public function set_annual_leave_entitlement($annual_leave_entitlement){
		$this->annual_leave_entitlement=$annual_leave_entitlement;
	}
		
	public function get_annual_leave_balance_current_yr(){
		return $this->annual_leave_balance_current_yr;
	}
	
	public function set_annual_leave_balance_current_yr($annual_leave_balance_current_yr){
		$this->annual_leave_balance_current_yr=$annual_leave_balance_current_yr;
	}
	
	public function get_annual_leave_balance_next_yr(){
		return $this->annual_leave_balance_next_yr;
	}
	
	public function set_annual_leave_balance_next_yr($annual_leave_balance_next_yr){
		$this->annual_leave_balance_next_yr=$annual_leave_balance_next_yr;
	}
	
	public function get_medical_leave_outpatient_entitlement(){
		return $this->medical_leave_outpatient_entitlement;
	}
	
	public function set_medical_leave_outpatient_entitlement(){
		$this->medical_leave_outpatient_entitlement=$medical_leave_outpatient_entitlement;
	}
	
	public function get_medical_leave_hospitalisation_entitlement(){
		return $this->medical_leave_hospitalisation_entitlement;
	}
	
	public function set_medical_leave_hospitalisation_entitlement(){
		$this->medical_leave_hospitalisation_entitlement=$medical_leave_hospitalisation_entitlement;
	}
	
	public function get_medical_leave_outpatient_balance(){
		return $this->medical_leave_outpatient_balance;
	}
	
	public function set_medical_leave_outpatient_balance(){
		$this->medical_leave_outpatient_balance=$medical_leave_outpatient_balance;
	}
	
	public function get_medical_leave_hospitalisation_balance(){
		return $this->medical_leave_hospitalisation_balance;
	}
	
	public function set_medical_leave_hospitalisation_balance(){
		$this->medical_leave_hospitalisation_balance=$medical_leave_hospitalisation_balance;
	}
}