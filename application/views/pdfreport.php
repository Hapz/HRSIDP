<?php

tcpdf ();
$obj_pdf = new TCPDF ( 'P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false );
$obj_pdf->SetCreator ( PDF_CREATOR );
$title = "Sterling Engineering Ptd Ltd";
$obj_pdf->SetTitle ( $title );
$obj_pdf->SetHeaderData ( PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING );
$obj_pdf->setHeaderFont ( Array (
		PDF_FONT_NAME_MAIN,
		'',
		PDF_FONT_SIZE_MAIN 
) );
$obj_pdf->setFooterFont ( Array (
		PDF_FONT_NAME_DATA,
		'',
		PDF_FONT_SIZE_DATA 
) );
$obj_pdf->SetDefaultMonospacedFont ( 'helvetica' );
$obj_pdf->SetHeaderMargin ( PDF_MARGIN_HEADER );
$obj_pdf->SetFooterMargin ( PDF_MARGIN_FOOTER );
$obj_pdf->SetMargins ( PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT );
$obj_pdf->SetAutoPageBreak ( TRUE, PDF_MARGIN_BOTTOM );
$obj_pdf->SetFont ( 'helvetica', '', 9 );
$obj_pdf->setFontSubsetting ( false );
$obj_pdf->AddPage ();
ob_start ();
?>

<!DOCTYPE html>
<html>
<body>
<?php
// test get all employee
if ($list_of_employee != null) {
	foreach ( $list_of_employee as $employee ) {
		?>
	<table border="1">
		<tr>
			<td align="center"><h1>STERLING ENGINEERING PTE LTD</h1>
				<p>Payment Voucher for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?> (Employer Copy)</p></td>
		</tr>
		<tr>
			<td>
				<!-- Inner table for details-->
				<table border="0">
					<tr>
						<td align="left">To: <u><?php print_r ( $employee->get_given_name()." ".$employee->get_family_name());?></u></td>
						<td></td>
						<td></td>
						<td></td>
						<td align="right">Number:<u><font color="red"><?php  print_r(date("dmy", time()).$serial_number);?></u></font></td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="3" width="50%">
							<!-- Inner table for the details -->
							<table border="1">
								<tr>
									<td align="left" width="70%"><b>Description</b></td>
									<td align="center" width="30%"><b>Amount</b></td>
								</tr>
								<tr>
									<td align="center">Basic Pay</td>
									<td align="center">$<?php echo $employee->get_basic_salary();?></td>
								</tr>
								<tr>
									<td>Less:</td>
									<td></td>
								</tr>
								<tr>
									<td align="center">CPF</td>
									<td align="center">$<?php echo $cpf_amount?></td>
								</tr>
								<tr>
									<td align="center">CDAC Fund</td>
									<td align="center">$<?php echo $fund_type;?></td>
								</tr>
								<tr>
									<td>Add:</td>
									<td></td>
								</tr>
								<tr>
									<td align="center">Allowance</td>
									<?php if($allowance == "NA"){?>
										<td align="center"><?php print_r($allowance);?></td>
									<?php }else{?>
										<td align="center"><?php print_r("$".$allowance);?></td>
									<?php }?>
								</tr>
								<tr>
									<td><b>Total Remuneration for <?php echo date('F Y', strtotime("last month"));?></b></td>
									<td align="center"><b><?php echo $final_amount;?></b></td>
								</tr>
							</table>
						</td>
						<td colspan="1"></td>
					</tr>
					<tr>
					<?php 
						//get the user who generated this pdf
						if(!isset($given_name) OR !isset($family_name)){
							$given_name = $session_data["given_name"];
							$family_name = $session_data["family_name"];										
						}									
					?>						
						<td colspan="2"><b>Prepared/Checked:</b> <?php echo $given_name. ' ' . $family_name;?></td>
						<td></td>
						<td colspan="2"><b>Cheque No: __________</b></td>
					</tr>
					<tr>
						<td colspan="2"><b>Signature: __________</b></td>
						<td></td>
						<td></td>
					</tr>
					<tr><td></td><td></td><td></td><td></td><td></td></tr><!-- blank row -->
					<tr>
					<td colspan="2"><b>Certified/Authorised:</b> <?php echo $line_manager;?></td>					
					<td></td>
					<td colspan="2"><b>Received by:</b><?php print_r ( " ".$employee->get_given_name()." ".$employee->get_family_name());?></td>
					</tr>
					<tr>						
						<td colspan="2"><b>Signature: __________</b></td>
						<td></td>
						<td colspan="2"><b>Signature: __________</b></td>					
					</tr>
					<tr><td></td><td></td><td></td><td></td><td></td></tr><!-- blank row -->
				</table>				
			</td>
		</tr>
	</table>
	
	<p></p>
	<p></p>
	
		<table border="1">
		<tr>
			<td align="center"><h1>STERLING ENGINEERING PTE LTD</h1>
				<p>Payment Voucher for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?> (Employee Copy)</p></td>
		</tr>
		<tr>
			<td>
				<!-- Inner table for the name and serial number-->
				<table border="0">
					<tr>
						<td align="left">To: <u><?php print_r ( $employee->get_given_name()." ".$employee->get_family_name());?></u></td>
						<td></td>
						<td></td>
						<td></td>
						<td align="right">Number:<u><font color="red"><?php  print_r(date("dmy", time()).$serial_number);?></u></font></td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="3" width="50%">
							<!-- Inner table for the details -->
							<table border="1">
								<tr>
									<td align="left" width="70%"><b>Description</b></td>
									<td align="center" width="30%"><b>Amount</b></td>
								</tr>
								<tr>
									<td align="center">Basic Pay</td>
									<td align="center">$<?php echo $employee->get_basic_salary();?></td>
								</tr>
								<tr>
									<td>Less:</td>
									<td></td>
								</tr>
								<tr>
									<td align="center">CPF</td>
									<td align="center">$<?php echo $cpf_amount?></td>
								</tr>
								<tr>
									<td align="center">CDAC Fund</td>
									<td align="center">$<?php echo $fund_type;?></td>
								</tr>
								<tr>
									<td>Add:</td>
									<td></td>
								</tr>
								<tr>
									<td align="center">Allowance</td>
									<?php if($allowance == "NA"){?>
										<td align="center"><?php print_r($allowance);?></td>
									<?php }else{?>
										<td align="center"><?php print_r("$".$allowance);?></td>
									<?php }?>
								</tr>
								<tr>
									<td><b>Total Remuneration for <?php echo date('F Y', strtotime("last month"));?></b></td>
									<td align="center"><b><?php echo $final_amount;?></b></td>
								</tr>
							</table>
						</td>
						<td colspan="1"></td>
					</tr>
					<tr>
					<?php 
						//get the user who generated this pdf
						if(!isset($given_name) OR !isset($family_name)){
							$given_name = $session_data["given_name"];
							$family_name = $session_data["family_name"];										
						}									
					?>						
						<td colspan="2"><b>Prepared/Checked:</b> <?php echo $given_name. ' ' . $family_name;?></td>
						<td></td>
						<td colspan="2"><b>Cheque No: __________</b></td>
					</tr>
					<tr>
						<td colspan="2"><b>Signature: __________</b></td>
						<td></td>
						<td></td>
					</tr>
					<tr><td></td><td></td><td></td><td></td><td></td></tr><!-- blank row -->
					<tr>
					<td colspan="2"><b>Certified/Authorised:</b> <?php echo $line_manager;?></td>					
					<td></td>
					<td colspan="2"><b>Received by:</b><?php print_r ( " ".$employee->get_given_name()." ".$employee->get_family_name());?></td>
					</tr>
					<tr>						
						<td colspan="2"><b>Signature: __________</b></td>
						<td></td>
						<td colspan="2"><b>Signature: __________</b></td>					
					</tr>
					<tr><td></td><td></td><td></td><td></td><td></td></tr><!-- blank row -->
				</table>				
			</td>
		</tr>
	</table>
	
<?php
	}
}
?>		
</body>
</html>
<?php
$content = ob_get_contents ();
ob_end_clean ();
$obj_pdf->writeHTML ( $content, true, false, true, false, '' );
$file_name = $given_name.'_'.$family_name.'_'.date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));
$obj_pdf->Output ( $file_name, 'I' );
?>