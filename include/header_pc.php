<?php
include ('conx.php');

session_start();
           if((!isset($_SESSION['id'])) ||($_SESSION["type_compte"] != 'Personnel') ){header ('location:login.php');}
		  
         ?>

	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/logo.png" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php echo( $_SESSION['prenom']);echo( ' '); echo( $_SESSION['nom']);?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile_pc.php"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
					
						<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>
				</div>
			</div>
		
		</div>
	</div>