<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_dao extends CI_Model{
	
	function login($username, $password){
		$query = $this->db->query("SELECT COUNT(*) as result FROM tb_account where Username ='".$username."' and Password='".$password."'");
		//$result = $query->row();
		//$row ->result;
		$result = $query->result();
		$result1 = $result[0];
		$row =$result1->result; //There is only one value
		if($row == 1){			
			return true;	
		}else{
			return false;
		}
	}
	
	function get_name($username){
		//get the 'no' from tb_account
		$query_account = $this->db->query("SELECT * FROM tb_account WHERE Username ='".$username."'");
		$no = $query_account->result();
		$no1 = $no[0];
		$no =$no1->No; //There is only one value
		$acct_no = $no1->AccountNo;

		//base on the 'no' from tb_account, get the family name and the given name from tb_employee
		$query_employee = $this->db->query("SELECT FamilyName, GivenName FROM tb_employee WHERE No='".$no."'");
		//return $query_employee->result();
		$emp_name = $query_employee->result();
		$emp_name1 = $emp_name[0];
		$emp_familyname = $emp_name1->FamilyName;
		$emp_givenname = $emp_name1->GivenName;
		$emp[0] = $emp_familyname;
		$emp[1] = $emp_givenname;
		
		//base on the 'account no' from tb_account, get the 'role no' from tb_employee_system_roles
		$query_roleno = $this->db->query("SELECT RoleNo FROM tb_employee_system_roles WHERE AccountNo='".$acct_no."'");
		//return $query_role->result();
		$role_no = $query_roleno->result();
		
		$role_no1 = $role_no[0];
		$role_no = $role_no1->RoleNo;
		
		//base on the 'role no' from tb_employee_system_roles, get the 'role name' from tb_system_roles
		$query_rolename = $this->db->query("SELECT RoleName FROM tb_system_roles WHERE RoleNo='".$role_no."'");
		$role_name = $query_rolename->result();
		$role_name1 = $role_name[0];
		$role_name = $role_name1->RoleName;
		$emp[2] = $role_name;
		$emp[3] = $no;
		return $emp;
	}	
}
?>
