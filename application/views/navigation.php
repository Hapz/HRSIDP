<!-- load the url helper; it enable quick link to url + passing value as a get method -->
<?php $this->load->helper('url');?>
<div class="navbar">
 <div class="navbar-inner">
                <div class="container">
                  <ul class="nav">
<?php 
if(!isset($role_name))
{
	$role_name = $session_data["role_name"];
}


?>
	<?php if ($role_name != "Managing Director" ){?>
	<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Remuneration
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li><?php echo anchor('remuneration_ctrl/generate_past_payment', 'View Past Payment Record');?></li> <!-- link to view_payment_record.php -->
			<li><?php echo anchor('remuneration_ctrl/generate_payment', 'Generate All Payment Record');?></li> <!-- link to generate_payslip.php -->
			<!--  <li><?php //echo anchor('remuneration_ctrl/update_payment_status', 'Update Payment Status');?></li> --><!-- link to payment_status.php -->
			<?php } ?>
			<li><?php echo anchor('remuneration_ctrl/view_own_payslip', 'View Personal Payment Record');?></li><!-- View own payment pdf report -->
				
		</ul></li>
		<?php } ?>
		
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Claims
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
       <?php if ($role_name != "Managing Director" ){?>
			<li><?php echo anchor('claim_ctrl/view_submit_claim', 'Submit Claim');?></li>
			<li><?php echo anchor('claim_ctrl/view_claim_status', 'View Claim Status');?></li>
			<?php } ?>
			<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li><?php echo anchor('claim_ctrl/view_pending_claim', 'Validate Claim');?></li>
			<li><?php echo anchor('claim_ctrl/check_claimslip_generated/0', 'Generate Claimslip');?></li>
			<?php } ?>
			<?php if ($role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "Administrator" ){?>
			<li><?php echo anchor('claim_ctrl/view_validated_claim', 'Approve/Reject Claim');?></li>
			<?php } ?>
			<?php if ($role_name == "Higher Management" OR $role_name == "Administrator"){?>
			<li><a>View claim analysis report</a></li>			
			<?php } ?>
		</ul></li>
			
		
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Leave
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
			<?php if ($role_name != "Managing Director" ){?>
			<li><?php echo anchor('leave_ctrl/apply_leave_form', 'Apply Leave');?></li>
			<li><?php echo anchor('leave_ctrl/view_edit_leave', 'View & Edit Leave');?></li>
			<li><?php echo anchor('leave_ctrl/view_past_leave', 'View Leave History');?></li>			
			<?php } ?>
			<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li><a href="#">Validate Medical Leave</a></li>
			<?php } ?>
			<?php if ($role_name == "Higher Management" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li><a href="#">Generate leave report</a></li>
			<?php } ?>
			<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "Administrator" ){?>
			<li><?php echo anchor('leave_ctrl/approve_reject_leave', 'Approve & Reject Leave');?></li>
			<li><?php echo anchor('leave_ctrl/view_app_rej_leave', 'View Approved & Rejected Leave');?></li>
			<?php } ?>
		</ul></li>
		
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Training & Development
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
			<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li class="dropdown-submenu">
                <a tabindex="-1" href="#">Manage Course</a>
                <ul class="dropdown-menu">
					<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
					<li><a class="arrow">Propose Training Course</a></li><!-- hgih mg line mg hr admin -->
					<?php } ?>
					<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "Administrator" ){?>
					<li><a class="arrow">Assign Trainer for Internal Training</a></li><!-- line mg,higher mg,admin -->
					<?php } ?>
					<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
					<li><a>Accept/Reject Training Course</a></li><!-- line,hr,md,admin -->
					<?php } ?>
				</ul></li>
				<?php } ?>
			<?php if ($role_name != "Managing Director" ){?>
			<li class="dropdown-submenu">
                <a tabindex="-1" href="#">Manage Course Feedback</a>
                <ul class="dropdown-menu">
					<li><a>Add Course Feedback</a></li><!-- employee -->
					<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
					<li><a class="arrow">Review Employee Course Feedback</a></li><!-- line,hr, high mg -->
					<?php } ?>
					<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
					<li><a>Manage Reports</a></li><!-- hr,admin -->
					<?php } ?>
				</ul></li>
			<?php } ?>
			<?php if ($role_name == "Higher Management" OR $role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li><a class="arrow">Manage Employee Training Record</a>
				<ul>
					<li><a>View Employee Training Record</a></li> <!-- hr,high mg,admin -->
				</ul></li>
				<?php } ?>
			<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			<li class="dropdown-submenu">
                <a tabindex="-1" href="#">Manage Training Report</a>
                <ul class="dropdown-menu">
					<li><a>Report 1</a></li>
					<li><a>Report 2</a></li>
					<li><a>Report 3</a></li>
				</ul></li>
			<?php } ?>	
		</ul>
	</li>
	<?php if ($role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "Administrator" ){?>
	
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Performance Management & Apprasial
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
			<?php if ($role_name == "Higher Management" OR $role_name == "Administrator" ){?>
			<li><a href="#">Create employee appraisal</a></li>
			<li><a href="#">Propose salary increment</a></li>
			<?php } ?>				
			<li><a href="#">View employee appraisal</a></li>			
			<li><a href="#">Generate increment history report</a></li>
			<?php if ($role_name == "Managing Director" OR $role_name == "Administrator" ){?>
			<li><a href="#">Approve salary increment</a></li>
			<?php } ?>	
	</ul></li>
	<?php } ?>	
	<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>	
			<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> System Administration
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
			<?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>	
			<li><a href="#">Manage User Profile</a></li><!-- hr -->
			<?php } ?>	
			<?php if ($role_name == "Administrator" ){?>	
			<li><a href="#">Manage Leave</a>
				<ul>
					<li><a href="#">Manage Default Number of Leave</a>
					
					<li><a href="#">Edit General Details of Leave</a></li>
				</ul></li>				
			<li><a href="#">Manage Performance Measurement</a></li>
			<li><a href="#">Audit Log</a></li>
			<?php } ?>
		</ul></li>
		<?php } ?>	
</ul>
</div>
</div>
</div>