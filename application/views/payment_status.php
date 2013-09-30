<?php include_once 'header.php';?>
<?php include_once 'loginbar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Update Payment Status</h2>
		<p></p>
		<script>
		function displayResult(){
			var x = document.getElementById("paymentStatus").setAttribute("onchange",function() {checkAddress(this));
			if(paymentStatus.checked){
			alert(x);
			}
		}

		</script>
		<form>
			Payslip generated for: <select>
				<option value="all">All Employees</option>
				<option value="NRIC">First Name</option>
				<option value="opel">Last Name</option>
				<option value="audi">Position</option>
				<option value="audi">Department</option>
				<option value="audi">Email</option>
			</select> <br />
			<br /> Enter First Name: <input type="text" name="firstname"><br /> <input
				type="submit"><br />
			<br />

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

