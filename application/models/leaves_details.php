<?php
class Leaves_details extends CI_Model{
	private $leave_details_no;
	private $leave_type_name;
	private $leave_notes;
	private $leave_documents_data;
	
	public function Leaves_details($leave_details_no=NULL,$leave_type_name=NULL,$leave_notes=NULL,$leave_documents_data=NULL){
		$this->leave_details_no = $leave_details_no;
		$this->leave_type_name = $leave_type_name;
		$this->leave_notes= $leave_notes;
		$this->leave_documents_data = $leave_documents_data;
	}
	
	public function get_leave_details_no($leave_details){
		return $leave_details->leave_details_no;
	}
	
	public function set_leave_details_no($leave_details_no){ 
		$this->leave_details_no=$leave_details_no;
	}
	
	public function get_leave_type_name($leave_details){
		return $leave_details->leave_type_name;
	}
	
	public function set_leave_type_name($leave_type_name){ 
		$this->leave_type_name=$leave_type_name;
	}
	
	public function get_leave_notes(){
		return $this->leave_notes;
	}
	
	public function set_leave_notes($leave_notes){ 
		$this->leave_notes=$leave_notes;
	}
	
	public function get_leave_documents_data(){
		return $this->leave_documents_data;
	}
	
	public function set_leave_documents_data($leave_documents_data){ 
		$this->leave_documents_data=$leave_documents_data;
	}
}