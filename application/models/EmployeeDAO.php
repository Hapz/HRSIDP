<?php
	class EmployeeDAO extends CI_Model{
		
		//check login crediential 
		public function checkLoginCredentials($username, $password){
			//to get just the number number just "echo <variable>->result" on the view page
			$query = $this->db->query("SELECT COUNT(*) as result FROM tb_account where Username ='".$username."' and Password='".$password."'");
			return $query->result();
		}
		
		//get all employees profile/data
		public function getAllEmployeeProfile(){
			$query = $this->db->query ("SELECT * FROM tb_employee");
			return $query->result();
		}
		
		//get 1 employee profile/data; $type = search criteria; $val = the search value 
		public function getEmployee($type, $val){
			$query = $this->db->query("SELECT * FROM tb_employee where ".$type."='".$val."'");
			return $query->result();			
		}
		
		//insert new emmployee profile
		public function addEmployee(Employee $employee, $username, $password){
			//insert into tb_employee
						
			//why use set instead of insert because the first column is No. so we are not setting or getting it,so it will have error if use insert
			$this->db->set('Nric', $employee->getNric());
			$this->db->set('FirstName', $employee->getFirstName());
			$this->db->set('LastName', $employee->getLastName());
			$this->db->set('Email', $employee->getEmail());
			$this->db->set('ResidentialAddress', $employee->getResidentialAddress());
			$this->db->set('Position', $employee->getPosition());
			$this->db->set('BasicSalary', $employee->getBasicSalary());
			$this->db->set('MobileContact', $employee->getMobileContact());
			$this->db->set('Religion', $employee->getReligion());
			$this->db->set('Race', $employee->getRace());
			$this->db->set('NextOfKin', $employee->getNextOfKin());
			$this->db->set('NextOfKinContactNo', $employee->getNextOfKinContactNo());
			$this->db->set('HighestQualification', $employee->getHighestQualification());
			$this->db->set('Nationality', $employee->getNationality());
			$this->db->set('JoinedDate', $employee->getJoinedDate());
			$this->db->set('Department', $employee->getDepartment());
			$this->db->set('EmployementType', $employee->getEmployementType());
			$this->db->set('AllowancesEntitlement', $employee->getAllowancesEntitlement());
			$this->db->set('LeaveEntitlement', $employee->getLeaveEntitlement());			
			$this->db->insert("tb_employee");
						 
			//get the auto assign no. inside tb_employee			 
			$nric = $employee->getNric();
			$query = $this->getEmployee("Nric", $nric);
			$no = $query[0]->No; //array[0], because there should only be 1 query result with the same nric
			 	 
			//insert into tb_account			 
			$this->db->set("Username", $username);
			$this->db->set("Password", $password);
			$this->db->set("No", $no);
			$this->db->insert("tb_account");
		}
	}
?>