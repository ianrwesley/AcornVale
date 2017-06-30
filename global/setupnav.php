<?php
$rootDir = "/acorn-vale-03457798624180578193";
include "../variables/user-variables/variable-test-user-profile.php";
include "../variables/user-variables/variable-test-facility-profile.php";
?>
<nav id="setupnav">
	<div class="sn-content">
		<ul class="sn-list sn-menuview">
			<div class="menu-wrapper pull-left">
				<li class="sn-item sn-item-clara"> <span class="sn-text sn-text-clara"></span> </li>
				<!--li class="sn-item sn-item-menu sn-item-rx"> <span class="sn-text">Onboarding</span> </li-->
			</div>
			<?php if($facilityCreated == "true") {echo "<li class='sn-item sn-item-menu sn-item-facility'> <span class='sn-text'>$facilityName</span> </li>";} ?>
			<div class="menu-wrapper pull-right">
				<li class="sn-item sn-item-menu"> <span class="sn-text"><?php echo $userFirstName;?> <?php echo $userLastName;?></span> </li>
			</div>
		</ul>
	</div>
</nav>