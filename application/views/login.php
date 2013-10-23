<?php include_once 'header.php';?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<div class="navbar">
 <div class="navbar-inner">
                <div class="container">
                  <ul class="nav">
<li>Sterling Engineering HR Portal</li>
</ul>
</div>
</div>
</ul>

<div class="wrapper2">
	<font color=red><b><?php echo validation_errors(); ?></b></font>
	<?php echo form_open('login_ctrl/login',array('id' => 'loginForm')); ?>
	<table>
	     <tr><td ><label for="email">Username:</label></td>
	     <td><input type="text" size="20" id="username" name="username"/></td></tr>
	     <tr><td><label for="password">Password:</label></td>
	     <td><input type="password" size="20" id="password" name="password"/></td></tr>
	     <tr><td></td><td><input type="submit" class ="buttonA" id="submit1" value="Login"/></td></tr>
	      </table>
	   </form>
	</div>
	<script>
	$(document).ready(function()
			{
			    $("#submit1").click(function()
			    {
					$("#loginForm").submit();
			    });
			});
	
	</script>
	
	
</div>
 
