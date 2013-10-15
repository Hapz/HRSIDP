<?php
class Account_dao extends CI_Model{
	
	//add new account
	public function add_account($username,$password,$no){	
		$this->db->set("Username", $username);
		$this->db->set("Password", $password);
		$this->db->set("No", $no);
		$this->db->set("Active", "1");
		$this->db->insert("tb_account");
	}
	
	//get employee account; type=search criteria, val= the search value
	public function get_employee_account($type,$val){
		$query = $this->db->query("SELECT * FROM tb_account where ".$type."='".$username."'");
		return $query->result();
	}
	
	//update employee account for Admin (Can change password and active/inactive)
	public function update_employee_account_admin($no, $new_password, $new_active_status){
		//currently everything can be edit but as the system progress things like nric will be taken out
		$this->db->set('Password', $new_password);
		$this->db->set('Active', $new_active_status);
	
		//get the auto assign no. inside tb_account
		$query = $this->get_employee_account_no($no); // Employee no. is unique
		$account_no = $query[0]->AccountNo;
			
		//update the table
		$this->db->where("AccountNo", $account_no);
		$this->db->update("tb_account");
	}
	
	//update employee account for user (can change password only)
	public function update_employee_account_user($no, $new_password){
		$this->db->set('Password', $new_password);
			
		//get the auto assign no. inside tb_account
		$query = $this->get_employee_account_no($no); // Employee no. is unique
		$account_no = $query[0]->AccountNo;
	
		//update the table
		$this->db->where("AccountNo", $account_no);
		$this->db->update("tb_account");
	}
}