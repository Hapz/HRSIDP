<html>
<head></head>
<body>
	<h1>Get All employee</h1>
	<!-- <a href="EmployeeCtrl/getAllEmployeeProfile">Click Me!</a> -->
		<?php		
		// test get all employee
		/*if ($listOfEmployee != null) {
			$employee = new Employee ();
			foreach ( $listOfEmployee as $employee ) {
				print_r ( $employee );*/
		?>
				<br><br><br>				
		<?php
			/*}
		}*/
		?>
		
		
		<?php 
		// test login
		/*if($result != null){
			echo $result->result;
		}*/
		?>
		
		
		<?php 
		 //test search get by type
		if($search !=null){
			$employee = new Employee();
			foreach($search as $employee){
				echo $employee->getNric();
		?>
		<?php 
				echo $employee->getFirstName();
		?>
				<br><br><br>
		<?php
			}
		}
		?>			


</body>

</html>