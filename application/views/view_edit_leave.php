<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>View & Edit Leave</h2>
		
		<?php 
		
		
		?>
		
		<?php 
			date_default_timezone_set("Asia/Singapore"); 
			$current_date = date('Y-m-d H:i:s');
			$current_year = date('Y');
			$next_year = date('Y') + 1;
// 			echo $current_year;
// 			echo $next_year;
		?>
		
			<h4>Leave Balances</h4>
		<table class="tftable" border="1">
		<th>Annual Leave Balance for <?php echo $current_year?></th><th>Annual Leave Balance for <?php echo $next_year?></th><th>Annual Medical Leave Balance for <?php echo $current_year?> (Outpatient)</th><th>Annual Medical Leave Balance for <?php echo $current_year?> (Hospitalisation)</th>
<tr><td><?php echo $annual_leave_current?></td><td><?php echo $annual_leave_next?></td><td><?php echo $medical_leave_outpatient?></td><td><?php echo $MedicalLeaveHospitalisationBalance ?></td></tr>
		</table>
		<br/>
		
		
		<h4>Current Leave</h4>
		<?php if($list_of_current_leaves !==""){?>
		<table id="tfhover" class="tftable" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approval status</th>					
				</tr>
			
			<?php $this->load->model('Applied_leaves');?>
			<?php foreach($list_of_current_leaves as $current_leave){?>	
			
				<tr>					
					<td><?php echo $this->Applied_leaves->get_submitted_date($current_leave);?></td>
					<td><?php 

					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($current_leave);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					<td><?php echo $this->Applied_leaves->get_leave_from_date($current_leave);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_to_date($current_leave);?></td>
					<td>2</td>
					<td><?php echo $this->Applied_leaves->get_approval_status($current_leave);?></td>					
				</tr>
			<?php }?>	
			</table>
		<?php } else{
			echo "- No Current Leaves Found -";
		}?>
		
		<h4>Upcoming Leave</h4>
		<?php if($list_of_upcoming_leaves !==""){?>
		<table id="tfhover" class="tftable" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approved by Line Manager</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				
				<?php $this->load->model('Applied_leaves');?>
				<?php foreach($list_of_upcoming_leaves as $upcoming_leave){?>	
				
				<tr>					
					<td><?php echo $this->Applied_leaves->get_submitted_date($upcoming_leave);?></td>
					<td><?php 

					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($upcoming_leave);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					<td><?php echo $from_date = $this->Applied_leaves->get_leave_from_date($upcoming_leave);?></td>
					<td><?php echo $to_date = $this->Applied_leaves->get_leave_to_date($upcoming_leave);?></td>
					<td>2</td>
					<td><?php echo $this->Applied_leaves->get_approval_status($upcoming_leave);?></td>
					
					<?php $applied_leave_no = $this->Applied_leaves->get_applied_leave_no($upcoming_leave);?>
					
					<!-- EDIT LEAVE -->
					<form id="editLeave" action="edit_leave_form" method="post">
					
					<input type="hidden" name="applied_leave_no" value="<?php echo $applied_leave_no;?>">
					<input type="hidden" name="applied_leave_name" value="<?php echo $leave_name;?>">
					<input type="hidden" name="from_date" value="<?php echo $from_date;?>">
					<input type="hidden" name="to_date" value="<?php echo $to_date;?>">					
					<td><input type="submit" class ="buttonA" id="editLeave" value="Edit"/></td>
					
					</form>
					<!-- EDIT LEAVE END -->
					
					<!-- DELETE LEAVE -->
					<form id="deleteLeave" action="delete_leave" method="post">
										
					<input type="hidden" name="applied_leave_no" value="<?php echo $applied_leave_no;?>">
					<td><input type="submit" class ="buttonA" id="deleteLeave" value="Delete"/></td>
														
					</form>
					<!-- DELETE LEAVE END -->
					
				</tr>
				<?php }?>	
			</table>
		<?php } else{
		
			echo "- No Upcoming Leaves Found -";
		}?>
		<h4>Past Leave(s)</h4>
		<table id="tfhover" class="tftable" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approved by Line Manager</th>
				</tr>
				<tr>					
					<td>24/09/2011 3:52PM</td>
					<td>Maternity</td>
					<td>27/09/2011</td>
					<td>29/09/2011</td>
					<td>2</td>
					<td>Yes</td>
				</tr>
				<tr>					
					<td>24/09/2011 3:52PM</td>
					<td>Annual</td>
					<td>03/10/2011</td>
					<td>10/10/2011</td>
					<td>7</td>
					<td>No</td>
				</tr>
			</table>
</div>
<?php include_once 'footer.php';?>
