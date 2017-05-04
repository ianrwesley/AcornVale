<?php
	$pageTitle = "Add a Clara Facility";
	$menuName = "Licenses";
	$moduleTitle = "Add Facilities";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?> - Keystone</title>
<?php include "../global/globalui.php"; ?>
<script type="text/javascript" src="js/keystone.licenses.js"></script>
<link rel="stylesheet" href="../account/css/keystone.account.css" type="text/css">
<link rel="stylesheet" href="css/keystone.licenses.css" type="text/css">
</head>

<body>
<div id="wrapper">
<?php include "../global/globalnav.php"; ?>
<?php include "licensenav.php"; ?>
<div class="manage <?php echo strtolower($menuName); ?>">
  <div class="container">
    <section class="create-wizard create-facility step-5">
		<div class="step-header">
			<h3 class="step-number">Step 2 of <?php echo $totalAddFacilitySteps; ?></h3>
			<h1 class="step-label">Assign the Super User for [Facility]</h1>
			<p class="step-description">The Super User is the primary contact for &#91;Facility&#93;. They administer Clara accounts and privileges, along with other Administrators. The Super User is the only person who can add or remove Administrators.</p>
		</div>
		<div class="step-wrapper one-column">
			<div class="step-content">
				<div class="pop-wrapper fit" id="popwrapper-0">
					<button id="startChangeUsernameFlow" class="button button-link" onclick="startChangeUsernameFlow()"> Invite a new Clara user… </button>
					<div class="popover-content">
						<div class="popover-container" id="popover-0">
							<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center">
								<div class="popover popover-direction-bottom popover-align-center popover-type-action">
									<div class="popover-inner-content">
										<div class="step-content" id="step-1">
											<!--div class="details">
												<h3>Add New User</h3>
											</div-->
											<div class="pop-wrapper field-pop-wrapper">
												<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control form-textbox popover-field" placeholder="email">
												<input type="text" class="form-control form-textbox popover-field" placeholder="full name">
												<div class="single-line-wrapper clearfix">
													<div class="select-wrapper large-6 single-line">
														<select class="form-control">
															<option selected="" value="" disabled="">super user</option>
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
													<div class="select-wrapper large-6 single-line">
														<select class="form-control">
															<option selected="" value="" disabled="">role</option>
															<option value="Provider">Provider</option>
															<option value="User">User</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="step-footer clearfix">
											<div class="toolbar-footer clearfix">
												<div class="button-group pull-right">
													<button tabindex="0" type="button" class="button button-flat button-compact last nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled=""> Send Invitation </button>
													<button tabindex="0" type="button" class="button button-link first nav-cancel pull-right" onclick="cancelChangeUsername()"> Cancel </button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--a role="link" class="big-link">Invite a new Clara user</a-->
				<p class="or-choice">or</p>
				<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
				<div class="search-field-wrapper large">
					<input type="text" class="form-control form-textbox wizard-field super-user" id="facility-super-user" name="facility-super-user" placeholder="assign super user">
				</div>
				<div class="button-next-wrapper">
					<button role="button" class="button button-flat button-back"><a href="licenses-add-facility-view-step-1.php" tabindex="0">Back</a></button>
					<button role="button" class="button button-flat button-next" disabled=""><a href="licenses-add-facility-view-step-3.php" tabindex="0">Next</a></button>
					<button role="button" class="button button-flat button-skip"><a href="licenses-add-facility-view-step-3.php" tabindex="0">Skip</a></button>
				</div>
			</div>
		</div>
		<div class="step-footnote">
			<p class="description">You can skip this step for now. It is required before the facility can be activated.</p>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>