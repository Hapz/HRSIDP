<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Generate Claim Slip</h2>
		<p></p>
		<script>
		/*function displayResult(){
			var x = document.getElementById("paymentStatus").setAttribute("onchange",function() {checkAddress(this));
			if(paymentStatus.checked){
			alert(x);
			}
 		}*/

		</script>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#deleteClaim").click(function(){
  	$("#tr1").remove();
  });
});
</script>			<!-- styling for the adding new row, without styling the row will no appear if remove all existing row-->

		<form>
			Claimslip generated for: <select>
				<option value="all_employee">All Employees</option>
				<option value="nirc">NRIC</option>
				<option value="family_name">Family Name</option>
				<option value="give_name">Given Name</option>
				<option value="role">Role</option>
				<option value="department">Department</option>
				<option value="email">Email</option>
			</select><input type="text" name="search_value"><input type="submit"
				value="Search"><br /> <br />

		

			<table id="tfhover" class="tftable" border="1">
				<thead>
					<tr>
						<th scope="col">S/N</th>
						<th scope="col">Name</th>
						<th scope="col">Role</th>
						<th scope="col">Month</th>
						<th scope="col">Generated Time</th>
						<th scope="col">View</th>
						<th scope="col">Print</th>
						<th scope="col">Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr id="tr1">
						<td>1</td>
						<td>Kelvin Lim</td>
						<td>Worker</td>
						<td>September</td>
						<td>01/10/2013</td>
						<td><a href="generateClaim"
							onclick="javascript:void window.open('view_claimslip','1380264227356','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">View</a></td>
						<td><input type="button" class="buttonA" id="printClaim" value="Print"
							onclick="window.print()" /></td>
						<td><input type="button" class="buttonA" id="deleteClaim" value="Delete"></td>
					</tr>
				</tbody>
			</table>
			<!-- end .content -->
	
	</div>
</div>
<!-- end .content -->
</div>
</div>


<?php include_once 'footer.php';?>

