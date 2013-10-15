<html>
<head></head>
<body>
	<h1>Get All employee</h1>
	<!-- <a href="EmployeeCtrl/getAllEmployeeProfile">Click Me!</a> -->
		<?php		
		// test get all employee
		//if ($list_of_employee != null) {
			//$this->load->model('employee');
			//$employee = new Employee ();
			//foreach ( $list_of_employee as $employee ) {
				//print_r ( $employee );
				
		?>
				<br><br><br>				
		<?php
			//}
			//echo $list_of_employee;
		//}
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

<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
  $("p").hide();
  });
  $(".btn2").click(function(){
  $("p").show();
  });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>

<button class="btn1">Hide</button>
<button class="btn2">Show</button>

</body>
</html>

