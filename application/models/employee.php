<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends CI_Model{
	private $no;
	private $nric;
	private $family_name;
	private $given_name;
	private $email;
	private $dob;
	private $residential_address;
	private $position;
	private $basic_salary;
	private $mobile_contact;
	private $gender;
	private $race;
	private $religion;
	private $next_of_kin;
	private $next_of_kin_contact_no;
	private $highest_qualification;
	private $nationality;
	private $joined_date;
	private $department;
	private $employement_type;
	private $allowances_entitlement;
	//private $leave_entitlement;
	
	//php dones't allow method overloading
	public function Employee($no=NULL,$nric=NULL,$family_name=NULL,$given_name=NULL,$email=NULL, $dob=NULL,$residential_address=NULL,$position=NULL,
			$basic_salary=NULL,$mobile_contact=NULL,$gender=NULL,$race=NULL,$religion=NULL,$next_of_kin=NULL,$next_of_kin_contact_no=NULL,
			$highest_qualification=NULL,$nationality=null,$joined_date=NULL,$department=NULL,$employement_type=NULL,
			$allowances_entitlement=NULL){//,$leave_entitlement=NULL){
		$this->no = $no;
		$this->nric = $nric;
		$this->family_name = $family_name;
		$this->given_name = $given_name;
		$this->email = $email;
		$this->dob = $dob;
		$this->residential_address = $residential_address;
		$this->position = $position;
		$this->basic_salary = $basic_salary;
		$this->mobile_contact = $mobile_contact;
		$this->gender = $gender;
		$this->race = $race;
		$this->religion = $religion;
		$this->next_of_kin = $next_of_kin;
		$this->next_of_kin_contact_no = $next_of_kin_contact_no;
		$this->highest_qualification = $highest_qualification;
		$this->nationality = $nationality;
		$this->joinedDate = $joined_date;
		$this->department = $department;
		$this->employement_type = $employement_type;
		$this->allowances_entitlement = $allowances_entitlement;
		//$this->leave_entitlement = $leave_entitlement;
	}
		
	public function set_no($no){
		$this->no = $no;
	}
	
	public function get_no(){
		return $this->no;
	}	
		
	public function set_nric($nric){
		$this->nric = $nric;
	}
	
	public function get_nric(){
		return $this->nric;
	}
	
	public function set_family_name($family_name){
		$this->family_name = $family_name;
	}
	
	public function get_family_name(){
		return $this->family_name;
	}
	
	public function set_given_name($given_name){
		$this->given_name = $given_name;
	}
	
	public function get_given_name(){
		return $this->given_name;
	}
	
	public function set_email($email){
		$this->email = $email;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function set_dob($dob){
		$this->dob = $dob;
	}
	
	public function get_dob(){
		return $this->dob;
	}	
	
	public function set_residential_address($residential_address){
		$this->residential_address = $residential_address;		
	}
	
	public function get_residential_address(){
		return $this->residential_address;		
	}
	
	public function set_position($position){
		$this->position = $position;
	}
	
	public function get_position(){
		return $this->position;		
	}
	
	public function set_basic_salary($basic_salary){
		$this->basic_salary = $basic_salary;		
	}
	
	public function get_basic_salary(){
		return $this->basic_salary;
	}
	
	public function set_mobile_contant($mobile_contact){
		$this->mobile_contact = $mobile_contact;
	}
	
	public function get_mobile_contact(){
		return $this->mobile_contact;
	}
	
	public function set_gender($gender){
		$this->gender = $gender;
	}
	
	public function get_gender(){
		return $this->gender;
	}
	
	public function set_race($race){
		$this->race = $race;
	}
	
	public function get_race(){
		return $this->race;
	}
	
	public function set_religion($religion){
		$this->religion = $religion;
	}
	
	public function get_religion(){
		return $this->religion;
	}
	
	public function set_next_of_kin($next_of_kin){
		$this->next_of_kin = $next_of_kin;
	}
	
	public function get_next_of_kin(){
		return $this->next_of_kin;
	}
	
	public function set_next_of_kin_contact_no($next_of_kin_contact_no){
		$this->next_of_kin_contact_no = $next_of_kin_contact_no;
	}
	
	public function get_next_of_kin_contact_no(){
		return $this->next_of_kin_contact_no;
	}

	public function set_highest_qualification($highest_qualification){
		$this->highest_qualification = $highest_qualification;
	}
	
	public function get_highest_qualification(){
		return $this->highest_qualification;
	}
	
	public function set_nationality($nationality){
		$this->nationality = $nationality;
	}
	
	public function get_nationality(){
		return $this->nationality;
	}
	
	public function set_joined_date($joined_date){
		$this->joined_date = $joined_date;
	}
	
	public function get_joined_date(){
		return $this->joined_date;
	}
	
	public function set_department($department){
		$this->department = $department;
	}
	
	public function get_department(){
		return $this->department;
	}
	
	public function set_employement_type($employement_type){
		$this->employement_type = $employement_type;
	}
	
	public function get_employement_type(){
		return $this->employement_type;
	}

	public function set_allowances_entitlement($allowances_entitlement){
		$this->allowances_entitlement = $allowances_entitlement;
	}
	
	public function get_allowances_entitlement(){
		return $this->allowances_entitlement;
	}
	
	/*public function set_leave_entitlement($leave_entitlement){
		$this->leave_entitlement = $leave_entitlement;
	}
	
	public function get_leave_entitlement(){
		return $this->leave_entitlement;
	}*/
}
?>