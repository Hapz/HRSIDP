<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>Approve/Reject Leave(s)</h2>
		<p>The following Leave Requests require your approval:</p>
		
		
		<!-- 
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
		 -->
		
		<?php if($list_of_pending_leaves !==""){?>
		<table id="tfhover" class="tftable" border="1">
				<tr>
					<th>Employee Name</th>
					<th>Type</th>
					<th>Application Date</th>					
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Supporting Documents</th>
					<th>Approve</th>
					<th>Reject</th>
				</tr>
			
			<?php $this->load->model('Applied_leaves');?>
			<?php 
			$count = 0;
			foreach($list_of_pending_leaves as $pending){?>	
			
				<tr>					
					<td><?php 
					
					//Leave No.
					$leave_no = $this->Applied_leaves->get_applied_leave_no($pending);
										
					// Employee Name
					echo $emp_names[$count];
					$count = $count + 1;
					
					?></td>
					
					<td><?php 
					
					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($pending);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					
					<td><?php echo $this->Applied_leaves->get_submitted_date($pending);?></td>
					
					
					<td><?php echo $this->Applied_leaves->get_leave_from_date($pending);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_to_date($pending);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($pending);?></td>
					<td>NIL</td>
					
					<form id="approveleave" onsubmit="return confirm('Proceed to approve leave?');" action="approve_leave" method="post">
					<input type="hidden" name="leaveNo" value="<?php echo $leave_no?>"/>
					<td><input type="submit" class ="buttonA" id="approveLeave" value="Approve"/></td>
					</form>
					
					<form id="rejectleave" onsubmit="return confirm('Proceed to reject leave?');" action="reject_leave" method="post">
					<input type="hidden" name="leaveNo" value="<?php echo $leave_no?>"/>			
					<td><input type="submit" class="buttonA" id="rejectLeave" value="Reject"></td>
					</form>
					
								
				</tr>
			<?php }?>	
			</table>
		<?php } else{
			echo "- No Leaves to Approve -";
		}?>
		
			
</div>
<?php include_once 'footer.php';?>
