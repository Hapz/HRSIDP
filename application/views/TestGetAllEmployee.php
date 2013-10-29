<html>
<head></head>
<body>
	<h1>Get All employee</h1>
	<!-- <a href="EmployeeCtrl/getAllEmployeeProfile">Click Me!</a> -->
		<?php		
		// test get all employee
		if ($list_of_employee != null) {
			$employee = new Employee ();
			foreach ( $list_of_employee as $employee ) {
				print_r ( $employee );
		?>
				<br><br><br>				
		<?php
			}
		}
		?>
		
		
		<?php 
		// test login
		/*if($result != null){
			echo $result->result;
		}*/
		?>
		
		
		<?php 
		 //test search get by type
// 		if($search !=null){
// 			$employee = new Employee();
// 			foreach($search as $employee){
// 				echo $employee->get_nric();
		?>
		<?php 
// 				echo $employee->get_family_name();

		?>
				<br><br><br>
		<?php
			//}
		//}
		?>		
		
		<?php 
		//echo $account1;
		//echo $account1->get_username();
		//echo $account1->get_password();
		//$query = $this->employee_dao->get_employee_account_no(1);
// 		foreach($query as $account){
// 			echo $account->AccountNo;
// 			echo $account->Username;
// 		} 
		
		?>


</body>

</html>