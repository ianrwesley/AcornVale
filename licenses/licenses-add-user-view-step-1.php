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
    <section class="create-wizard create-user main-section">
		<div class="step-header">
			<h3 class="step-number">Step 1 of <?php echo $totalAddUserSteps; ?></h3>
			<h1 class="step-label">Invite new users</h1>
			<p class="step-description">Add new Clara users below. Double-check to make sure you enter the invitee's email correctly.</p>
		</div>
		<div class="form-field-wrapper">
			<div class="row no-columns">
				<div class="flex-field-wrapper">
					<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name">
					<!--div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">super user</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div-->
					<div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">role</option>
							<option value="Prescriber">Prescriber</option>
							<option value="User">User</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row no-columns flex-field-error-row">
				<div class="error-wrapper large-4">
					<div class="pop-container form-field-error">
						<div class="error pop-bottom">
							<p class="error-msg">
								<error class="error">This email is already associated with a Clara ID.</error>
							</p>
						</div>
					</div>
				</div>
				<div class="error-wrapper large-3">
					<div class="pop-container form-field-error">
						<div class="error pop-bottom">
							<p class="error-msg">
								<error class="error">First name cannot be empty.</error>
							</p>
						</div>
					</div>
				</div>
				<div class="error-wrapper large-3">
					<div class="pop-container form-field-error">
						<div class="error pop-bottom">
							<p class="error-msg">
								<error class="error">Last name cannot be empty.</error>
							</p>
						</div>
					</div>
				</div>
				<div class="error-wrapper large-2">
					<div class="pop-container form-field-error">
						<div class="error pop-bottom">
							<p class="error-msg">
								<error class="error">Select Prescriber or User.</error>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row no-columns">
				<div class="flex-field-wrapper">
					<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name">
					<!--div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">super user</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div-->
					<div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">role</option>
							<option value="Prescriber">Prescriber</option>
							<option value="User">User</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row no-columns">
				<div class="flex-field-wrapper">
					<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name">
					<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name">
					<!--div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">super user</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div-->
					<div class="flex-select-wrapper large-2">
						<select class="form-flex-control short">
							<option selected="" value="" disabled="">role</option>
							<option value="Prescriber">Prescriber</option>
							<option value="User">User</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="button-group">
			<button type="submit" class="button button-flat button-done button-compact"><a href="licenses-add-user-view-step-2.php">Send Invitations</a></button>
			<button type="button" class="button button-link button-compact subdued">Add More</button>
			<button type="reset" class="button button-link button-compact subdued">Clear All</button>
		</div>
		<section id="admin-pending-users" class="flow-section clara-pending-users">
			<div class="sub-section pending-users attention collapsed">
				<div class="row no-columns header-row">
					<h2 class="section-title mobile-edit">Pending users</h2>
					<span class="notifications"><strong class="pending-row-count">2</strong></span>
					<div class="tools-wrapper">
						<div class="description">Users who haven't activated their Keystone account appear below.</div>
						<div class="table-tools">
							<div class="button-group">
								<button class="button-resend"></button>
								<button class="button-delete"></button>
							</div>
						</div>
					</div>
				</div>
				<accordian class="short closed">
					<div class="accordian-fade table">
						<table class="no-wrap table pending-user-table">
							<thead>
								<tr>
									<td class="col-tool"><input type="checkbox" class="select-all"></td>
									<td class="col-tool wider">&nbsp;</td>
									<td class="col-email col-small">
										<h3 class="section-subtitle">EMAIL</h3>
									</td>
									<td class="col-first-name col-small">
										<h3 class="section-subtitle">FIRST NAME</h3>
									</td>
									<td class="col-last-name col-small"><span class="sort desc"></span>
										<h3 class="section-subtitle">LAST NAME</h3>
									</td>
									<td class="col-role col-small">
										<h3 class="section-subtitle">ROLE</h3>
									</td>
									<td>&nbsp;

									</td>
							</thead>
							<tbody>
								<tr class="editmode selected">
									<td class="col-tool">
										<input type="checkbox" class="select-row-highlight" disabled="">
									</td>
									<td class="col-tool wider edit-cancel">
										<button type="button" class="button button-link button-compact"></button>
									</td>
									<td class="col-email col-small">
										<input type="email" class="form-textbox" value="dturner@bravadohealth.com">
									</td>
									<td class="col-first-name col-small">
										<input type="email" class="form-textbox" value="David">
									</td>
									<td class="col-last-name col-small">
										<input type="email" class="form-textbox" value="Turnwr">
									</td>
									<td class="col-role col-small">
										<div class="select-wrapper">
											<select class="form-control">
												<option value="Key Administrator">Administrator</option>
												<option selected="" value="Key Master">Key Master</option>
												<option value="Key User">Key User</option>
											</select>
										</div>
									</td>
									<td class="commit-cancel-button-wrapper">
										<div class="commit-cancel-buttons">
											<button class="button button-link button-compact confirm-changes"></button>
											<button class="button button-link button-compact cancel-changes"></button>
										</div>
									</td>
								</tr>
								<tr class="">
									<td class="col-tool">
										<input type="checkbox" class="select-row-highlight">
									</td>
									<td class="col-tool wider edit-user">
										<button type="button" class="button button-link button-compact"></button>
									</td>
									<td class="col-keystone-id col-small">
										<div class="col-value">shane@bravadohealth.com</div>
									</td>
									<td class="col-first-name col-small">
										<div class="col-value">Shane</div>
									</td>
									<td class="col-last-name col-small"><span class="sort desc"></span>
										<div class="col-value">Andreasen</div>
									</td>
									<td class="col-role col-small">
										<div class="col-value">Locksmith</div>
									</td>
									<td>&nbsp;

									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="table-note pull-right">Active Users: <span class="active-user-row-count">3</span></div>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</accordian>
			</div>
		</section>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>