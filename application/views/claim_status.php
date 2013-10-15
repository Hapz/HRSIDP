<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<?php $this->load->helper('url');?>

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

<div class="wrapper3">
	<div class="mainText">
		<h2>View Claim Status</h2>


		<table id="tfhover" class="tftable" border="1">
			<tr>
				<th>Project</th>
				<th>Type</th>
				<th>Submission Date</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Remarks</th>
			</tr>
			<?php		
					// test get all employee
					if ($list_of_claims != null) {
					$claim = new Claim();
					$number = 1;
					
						foreach ( $list_of_claims as $claim ) {						
							//if($claim->get_no() == 1){
					?>
				<tr>	
					<td><?php print_r ($number);?></td>
					<td><?php print_r ($claim ->get_claim_type());?></td>
					<td><?php print_r ($claim ->get_date());?></td>
					<td><?php print_r ("$"." ".$claim -> get_claim_amount());?></td>
					<td><?php print_r ($claim -> get_status());?></td>
					<td><?php print_r ($claim ->get_remarks());?></td>
				</tr>
				
				<?php $number++;?>
					<?php
							//}
						}
					}
					?>
		</table>

		<!-- end .content -->

	</div>
</div>


<?php include_once 'footer.php';?>