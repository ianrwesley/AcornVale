<?php
$rootDir = "/acorn-vale-03457798624180578193";
include "../variables/user-variables/variable-test-user-profile.php";
include "../variables/user-variables/variable-test-facility-profile.php";
include "../variables/user-variables/variable-test-supervisors.php";
?>
<nav id="globalnav">
	<div class="gn-content">
		<ul class="gn-compact">
			<li class="gn-item gn-item-compact-menu">
				<a id="gn-link-compact-menu" class="gn-link gn-link-compact-menu" role="button">
					<span class="gn-button-compact-menu">
						<span class="gn-button-compact-menu-bread gn-button-compact-menu-bread-top"></span>
						<span class="gn-button-compact-menu-bread gn-button-compact-menu-bread-middle"></span>
						<span class="gn-button-compact-menu-bread gn-button-compact-menu-bread-bottom"></span>
					</span>
					<span class="gn-placeholder">Menu</span>
				</a>
			</li>
			<li class="gn-item gn-item-clara">
				<a href="<?php echo $rootDir;?>/home/home-view.php" class="gn-link gn-link-clara"></a>
			</li>
			<li class="gn-item gn-item-account">
				<a id="gn-link-compact-account" class="gn-link gn-link-account <?php #if ($pageTitle == "Profile"){ echo "active"; } ?>" role="button">
					<span class="gn-placeholder">Account</span>
				</a>
			</li>
		</ul>
		<ul class="gn-list gn-menuview">
			<div class="menu-wrapper pull-left">
				<li class="gn-item gn-item-clara"> <a href="<?php echo $rootDir;?>/home/home-view.php" class="gn-link gn-link-clara"></a> </li>
				<li class="gn-item gn-item-menu gn-item-rx"> <a href="<?php echo $rootDir;?>/home/home-view.php" class="gn-link <?php if ($pageTitle == "Prescriptions"){ echo "active"; } ?>"> <span class="gn-text">Prescriptions</span> </a> </li>
				<li class="gn-item gn-item-menu gn-item-patients"> <a href="<?php echo $rootDir;?>/patients/manage-patients.php" class="gn-link <?php if ($pageTitle == "Patients"){ echo "active"; } ?>"> <span class="gn-text">Patients</span> </a> </li>
			</div>
			<div class="menu-wrapper pull-right">
				<!--li class="gn-item"> <a class="gn-link gn-link-search" role="button"> <span class="gn-placeholder">Search Keystone</span> </a> </li-->
				<li class="gn-item gn-item-menu"> <a href id="gn-link-supervisor" class="gn-link gn-link-supervisor <?php #if ($pageTitle == "Supervisor"){ echo "active"; } ?>" data-toggle="modal" data-target="#selectSupervisor"> <span class="gn-text" id="selected-supervisor-name">None</span> </a> </li>
				<li class="gn-item gn-item-menu gn-item-account"> <a id="gn-link-account" class="gn-link gn-link-account <?php #if ($pageTitle == "Profile"){ echo "active"; } ?>" role="button"><span><?php echo $userFirstName;?> <?php echo $userLastName;?><?php echo ", $designation";?></span> <span class="gn-placeholder">My Account</span> </a> </li>
			</div>
		</ul>
		<aside id="gn-accountview" class="gn-accountview" role="menu">
			<div class="gn-accountview-content">
				<div class="gn-accountmenu-wrapper">
					<ul class="gn-list sub-menu">
						<li class="gn-item sub-item"> <a href="#" class="gn-link <?php if ($pageTitle == "Audit Trail"){ echo "active"; } ?>"> <span class="gn-text">Audit Trail</span> </a> </li>
						<!--li class="gn-item sub-item"> <a href  class="gn-link <?php if ($pageTitle == "Supervisor"){ echo "active"; } ?>" data-toggle="modal" data-target="#selectSupervisor"> <span class="gn-text">Supervisor</span> </a> </li-->
						<li class="gn-item sub-item"> <a href="<?php echo $rootDir;?>/account/account-view.php" class="gn-link <?php if ($pageTitle == "Account"){ echo "active"; } ?>"> <span class="gn-text">Account</span> </a> </li>
						<!--li class="gn-item sub-item"> <a href="<?php echo $rootDir;?>/account/admin-view.php?admin=true" class="gn-link <?php if ($pageTitle == "Admin"){ echo "active"; } ?>"> <span class="gn-text">Administration</span> </a> </li-->
						<!--li class="gn-item sub-item"> <a class="gn-link expiresession-link"> <span class="gn-text">Expire Session</span> </a> </li-->
						<li class="gn-item sub-item"> <a href="<?php echo $rootDir;?>/?signout=true" class="gn-link"> <span class="gn-text">Sign Out</span> </a> </li>	
					</ul>
				</div>
			</div>
			<button id="gn-accountview-close" class="gn-accountview-close">
				<span class="gn-accountview-close-wrapper">
					<span class="gn-accountview-close-left"></span>
					<span class="gn-accountview-close-right"></span>
				</span>
			</button>
		</aside>
	</div>
</nav>
<?php include "modal-supervisor.php"; ?>