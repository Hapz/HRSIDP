<div class="loginbar">
<div class="loginbar-inner">
                <div class="container">
                <ul class="nav">
                   
        <li>Sterling Engineering HR Portal</li>
        </ul>
        <ul class="nav pull-right">
        
		<?php $base = base_url(); ?>
		<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-th-large"></i><img
				src="<?php echo $base?>assets/images/SettingsIcon.png" width="20" height="20" />
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
				<li><a>Manage Profile</a></li>
				<li><a>Change Password</a></li>
			</ul>
		<li><a href="" ><img
				src="<?php echo $base?>assets/images/HomeIcon.png" width="20" height="20" /></a></li>
		<li><a href="" ><img
				src="<?php echo $base?>assets/images/NotificationIcon.png" width="20" height="20" /></a></li>
		

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
<li><a href="<?php echo $base?>login_ctrl/logout">Logout</a></li>
		
	</ul>
</div>
</div>
</div>
