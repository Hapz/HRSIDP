<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Generate Claim Slip</h2>
		<p></p>
		<script>
		/*function displayResult(){
			var x = document.getElementById("paymentStatus").setAttribute("onchange",function() {checkAddress(this));
			if(paymentStatus.checked){
			alert(x);
			}
 		}*/

		</script>
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

function displayResult(){
	alert("All claim slip are printed successfully!");
}
</script>

		<script
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
		<script>
$(document).ready(function(){
  $("#deleteClaim").click(function(){
  	$("#tr1").remove();
  });
});

function generateClaimSlip(){
	var x="";
	var r=confirm("Proceed to generate claim slip? \nClaim can only be generated once every month.");
	if(r==true){
		document.getElementById("frm1").submit();
	}
	else{
		x="No claim slip is generated.";
	}
	document.getElementById("demo").innerHTML=x;
}

</script>
		<!-- styling for the adding new row, without styling the row will no appear if remove all existing row-->

		<?php
		if ((isset ( $list_of_emp ) == false or isset ( $list_of_claims_no ) == false) AND isset($click_generate_claim) == false) {
			?>
			Generate claim slip for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?>				
			<form id="frm1" action="<?php echo site_url('claim_ctrl/generate_claimslip'); ?>" method="post">
			<button class="buttonA" onclick="generateClaimSlip();return false;">Generate
				claimslip</button>
		</form>
		<?php
		} else {
			?>
			<!-- Claimslip generated for: <select>
				<option value="all_employee">All Employees</option>
				<option value="nirc">NRIC</option>
				<option value="family_name">Family Name</option>
				<option value="give_name">Given Name</option>
				<option value="role">Role</option>
				<option value="department">Department</option>
				<option value="email">Email</option>
			</select><input type="text" name="search_value"><input type="submit"
				value="Search"><br /> <br /> -->

<?php 
if ((isset ( $list_of_emp ) or isset ( $list_of_claims_no )) AND ($list_of_emp != null or $list_of_claims_no !=null) ) {

?>

		<table id="tfhover" class="tftable" border="1">
			<thead>
				<tr>
					<th scope="col">S/N</th>
					<th scope="col">Name</th>
					<th scope="col">Role</th>
					<th scope="col">Month</th>
					<th scope="col">Generated Time</th>
					<th scope="col">View</th>
					<!-- <th scope="col">Print</th>  -->
					<!--Don't need delete <th scope="col">Delete</th> -->
				</tr>
			</thead>

			<tbody>
				<?php
		
				for($i = 0; $i < count ( $list_of_claims_no ); $i ++) {
					$claim = explode("|",$list_of_claims_no[$i]);
					$employee = explode ( "|", $list_of_emp [$i] ); // split the name and position
					$j=$i+1; //counter to be display to the user
					?>
				<tr id="tr1">
					<td><?php echo $j?></td>
					<td><?php echo $employee[0]?></td>
					<td><?php echo $employee[1]?></td>
					<td><?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?></td>
					<td><?php echo $claim[1];?></td><!-- generated date -->
					<td>
						<?php
					$arrs = array (
							'width' => '800',
							'height' => '500',
							'toolbar' => '0',
							'menubar' => '0',
							'location' => '0',
							'status' => '1',
							'scrollbars' => '1',
							'resizable' => '1',
							'left' => '0',
							'top' => '0' 
					);
					echo anchor_popup ( 'claim_ctrl/view_claim_slip/' . $claim[0], 'View', $arrs );
					?>
							</td>
					<!--	<td><input type="button" class="buttonA" id="printClaim" value="Print"
							onclick="window.print()" /></td>-->
					<!-- <td><input type="button" class="buttonA" id="deleteClaim" value="Delete"></td> don't nid delete-->
				</tr>
				<?php
				}
				
			?>
					
				</tbody>
		</table>
		<center>
			<input type="button" onclick="displayResult()"
				value="Print all claim slip" />
		</center>
					<?php
					}else{
						echo "There is no claim submitted on ".date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));
					}
		}
		?>
		<p id="demo"></p>
		<!-- end .content -->

	</div>
</div>
<!-- end .content -->
</div>
</div>


<?php include_once 'footer.php';?>

