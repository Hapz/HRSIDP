<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta content="Team HAPZ" name="Author" />
<meta content="Human Resource Management Portal" name="keywords" />
<meta content="Approve Claim" name="description" />
<title>Sterling Engineering | Approve Claim</title>
<link href="styleSheet.css" rel="stylesheet" type="text/css" />
</head>
<body id="bhome">
	<div class="headerBar">
		<div class="header1">&nbsp;</div>
		<ul id="nav">
			<li><a href="index.php">Homepage</a></li>
			<li class="subs"><a href="#">Remuneration</a>
				<ul>
					<li><a href="ViewRemuneration.php">View Remuneration </a></li>
					<li><a href="GeneratePaySlip.php">Generate Payslip</a></li>
					<li><a href="PaymentStatus.php">Payment Status</a></li>
				</ul></li>
			<li class="subs"><a href="#">Claims</a>
				<ul>
					<li><a href="SubmitClaim.php">Submit Claim</a></li>
					<li><a href="ViewClaimStatus.php">View Claim Status</a></li>
					<li><a href="CheckClaimValidty.php">Check Claim Validty</a></li>
					<li><a href="#">Approve Claim</a></li>
					<li><a href="GenerateClaimSlip.php">Generate Claimslip</a></li>
				</ul></li>
			<li class="subs"><a href="#">Leave</a>
				<ul>
					<li><a href="ApplyLeave.php">Apply Leave</a></li>
					<li><a href="ApproveLeave.php">Approve Leave </a></li>
					<li><a href="ViewApprovedLeave.php">View Approved Leave</a></li>
				</ul></li>
		</ul>
		<!--– end #headerBar –-->
	</div>
	<div class="container">
		<div class="content">
			<div class="mainText">
				<h2>Payment Status</h2>
				<table border="0" cellpadding="1" cellspacing="1"
					style="width: 500px;">
					<tbody>
						<tr >
							<td>Show payment status for :&nbsp;</td>
							<td><input type="checkbox" />All Employee</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="checkbox" />Line Manager</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="checkbox" />Workers</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="checkbox" />Departments</td>
							<td><select><option selected="selected" value="">Project</option></select></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="button" value="Show List" /></td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
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
table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
table.tftable tr {background-color:#d4e3e5;}
table.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
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
							<td style="text-align: center;"><input type="checkbox" />Issued</td>
						</tr>
						<tr>
							<td>Amy Lee</td>
							<td style="text-align: center;">2</td>
							<td>Worker</td>
							<td>March</td>
							<td>$2000 &nbsp; &nbsp; &nbsp;&nbsp;</td>
							<td style="text-align: center;"><input type="checkbox" />Issued</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
				<p style="text-align: center;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						type="button" value="Update" />
				</p>
				<p>&nbsp;</p>
				<!-- end .content -->
			</div>
		</div>
		<div class="footer">
			<p>
				IS306 IDP | Team HAPZ |<a href="Help.php"> Help</a>
			</p>
			<!-- end .footer -->
		</div>
		<!-- end .container -->
	</div>
</body>
</html>
