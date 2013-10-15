
<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>View Approved Leaves</h2>
		
		<h4>Upcoming Leaves</h4> 		
		<table id="tfhover" class="tftable" border="1">
				<tr>
					<th>S/N</th>
					<th>Employee Name</th>
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Supporting Documents</th>
					
				</tr>
				<tr>
					<td>001</td>
					<td>Jason Tan</td>
					<td>24/09/2013 3:52PM</td>
					<td>Annual</td>
					<td>27/09/2013</td>
					<td>29/09/2013</td>
					<td>2</td>
					<td>-</td>				
				</tr>				
			</table>
			<br/><br/>
			<a href="approve_reject_leave">Click here to approve more leaves.</a>
			
</div>
<?php include_once 'footer.php';?>
