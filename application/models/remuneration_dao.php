<?php
class Remuneration_dao extends CI_Model{

	//get all remuneration data
	public function get_all_remuneration_data(){
		$query = $this->db->query ("SELECT * FROM tb_remuneration");
		return $query->result();
	}
	
	public function store_remuneration(Employee $employee){
		$this->db->set('Month', date('F', strtotime("last month")));
		$this->db->set('Year', date('Y', strtotime("last month")));
		$this->db->set('IsCurrentRemuneration',"1");
		//check the date
		$this->db->set('No',$employee->get_employee_number());
		$this->db->set('Cpf',$remuneration->get_cpf());
		$employee_race = $employee->get_race();
		$wage = $this->employee->get_basic_salary();
		$this->db->set('FundValue',get_fund_value($employeeRace, $wage));
		$this->db->set('PaymentStatus', "0");
		$this->db->insert("tb_remuneration");
	}
	
	public function get_generated_status(){
		$query = $this->db->query("SELECT IsGenerated FROM tb_remuneration");
		return $query->result();
	}
	
	public function get_date(){
		$query = $this->db->query("SELECT Month,Year FROM tb_remuneration");
		return $query->result();
	}
	
	public function store_date(){
	$this->db->set('Month', date('F', strtotime("last month")));
	$this->db->set('Year', date('Y', strtotime("last month")));
	$this->db->insert("tb_remuneration");
	}
	
}