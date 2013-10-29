<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
		<h2>Submit Claim</h2>

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
</script>

<!-- Adding/Removing new row -->
<script>
	
	$(document).ready(function() {
		var id=0;		
		submit_b(id);
		remove_b();
		// Add button functionality
		$("#add").click(function() {
			id++;
			var master = $(this).parents("table.dynatable");
			
			// Get a new row based on the prototype row
			var prot = master.find(".prototype").clone();
			prot.attr("class", "");
			prot.find(".id").attr("value", id);			
			prot.find('input').val("");//set all value to blank
			prot.find('input:last').val("Remove");//set the value for remove
			master.find("tbody").append(prot);						
			submit_b(id);
			remove_b();
		});
		
		// Remove button functionality
		$(document).on("click", "#remove", function() {
			id--;		
  			$(this).parents("tr").remove();
  			submit_b(id);
  			remove_b();
		});

		//disable submit button if there is no rows of claim added
		function submit_b(id){
			if (id <0){
				 $("input[type=submit]").attr("disabled", "disabled");
			 }else{		 
				  $("input[type=submit]").removeAttr("disabled");
			 }	 
	 	}
	 	
		function remove_b(){							 
							 
			 //$("#remove").removeAttr("disabled");
			 $(".remove").show();
			 $(".remove:first").hide();
			 
	 	}
	 	
	});
</script>
		<!-- styling for the adding new row, without styling the row will no appear if remove all existing row-->
		<style>
.dynatable {
	border: solid 1px #000;
	border-collapse: collapse;
}
/*
	.dynatable th,.dynatable td {
		border: solid 1px #000;
		padding: 2px 10px;
		width: 170px;
		text-align: center;
	}*/
.dynatable .prototype {
	display: 1;
}
</style>
<?php

$rej_successful = $this->session->flashdata('successful');
if($rej_successful != null){
	$successful = $rej_successful;
}

if ($successful != null) {
	if ($successful == 1) {
		?>
<script>
	alert("Successfully submitted the claims");
</script>	
<?php
	} else if ($successful == 2) {
		?>	
<script>
	alert("Claim submission failed. Please enter all required fields to continue!");
</script>
<?php
	}
}
?>
<font color="red"><?php echo validation_errors(); ?></font>
		<form action="submit_claims" method="post">
			<table id="tfhover" class="tftable dynatable" border="1">
				<thead>
					<tr>
						
						<th width="18%">Date Incurred</th>
						<th width="15%">Project ID</th>
						<th width="30%">Upload Receipt</th>
						<th width="17%">Claim Type</th>
						<th width="10%">Amount</th>
						<th width="10%"><input type="button" value="Add" id="add"></th>
					</tr>
				</thead>
				<tbody>
					<tr class="prototype">
						
						<td width="18%">Date:<input type="date" name="date_incurr[]" value="<?php echo set_value('date_incurr[]'); ?>" /></td>
						<td width="15%"><input type="text" name="project_id[]" size="3" value="<?php echo set_value('project_id[]'); ?>" /></td>
						<td width="30%">Insert File: <input type="file" id="files" name="claim_pic[]" value="<?php echo set_value('claim_pic[]'); ?>"/> 
						<!-- <input
							type="hidden" value="00000000111000000000" name="claim_pic[]" /> -->
							<!-- <input type="button" value="Upload" id="upload" /> -->
						</td>
						<td width="17%">Claim Type: <select name="type[]" value="<?php echo set_value('type[]'); ?>">
								<option value="entertainment">Entertainment</option>
								<option value="transport">Transport</option>
								<option value="telecom">Telecom</option>
								<option value="stationery">Stationery</option>
								<option value="hardware">Hardware</option>
								<option value="others">Others</option>
						</select>
						</td>
						<td width="10%">$<input type="text" size="5"
							name="claim_amount[]" value="<?php echo set_value('claim_amount[]'); ?>"/></td>
						<td width="10%"><input type="button" value="Remove" id="remove" class="remove" /></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" value="Submit Claims"/>
		</form>
		<!-- end .content -->

</div>


<?php include_once 'footer.php';?>

