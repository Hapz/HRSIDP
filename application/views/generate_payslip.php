<?php include_once 'header.php';?>
<?php include_once 'loginbar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Generate PaySlip</h2>
		<p></p>

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
				<tr>
					<th>S/N</th>
					<th>Name</th>
					<th>Role</th>
					<th>Month</th>
					<th>Generated Time</th>
					<th>View</th>
					<th>Print<input type="checkbox"></th>
					<th>Delete</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Jack Tan</td>
					<td>Line Manager</td>
					<td>March</td>
					<td>24/09/2013 3:52PM</td>
					<td><a href="http://localhost/HRSIDP/view.php"
						onclick="javascript:void window.open('http://localhost/HRSIDP/view.php','1380264227356','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">View</a>
					</td>
					<td>Print <input type="checkbox"></td>
					<td><a href="/delete">Delete</a></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Jane Tan</td>
					<td>Employee</td>
					<td>March</td>
					<td>24/08/2013 3:51</td>
					<td><a href="/view">View</a></td>
					<td>Print <input type="checkbox"></td>
					<td><a href="/delete">Delete</a></td>
				</tr>
			</table>

			<br />
			<br />





		</form>

		<!-- end .content -->
	</div>
</div>


<?php include_once 'footer.php';?>

