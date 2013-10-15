<?php
class Leaves_details_dao  extends CI_Model{
	//Add new leave details
	public function add_leave_details($leave_type_name,$leave_notes,$leave_documents_data){
		$this->db->set('LeaveTypeName',$leave_type_name);
		$this->db->set('LeaveNotes',$leave_notes);
		$this->db->set('$leave_documents_data',$leave_documents_data);
		$this->db->insert("tb_leaves_details");
	}
	
	public function get_leave_details($leave_type_name){
		$query = $this->db->query("SELECT *
							FROM  tb_leaves_details 
							WHERE LeaveTypeName ='".$leave_type_name."'");
		return $query->result();
	}
	
	public function get_leave_details_no($leave_no){
		$query = $this->db->query("SELECT *
							FROM  tb_leaves_details
							WHERE LeaveDetailsNo ='".$leave_no."'");
		return $query->result();
	}
}