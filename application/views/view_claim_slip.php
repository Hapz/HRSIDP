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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="keywords" content="Human Resource Management Portal" />
<title>Claimslip</title>

</head>
<body>
<?php
	if (isset ( $list_of_claims ) and isset ( $employee )) {
?>
	<table border="1" >
		<tr>
			<td align="center"><h1>STERLING ENGINEERING PTE LTD</h1>
				<p>Claim Voucher for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?> (Employer Copy)</p></td>
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
						<?php 
							$generated_date = $list_of_claims[0]->get_generated_date(); // all should be the same generate date.
							$generated_date = str_replace("-", "", $generated_date);
							$number = $generated_date."".$list_of_claims[0]->get_no(); //add emp no behind
						?>
						<td align="right">Number:<u><font color="red"><?php  echo $number;?></u></font></td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="3">						
							<!-- Inner table for the details -->
							<table border="1">
								<tr>									
									<td align="left" width="20%"><b>Claim No.</b></td>
									<td align="left" width="20%"><b>Date Incurred</b></td>
									<td align="left" width="40%"><b>Description</b></td>
									<td align="center" width="20%"><b>Amount</b></td>
								</tr>
								<?php				
									$total_amount = 0.00;
									foreach ( $list_of_claims as $claim ) {
										$total_amount += $claim->get_claim_amount ();
								?>
								<tr>
									<td align="center"><?php echo $claim->get_claim_no();?></td>
									<td align="center"><?php echo $claim->get_date();?></td>
									<td align="center"><?php echo $claim->get_claim_type();?></td>
									<td align="center">$<?php echo $claim->get_claim_amount();?></td>
								</tr>
								
								<?php 
									}
								?>								
								<tr>
									<td align="right" colspan="3"><b>Total Claim for <?php echo date('F Y', strtotime("last month"));?></b></td>
									<td align="center">$<?php echo $total_amount;?></td>								
								</tr>
							</table>
						</td>
						<td colspan="1"></td>
					</tr>
					<tr>
						<td colspan="5"></td>
					</tr>
					<?php 
						//get the user who generated this pdf
						if(!isset($given_name) OR !isset($family_name)){
							$given_name = $session_data["given_name"];
							$family_name = $session_data["family_name"];										
						}									
					?>
					<tr>
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
	
	<table border="1" >
		<tr>
			<td align="center"><h1>STERLING ENGINEERING PTE LTD</h1>
				<p>Claim Voucher for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?> (Employee Copy)</p></td>
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
						<?php 
							$generated_date = $list_of_claims[0]->get_generated_date(); // all should be the same generate date.
							$generated_date = str_replace("-", "", $generated_date);
							$number = $generated_date."".$list_of_claims[0]->get_no(); //add emp no behind
						?>
						<td align="right">Number:<u><font color="red"><?php  echo $number;?></u></font></td>
					</tr>
					<tr>
						<td colspan="1"></td>
						<td colspan="3">						
							<!-- Inner table for the details -->
							<table border="1">
								<tr>									
									<td align="left" width="20%"><b>Claim No.</b></td>
									<td align="left" width="20%"><b>Date Incurred</b></td>
									<td align="left" width="40%"><b>Description</b></td>
									<td align="center" width="20%"><b>Amount</b></td>
								</tr>
								<?php				
									$total_amount = 0.00;
									foreach ( $list_of_claims as $claim ) {
										$total_amount += $claim->get_claim_amount ();
								?>
								<tr>
									<td align="center"><?php echo $claim->get_claim_no();?></td>
									<td align="center"><?php echo $claim->get_date();?></td>
									<td align="center"><?php echo $claim->get_claim_type();?></td>
									<td align="center">$<?php echo $claim->get_claim_amount();?></td>
								</tr>
								
								<?php 
									}
								?>								
								<tr>
									<td align="right" colspan="3"><b>Total Claim for <?php echo date('F Y', strtotime("last month"));?></b></td>
									<td align="center">$<?php echo $total_amount;?></td>								
								</tr>
							</table>
						</td>
						<td colspan="1"></td>
					</tr>
					<tr>
						<td colspan="5"></td>
					</tr>
					<?php 
						//get the user who generated this pdf
						if(!isset($given_name) OR !isset($family_name)){
							$given_name = $session_data["given_name"];
							$family_name = $session_data["family_name"];										
						}									
					?>
					<tr>
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
			?>
</body>
</html>
<?php

$content = ob_get_contents ();
ob_end_clean ();
$obj_pdf->writeHTML ( $content, true, false, true, false, '' );
$file_name = $employee->get_given_name()."_".$employee->get_family_name()."_".date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));
$obj_pdf->Output ( $file_name, 'I' );
?>