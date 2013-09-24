<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="Author" content="Team HAPZ" />
<meta name="keywords" content="Human Resource Management Portal" />

<meta name="description" content="SubmitClaim" />

<title>Sterling Engineering | Submit Claim</title>
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
				<li><a href="#">Submit Claim</a></li>
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
				<h2>Submit New Claim</h2>
				<p></p>

				<form>
					Project: <input type="text" name="project_no."/><br/>
					Type:<br/>
					<input type="radio" name="leave" value="male">Entertainment<br>
					<input type="radio" name="leave" value="female">Transport (Taxi, petrol)<br>
					<input type="radio" name="leave" value="female">Telecom<br>
					<input type="radio" name="leave" value="female">Stationery<br>
					<input type="radio" name="leave" value="female">Hardware<br>
					<input type="radio" name="leave" value="female">Others: <input type="text" name="other_leaves"/>
				
					<br/>
					<br/>
					<br/>				
				
					Amount: S$ <input type="text" name="amount"/><br/>
					Date: <input type="date" name="date"> <br/>
					<br/>
					<br/>
					
					Please upload claim receipt: <br/>
					
					<label for="file">Select File:</label>
					<input type="file" name="file" id="file"><br>
				
				
				
				
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
