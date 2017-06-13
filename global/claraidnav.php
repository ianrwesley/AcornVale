<?php
$rootDir = "/acorn-vale-03457798624180578193";
?>
<nav id="globalnav">
	<div class="gn-content">
		<!--ul class="gn-compact">
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
			<li class="gn-item gn-item-keystone">
				<a href="<?php echo $rootDir;?>/account/account-view.php" class="gn-link gn-link-keystone">
					<span class="gn-text">Keystone</span>
				</a>
			</li>
			<li class="gn-item gn-item-account">
				<a id="gn-link-compact-account" class="gn-link gn-link-account <?php #if ($pageTitle == "Profile"){ echo "active"; } ?>" role="button">
					<span class="gn-placeholder">Manage Account</span>
				</a>
			</li>
		</ul-->
		<ul class="gn-list gn-menuview">
			<div class="menu-wrapper pull-left">
				<li class="gn-item gn-item-clara"><a href="<?php echo $rootDir;?>/" class="gn-link gn-link-clara"></a> </li>
			</div>
			<div class="menu-wrapper pull-right">
				<li class="gn-item gn-item-menu gn-item-signin"> <a href="<?php echo $rootDir;?>/" class="gn-link <?php if ($pageTitle == "Sign In"){ echo "active"; } ?>"> <span class="gn-text">Sign In</span> </a> </li>
				<li class="gn-item gn-item-menu gn-item-meetclara"> <a href="<?php echo $rootDir;?>/meetclara/" class="gn-link <?php if ($pageTitle == "Meet Clara"){ echo "active"; } ?>"> <span class="gn-text">Meet Clara</span> </a> </li>
				<!--li class="gn-item gn-item-menu gn-item-createid"> <a href="<?php echo $rootDir;?>/create/create-claraid.php" class="gn-link <?php if ($pageTitle == "Create Your Clara ID"){ echo "active"; } ?>"> <span class="gn-text">Create Your Clara ID</span> </a> </li-->
				<li class="gn-item gn-item-menu gn-item-learnmore"> <a href="<?php echo $rootDir;?>/learnmore/claraid-faq.php" class="gn-link <?php if ($pageTitle == "Learn More"){ echo "active"; } ?>"> <span class="gn-text">Learn More</span> </a> </li>
			</div>
		</ul>
		<!--aside id="gn-accountview" class="gn-accountview" role="menu">
			<div class="gn-accountview-content">
				<div class="gn-accountmenu-wrapper">
					<ul class="gn-list sub-menu">
						<li class="gn-item sub-item"> <a class="gn-link expiresession-link"> <span class="gn-text">Expire Session</span> </a> </li>
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
		</aside-->
	</div>
</nav>