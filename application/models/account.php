<?php
class Account extends CI_Model{
	private $account_no;
	private $username;
	private $password;
	private $no; //this is the 'No' from tb_Employee
	private $active;// 1= active ; 0 = not active
	
	//php dones't allow method overloading
	
	public function Account($account_no=NULL,$username=NULL,$password =NULL,$no=NULL,$active=NULL){
		$this->account_no = $account_no;
		$this->username = $username;
		$this->password = $password;
		$this->no = $no;
		$this->active = $active;
	}
	
	public function set_account_no($account_no){
		$this->account_no = $account_no;
	}
	
	public function get_account_no(){
		return $this->account_no;
	}
	
	public function set_username($username){
		$this->username = $username;
	}
	
	public function get_username(){
		return $this->username;
	}
	
	public function set_password($password){
		$this->password = $password;
	}
	
	public function get_password(){
		return $this->password;
	}
	
	public function set_no($no){
		$this->no = $no;
	}
	
	public function get_no(){
		return $this->no;
	}
	
	public function set_active($active){
		$this->no = $no;
	}
	
	public function get_active(){
		return $this->active;
	}
}