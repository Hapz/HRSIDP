<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="Author" content="Team HAPZ" />
<meta name="keywords" content="Human Resource Management Portal" />

<meta name="description" content="ApplyLeave" />

<title>Sterling Engineering | Apply Leave</title>
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
				<li><a href="CheckClaimValidty.php">Check Claim Validty</a></li>
				<li><a href="ApproveClaim.php">Approve Claim</a></li>				
				<li><a href="GenerateClaimSlip.php">Generate Claimslip</a></li>
			</ul>
		</li>
		<li class="subs"><a href="#">Leave</a>
			<ul>
				<li><a href="#">Apply Leave</a></li>
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
				<h2>Leave Application Form</h2>
				<p></p>

				<form>
				I wish to apply for the following leave:<br/>
				<input type="radio" name="leave" value="male">Unpaid Leave<br>
				<input type="radio" name="leave" value="female">Annual Leave<br>
				<input type="radio" name="leave" value="female">Medical Leave<br>
				<input type="radio" name="leave" value="female">Maternity Leave<br>
				<input type="radio" name="leave" value="female">Others: <input type="text" name="other_leaves"/>
				
				
				<br/><br/>
				Leave From: <input type="date" name="fromdate"> 	&nbsp&nbsp Leave To: <input type="date" name="todate">
				
				<br/><br/>
				
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

<table id="tfhover" class="tftable" border="1">
<tr><th>Balance no. of annual leaves BEFORE deduction</th><th>No. of days taken</th><th>Balance no. of Medical Leaves AFTER deduction</th></tr>
<tr><td>1</td><td>3</td><td>2</td></tr>
</table>

  
  
				<br/><br/>
				<input type="submit"> &nbsp&nbsp <input type="reset" value="Clear">
				
				
				
				
				
				
				
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
