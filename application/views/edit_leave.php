<?php $session_data = $this->session->userdata('logged_in');?>
<?php include_once 'header.php';?>
<?php include_once 'login_bar.php';?>
<?php include_once 'navigation.php';?>


<script>

window.onload=function() {

  // first, disable all the input fields
  document.forms[0].elements["otherLeaveType"].disabled=true;
 
  // next, attach the click event handler to the radio buttons
  var radios = document.forms[0].elements["leaveType"];
  for (var i = [0]; i < radios.length; i++)
    radios[i].onclick=radioClicked;

  // attach click event handler to date button
  var strtdate = document.forms[0].elements["leaveStartDate"];
  var enddate = document.forms[0].elements["leaveEndDate"];
}

function radioClicked() {

  // find out which radio button was clicked and
  // disable/enable appropriate input elements
  switch(this.value) {
    case "unpaid" :
       document.forms[0].elements["otherLeaveType"].disabled=true;      
       break;
    case "annual" :
       document.forms[0].elements["otherLeaveType"].disabled=true;       
       break;
    case "maternity" :       
       document.forms[0].elements["otherLeaveType"].disabled=true;
       break;
    case "others" :       
       document.forms[0].elements["otherLeaveType"].disabled=false;
       break;
  }

}

</script>

</style>

<div class="wrapper3">
	<div class="mainText">
		<h2>Edit Leave</h2>
		
		
<form id="edit_leave" action="../leave_ctrl/edit_leave" method="post">
		<table>
<tr><td>Type:</td><td> <div id="show">

                       <!-- Do repopulate values for type -->
            <?php 
            //echo $applied_leave_name;
            $annual_checked="";
            $maternity_checked="";
            $unpaid_checked="";
            $others_checked="";
            
            if($applied_leave_name==="Annual"){
				//echo "YES";
            	$annual_checked="checked";
            }else if($applied_leave_name==="Maternity"){				
				$maternity_checked="checked";
			}else if($applied_leave_name==="Unpaid"){				
				$unpaid_checked="checked";
			}
			
			//Not handled yet
// 			else if($applied_leave_name==="National Service"){				
// 				$others_checked="checked";
// 			}else if($applied_leave_name==="Childcare"){				
// 				$others_checked="checked";
// 			}else if($applied_leave_name==="Paternity"){				
// 				$others_checked="checked";
// 			}else if($applied_leave_name==="Shared Parental"){				
// 				$others_checked="checked";
// 			}else if($applied_leave_name==="Adoption"){				
// 				$others_checked="checked";
// 			}else if($applied_leave_name==="Infant Care"){				
// 				$others_checked="checked";
// 			}
			?>           
            <input type="radio" id="r2" name="leaveType" value="annual" <?php echo $annual_checked?>/>
            <label for="r2"><span></span>Annual</label>
             <p>            
            <input type="radio" id="r4" name="leaveType" value="maternity" <?php echo $maternity_checked?>/>
            <label for="r4"><span></span>Maternity</label>
            <p>
            <input type="radio" id="r1" name="leaveType" value="unpaid" <?php echo $unpaid_checked?>/>
            <label for="r1"><span></span>Unpaid</label>                    
            <p> 
            <input type="radio" id="r5" name="leaveType" value="others" <?php echo $others_checked?>/>
            <label for="r5"><span></span>Others</label>  
                       
            <select id="otherLeaveType" name="otherLeaveType">
            	<option value="National Service">National Service</option>
            	<option value="Childcare">Childcare</option>
				<option value="Paternity">Paternity</option>
				<option value="Shared Parental">Shared Parental</option>
				<option value="Adoption">Adoption</option>
				<option value="Infant Care">Infant Care</option>
            
            </select>
            
        </div>
</td></tr>

<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>

<?php 

// Repopulate Date Values
// Change date format
$from_date_str = DateTime::createFromFormat('Y-m-d',$from_date);
$leave_from_date = $from_date_str->format('d/m/Y');

$to_date_str = DateTime::createFromFormat('Y-m-d',$to_date);
$leave_to_date = $to_date_str->format('d/m/Y');
?>

<tr><td>Date:</td><td><input type="text" size="30" id="startDate" name="leaveStartDate" id="dateFrom" value="<?php echo $leave_from_date?>" /> To <input type="text" size="30" id="endDate" name="leaveEndDate" id="dateTo" value="<?php echo $leave_to_date?>"/></td></tr>


  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />    

  <script>
    
  $(document).ready(function () {
	  
  var select=function(dateStr) {
      var d1 = $('#startDate').datepicker('getDate');
      var d2 = $('#endDate').datepicker('getDate');
      var diff = 0;
      
      if (d1 && d2) {
            diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
      }
      $('#calculated').val(diff);      
  } 
  
 // $(function() {
    $( "#startDate" ).datepicker({dateFormat:'dd/mm/yy'});

 // });
  //$(function() {
	    $( "#endDate" ).datepicker({dateFormat:'dd/mm/yy'});
  //});

  });

  </script>
  
 

<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>

<!-- 
<tr><td>Supporting Documents:</td><td><input type="text" size="30" id="leaveFile" name="leaveFile"/><input class ="buttonA" id="uploadSupportingDocs" value="Upload"/></td></tr>
 -->
 
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td colspan="2"> 


<?php 
	date_default_timezone_set("Asia/Singapore"); 
	$current_date = date('Y-m-d H:i:s');
?>

<input type="hidden" name="current_dateTime" value="<?php echo $current_date; ?>">
<input type="hidden" name="applied_leave_no" value="<?php echo $applied_leave_no ?>">
	
		<table class="tftable" border="1">
		<tr><th>Annual Leave Balance BEFORE deduction</th><th>No. of days taken</th><th>Annual Leave Balance AFTER deduction</th></tr>
<tr><td>12</td><td>3</td><td>15</td></tr>
		</table>
		



</td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>
<tr><td>   </td></tr>

<tr><td align="left" colspan="2"><input type="reset" class="buttonA" id="clear" value="Clear Form"/><input type="submit" class ="buttonA" id="applyLeave" value="Edit Leave"/></td></tr>


</table>
</form>

</div>
</div>
<?php include_once 'footer.php';?>
