<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>

<?php $this->load->helper('url');?>
<?php date_default_timezone_set("Asia/Singapore");?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Generate PaySlip</h2>
		<p></p>
		
	<script>

	function myFunction(){
		var x="";
		var r=confirm("Proceed to generate payment slip? \nPayment can only be generated once every month.");
		if(r==true){
			document.getElementById("frm1").submit();
		}
		else{
			x="No payment is generated.";
		}
	document.getElementById("demo").innerHTML=x;
	}

	</script>			
					
			
	Generate payslip for the month of <?php echo date('F Y', mktime(0,0,0,date('n')-1,1,date('Y')));?>
	
	
	<br>
	
	<form id=frm1" action="<?php echo site_url('remuneration_ctrl/generate_new_payment'); ?>">
	<button class ="buttonA" onclick="myFunction();return false;">Generate payslip</button>
	</form>
	<br>
	
	<p id="demo"></p>
	<!--<input type="submit" name="payslip" id="payslip" value="Generate Payslip" />  -->
	
	




		<!-- end .content -->
	</div>
</div>


<?php include_once 'footer.php';?>

