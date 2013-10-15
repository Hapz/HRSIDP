<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>Approve/Reject Leave(s)</h2>
		<p>The following Leave Requests require your approval:</p>
		
		</script>
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
					</script>
					<script>
					$(document).ready(function(){
					  $("#rejectLeave").click(function(){
					  	$("#tr1").remove();
					  });
					  $("#rejectLeave2").click(function(){
						  	$("#tr2").remove();
						  });
					});
					</script>
		
		
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
					<th>Approve</th>
					<th>Reject</th>
				</tr>
				<tr id="tr1">
					<td>001</td>
					<td>Jason Tan</td>
					<td>24/09/2013 3:52PM</td>
					<td>Annual</td>
					<td>27/09/2013</td>
					<td>29/09/2013</td>
					<td>2</td>
					<td>-</td>
					
					<form id="approveleave" action="view_approved_leave" method="post">
					<td><input type="submit" class ="buttonA" id="approveLeave" value="Approve"/></td>
					</form>
					
					<form>				
					<td><input type="button" class="buttonA" id="rejectLeave" value="Reject"></td>
					</form>
				</tr>
				<tr id="tr2">
					<td>002</td>
					<td>Janice Sim</td>
					<td>24/09/2013 3:52PM</td>
					<td>Medical</td>
					<td>03/10/2013</td>
					<td>10/10/2013</td>
					<td>7</td>
					<td>Marriage Certificate.pdf</td>
					<td><input class ="buttonA" id="approveLeave" value="Approve"/></td>
					
					<form>				
					<td><input type="button" class="buttonA" id="rejectLeave2" value="Reject"></td>
					</form>					
					
				</tr>
			</table>
			
</div>
<?php include_once 'footer.php';?>
