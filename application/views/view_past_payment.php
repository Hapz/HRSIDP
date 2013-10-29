<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<?php include_once 'navigation.php';?>
<?php $this->load->helper('url');?>
<?php date_default_timezone_set("Asia/Singapore");?>
<div class="wrapper3">

	<div class="mainText">
		<h2>View Past PaySlip</h2>
		<p></p>


		<form id="frm1" action='generate_payslip' method="post"> 			
	
	<br></br>
			
					<?php
					// test get all employee
					if ($list_of_employee != null) {
						$employee = new Employee ();
						$number = 1;
						if($list_of_remuneration ==null || count($list_of_employee)== count($list_of_remuneration)){
						echo ("There is no past payslip to view.");
						}else{?>
							<table id="tfhover" class="tftable" border="1">
							<tr>
							<th>S/N</th>
							<th>Name</th>
							<th>Month</th>
							<th>Generated Time</th>
							<th>View</th>
							<!--<th>Print<input type="checkbox"></th>  -->
							</tr>
							<tr><?php 
							foreach($list_of_remuneration as $remuneration){
								
								if($remuneration->get_current_remuneration() == 0){
									
								foreach($list_of_employee as $emp){
									if($emp->get_no() == $remuneration->get_employee_number()){
										$given_name = $emp->get_given_name();
										$family_name = $emp->get_family_name();
									
								
		
							?>	
					<td><?php print_r ($number); ?></td>
					<td><?php print_r ( $given_name." ".$family_name); ?>
					
					
					
							
					
					
					
					<td><?php print_r ($remuneration->get_month()); ?>
					
					
					
					
					<td><?php print_r ($remuneration-> get_generated_time()); ?>	
					
					
					
					
					<td><?php
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
							echo anchor_popup ( 'remuneration_ctrl/view_past_slip/' . $emp->get_no () . '/' .$remuneration->get_month(), 'View', $arrs );
							?>
					<!-- <a href="generatePayment"
						onclick="javascript:void window.open('viewSlip','1380264227356','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">View</a> -->
					</td>
					<!-- <td>Print <input type="checkbox"></td> -->
				</tr>
					<?php $number++;?>
					<?php
							}
							}
							}
							}
							}
						
					}
					?>
					
			</table>
			
			
			

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

			<style type="text/css">
table.tftable {
	font-size: 12px;
	color: #333333;
	width: 100%;
	border-width: 1px;
	border-color: #729ea5;
	border-collapse: collapse;
}

table.tftable th {
	font-size: 12px;
	background-color: #acc8cc;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #729ea5;
	text-align: left;
}

table.tftable tr {
	background-color: #d4e3e5;
}

table.tftable td {
	font-size: 12px;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #729ea5;
}
</style>
		</form>

		<!-- end .content -->
	</div>
</div>


<?php include_once 'footer.php';?>

