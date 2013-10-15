<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<div class="wrapper3">
	<div class="mainText">
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
		<script src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
		<script>
	$(document).ready(function() {
		var id = 0;
		
		// Add button functionality
		$("#add").click(function() {
			id++;
			var master = $(this).parents("table.dynatable");
			
			// Get a new row based on the prototype row
			var prot = master.find(".prototype").clone();
			prot.attr("class", "");
			prot.find(".id").attr("value", id);
			
			master.find("tbody").append(prot);
		});
		
		// Remove button functionality
		//$(document).on("click", "table.dynatable button.remove", function() {
		$("#remove").live("click", function() {
			  $(this).parents("tr").remove();
		});

		//upload file	
		$("#upload").live("click", function() {
			//alert($(this).siblings(":file").attr("value"));
			setTimeout(
  				function() {
				    //wait for a few sec before the alert is up
  					alert("Successfully uploaded the file");
  	  				}, 2500);
		});
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
	display: none;
}
</style>
<?php
if ($successful != null) {
	if ($successful == 1) {
		?>
<script>
	alert("Successful submitted the calims");
</script>	
<?php
	} else if ($successful == 2) {
		?>	
<script>
	alert("Submit the calims fail");
</script>
<?php
	}
}
?>

		<form action="submit_claims" method="post">
			<table id="tfhover" class="tftable dynatable" border="1">
				<thead>
					<tr>
						<th width="3%"></th>
						<th width="7%">Date Incurred</th>
						<th width="15%">Project</th>
						<th width="30%">File</th>
						<th width="20%">Type</th>
						<th width="15%">Amount</th>
						<th width="10%"><input type="button" value="Add" id="add"></th>
					</tr>
				</thead>
				<tbody>
					<tr class="prototype">
						<td width="3%"><input type="checkbox" name="select_claim[]"></td>
						<td width="7%">Date:<input type="date" name="date_incurr[]" /></td>
						<td width="15%"><input type="text" name="project_id[]" size="12" /></td>
						<td width="30%">Insert File: <input type="file" id="files" "/> <input
							type="hidden" value="00000000111000000000" name="claim_pic[]" />
							<input type="button" value="Upload" id="upload" />
						</td>
						<td width="20%">Claim Type: <select name="type[]">
								<option value="entertainment">Entertainment</option>
								<option value="transport">Transport</option>
								<option value="telecom">Telecom</option>
								<option value="stationery">Stationery</option>
								<option value="hardware">Hardware</option>
								<option value="others">Others</option>
						</select>
						</td>
						<td width="15%">$<input type="text" size="10"
							name="claim_amount[]" /></td>
						<td width="10%"><input type="button" value="Remove" id="remove" /></td>
					</tr>
				</tbody>
			</table>
			<input type="submit" value="Submit Claims" />
		</form>
		<!-- end .content -->

	</div>
</div>


<?php include_once 'footer.php';?>

