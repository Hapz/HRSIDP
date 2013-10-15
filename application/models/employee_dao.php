<?php
	class Employee_dao extends CI_Model{
		
		/*
		//check login crediential 
		public function check_login_credentials($username, $password){
			//to get just the number number just "echo <variable>->result" on the view page
			$query = $this->db->query("SELECT COUNT(*) as result FROM tb_account where Username ='".$username."' and Password='".$password."'");
			return $query->result();
		}
		*/
		
		//insert new emmployee profile and employee account
		public function add_employee(Employee $employee){
			//why use set instead of insert because the first column is No. so we are not setting or getting it,so it will have error if use insert
			$this->db->set('Nric', $employee->get_nric());
			$this->db->set('FamilyName', $employee->get_family_name());
			$this->db->set('GivenName', $employee->get_given_name());
			$this->db->set('Email', $employee->get_email());
			$this->db->set('ResidentialAddress', $employee->get_residential_address());
			$this->db->set('Position', $employee->get_position());
			$this->db->set('BasicSalary', $employee->get_basic_salary());
			$this->db->set('MobileContact', $employee->get_mobile_contact());
			$this->db->set('Religion', $employee->get_religion());
			$this->db->set('Race', $employee->get_race());
			$this->db->set('NextOfKin', $employee->get_next_of_kin());
			$this->db->set('NextOfKinContactNo', $employee->get_next_of_kin_contact_no());
			$this->db->set('HighestQualification', $employee->get_highest_qualification());
			$this->db->set('Nationality', $employee->get_nationality());
			$this->db->set('JoinedDate', $employee->get_joined_date());
			$this->db->set('Department', $employee->get_department());
			$this->db->set('EmployementType', $employee->get_employement_type());
			$this->db->set('AllowancesEntitlement', $employee->get_allowances_entitlement());
			$this->db->set('LeaveEntitlement', $employee->get_leave_entitlement());
			$this->db->insert("tb_employee");
		}
				
		//get all employees profile/data
		public function get_all_employee(){
			$query = $this->db->query ("SELECT * FROM tb_employee");
			return $query->result();
		}
		
		//get employee profile/data; $type = search criteria; $val = the search value 
		public function get_employee($type, $val){
			$query = $this->db->query("SELECT * FROM tb_employee where ".$type."='".$val."'");
			return $query->result();			
		}
		
		//update employee
		public function update_employee(Employee $employee){
			//currently everything can be edit but as the system progress things like nric will be taken out
			$this->db->set('Nric', $employee->get_nric());
			$this->db->set('FamilyName', $employee->get_family_name());
			$this->db->set('GivenName', $employee->get_given_name());
			$this->db->set('Email', $employee->get_email());
			$this->db->set('ResidentialAddress', $employee->get_residential_address());
			$this->db->set('Position', $employee->get_position());
			$this->db->set('BasicSalary', $employee->get_basic_salary());
			$this->db->set('MobileContact', $employee->get_mobile_contact());
			$this->db->set('Religion', $employee->get_religion());
			$this->db->set('Race', $employee->get_race());
			$this->db->set('NextOfKin', $employee->get_next_of_kin());
			$this->db->set('NextOfKinContactNo', $employee->get_next_of_kin_contact_no());
			$this->db->set('HighestQualification', $employee->get_highest_qualification());
			$this->db->set('Nationality', $employee->get_nationality());
			$this->db->set('JoinedDate', $employee->get_joined_date());
			$this->db->set('Department', $employee->get_department());
			$this->db->set('EmployementType', $employee->get_employement_type());
			$this->db->set('AllowancesEntitlement', $employee->get_allowances_entitlement());
			$this->db->set('LeaveEntitlement', $employee->get_leave_entitlement());	
			
			$emp_no = $employee->get_no();
			//update the table
			$this->db->where("No", $emp_no);
			$this->db->update("tb_employee");
		}
	}
?>