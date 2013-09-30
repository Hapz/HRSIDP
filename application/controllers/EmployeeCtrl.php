<?php

class EmployeeCtrl extends MY_Controller{
	
	//check the username & password; for login
	//public function checkLoginCredentials($username,$password){
	public function checkLoginCredentials(){
		$this->load->model("EmployeeDAO");
		$result = $this->EmployeeDAO->checkLoginCredentials("marc","123");//hardcode value
		$data['result'] = $result[0]; // the return result is either 0,1 but you must know how to get the actual value
		$this->load->view('TestGetAllEmployee.php',$data);// this is my test view
	}
	
	//get all employees profile/data
	public function getAllEmployeeProfile(){
		$this->load->model("EmployeeDAO");
		$result= $this->EmployeeDAO->getAllEmployeeProfile();
		
		$listOfEmployee = array();//something like arraylist
		foreach($result as $employee){		
							
			//assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$nric = $employee->Nric;
			$firstName = $employee->FirstName;
			$lastName = $employee->LastName;
			$email = $employee->Email;
			$residentialAddress = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basicSalary = $employee->BasicSalary;
			$mobileContact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;;
			$nextOfKin = $employee->NextOfKin;
			$nextOfKinContactNo = $employee->NextOfKinContactNo;
			$highestQualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joinedDate = $employee->JoinedDate;
			$department = $employee->Department;
			$employementType = $employee->EmployementType;
			$allowancesEntitlement = $employee->AllowancesEntitlement;
			$leaveEntitlement = $employee->LeaveEntitlement;
			
			//assign it to Employee Object
			$this->load->model("Employee");
			$employee = new Employee($nric,$firstName,$lastName,$email,$residentialAddress,$position,$basicSalary,$mobileContact,$gender,$race,$religion,$nextOfKin,$nextOfKinContactNo,$highestQualification,$nationality,$joinedDate,$department,$employementType,$allowancesEntitlement,$leaveEntitlement);	
			$listOfEmployee[] = $employee; //add it into the list			
		}		
		$data['listOfEmployee'] =$listOfEmployee; //assign the list into something like a session
		$this->load->view("TestGetAllEmployee", $data);// this is my test view
	}
	
	//get 1 employee profile/data; $type = search criteria; $val = the search value
	//public function getEmployee($type, $val){
	public function getEmployee(){
		$this->load->model("EmployeeDAO");
		$search = $this->EmployeeDAO->getEmployee("LastName","Tan");//hardcode value		
		
		$listOfEmployee = array();//something like arraylist
		foreach($search as $employee){
		
			//assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$nric = $employee->Nric;
			$firstName = $employee->FirstName;
			$lastName = $employee->LastName;
			$email = $employee->Email;
			$residentialAddress = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basicSalary = $employee->BasicSalary;
			$mobileContact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;;
			$nextOfKin = $employee->NextOfKin;
			$nextOfKinContactNo = $employee->NextOfKinContactNo;
			$highestQualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joinedDate = $employee->JoinedDate;
			$department = $employee->Department;
			$employementType = $employee->EmployementType;
			$allowancesEntitlement = $employee->AllowancesEntitlement;
			$leaveEntitlement = $employee->LeaveEntitlement;
		
			//assign it to Employee Object
			$this->load->model("Employee");
			$employee = new Employee($nric,$firstName,$lastName,$email,$residentialAddress,$position,$basicSalary,$mobileContact,$gender,$race,$religion,$nextOfKin,$nextOfKinContactNo,$highestQualification,$nationality,$joinedDate,$department,$employementType,$allowancesEntitlement,$leaveEntitlement);
			$listOfEmployee[] = $employee; //add it into the list
		}		
		$data['search'] =$listOfEmployee; //assign the list into something like a session
		$this->load->view("TestGetAllEmployee", $data);// this is my test view
	}
	
	/*there is no Account.php because i don't think we will need it often other than login and create account, 
	 * plus almost all the time we will be using username and password only. 
	 * You can see the result on the browser, go phpMyAdmin to see the data.
	 */
	//public function addNewEmployee(Employee $employee, $username, $password){
	public function addNewEmployee(){		
		//hardcode value
		$this->load->model("Employee");
		$employee = new Employee(				
				$nric = "8888",
				$firstName = "yixian",
				$lastName = "lee",
				$email = "yixian@email",
				$residentialAddress = "yixian address",
				$position = " qwe",
				$basicSalary = 1800.90,
				$mobileContact = 1293811,
				$gender = "MALE",
				$race = "CHINESE",
				$religion = " qwe",
				$nextOfKin = "LEE",
				$nextOfKinContactN = 1234567890,
				$highestQualification = " qwe",
				$nationality = "SG",
				$joinedDate = "2013/9/28",
				$department = "qwe ",
				$employementType = "Worker",
				$allowancesEntitlement = 100,
				$leaveEntitlement = 28
		);
		$username = "yixian";
		$password = "123";
		
		$this->load->model("EmployeeDAO");
		$search = $this->EmployeeDAO->addEmployee($employee,$username,$password);
	}
	
	//update employee profile
	public function editEmployeeProfile(Employee $employee){
	}
	
	//change password
	public function editAccount($username,$password){}
	
}



?>