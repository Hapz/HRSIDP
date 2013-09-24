<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="Author" content="Team HAPZ" />
<meta name="keywords" content="Human Resource Management Portal" />

<meta name="description" content="Approve Claim" />

<title>Sterling Engineering | Approve Claim</title>
<link href="styleSheet.css" rel="stylesheet" type="text/css" />
<div class="headerBar">
	<div class="header1"></div>
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

</head>
<!– end #headerBar –>
</div>
<body id="bhome">
	<div class="container">
		<div class="content">

			<div class="mainText">
				<h2>Approve Claim</h2>
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
							<th scope="col">Name</th>
							<th scope="col">Project</th>
							<th scope="col">Date</th>
							<th scope="col">Type</th>
							<th scope="col">Claimed Amount</th>
							<th scope="col">Approve<input type="checkbox" /></th>
							<th scope="col">Reject<input type="checkbox" /></th>
							<th scope="col">File Submitted</th>
							<th scope="col">Remarks</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Kelvin Lim</td>
							<td style="text-align: center;">1</td>
							<td>25/3/2013</td>
							<td>Transportation</td>
							<td>$23.41 &nbsp; &nbsp; &nbsp;&nbsp;<input type="button"
								value="Edit" /></td>
							<td style="text-align: center;"><input type="checkbox" /></td>
							<td style="text-align: center;"><input type="checkbox" /></td>
							<td style="text-align: center;"><a href="#">Pic1.jpg</a></td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Amy Lee</td>
							<td style="text-align: center;">2</td>
							<td>25/3/2013</td>
							<td>Transportation</td>
							<td>$15.30 &nbsp; &nbsp; &nbsp;&nbsp;<input type="button"
								value="Edit" /></td>
							<td style="text-align: center;"><input type="checkbox" /></td>
							<td style="text-align: center;"><input type="checkbox" /></td>
							<td style="text-align: center;"><a href="#"
								style="text-align: center;">Pic2.jpg</a></td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
				<p style="text-align: center;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						type="button" value="Update" />
				</p>
				<p></p>

</body>


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
