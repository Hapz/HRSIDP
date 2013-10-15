<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>
<?php include_once 'navigation.php';?>
<?php $this->load->helper('url');?>
<div class="wrapper3">
	<div class="mainText">
		<h2>Generate PaySlip</h2>
		<p></p>
		
	<script>

	function myFunction(){
		var x="";
		var r=confirm("Proceed to generate payment slip?");
		if(r==true){
			document.getElementById("frm1").submit();
		}
		else{
			x="No payment is generated.";
		}
	document.getElementById("demo").innerHTML=x;
	}

	</script>			
					
			
	Payslip generated for the month of <?php echo date('F Y', strtotime("last month"));?>
	<br>
	
	<form id=frm1" action="<?php echo site_url('remuneration_ctrl/generate_new_payment'); ?>">
	<button class ="buttonA" onclick="myFunction();return false;">Generate payslip</button>
	</form>
	<p id="demo"></p>
	<!--<input type="submit" name="payslip" id="payslip" value="Generate Payslip" />  -->
	
	




		<!-- end .content -->
	</div>
</div>


<?php include_once 'footer.php';?>

