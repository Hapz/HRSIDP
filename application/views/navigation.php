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
        <i class="icon-th-large"></i> Renumeration
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <?php if ($role_name == "HR Personnel" OR $role_name == "Administrator" ){?>
			
			<li><?php echo anchor('remuneration_ctrl/generate_payment', 'Generate All Payment Record');?></li> <!-- link to generate_payslip.php -->
			<li><?php echo anchor('remuneration_ctrl/update_payment_status', 'Update Payment Status');?></li> <!-- link to payment_status.php -->
			<?php } ?>		
				
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

		</ul></li>
			
		
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i> Leave
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
			<?php if ($role_name != "Managing Director" ){?>
			<li><?php echo anchor('leave_ctrl/apply_leave_form', 'Apply Leave');?></a></li>
			<li><?php echo anchor('leave_ctrl/view_edit_leave', 'View & Edit Leave');?></a></li>

			<?php } ?>
			
			<?php if ($role_name == "Line Manager" OR $role_name == "Higher Management" OR $role_name == "Managing Director" OR $role_name == "Administrator" ){?>
			<li><?php echo anchor('leave_ctrl/approve_reject_leave', 'Approve & Reject Leave');?></li>
			<li><?php echo anchor('leave_ctrl/view_app_rej_leave', 'View Approved & Rejected Leave');?></li>
			<?php } ?>
		</ul></li>
</ul>
</div>
</div>
</div>