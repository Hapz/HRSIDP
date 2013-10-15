<?php
class Claim extends CI_Model{
	private $claim_no;
	private $claim_amount;
	private $claim_type;
	private $project_id;
	private $date;
	private $claim_reference_date;
	private $claim_pic;
	private $claim_slip;
	private $no;// this is the 'No' belong to employee.
	private $status;
	private $remarks;
	
	public function Claim($claim_no=NULL, $claim_amount=NULL, $claim_type=NULL, $project_id=NULL, $date=NULL, $claim_reference_date=NULL, $claim_pic=NULL, $claim_slip=NULL, $no=NULL, $status=NULL,$remarks=NULL){
		$this->claim_no = $claim_no;
		$this->claim_amount = $claim_amount;
		$this->claim_type = $claim_type;
		$this->project_id = $project_id;
		$this->date = $date;
		$this->claim_reference_date = $claim_reference_date;
		$this->claim_pic = $claim_pic;
		$this->claim_slip = $claim_slip;
		$this->no = $no;
		$this->status = $status;
		$this->remarks= $remarks;
		
	}
	
	public function set_claim_no($claim_no){
		$this->claim_no = $claim_no;		
	}
	
	public function get_claim_no(){
		return $this->claim_no;		
	}
	
	public function set_claim_amount($claim_amount){
		$this->claim_amount = $claim_amount;
	}
	
	public function get_claim_amount(){
		return $this->claim_amount;
	}
	
	public function set_claim_type($claim_type){
		$this->claim_type = $claim_type;
	}
	
	public function get_claim_type(){
		return $this->claim_type;
	}
	
	public function set_project_id($project_id){
		$this->project_id = $project_id;
	}
	
	public function get_project_id(){
		return $this->project_id;
	}
	
	public function set_date($date){
		$this->date = $date;
	}
	
	public function get_date(){
		return $this->date;
	}
	
	public function set_claim_reference_date($claim_reference_date){
		$this->claim_reference_date = $claim_reference_date;
	}
	
	public function get_claim_reference_date(){
		return $this->claim_reference_date;
	}

	public function set_claim_pic($claim_pic){
		$this->claim_pic = $claim_pic;
	}
	
	public function get_claim_pic(){
		return $this->claim_pic;
	}
	
	public function set_claim_slip($claim_slip){
		$this->claim_slip = $claim_slip;
	}
	
	public function get_claim_slip(){
		return $this->claim_slip;
	}
	
	public function set_no($no){
		$this->no = $no;
	}
	
	public function get_no(){
		return $this->no;
	}
	
	public function set_status($status){
		$this->status = $status;
	}
	
	public function get_status(){
		return $this-> status;
	}
	
	public function set_remarks($remarks){
		$this->remarks = $remarks;
	}
	
	public function get_remarks(){
		return $this-> remarks;
	}
	
	
	
	
	
	
	
	
}