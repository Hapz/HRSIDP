<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class remuneration extends CI_Model{
	private $month;
	private $year;
	private $is_current_remuneration;
	private $employee_number;
	private $cpf;
	private $fund_no;
	private $remuneration_ref_date;
	private $remuneration_slip;
	private $payment_status;
	private $generated_status;
	
	public function remuneration($month=null,$year=null,$is_current_remuneration = 1, $employee_number = null, $cpf = null, $fund_no = null,$remuneration_ref_date = null, $remuneration_slip=null,$payment_slip = 0,$generated_status=0){
		$this->month = $month;
		$this->year = $year;
		$this-> is_current_remuneration = $is_current_remuneration;
		$this-> employee_number = $employee_number;
		$this-> cpf = $cpf;
		$this-> fund_no = $fund_no;
		$this-> remuneration_ref_date = $remuneration_ref_date;
		$this-> remuneration_slip = $remuneration_slip;
		$this-> payment_status = $payment_status;
	}
	
	public function set_month($month){
		$this -> month = $month;
	}
	
	public function get_month(){
		return $this -> month;
	}
	
	public function set_year($year){
		$this -> year = $year;
	}
	
	public function get_year(){
		return $this -> year;
	}
	
	public function set_current_remuneration($is_current_remuneration){
		$this -> is_current_remuneration = $is_current_remuneration;
	}
	
	public function get_current_remuneration(){
		return $this -> is_current_remuneration;
	}
	
	public function set_employee_number($employee_number){
		$this -> employee_number = $employee_number;
	}
	
	public function get_employee_number(){
		return $this -> employee_number;
	}
	
	public function set_cpf($cpf){
		$this -> cpf = $cpf;
	}
	
	public function get_cpf(){
		return $cpf -> cpf;
	}
	
	public function set_fund_no($fund_no){
		$this -> fund_no = $fund_no;
	}
	
	public function get_fund_no(){
		return $fund_no -> fund_no;
	}
	
	public function set_remuneration_ref_date($remuneration_ref_date){
		$this -> remuneration_ref_date = $remuneration_ref_date;
	}
	
	public function get_remuneration_ref_date(){
		return $remuneration_ref_date -> remuneration_ref_date;
	}
	
	public function set_remuneration_slip($remuneration_slip){
		$this -> remuneration_slip = $remuneration_slip;
	}
	
	public function get_remuneration_slip(){
		return $remunerations_slip = remuneration_slip;
	}
	
	public function set_payment_status($payment_status){
		$this -> payment_status = $payment_status;
	}
	
	public function get_payment_status(){
		return $payment_status = payment_status;
	}
	

	public function set_generate_status($generate_status){
		$this -> generate_status = $generate_status;
	}
	
	public function get_generate_status(){
		return $generate_status = generate_status;
	}
	
	
}
