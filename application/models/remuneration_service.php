 <?php
class Remuneration_service extends CI_Model{
	
	public function get_details(){
		$this->load->model("employee_dao");
		$result = $this->employee_dao->get_all_employee();		
		$list_of_employee = array();//something like arraylist
		foreach($result as $employee){
		
			//assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $employee->No;
			$nric = $employee->Nric;
			$family_name = $employee->FamilyName;
			$given_name = $employee->GivenName;
			$email = $employee->Email;
			$dob = $employee->DOB;
			$residential_address = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basic_salary = $employee->BasicSalary;
			$mobile_contact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;;
			$next_of_kin = $employee->NextOfKin;
			$next_of_kin_contact_no = $employee->NextOfKinContactNo;
			$highest_qualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joined_date = $employee->JoinedDate;
			$department = $employee->Department;
			$employement_type = $employee->EmployementType;
			$allowances_entitlement = $employee->AllowancesEntitlement;
			//$leave_entitlement = $employee->LeaveEntitlement;
		
			//assign it to Employee Object
			$this->load->model('employee');
			$emp = new Employee($no,$nric,$family_name,$given_name,$email,$dob,$residential_address,$position,$basic_salary,$mobile_contact,$gender,$race,$religion,$next_of_kin,$next_of_kin_contact_no,$highest_qualification,$nationality,$joined_date,$department,$employement_type,$allowances_entitlement);
			$list_of_employee[] = $emp; //add it into the list
			$data['list_of_employee'] = $list_of_employee;
		}
		return $list_of_employee;
	}
	
	public function if_stored(){
		
		$month = date('F', strtotime("last month")); //return int value of month for last month
		$year = date('Y', strtotime("last month")); //return int value of year for last month
		$this->load->model("remuneration_dao");
		$result = $this->remuneration_dao->get_date();
		$state = "no";
		if($result == null){
			$state = "no";
		}
		else{
		foreach($result as $remuneration) {
			$mth = $remuneration -> Month;
			$yr = $remuneration -> Year;
			if($mth == $month && $yr ==$yr ){
				$state = "yes";
			}
		}
		}
		return $state; //return whether data is already stored in remuneration_dap
	}
	public function generate_for_all(){
		//store the employee details
		$session_data = $this->session->userdata('logged_in');
		$data['session_data'] = $session_data;
		$data['list_of_employee']  = $this->get_details();
		$state = $this->if_stored();		
		$data['state']=$state;
		if($state =="no"){
			$this->load->view('generate_payslip_button',$data);
		}else{
		$this->load->view('generate_payslip', $data);// load generate payslip page
		}
	}
	
	//this method will be called when HR activate generate button, write employee details into remuneration database along with date, month then change status
	public function change_generate(){
		$this->load->model("remuneration_dao");
		//add month and year
		$this->remuneration_dao->store_date();
		$this->generate_for_all();
		
	}
	
