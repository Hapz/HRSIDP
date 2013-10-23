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

  //Enable datpicker	
  $( "#startDate" ).datepicker({dateFormat:'yy-mm-dd', minDate: 0 });
  $( "#endDate" ).datepicker({dateFormat:'yy-mm-dd', minDate: 0 });

  //minimum date of end date will change as start date changes
  $('#startDate').change(function() {  
    $("#endDate").datepicker("option", "minDate", $('#startDate').val());
  });

	//change days between whenever date is changed 
	//require date.js to work
	$("#startDate, #endDate").change(function() {  
		var d1 = $("#startDate").val();
	    var d2 = $("#endDate").val();

	    	 var minutes = 1000*60;
	         var hours = minutes*60;
	         var day = hours*24;

             var startdate1 = getDateFromFormat(d1, "y-m-d");
             var enddate1 = getDateFromFormat(d2, "y-m-d");

			
             var newstartdate=new Date(startdate1);
//             newstartdate.setFullYear(startdate1.getYear(),startdate1.getMonth(),startdate1.getDay());
             var newenddate=new Date(enddate1);
//             newenddate.setFullYear(enddate1.getYear(),enddate1.getMonth(),enddate1.getDay());
             var days = calcBusinessDays(newstartdate,newenddate);
		if(days>0)
	      	{ $('#annualDaysTaken').text(days);}
	    else
	      	{ $('#annualDaysTaken').text(0);}
	});

 	 //Function that calcuate business days between 2 dates
  	function calcBusinessDays(dDate1, dDate2) { // input given as Date objects
        var iWeeks, iDateDiff, iAdjust = 0;
        if (dDate2 < dDate1) return -1; // error code if dates transposed
        var iWeekday1 = dDate1.getDay(); // day of week
        var iWeekday2 = dDate2.getDay();
        iWeekday1 = (iWeekday1 == 0) ? 7 : iWeekday1; // change Sunday from 0 to 7
        iWeekday2 = (iWeekday2 == 0) ? 7 : iWeekday2;
        if ((iWeekday1 > 5) && (iWeekday2 > 5)) iAdjust = 1; // adjustment if both days on weekend
        iWeekday1 = (iWeekday1 > 5) ? 5 : iWeekday1; // only count weekdays
        iWeekday2 = (iWeekday2 > 5) ? 5 : iWeekday2;

        // calculate differnece in weeks (1000mS * 60sec * 60min * 24hrs * 7 days = 604800000)
        iWeeks = Math.floor((dDate2.getTime() - dDate1.getTime()) / 604800000)

        if (iWeekday1 <= iWeekday2) {
          iDateDiff = (iWeeks * 5) + (iWeekday2 - iWeekday1)
        } else {
          iDateDiff = ((iWeeks + 1) * 5) - (iWeekday1 - iWeekday2)
        }

        iDateDiff -= iAdjust // take into account both days on weekend

        return (iDateDiff + 1); // add 1 because dates are inclusive
    }

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
		<h2>Apply Leave</h2>
		
		
		
		
		<br/>
		
<form onsubmit="return confirm('Proceed to apply leave?');" id="applyleave" action="apply_leave" method="post">
		<table>
<tr><td>Type:</td><td> <div id="show">

                       <!-- Do repopulate values for type -->
                       
            <input type="radio" id="r2" name="leaveType" value="annual" />
            <label for="r2"><span></span>Annual</label>
             <p>            
            <input type="radio" id="r4" name="leaveType" value="maternity"/>
            <label for="r4"><span></span>Maternity</label>
            <p>
            <input type="radio" id="r1" name="leaveType" value="unpaid"/>
            <label for="r1"><span></span>Unpaid</label>                    
            <p>                
            
            <input type="radio" id="r5" name="leaveType" value="others"/>
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
</td>



</tr>

<tr><td>
	<br/>
</td></tr>

<?php 

if(isset($leaveStartDateValue)){
 //echo $leaveStartDateValue;
} else{
 $leaveStartDateValue = "yyyy-mm-dd";
}

if(isset($leaveEndDateValue)){
	//echo $leaveEndDateValue;
} else{
	$leaveEndDateValue = "yyyy-mm-dd";
}


?>

<tr><td>Date From: (inclusive)&nbsp;&nbsp;</td><td><input type="text" size="30" id="startDate" name="leaveStartDate" id="dateFrom" value="<?php echo $leaveStartDateValue?>" /> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date To: (inclusive)&nbsp;&nbsp;<input type="text" size="30" id="endDate" name="leaveEndDate" id="dateTo" value="<?php echo $leaveEndDateValue?>"/></td></tr>

<!-- 
<tr><td>Supporting Documents:</td><td><input type="text" size="30" id="leaveFile" name="leaveFile"/><input class ="buttonA" id="uploadSupportingDocs" value="Upload"/></td></tr>
 -->
 
<tr><td>
	<br/>
</td></tr>

<tr><td colspan="2"> 


<?php 
	date_default_timezone_set("Asia/Singapore"); 
	$current_date = date('Y-m-d H:i:s');
?>

<input type="hidden" name="current_dateTime" value="<?php echo $current_date; ?>">

	
		<table style="font-size:13px;float: left;">
		<tr>
			<td><b>No. of days chosen:&nbsp;&nbsp;&nbsp;</b></td> <td id="annualDaysTaken" style="color:red">0</td>
			
		</tr>
		<tr>
		<td>
			<b>Leave balance after deduction:&nbsp;&nbsp;&nbsp;</b></td> <td>12</td>		
		</tr>
		</table>
		

		<?php 
			date_default_timezone_set("Asia/Singapore"); 
			$current_date = date('Y-m-d H:i:s');
			$current_year = date('Y');
			$next_year = date('Y') + 1;
			
		?>
			
		
		
			
		<table class="tftable2" style="float: center;">
		
		<tr>
		<td>
		<u>Annual Leave Balance</u>
		</td>
		<td></td>		
		<tr/>
					
		<tr>
		<td>
		Leave balance for <?php echo $current_year?>:
		</td>
		
		
		
		<td>
		<?php echo "<b>".$annual_leave_current."</b>"?> 
		</td>
							
		</tr>
		
		<tr>			
		<td>
		Leave Balance for <?php echo $next_year?>: 
		</td>
		
		
		<td>			
		<?php echo "<b>".$annual_leave_next."</b>"?> 
		</td>
		
					
		</tr>
				
		</table>
	

</td></tr>

<tr><td>
	<br/><br/> 
</td></tr>



<tr><td align="left" colspan="2"><input type="submit" class ="buttonA" id="applyLeave"  value="Apply for Leave"/>
&nbsp;&nbsp;
<input type="reset" class="buttonA" id="clear" value="Clear Form"/></td></tr>


</table>
</form>

</div>
</div>
<?php include_once 'footer.php';?>
