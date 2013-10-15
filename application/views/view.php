<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="keywords" content="Human Resource Management Portal" />
	<title>Payslip</title>

</head>
<body>

	<table border="1" width ="">
		<tr>
			<td align="center"><h1 style="font-family:arial;text-align:;">STERLING ENGINEERING PTE LTD</h1>
			<p style="font-family:arial;text-align:;font-size:20px;">PAYMENT VOUCHER</p></td>
		</tr>
		<tr>
		<td align="center">
			<table border="0" width="">
			<tr>
	
			<?php		
					// test get all employee
					if ($list_of_employee != null) {
							foreach ( $list_of_employee as $employee ) {		
			?>
			<td style="font-family:arial;font-size:18px;">To: <u><?php print_r ( $employee->get_given_name()." ".$employee->get_family_name());?></u></td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="font-family:arial;font-size:18px;">Number: <font color="#C00000"><u><?php  print_r(date("dmy", time()).$serial_number);?></u></td>
			</tr>
			<tr>
			</table>
			
			
			<table border="2" cellpadding="10">
			<tr>
			<th style="font-family:arial;" bgcolor="#d4e3e5" width="500">Description</th>
			<th style="font-family:arial;" bgcolor="#d4e3e5">Amount</th>
			</tr>
			<tr>
			<td style="font-family:arial;" colspan="2"><b>Less:</b></td>
			</tr>
			<tr>
			<td style="font-family:arial;">CPF</td>
			<td style="font-family:arial;"><?php print_r("$".$cpf_amount);?></td>
			</tr>
			<tr>
			<td style="font-family:arial;">CDAC Fund</td>
			<td style="font-family:arial;"><?php print_r("$".$fund_type);?></td>
			</tr>
			<tr>
			<td style="font-family:arial;" colspan="2"><b>Add:</b></td>
			</tr>
			
			
			<tr>
			<td style="font-family:arial;">Allowance</td>
			<?php if($allowance == "NA"){?>
			<td style="font-family:arial;"><?php print_r($allowance);?></td>
			<?php }else{?>
			<td style="font-family:arial;"><?php print_r("$".$allowance);?></td>
			<?php }?>
			</tr>
			<tr>
			<td style="font-family:arial;"><b>Total Remuneration for <?php echo date('F Y', strtotime("last month"));?></b></td>
			<td style="font-family:arial;"><b><?php print_r("$".$final_amount);?></b></td>
			</tr>
			</table>
			</br>
			<table border="0">
			<tr>
			<td style="font-family:arial;"  width="400" cellpadding="10" align="center"><b>Prepared/Checked:</b> Angeline Tan</td>
			<td style="font-family:arial;" width="300" align="center"><b>Cheque No.</b>__________</td>
			</tr>
			<tr>
			<td style="font-family:arial;"  width="400" cellpadding="10" align="center"><b>Certified/Authorised:</b> Tan Kim Hock</td>
			<td style="font-family:arial;" width="300" align="center"><b>Received by:</b><?php print_r ( " ".$employee->get_given_name()." ".$employee->get_family_name());?></td>
			</tr>
				</table>
		</td>
		<tr>
		<?php
						}
					}
					?>
	</table>


</body>
</html>