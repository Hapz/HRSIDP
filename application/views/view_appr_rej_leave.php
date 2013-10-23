<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>View Approved & Rejected Leave</h2>
		
		<!-- View Approved Leave -->
		<h4>Approved Leave</h4>
		<?php if($list_of_approved_leaves !==""){?>
		<table id="tfhover" class="tftablegreen" border="1">
				<tr>
					<th>Employee Name</th>
					<th>Type</th>
					<th>Application Date</th>					
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Supporting Documents</th>					
				</tr>
			
			<?php $this->load->model('Applied_leaves');?>
			<?php 
			$count = 0;
			foreach($list_of_approved_leaves as $approved){?>	
			
				<tr>					
					<td><?php 
					
					//Leave No.
					$leave_no = $this->Applied_leaves->get_applied_leave_no($approved);
										
					// Employee Name
					echo $emp_names_approves[$count];
					$count = $count + 1;
					
					?></td>
					
					<td><?php 
					
					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($approved);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					
					<td><?php echo $this->Applied_leaves->get_submitted_date($approved);?></td>
					
					
					<td><?php echo $this->Applied_leaves->get_leave_from_date($approved);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_to_date($approved);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($approved);?></td>
					<td>NIL</td>				
					
								
				</tr>
			<?php }?>	
			</table>
			
		<?php } else{ ?>
			<table id="tfhover" class="tftablegreen" border="1">
				<tr align='center'><td>
				<b>- No Approved Leaves Found -</b>
				</td></tr>
			</table>
		<?php }?>
		
		<br/>
		
		<!-- View Rejected Leave -->
		<h4>Rejected Leave</h4>
		<?php if($list_of_rejected_leaves !==""){?>
		<table id="tfhover" class="tftablered" border="1">
				<tr>
					<th>Employee Name</th>
					<th>Type</th>
					<th>Application Date</th>					
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Supporting Documents</th>					
				</tr>
			
			<?php $this->load->model('Applied_leaves');?>
			<?php 
			$count = 0;
			foreach($list_of_rejected_leaves as $rejected){?>	
			
				<tr>					
					<td><?php 
					
					//Leave No.
					$leave_no = $this->Applied_leaves->get_applied_leave_no($rejected);
										
					// Employee Name
					echo $emp_names_rejects[$count];
					$count = $count + 1;
					
					?></td>
					
					<td><?php 
					
					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($rejected);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					
					<td><?php echo $this->Applied_leaves->get_submitted_date($rejected);?></td>
					
					
					<td><?php echo $this->Applied_leaves->get_leave_from_date($rejected);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_to_date($rejected);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($rejected);?></td>
					<td>NIL</td>				
					
								
				</tr>
			<?php }?>	
			</table>
			
		<?php } else{ ?>
			<table id="tfhover" class="tftablered" border="1">
				<tr align='center'><td>
				<b>- No Rejected Leaves Found -</b>
				</td></tr>
			</table>
		<?php }?>
		
			
</div>
<?php include_once 'footer.php';?>
