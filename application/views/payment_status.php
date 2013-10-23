<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Update Payment Status</h2>
		<p></p>
		<script>
		
		
		function displayResult(){
			alert("Updated successfully!");
			document.getElementById("demo").innerHTML="Issued";
			//document.getElementById("demo2").innerHTML="Issued";
			/*var x = document.getElementById("paymentStatus").setAttribute("onchange",function() {checkAddress(this));
			alert(x);

			if(paymentStatus.checked){
			alert(x);
			} */
		}
			<?php
			echo "test";
			?>
						
		</script>
		<!--<form>-->
			<!-- Blank out the search engine -->
			<!--  <select name="choice" onchange='checkvalue(this.value)'> 
	
    <option value="others">All Employees </option>  
    <option value="first_name">First Name</option>
    <option value="last_name">Last Name</option>
    <option value="role">Role</option>
    <option value="department">Department</option>
	<option value="email">Email</option>
</select>-->

			<input type="text" name="choice" id="choice" style='display: none' />
			<script>
function checkvalue(val)
{
    if(val==="others")
       document.getElementById('choice').style.display='none';
    else
       document.getElementById('choice').style.display='block'; 
}
</script>
			<!-- <input type="submit"> -->

			<!-- Row Highlight Javascript -->
			<script type="text/javascript">
	window.onload=function(){
	var tfrow = document.getElementById('tfhover').rows.length;
	var tbRow=[];
	for (var i=1;i<tfrow;i++) {
		tbRow[i]=document.getElementById('tfhover').rows[i];
		tbRow[i].onmouseover = function(){
		  this.style.backgroundColor = '#ffffff';
		};
		tbRow[i].onmouseout = function() {
		  this.style.backgroundColor = '#d4e3e5';
		};
	}
};
</script>

			<style type="text/css">
table.tftable {
	font-size: 12px;
	color: #333333;
	width: 100%;
	border-width: 1px;
	border-color: #729ea5;
	border-collapse: collapse;
}

table.tftable th {
	font-size: 12px;
	background-color: #acc8cc;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #729ea5;
	text-align: left;
}

table.tftable tr {
	background-color: #d4e3e5;
}

table.tftable td {
	font-size: 12px;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #729ea5;
}
</style>
			<form action='change_payment_status' method="post">
				<table id="tfhover" class="tftable" border="1">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col">Role</th>
							<th scope="col">Month</th>

							<th scope="col">Payment Status<input type="checkbox" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
if ($list_of_employee != null || $list_of_employee !=null) {
								$employee = new Employee ();
								$number = 1;
								
								foreach ( $list_of_employee as $employee ) {
									foreach ( $list_of_remuneration as $remuneration ) {
										
										if ($remuneration->get_payment_status () == 0 && $employee->get_no () == $remuneration->get_employee_number ()) {
											
											?>
							
							<td><?php print_r ($number); ?></td>
							<td><?php print_r ( $employee->get_given_name()." ".$employee->get_family_name() ); ?>
							
							
							<td><?php print_r ($employee->get_position());?>
							
							
							<td><?php print_r ($remuneration->get_month());?>
							
							
							<td id="demo">Not Issued</td>
							<!--<td style="text-align: center;"><input type="checkbox" name="payment" id="paymentStatus" value="Payment Updated!" /> Not Issued.</td>  -->

							<!--<td style="text-align: center;"><input type="checkbox" name="payment" id="paymentStatus" value="Payment Updated!" /> Not Issued.</td>   -->
						</tr>
						<?php $number++;?>
					<?php
										}
									}
								}
							}
							?>
					</tbody>
				</table>

				<p>&nbsp;</p>
				<input type="submit" value="Update Payment Status" />
				<p>&nbsp;</p>
			</form>
			<!-- end .content -->
	
	</div>
</div>

<br />
<br />





<!-- </form> -->

<!-- end .content -->
</div>
</div>


<?php include_once 'footer.php';?>

