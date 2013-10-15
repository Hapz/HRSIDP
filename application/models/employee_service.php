<?php
class Employee_service extends CI_Model {
	
	// get all employees profile/data
	public function get_all_employee_profile() {
		$this->load->model ( "employee_dao" );
		$search = $this->employee_dao->get_all_employee();
		//$list_of_employee = array (); // something like arraylist
		
		foreach ( $search as $employee ) {
			// assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $employee->No;
			$nric = $employee->Nric;
			$family_name = $employee->FamilyName;
			$given_name = $employee->GivenName;
			$email = $employee->Email;
			$dob = $employee->DOB;
			$residential_address = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basic_salary = $employee->BasicSalary;
			$mobile_contact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;
			$next_of_kin = $employee->NextOfKin;
			$next_of_kin_contact_no = $employee->NextOfKinContactNo;
			$highest_qualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joined_date = $employee->JoinedDate;
			$department = $employee->Department;
			$employement_type = $employee->EmployementType;
			$allowances_entitlement = $employee->AllowancesEntitlement;
			$leave_entitlement = $employee->LeaveEntitlement;
			
			// assign it to Employee Object
			$this->load->model ( 'employee' );
			$emp = new Employee ( $no, $nric, $family_name, $given_name, $email, $dob, $residential_address, $position, $basic_salary, $mobile_contact, $gender, $race, $religion, $next_of_kin, $next_of_kin_contact_no, $highest_qualification, $nationality, $joined_date, $department, $employement_type, $allowances_entitlement, $leave_entitlement );
			$list_of_employee [] = $emp; // add it into the list
		}
		$data ['list_of_employee'] = $list_of_employee;
		$this->load->view ( "TestGetAllEmployee", $data ); // this is my test view
	}
	
	//get employee profile/data; $type = search criteria; $val = the search value
	public function get_employee_profile($type, $val) {
		$this->load->model ( "employee_dao" );
		$search = $this->employee_dao->get_employee( $type, $val ); // hardcode value
		
		$list_of_employee = array (); // something like arraylist
		foreach ( $search as $employee ) {			
			// assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $employee->No;
			$nric = $employee->Nric;
			$family_name = $employee->FamilyName;
			$given_name = $employee->GivenName;
			$email = $employee->Email;
			$residential_address = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basic_salary = $employee->BasicSalary;
			$mobile_contact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;
			$next_of_kin = $employee->NextOfKin;
			$next_of_kin_contact_no = $employee->NextOfKinContactNo;
			$highest_qualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joined_date = $employee->JoinedDate;
			$department = $employee->Department;
			$employement_type = $employee->EmployementType;
			$allowances_entitlement = $employee->AllowancesEntitlement;
			$leave_entitlement = $employee->LeaveEntitlement;
			
			// assign it to Employee Object
			$this->load->model ( "Employee" );
			$emp = new Employee ( $no, $nric, $family_name, $given_name, $email, $residential_address, $position, $basic_salary, $mobile_contact, $gender, $race, $religion, $next_of_kin, $next_of_kin_contact_no, $highest_qualification, $nationality, $joined_date, $department, $employement_type, $allowances_entitlement, $leave_entitlement );
			$list_of_employee [] = $emp; // add it into the list
		}
		$data ['list_of_employee'] = $list_of_employee;
		$this->load->view ( "TestGetAllEmployee", $data ); // this is my test view
	}
	
	//get employee account; $type = search criteria; $val = the search value
	public function get_employee_account($type,$val) {
		$this->load->model ( "account_dao" );
		$search = $this->account_dao->get_employee_account( $type,$val ); // hardcode value
		
		foreach ( $search as $acct ) {
			$account_no = $acct->AccountNo;
			$username = $acct->Username;
			$password = $acct->Password;
			$no = $acct->No;
			$active = $acct->Active;
			
			$this->load->model ( "Account" );
			$account = new Account ( $account_no, $username, $password, $no, $active );
			$list_of_accounts[] = $account;
		}
		$data ['$list_of_accounts'] = $list_of_accounts;
		$this->load->view ( "TestGetAllEmployee", $data ); // this is my test view
	}
	
	// add new employee
	public function add_new_employee(Employee $employee, $username ,$password) {
		$this->load->model ( "employee_dao" );
		//add the new employee profile into the database
		$this->employee_dao->add_employee ( $employee );
		
		//search for this employee thru his/her nric from the database
		$search = $this->employee_dao->get_employee( "Nric", $employee->get_nric() );
		$emp = $search[0]; //there should only be 1 result found
		$no = $emp->No;
		
		//add new account for the new employee
		$this->load->model ( "account_dao" );
		$this->employee_dao->add_account ( $username, $password, $no);		
	}
	
	// update employee profile
	public function update_employee_profile(Employee $employee) {
		$this->load->model ( "employee_dao" );
		$search = $this->employee_dao->update_employee ( $employee );
	}
	
	// update employee account for admin (can change both password & active or not)
	// employee no; password; is it active [1 = active; 0 = not active]
	public function update_account_admin($no, $password, $active) {
		$this->load->model ( "account_dao" );
		$this->employee_dao->update_employee_account_admin ( $no, $password, $active );
	}
	
	// update employee account for user (only can change password)
	public function update_account_user($no, $password) {
		$this->load->model ( "account_dao" );
		$this->employee_dao->update_employee_account_user ( $no, $password );
	}
}
?>