<div class="loginBar">
	<ul id="login">
<li class="floatLeft" >Sterling Engineering HR Portal</li>
		<?php $base = base_url(); ?>
		<li><a href="<?php echo $base?>home_ctrl/logout">Logout</a></li>

		<li><?php
		if(!isset($given_name) OR !isset($family_name)){		
			$given_name = $session_data["given_name"];
			$family_name = $session_data["family_name"];
			echo $given_name. ' ' . $family_name;
		} 		
		else{
			echo $given_name. ' ' . $family_name;
		}

?></li>
		<li><a href="#s7">Settings</a> <span id="s7"></span>
			<ul class="subs">
				<li><a>Manage Profile</a></li>
				<li><a>Change Password</a></li>
			</ul>
		</li>
		<li><a>Home</a></li>
		<li><a href="" target="_blank"><img
				src="<?php echo $base?>assets/images/NotificationIcon.png" width="20" height="20" /></a></li>
	</ul>
</div>
