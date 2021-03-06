<div class="persona-splash clearfix">
	<div class="persona-bg"></div>
	<div class="container no-float">
		<div class="row person-wrapper">
			<div class="column lg-9 sm-12">
				<div class="flex-container">
					<h1 class="clara-user">
						<?php
							if($pageTitle == "Account" || $pageTitle == "Preferences") {
								echo "<span class='first_name'>$userFirstName</span> <span class='last_name'>$userLastName</span>, <span class='designation_title'>$designation</span>";
							} else {
								echo "<span class'facility_name'>$facilityName</span>";
							}
						?>
						<small class="clara-username">Your Clara&nbsp;ID is <span><strong class="username"><?php echo "$claraID"; ?></strong></span></small>
					</h1>
				</div>
			</div>
			<div class="column lg-3 not-mobile">
				<div class="flex-container">
					<div class="switch pull-right">
						<button id="switch-view-button" class="button button-flat">
							<a href="<?php echo "$rootDir"; ?>/?signout=true">Sign Out</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>