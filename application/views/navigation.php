<!-- load the url helper; it enable quick link to url + passing value as a get method -->
<?php $this->load->helper('url');?>
<ul id="nav">
	<?php $role = "Administrator" ?>
	<?php if ($role != "Managing Director" ){?>
	<li><a href="#s1">Renumeration</a>
		<span id="s1"></span>
                    <ul class="subs">
			<?php if ($role == "HR Personnel" OR $role == "Administrator" ){?>
			<li><?php echo anchor('remuneration_ctrl/generate_payment', 'Generate All Payment Record');?></li> <!-- link to generate_payslip.php -->
			<li><?php echo anchor('remuneration_ctrl/update_payment_status', 'Update Payment Status');?></li> <!-- link to payment_status.php -->
			<?php } ?>				
		</ul></li>
		<?php } ?>	
		
	<li><a href="#s2">Claims</a>
		<span id="s2"></span>
                    <ul class="subs">
			<?php if ($role != "Managing Director" ){?>
			<li><?php echo anchor('claim_ctrl/view_submit_claim', 'Submit Claim');?></li>
			<li><?php echo anchor('claim_ctrl/view_claim_status', 'View Claim Status');?></li>
			<?php } ?>
			<?php if ($role == "HR Personnel" OR $role == "Administrator" ){?>
			<li><?php echo anchor('claim_ctrl/view_pending_claim', 'Validate Claim');?></li>
			<li><?php echo anchor('claim_ctrl/generate_claimslip', 'Generate Claimslip');?></li>
			<?php } ?>
			<?php if ($role == "Higher Management" OR $role == "Managing Director" OR $role == "Administrator" ){?>
			<li><?php echo anchor('claim_ctrl/view_validated_claim', 'Approve/Reject Claim');?></li>
			<?php } ?>
			<?php if ($role == "Higher Management" OR $role == "Administrator"){?>		
			<?php } ?>
		</ul></li>
		
	<li><a href="#s3">Leave</a>
		<span id="s3"></span>
                    <ul class="subs">
			<?php if ($role != "Managing Director" ){?>
			<li><a href="#"><?php echo anchor('leave_ctrl/apply_leave_form', 'Apply Leave');?></li>
			<li><a href="#"><?php echo anchor('leave_ctrl/view_edit_leave', 'View & Edit Leave');?></li>
			<?php } ?>
			<?php if ($role == "HR Personnel" OR $role == "Administrator" ){?>
			<?php } ?>
			<?php if ($role == "Higher Management" OR $role == "HR Personnel" OR $role == "Administrator" ){?>
			<?php } ?>
			<?php if ($role == "Line Manager" OR $role == "Higher Management" OR $role == "Managing Director" OR $role == "Administrator" ){?>
			<li><?php echo anchor('leave_ctrl/approve_reject_leave', 'Approve & Reject Leave');?></li>
			<li><?php echo anchor('leave_ctrl/view_approved_leave', 'View Approved Leave');?></li>
			<?php } ?>
		</ul>
	</li>
</ul>