	//get one employee details
	public function get_employee_details($no){
		$this->load->model("employee_dao");
		$result = $this->employee_dao->get_employee('No',$no);
		$list_of_employee = array();//something like arraylist
		foreach($result as $employee){
	
			//assign the "Column" of data to a variable; e.g Nric = the column name in the database
			$no = $employee->No;
			$nric = $employee->Nric;
			$family_name = $employee->FamilyName;
			$given_name = $employee->GivenName;
			$email = $employee->Email;
			$dob = $employee->DOB;
			$residential_address = $employee->ResidentialAddress;
			$position = $employee->Position;
			$basic_salary = $employee->BasicSalary;
			$mobile_contact = $employee->MobileContact;
			$gender = $employee->Gender;
			$race = $employee->Race;
			$religion = $employee->Religion;;
			$next_of_kin = $employee->NextOfKin;
			$next_of_kin_contact_no = $employee->NextOfKinContactNo;
			$highest_qualification = $employee->HighestQualification;
			$nationality = $employee->Nationality;
			$joined_date = $employee->JoinedDate;
			$department = $employee->Department;
			$employement_type = $employee->EmployementType;
			$allowances_entitlement = $employee->AllowancesEntitlement;
			$leave_entitlement = $employee->LeaveEntitlement;
	
			//assign it to Employee Object
			$this->load->model('employee');
			$emp = new Employee($no,$nric,$family_name,$given_name,$email,$dob,$residential_address,$position,$basic_salary,$mobile_contact,$gender,$race,$religion,$next_of_kin,$next_of_kin_contact_no,$highest_qualification,$nationality,$joined_date,$department,$employement_type,$allowances_entitlement,$leave_entitlement);
			$list_of_employee[] = $emp; //add it into the list
			$data['list_of_employee'] = $list_of_employee;
		}
		return $list_of_employee;
	}
	
	
	//this method determines the age of all employees
	public function determine_age($no,$number){
		$list_of_employee = $this->get_employee_details($no);
		$data['list_of_employee'] = $list_of_employee;
		$data['serial_number']=$number;
		$current_year = date('Y');
		$int_current_year = intval($current_year);
		//$cpf_amount = array();
		if ($list_of_employee != null){
			$emp = new Employee ();
				foreach( $list_of_employee as $emp){
					
						//get the year in string
						$dob = $emp->get_dob();
						$string_date = substr($dob,-4);
						$int_year = intval($string_date);
						$age = $int_current_year - $int_year;
						if($age<35 || $age==35){
							$case = 1;
						} elseif ($age>35 && (50>$age || 50 ==$age)){
							$case = 2;
						} elseif($age>50 && (55>$age || 55 ==$age)){
							$case = 3;
						} elseif($age>55 && (60>$age || 60 ==$age)){
							$case = 4;
						} elseif($age>60 && (65>$age || 65 ==$age)){
							$case = 5;
						} elseif($age > 65){
							$case = 6;
						} else{
							$case = 0;
						}
						
						$case_number[] = $case;
						$data['case'] = $case_number;
						
						$cpf = $this->determine_cpf($emp, $case);
						//$cpf_amount[] = $cpf;
						$data['cpf_amount'] = $cpf;
						$fund_type = $this->determine_fund($emp);
						$data['fund_type'] = $fund_type;
						$allowance = $emp->get_allowances_entitlement();
						if($allowance == 0){
							$allowance = "NA";
						}
						$data['allowance'] = $allowance;
						$final_amount = $emp->get_basic_salary() - $allowance - $fund_type - $cpf;
						$data['final_amount'] = $final_amount;
				}
						
		}
		$this->load->view('view', $data);
	
	}
	
	//determine cpf
	public function determine_cpf(Employee $emp,$case){
		$amount = $emp ->get_basic_salary();
		switch ($case){
			case "1":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);				
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			case "2":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			case "3":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			case "4":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			case "5":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			case "6":
				if($amount < 50 || $amount ==50){
					$cpf = 0;
				} elseif($amount>50 && ($amount < 500 || $amount ==500)){
					$cpf = 0.16 * $amount ;
				} elseif($amount>500 && ($amount < 750 || $amount ==750)){
					$cpf = (0.16 * $amount) + 0.48 * ($amount - 500);
				} elseif($amount>750 && ($amount < 1200 || $amount ==1200)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				} elseif($amount>1200 && ($amount < 1500 || $amount ==1500)){
					$cpf = (0.16 * $amount) + 120 + 0.24 * ($amount - 750);
				}
				else{
					$cpf = 0.36 * $amount;
				}
				break;
			default:
				$cpf = 0;
		}
		return $cpf;
	}
	
	public function determine_fund(Employee $emp){
		$this->load->model("funds_dao");
		$race = $emp->get_race();
		$wage = $emp->get_basic_salary();
		$result = $this->funds_dao->get_fund_value($race, $wage);
		return $result;
		
	}
	
	
}