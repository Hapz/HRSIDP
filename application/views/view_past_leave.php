<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>View Leave History</h2>
		
		
		<h4>Past Leave(s)</h4>
		<?php if($list_of_past_leaves !==""){?>
		<table id="tfhover" class="tftable" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approval Status</th>					
				</tr>
				
				<?php $this->load->model('Applied_leaves');?>
				<?php foreach($list_of_past_leaves as $past_leave){?>	
				
				<tr>					
					<td><?php echo $this->Applied_leaves->get_submitted_date($past_leave);?></td>
					<td><?php 

					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($past_leave);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					<td><?php echo $from_date = $this->Applied_leaves->get_leave_from_date($past_leave);?></td>
					<td><?php echo $to_date = $this->Applied_leaves->get_leave_to_date($past_leave);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($past_leave)?></td>
					<td><?php echo $this->Applied_leaves->get_approval_status($past_leave);?></td>
					
					<?php $applied_leave_no = $this->Applied_leaves->get_applied_leave_no($past_leave);?>					
					
				</tr>
				<?php }?>	
			</table>
		<?php } else{ ?>
		
			<table id="tfhover" class="tftablered" border="1">
				<tr align='center'><td>
				<b>- No Past Leave Found -</b>
				</td></tr>			
			</table>
			
		<?php }?>		
			
	
		
		
		
		
		
</div>
<?php include_once 'footer.php';?>