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
			/* var x = document.getElementById("paymentStatus").setAttribute("onchange",function() {checkAddress(this));
			alert(x);

			if(paymentStatus.checked){
			alert(x);
			} */
		}
			<?php 
					echo "test"; ?>
						
		</script>
		<form>
			<select name="choice" onchange='checkvalue(this.value)'> 
	
    <option value="others">All Employees </option>  
    <option value="first_name">First Name</option>
    <option value="last_name">Last Name</option>
    <option value="role">Role</option>
    <option value="department">Department</option>
	<option value="email">Email</option>
</select>

  <input type="text" name="choice" id="choice" style='display:none'/>
<script>
function checkvalue(val)
{
    if(val==="others")
       document.getElementById('choice').style.display='none';
    else
       document.getElementById('choice').style.display='block'; 
}
</script>
<input type="submit">

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

			<table id="tfhover" class="tftable" border="1">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col">Role</th>
							<th scope="col">Month</th>
							<th scope="col">Remuneration Amount</th>
							<th scope="col">Payment Status<input type="checkbox" /></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Kelvin Lim</td>
							<td style="text-align: center;">1</td>
							<td>Line Manager</td>
							<td>March</td>
							<td>$2200 &nbsp;</td>
							<td style="text-align: center;"><input type="checkbox" name="payment" id="paymentStatus" value="Payment Updated!" />Issued</td>
						</tr>
						<tr>
							<td>Amy Lee</td>
							<td style="text-align: center;">2</td>
							<td>Worker</td>
							<td>March</td>
							<td>$2000 &nbsp; &nbsp; &nbsp;&nbsp;</td>
							<td style="text-align: center;"><input type="checkbox" name="payment" id="paymentStatus" value="Payment Updated!" />Issued</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
				<p style="text-align: center;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						type="button" onclick="displayResult()" value="Update" />
				</p>
				<p>&nbsp;</p>
				<!-- end .content -->
			</div>
		</div>

			<br />
			<br />





		</form>

		<!-- end .content -->
	</div>
</div>


<?php include_once 'footer.php';?>

