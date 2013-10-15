<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Validate Claim</h2>

		<!-- Row Highlight Javascript -->
<script type="text/javascript">
	window.onload=function(){
	var tfrow = document.getElementById('tfhover').rows.length;
	var tbRow=[];
	for (var i=1;i<tfrow;i++) {
		tbRow[i]=document.getElementById('tfhover').rows[i];
		tbRow[i].onmouseover = function(){
		  this.style.backgroundColor = '#ffffff';
		};
		tbRow[i].onmouseout = function() {
		  this.style.backgroundColor = '#d4e3e5';
		};
	}
};

//to enable the user to edit the claim amount
function enableText(amount){
	document.getElementById(amount.id).disabled= false;
}
</script>
		<table id="tfhover" class="tftable" border="1">
			<tr>
				<th>Employee Name</th>
				<th>Project ID</th>
				<th>Date of claim incurred</th>
				<th>Claim Type</th>
				<th>Claim Amount</th>
				<th>Date of claim submitted</th>
				<th>Claim Receipt</th>
				<th>Validate</th>
			</tr>
				<?php
				// get all pending claims 
				if ($list_of_pending_claims != null) {
					$claim = new Claim ();
					for($i = 0; $i < count ( $list_of_pending_claims ); $i ++) {
						if ($emp_name != null) {
				?>
				<form method="post">
				<?php $claim_no = $list_of_pending_claims[$i]->get_claim_no();?>
				<input type="hidden" value="<?php echo $claim_no;?>" name="claim_no" />
				<tr>
					<td><?php echo $emp_name[$i];?></td>
					<td><?php echo $list_of_pending_claims[$i]->get_project_id(); ?></td>
					<td><?php echo $list_of_pending_claims[$i]->get_date(); ?></td>
					<td><?php echo $list_of_pending_claims[$i]->get_claim_type(); ?></td>
					<td><input type="text" value="<?php echo $list_of_pending_claims[$i]->get_claim_amount();?>" id="amount<?php echo $i;?>" name="amount" size="10" disabled /> 
					<input type="button" class="buttonA" id="editAmount" value="Edit" onClick="enableText(amount<?php echo $i; ?>)" /> 
					<input type="submit" class="buttonA" onclick="this.form.action='<?php echo base_url('claim_ctrl/update_claim_amount');?>'";this.form.submit() id="save" value="Save"/>
					</td>
					<td><?php echo $list_of_pending_claims[$i]->get_claim_reference_date(); ?></td>
					<td>claim_receipt.jpg</td>
					<td>
					<input type = "submit" class="buttonA" onclick="this.form.action='<?php echo base_url('claim_ctrl/update_claim_status');?>'";this.form.submit() id="validateClaim" value="Validate"/>
					</td>
				</tr>
			</form>
				<?php
							}
						}
					}
				?>
				
			</table>
		<!-- end .content -->
	</div>
</div>
<?php include_once 'footer.php';?>

