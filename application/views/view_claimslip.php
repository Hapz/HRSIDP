<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src=".\jquery-ui-1.10.3.custom\js\jquery-1.9.1.js">
</script>
<meta name="keywords" content="Human Resource Management Portal" />
	<title>Claimslip</title>

</head>
<body>

	<table border="1" width ="">
		<tr>
			<td align="center"><h1 style="font-family:arial;text-align:;">STERLING ENGINEERING PTE LTD</h1>
			<p style="font-family:arial;text-align:;font-size:20px;">CLAIM VOUCHER</p></td>
		</tr>
		<tr>
		<td align="center">
			<table border="0" width="">
			<tr>
			<?php		
					// test get all employee
					//if ($list_of_employee != null) {
					//		foreach ( $list_of_employee as $employee ) {		
			?>
			<td style="font-family:arial;font-size:18px;">To: <u><?php echo "Kelvin Lim";//print_r ( $employee->get_given_name()." ".$employee->get_family_name()." ".$case[1])." ".$cpf_amount[0];?></u></td>
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
			<td style="font-family:arial;font-size:18px;">Number: <font color="#C00000"><u>09201311</u></td>
			</tr>
			<tr>
			</table>
			
			
			<table border="2" cellpadding="10">
			<tr>
				<th style="font-family:arial;" bgcolor="#d4e3e5" width="500">Description</th>
				<th style="font-family:arial;" bgcolor="#d4e3e5">Amount</th>
			</tr>
			<tr>
				<td>Travelling</td>
				<td>$60</td>
			</tr>			
			<tr>
				<td>Entertainment</td>
				<td>$200</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>$260</td>
			</tr>
			
			</table>
			</br>
			<table border="0">
			<tr>
			<td style="font-family:arial;"  width="400" cellpadding="10" align="center"><b>Prepared/Checked:</b> Angeline Tan</td>
			<td style="font-family:arial;" width="300" align="center"><b>Cheque No.</b> UOB 1234</td>
			</tr>
			<tr>
			<td style="font-family:arial;"  width="400" cellpadding="10" align="center"><b>Certified/Authorised:</b> Tan Kim Hock</td>
			<td style="font-family:arial;" width="300" align="center"><b>Received by:</b> Kelvin Lim</td>
			</tr>
				</table>
		</td>
		<tr>
		<?php
						//}
					//}
					?>
	</table>


</body>
</html>