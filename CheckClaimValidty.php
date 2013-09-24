<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="Author" content="Team HAPZ" />
<meta name="keywords" content="Human Resource Management Portal" />

<meta name="description" content="CheckClaimValidty" />

<title>Sterling Engineering | Check Claim Validty</title>
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
			</ul>
		</li>
		
		<li class="subs"><a href="#">Claims</a>
			<ul>
				<li><a href="SubmitClaim.php">Submit Claim</a></li>
				<li><a href="ViewClaimStatus.php">View Claim Status</a></li>
				<li><a href="#">Check Claim Validty</a></li>
				<li><a href="ApproveClaim.php">Approve Claim</a></li>				
				<li><a href="GenerateClaimSlip.php">Generate Claimslip</a></li>
			</ul>
		</li>
		<li class="subs"><a href="#">Leave</a>
			<ul>
				<li><a href="ApplyLeave.php">Apply Leave</a></li>
				<li><a href="ApproveLeave.php">Approve Leave </a></li>
				<li><a href="ViewApprovedLeave.php">View Approved Leave</a></li>
				

			</ul>
		</li>
	</ul>

</head>
<!– end #headerBar –>
</div>
<body id="bhome">
	<div class="container">
		<div class="content">

			<div class="mainText">
				<h2>Check Claim Validity</h2>
				<p></p>

				Pending claims: <br/>
				
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
table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
table.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
table.tftable tr {background-color:#d4e3e5;}
table.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
</style>

<form>
<table id="tfhover" class="tftable" border="1">
<tr><th>Name</th><th>Project</th><th>Claim Type</th><th>Date</th><th>Claim Amount</th><th>Validate <input type="checkbox"></th><th>File Submitted</th></tr>
<tr><td>John</td><td>1</td><td>Entertainment</td><td>05/03/2013</td><td>S$20.03</td><td><input type="checkbox"></td><td><a href="pic1.png">pic1.png</a></td></tr>
<tr><td>Jenny</td><td>2</td><td>Stationery</td><td>22/03/2013</td><td>$15.50</td><td><input type="checkbox"></td><td><a href="pic2.png">pic2.png</a></td></tr>
</table>
<br/><br/>
<input type="submit" value="Update"/>
</form>		

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
