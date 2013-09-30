<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends CI_Model{
	private $nric;
	private $firstName;
	private $lastName;
	private $email;
	private $residentialAddress;
	private $position;
	private $basicSalary;
	private $mobileContact;
	private $gender;
	private $race;
	private $religion;
	private $nextOfKin;
	private $nextOfKinContactNo;
	private $highestQualification;
	private $nationality;
	private $joinedDate;
	private $department;
	private $employementType;
	private $allowancesEntitlement;
	private $leaveEntitlement;
	
	
	//why got =null in parameter ? think is the Syntax of PHP 
	public function Employee($nric=null,$firstName=null,$lastName=null,$email=null,$residentialAddress=null,$position=null,$basicSalary=null,$mobileContact=null,$gender=null,$race=null,$religion=null,$nextOfKin=null,$nextOfKinContactNo=null,$highestQualification=null,$nationality=null,$joinedDate=null,$department=null,$employementType=null,$allowancesEntitlement=null,$leaveEntitlement=null){
		$this->nric = $nric;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->email = $email;
		$this->residentialAddress = $residentialAddress;
		$this->position = $position;
		$this->basicSalary = $basicSalary;
		$this->mobileContact = $mobileContact;
		$this->gender = $gender;
		$this->race = $race;
		$this->religion = $religion;
		$this->nextOfKin = $nextOfKin;
		$this->nextOfKinContactNo = $nextOfKinContactNo;
		$this->highestQualification = $highestQualification;
		$this->nationality = $nationality;
		$this->joinedDate = $joinedDate;
		$this->department = $department;
		$this->employementType = $employementType;
		$this->allowancesEntitlement = $allowancesEntitlement;
		$this->leaveEntitlement = $leaveEntitlement;
	}
		
	public function setNric($nric){
		$this->nric = $nric;
	}
	
	public function getNric(){
		return $this->nric;
	}
	
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}
	
	public function getFirstName(){
		return $this->firstName;
	}
	
	public function setLastName($lastName){
		$this->lastName = $lastName;
	}
	
	public function getLastName(){
		return $this->lastName;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function setResidentialAddress($residentialAddress){
		$this->residentialAddress = $residentialAddress;		
	}
	
	public function getResidentialAddress(){
		return $this->residentialAddress;		
	}
	
	public function setPosition($position){
		$this->position = $position;
	}
	
	public function getPosition(){
		return $this->position;		
	}
	
	public function setBasicSalary($basicSalary){
		$this->basicSalary = $basicSalary;		
	}
	
	public function getBasicSalary(){
		return $this->basicSalary;
	}
	
	public function setMobileContant($mobileContact){
		$this->mobileContact = $mobileContact;
	}
	
	public function getMobileContact(){
		return $this->mobileContact;
	}
	
	public function setGender($gender){
		$this->gender = $gender;
	}
	
	public function getGender(){
		return $this->gender;
	}
	
	public function setRace($race){
		$this->race = $race;
	}
	
	public function getRace(){
		return $this->race;
	}
	
	public function setReligion($religion){
		$this->religion = $religion;
	}
	
	public function getReligion(){
		return $this->religion;
	}
	
	public function setNextOfKin($nextOfKin){
		$this->nextOfKin = $nextOfKin;
	}
	
	public function getNextOfKin(){
		return $this->nextOfKin;
	}
	
	public function setNextOfKinContactNo($nextOfKinContactNo){
		$this->nextOfKinContactNo = $nextOfKinContactNo;
	}
	
	public function getNextOfKinContactNo(){
		return $this->nextOfKinContactNo;
	}

	public function setHighestQualification($highestQualification){
		$this->highestQualification = $highestQualification;
	}
	
	public function getHighestQualification(){
		return $this->highestQualification;
	}
	
	public function setNationality($nationality){
		$this->nationality = $nationality;
	}
	
	public function getNationality(){
		return $this->nationality;
	}
	
	public function setJoinedDate($joinedDate){
		$this->joinedDate = $joinedDate;
	}
	
	public function getJoinedDate(){
		return $this->joinedDate;
	}
	
	public function setDepartment($department){
		$this->department = $department;
	}
	
	public function getDepartment(){
		return $this->department;
	}
	
	public function setEmployementType($employementType){
		$this->employementType = $employementType;
	}
	
	public function getEmployementType(){
		return $this->employementType;
	}

	public function setAllowancesEntitlement($allowancesEntitlement){
		$this->allowancesEntitlement = $allowancesEntitlement;
	}
	
	public function getAllowancesEntitlement(){
		return $this->allowancesEntitlement;
	}
	
	public function setLeaveEntitlement($leaveEntitlement){
		$this->leaveEntitlement = $leaveEntitlement;
	}
	
	public function getLeaveEntitlement(){
		return $this->leaveEntitlement;
	}
}
?>