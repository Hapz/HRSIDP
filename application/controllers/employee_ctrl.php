<?php
class Employee_ctrl extends MY_Controller{
	//get all employee
	public function get_all_employee_profile(){
		$this->load->model('employee_service');
		$this->employee_service->get_all_employee_profile();
	}
	
	//get employee profile/data; $type = search criteria; $val = the search value
	public function get_employee_profile($type,$val){
		$this->load->model('employee_service');
		$this->employee_service->get_all_employee_profile($type,$val);		
	}
	
	//get employee account; $type = search criteria; $val = the search value
	public function get_employee_account($type,$val){
		$this->load->model('employee_service');
		$this->employee_service->get_employee_account($type,$val);
	}
	
	//add new employee
	public function add_new_employee(Employee $employee, $username, $password){ //parameter maybe wrong because this ctrl is getting value from view
		$this->load->model('employee_service');
		$this->employee_service->add_new_employee($employee);
	}
	
	//update employee profile
	public function update_employee_profile(Employee $employee) {
		$this->load->model ( "employee_service" );
		$search = $this->employee_service->update_employee_profile ( $employee );
	}
	
	//update employee account for user (only can change password)
	public function update_account_user($no, $password) {
		$this->load->model ( "employee_service" );
		$this->employee_service->update_employee_account_user ( $no, $password );
	}
	
	// update employee account for admin (can change both password & active or not)
	// employee no; password; is it active [1 = active; 0 = not active]
	public function update_account_admin($no, $password, $active) {
		$this->load->model ( "employee_service" );
		$this->employee_dao->update_employee_account_admin ( $no, $password, $active );
	}
	
	
	
}