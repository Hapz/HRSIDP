<?php
class Leave_documents extends CI_Model{
	private $leave_doc_no;
	private $applied_leave_no;
	private $doc_address;
	
	public function Leave_documents($leave_doc_no=NULL,$applied_leave_no=NULL,$doc_address=NULL){
		$this->leave_doc_no = $leave_doc_no;
		$this->applied_leave_no = $applied_leave_no;
		$this->doc_address = $doc_address;
	}
	
	public function get_leave_doc_no(){
		return $this->leave_doc_no;
	}
	
	public function set_leave_doc_no($leave_doc_no){ 
		$this->leave_doc_no = $leave_doc_no;
	}
	
	public function get_applied_leave_no(){
		return $this->applied_leave_no;
	}
	
	public function set_applied_leave_no($applied_leave_no){ 
		$this->applied_leave_no=$applied_leave_no;
	}
	
	public function get_doc_address(){
		return $this->doc_address;
	}
	
	public function set_doc_address($doc_address){ 
		$this->doc_address = $doc_address;
	}
}


