<?php $totalAddFacilitySteps = "4"; $totalAddUserSteps = "2"; ?>

<div id="globalnav-spaceholder"></div>
<nav id="licensenav" class="licensenav">
	<div class="container">
		<ul class="licensenav-items">
			<!--li class="licensenav-item licensenav-item-corporations">
				<a class="licensenav-link <?php if ($moduleTitle == "Corporations"){ echo "active"; } ?> disabled">
					<figure class="licensenav-icon"></figure>
					<span class="licensenav-label">Corporations</span>
					<span class="licensenav-disabled">Coming Soon</span>
				</a>
			</li-->
			<li class="licensenav-item licensenav-item-facilities">
			<a class="licensenav-link <?php if ($moduleTitle == "Facilities"){ echo "active"; } ?>" href="licenses-facilities-view.php">
				<figure class="licensenav-icon"></figure>
				<span class="licensenav-label">Facilities</span>
			</a>
			</li>
			<li class="licensenav-item licensenav-item-users">
				<a class="licensenav-link <?php if ($moduleTitle == "Users"){ echo "active"; } ?>" href="licenses-users-view.php">
					<figure class="licensenav-icon"></figure>
					<span class="licensenav-label">Users</span>
				</a>
			</li>
		</ul>
		<div class="licensenav-items module-title <?php if ($moduleTitle !== "Facilities" and $moduleTitle !== "Invite Users"){ echo "no-notifications"; } ?>">
			<h2 class="module-title"><?php echo $moduleTitle; ?></h2>
			<div class="header-notifications-wrap">
				<div class="header-notifications <?php if ($moduleTitle == "Facilities"){ echo "show"; } ?>">
					<button class="button button-link has-notifications">Pending facilities<span class="notifications"><strong class="pending-facility-count">2</strong></span></button>
				</div>
				<div class="header-notifications <?php if ($moduleTitle == "Users"){ echo "show"; } ?>">
					&nbsp;
				</div>
				<div class="header-notifications <?php if ($moduleTitle == "Invite Users"){ echo "show"; } ?>">
					<button class="button button-link has-notifications">Pending users<span class="notifications"><strong class="pending-user-count">2</strong></span></button>
				</div>
			</div>
		</div>
		<div class="table-tools tall nav-tools">
			<button id="clara-add-dropdown" class="button-add clara-add-dropdown">
				<ul class="dropdown-items">
					<li class="dropdown-item"><a href="licenses-add-facility-view-step-1.php">Add Clara facilities</a></li>
					<li class="dropdown-item"><a href="licenses-add-user-view-step-1.php">Invite Clara users</a></li>
				</ul>
			</button>
			<!--div class="button-group">
				<button class="button-resend"></button-->
				<button class="button-delete"></button>
			<!--/div-->
		</div>
	</div>
</nav>