<div role="menubar" id="account-subnav" class="subnav account-subnav">
	<div class="sn-content">
		<ul class="sn-list">
			<div class="menu-wrapper pull-left">
				<li class="sn-item sn-item-menu <?php if ($pageTitle == "Account"){ echo "active"; } ?>"><a href="account-view.php" class="sn-link">Account</a></li>
				<li class="sn-item sn-item-menu <?php if ($pageTitle == "Preferences"){ echo "active"; } ?>"><a href="preferences-view.php" class="sn-link">Preferences</a></li>
				<li class="sn-item sn-item-menu <?php if ($pageTitle == "Facility"){ echo "active"; } ?>"><a href="facility-view.php" class="sn-link">Facility</a></li>
				<!--li class="sn-item sn-item-menu <?php if ($pageTitle == "Facility"){ echo "active"; } ?>"><button class="button button-link sn-button" data-toggle="popover" data-placement="bottom" data-trigger="click" data-html="true" data-content="<div class='select-facility-row'><a href='facility-view.php'><?php echo $facilityName; ?></a></div><div class='select-facility-row'><a href='facility-view.php'>Holy Cross Hospital</a></div>"><a class="sn-link">Facility<icon class="icon-chevron-small-down"></icon></a></button></li-->
				<li class="sn-item sn-item-menu <?php if ($pageTitle == "Team"){ echo "active"; } ?>"><a href="team-view.php" class="sn-link">Team</a></li>
				<li class="sn-item sn-item-menu <?php if ($pageTitle == "Payment"){ echo "active"; } ?>"><a href="subscription-view.php" class="sn-link">Payment</a></li>
			</div>
			<!--div class="menu-wrapper pull-right <?php if ($pageTitle !== "Preferences"){ echo "hidden"; } ?>">
				<button class="button button-flat button-inverted" data-toggle="modal" data-target="#ca-create-med-favorite">Create Favorite<icon class="icon-add"></icon></button>
				<div class="input-wrapper has-icon">
					<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text field-icon search-field" placeholder="search" name="search" value="">
					<icon class="icon-search nofocus-icon"></icon><icon class="icon-search hasfocus-icon"></icon>
				</div>
			</div-->
			<div class="menu-wrapper pull-right <?php if ($pageTitle !== "Team"){ echo "hidden"; } ?>">
				<button class="button button-flat button-inverted" data-toggle="modal" data-target="#ca-add-licenses">Add Licenses<icon class="icon-add"></icon></button>
				<button class="button button-flat button-inverted" data-toggle="modal" data-target="#ca-assign-users">Assign Users<icon class="icon-users"></icon></button>
			</div>
		</ul>
	</div>
</div>
<?php include "modal-assign-users.php"; ?>
<?php include "modal-add-licenses.php"; ?>
<?php include "modal-create-med-favorite.php"; ?>