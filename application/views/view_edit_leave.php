<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
		<h2>View & Edit Leave</h2>
		
		
		<?php 
			date_default_timezone_set("Asia/Singapore"); 
			$current_date = date('Y-m-d H:i:s');
			$current_year = date('Y');
			$next_year = date('Y') + 1;
// 			echo $current_year;
// 			echo $next_year;
		?>
		
			<h4>Leave Balances</h4>
			
			
			<table>
			
			<tr>
			<td>
			<u>Annual Leave</u>
			</td>
			
			<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td>
			
			<u>Medical Leave</u>
			</td>
			
			<tr/>
			
			
			<tr>
			<td>
			
			Annual Leave balance for <?php echo $current_year?>: <?php echo "<b>".$annual_leave_current."</b>"?>   
			</td>
			
			<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			
			<td>
			Annual Medical Leave Balance for <?php echo $current_year?> (Outpatient): <?php echo "<b>".$medical_leave_outpatient."</b>"?> 
			</td>
			
			</tr>
			
			<tr>			
			<td>
			Annual Leave Balance for <?php echo $next_year?>: <?php echo "<b>".$annual_leave_next."</b>"?> <br/>
			</td>
			
			<td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			
			<td>
			Annual Medical Leave Balance for <?php echo $current_year?> (Hospitalisation): <?php echo "<b>".$MedicalLeaveHospitalisationBalance."</b>"?> <br/>			
			</td>
			
			</tr>
					
			</table>
		
		
		<br/>
		
		<!-- View Pending Leave -->
		<h4>Pending Leaves</h4>
				
		<?php if($list_of_pending_leaves !==""){?>
		<table id="tfhover" class="tftable" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approval Status</th>
					<th>Edit</th>
					<th>Cancel</th>
				</tr>
				
				<?php $this->load->model('Applied_leaves');?>
				<?php foreach($list_of_pending_leaves as $pending_leave){?>	
				
				<tr>					
					<td><?php echo $this->Applied_leaves->get_submitted_date($pending_leave);?></td>
					<td><?php 

					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($pending_leave);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					<td><?php echo $from_date = $this->Applied_leaves->get_leave_from_date($pending_leave);?></td>
					<td><?php echo $to_date = $this->Applied_leaves->get_leave_to_date($pending_leave);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($pending_leave)?></td>
					<td><?php echo $this->Applied_leaves->get_approval_status($pending_leave);?></td>
					
					<?php $applied_leave_no = $this->Applied_leaves->get_applied_leave_no($pending_leave);?>
					
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
					<form id="deleteLeave" onsubmit="return confirm('Proceed to cancel leave?');" action="delete_leave" method="post">
										
					<input type="hidden" name="applied_leave_no" value="<?php echo $applied_leave_no;?>">
					<td><input type="submit" class ="buttonA" id="deleteLeave" value="Cancel"/></td>
														
					</form>
					<!-- DELETE LEAVE END -->
					
				</tr>
				<?php }?>	
			</table>
		<?php } else{
		?>
		<table id="tfhover" class="tftable" border="1">
			<tr align='center'><td>
			<b>- No Pending Leaves Found -</b>
			</td></tr>			
		</table>
			
		<?php 
		}?>
		
		
		<br/>
		
		<!-- View Approved Leave (Include On-going/current leaves & Upcoming leaves) -->
		<h4>Approved Leave</h4>
		<?php if($list_of_current_leaves !=="" OR $list_of_upcoming_leaves !==""){?>
		<table id="tfhover" class="tftablegreen" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approval status</th>
					<th>Edit</th>
					<th>Cancel</th>			
				</tr>
			
			<?php $this->load->model('Applied_leaves');?>
			<?php 
			if($list_of_current_leaves !==""){
				foreach($list_of_current_leaves as $current_leave){?>	
			
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
					<td><?php echo $this->Applied_leaves->get_leave_duration($current_leave)?></td>
					<td><?php echo $this->Applied_leaves->get_approval_status($current_leave);?></td>
					<td colspan="2">Ongoing Leave</td>
				
				</tr>
			<?php }
			
			}?>
				
			<?php 
			if($list_of_upcoming_leaves !==""){
			foreach($list_of_upcoming_leaves as $upcoming_leave){?>	
				
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
					<td><?php echo $this->Applied_leaves->get_leave_duration($upcoming_leave)?></td>
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
					<form onsubmit="return confirm('Proceed to cancel leave?');" id="deleteLeave" action="delete_leave" method="post">
										
					<input type="hidden" name="applied_leave_no" value="<?php echo $applied_leave_no;?>">
					<td><input type="submit" onclick="displayDeleteAlert()" class ="buttonA" id="deleteLeave" value="Cancel"/></td>
														
					</form>
					<!-- DELETE LEAVE END -->
					
				</tr>
				<?php }
				
				}?>	
			
			
			
			
			</table>
		<?php } else{ ?>
		
		<table id="tfhover" class="tftablegreen" border="1">
			<tr align='center'><td>
			<b>- No Approved Leaves Found -</b>
			</td></tr>			
		</table>
		
		<?php }?>
		
		<br/>
		
		<!-- View Rejected Leaves (those within 30 days of application)-->
		<h4>Rejected Leave</h4>
		<?php if($list_of_rejected_leaves !==""){?>
		<table id="tfhover" class="tftablered" border="1">
				<tr>				
					<th>Application Date</th>
					<th>Type</th>
					<th>From</th>
					<th>To</th>
					<th>Number of Days</th>
					<th>Approval Status</th>					
				</tr>
				
				<?php $this->load->model('Applied_leaves');?>
				<?php foreach($list_of_rejected_leaves as $rejected_leave){?>	
				
				<tr>					
					<td><?php echo $this->Applied_leaves->get_submitted_date($rejected_leave);?></td>
					<td><?php 

					$leave_details_no = $this->Applied_leaves->get_leaves_details_no($rejected_leave);
				
					
					$this->load->model("leave_service");
					$leave_name = $this->leave_service->get_leave_details_no($leave_details_no);
					
					echo $leave_name;
					
					?></td>
					<td><?php echo $from_date = $this->Applied_leaves->get_leave_from_date($rejected_leave);?></td>
					<td><?php echo $to_date = $this->Applied_leaves->get_leave_to_date($rejected_leave);?></td>
					<td><?php echo $this->Applied_leaves->get_leave_duration($rejected_leave)?></td>
					<td><?php echo $this->Applied_leaves->get_approval_status($rejected_leave);?></td>
					
					<?php $applied_leave_no = $this->Applied_leaves->get_applied_leave_no($rejected_leave);?>					
					
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
