<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="Author" content="Team HAPZ" />
<meta name="keywords" content="Human Resource Management Portal" />

<meta name="description" content="ViewRemuneration" />

<title>Sterling Engineering | View Remuneration</title>
<link href="styleSheet.css" rel="stylesheet" type="text/css" />
<div class="headerBar">
	<div class="header1"></div>
	<ul id="nav">
		<li><a href="#">Homepage</a></li>
		<li class="subs"><a href="#">Remuneration</a>
			<ul>
				<li><a href="#">View Remuneration </a></li>
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
				<h2>View Remuneration</h2>
				<p></p>

				<form>
				Select month: 
				<select name="month" id="month" onchange="" size="1">
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				
				Select Year:
				<select id="year" name="year">
				  <script>
				  var myDate = new Date();
				  var year = myDate.getFullYear();
				  for(var i = 1900; i < year+1; i++){
					  document.write('<option value="'+i+'">'+i+'</option>');
				  }
				  </script>
				</select>
				
				<br/><br/>
				
				Remuneration report for: <b>March 2013</b> <br/>
				Base Salary: <b>S$5,000.00</b> <br/>
				Allowance: <b>NA</b> <br/>
				
				<br/>
				<b>Less:</b><br/>
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
<tr><th>Description</th><th>Amount</th></tr>
<tr><td>20% CPF Amount</td><td>S$1000.00</td></tr>
<tr><td>CDAC Fund</td><td>$1.00</td></tr>
</table>

<br/><br/>

<b>Add:</b>
<table id="tfhover" class="tftable" border="1">
<tr><th>Allowance Type</th><th>Amount</th></tr>
<tr><td>Telecom</td><td>S$200.00</td></tr>
</table>
				
<br/><br/>
Total for this month: <b>S$4199.00</b>
				
				
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
