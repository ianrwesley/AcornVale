<?php
	$pageTitle = "Invite Clara Users";
	$menuName = "Licenses";
	$moduleTitle = "Invite Users";
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
    <section class="create-wizard create-user">
		<div class="step-header">
			<h1 class="step-label">Invite new users</h1>
			<p class="step-description">Add new Clara users below. Double-check to make sure you enter the invitee's email correctly.</p>
		</div>
		<div class="row no-columns">
			<div class="flex-field-wrapper">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="email">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="full name">
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">super user</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">role</option>
						<option value="Provider">Provider</option>
						<option value="User">User</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row no-columns">
			<div class="flex-field-wrapper">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="email">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="full name">
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">super user</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">role</option>
						<option value="Provider">Provider</option>
						<option value="User">User</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row no-columns">
			<div class="flex-field-wrapper">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="email">
				<input type="text" class="form-flex-control form-flex-textbox large-4 wizard-field" placeholder="full name">
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">super user</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="flex-select-wrapper large-2 wizard">
					<select class="form-flex-control wizard-field">
						<option selected="" value="" disabled="">role</option>
						<option value="Provider">Provider</option>
						<option value="User">User</option>
					</select>
				</div>
			</div>
		</div>
		<div class="button-group">
			<button type="submit" class="button button-flat button-done" disabled="">Send Invitations</button>
			<button type="button" class="button button-link button-compact subdued">Add More</button>
			<button type="reset" class="button button-link button-compact subdued">Clear</button>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>