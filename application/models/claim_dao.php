<?php

class Claim_dao extends CI_Model{

	//insert new claim
	public function add_claim(Claim $claim){
		$this->db->set('ClaimAmount', $claim->get_claim_amount());
		$this->db->set('ClaimType', $claim->get_claim_type());
		$this->db->set('ProjectId', $claim->get_project_id());
		$this->db->set('Date', $claim->get_date());
		$this->db->set('ClaimReferenceDate', $claim->get_claim_reference_date());
		//$this->db->set('ClaimPic', $claim->get_claim_pic());
		$this->db->set('ClaimSlip', $claim->get_claim_slip());
		$this->db->set('No', $claim->get_no());
		//$this->db->set('Status', $claim->get_status());
		//$this->db->set('Remarks', $claim->get_remarks());
		//insert new claim record into the database table
		$this->db->insert("tb_claim");
	}

	//get all claim details
	public function get_all_claim(){
		$query = $this->db->query ("SELECT * FROM tb_claim");
		return $query->result();
	}
	
	//get specific claim details based on search criteria; $type = search criteria; $val = the search value
	public function get_claim($type, $val){
		$query = $this->db->query("SELECT * FROM tb_claim where ".$type."='".$val."'");
		return $query->result();
	}
	
	//update claim
	public function update(Claim $claim){
		$claim_no = $claim->get_claim_no;
		$this->db->set('ClaimAmount', $claim->get_claim_amount());
		$this->db->set('ClaimType', $claim->get_claim_type());
		$this->db->set('ProjectId', $claim->get_project_id());
		$this->db->set('Date', $claim->get_date());
		$this->db->set('ClaimReferenceDate', $claim->get_claim_reference_date());
		$this->db->set('ClaimPic', $claim->get_claim_pic());
		$this->db->set('ClaimSlip', $claim->get_claim_slip());
		$this->db->set('Status', $claim->get_status());
		$this->db->set('Remarks', $claim->get_remarks());
		//update the database table
		$this->db->where("ClaimNo", $claim_no);
		$this->db->update("tb_claim");
	}
	
	//update claim where only specific field(s) is/are updated
	public function update_claim_amount(Claim $claim){
		$claim_no = $claim->get_claim_no();
		$this->db->set('ClaimAmount', $claim->get_claim_amount());
		//update the database table
		$this->db->where("ClaimNo", $claim_no);
		$this->db->update("tb_claim");
	}
	
	public function update_claim_status(Claim $claim){
		$claim_no = $claim->get_claim_no();
		$this->db->set('Status', $claim->get_status());
		//update the database table
		$this->db->where("ClaimNo", $claim_no);
		$this->db->update("tb_claim");
	}
}