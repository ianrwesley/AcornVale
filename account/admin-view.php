<?php
$pageTitle = "Admin";
$menuName = $pageTitle;
$adminView = $_GET[ "admin" ];
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Administrator - Keystone</title>
	<?php include "../global/globalui.php"; ?>
	<link rel="stylesheet" href="css/keystone.account.css" type="text/css">
	<script type="text/javascript" src="js/keystone.account.js"></script>
</head>

<body>
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div class="manage <?php echo strtolower($menuName); ?>">
			<div class="persona-splash clearfix">
				<div class="persona-bg"></div>
				<div class="container no-float">
					<div class="row person-wrapper">
						<div class="column large-9 small-12">
							<div class="flex-container">
								<h1 class="keystone-user"> <span id="first_name" class="first_name">Sherry</span> <span id="last_name" class="last_name">Dillon</span> <small id="username" class="keystone-username">Your Keystone&nbsp;ID is <span><strong class="username">sdillon@bravadohealth.com</strong></span></small> </h1>
							</div>
						</div>
						<!--div class="column large-3 not-mobile">
							<div class="flex-container">
								<div class="switch pull-right">
									<button id="switch-view-button" class="button button-flat">
										<a href="account-view.php">Account</a>
									</button>
								</div>
							</div>
						</div-->
					</div>
				</div>
			</div>
			<div class="notification-banner-wrapper">
				<div class="notification-banner">
					<div class="notification-msg-wrapper">
						<p class="notification-msg">Invitations sent succesfully.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<admin>
					<!-- Admin Menu -->
					<subnav class="subnav admin">
						<div class="column large-4">
							<h2 class="menu-title">Keystone Administration</h2>
						</div>
						<div class="column large-8 not-mobile">
							<div class="menu-content pull-right">
								<button class="button button-link menu-button active has-notifications" onclick="adminInviteUsers()">Invite Users<span class="notifications"><strong class="pending-row-count">2</strong></span></button>
								<button class="button button-link menu-button" onclick="adminEditUsers()">Edit Users</button>
								<!--button class="button button-link menu-button" onclick="adminRoles()">Roles</button-->
							</div>
						</div>
					</subnav>
					<!-- end Admin Menu -->
					<!-- Invite Keystone Users -->
					<section id="admin-invite-users" class="flow-section main-section">
						<div class="row no-columns header-row">
							<h2 class="section-title mobile-edit">Invite new Keystone users</h2>
							<div class="description">Add new Keystone users below. They will receive an invitation via email.</div>
						</div>
						<div id="invite-users-wrapper" class="form-field-wrapper">
							<div class="row no-columns">
								<div class="flex-field-wrapper">
									<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name">
									<div class="flex-select-wrapper large-2">
										<select class="form-flex-control short">
											<option selected="" value="role" disabled="">role</option>
											<option value="Key Administrator">Administrator</option>
											<option value="Key Master">Key Master</option>
											<option value="Key User">Key User</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row no-columns flex-field-error-row">
								<div class="error-wrapper large-4">
									<div class="pop-container form-field-error">
										<div class="error pop-bottom">
											<p class="error-msg">
												<error class="error">Must be a valid Bravado Health email address.</error>
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
												<error class="error">Role must be selected.</error>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row no-columns">
								<div class="flex-field-wrapper">
									<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email" value="dturner@bravadohealth.com">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name" value="David">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name" value="Turnwr">
									<div class="flex-select-wrapper large-2">
										<select class="form-flex-control short selected">
											<option value="role" disabled="">role</option>
											<option value="Key Administrator">Administrator</option>
											<option selected="" value="Key Master">Key Master</option>
											<option value="Key User">Key User</option>
										</select>
									</div>
								</div>
								<div class="thumbtack-cell append-right">
									<!--button type="reset" class="button button-link button-compact subdued clear-row-button">Clear Row</button-->
									<button type="button" class="button button-icon button-compact add-row-button"></button>
									<button type="button" class="button button-icon button-compact delete-row-button clear-row-button"></button>
								</div>
							</div>
							<div class="row no-columns">
								<div class="flex-field-wrapper">
									<input type="text" class="form-flex-control form-flex-textbox large-4 short" placeholder="email">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="first name">
									<input type="text" class="form-flex-control form-flex-textbox large-3 short" placeholder="last name">
									<div class="flex-select-wrapper large-2">
										<select class="form-flex-control short">
											<option selected="" value="role" disabled="">role</option>
											<option value="Key Administrator">Administrator</option>
											<option value="Key Master">Key Master</option>
											<option value="Key User">Key User</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="button-group">
							<button type="submit" class="button button-flat button-done" disabled="">Send Invitations</button>
							<button type="button" class="button button-link button-compact subdued" id="addRows">Add More</button>
							<button type="reset" class="button button-link button-compact subdued">Clear All</button>
						</div>
						<!-- end Invite Keystone Users -->
						<!-- Pending Keystone Users -->
						<section id="admin-pending-users" class="flow-section">
							<div class="sub-section pending-users attention collapsed">
								<div class="row no-columns header-row">
									<h2 class="section-title mobile-edit">Pending users</h2>
									<span class="notifications"><strong class="pending-row-count">2</strong></span>
									<div class="tools-wrapper">
										<div class="description">Users who haven't activated their Keystone account appear below.</div>
										<div class="table-tools">
											<div class="button-group">
												<button class="button-resend"></button>
												<button class="button-delete action-pendinguserdelete"></button>
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
					<!-- end Pending Keystone Users -->
					<!-- Edit Keystone Users -->
					<section id="admin-edit-users" class="flow-section main-section hidden">
						<div class="row no-columns header-row">
							<h2 class="section-title mobile-edit">Keystone users</h2>
							<div class="tools-wrapper">
								<div class="description">Make changes to existing Keystone users below. Users will be notified of any changes via email.</div>
								<div class="table-tools no-bg">
									<button class="button-delete"></button>
								</div>
							</div>
						</div>
						<!--div class="table-tools no-bg"-->
							<!--button><input type="checkbox" class="select-all"></button-->
							<!--button class="button-delete"></button>
						</div-->
						<table class="no-wrap table">
							<thead>
								<tr>
									<td class="col-tool"><input type="checkbox" class="select-all"></td>
									<td class="col-tool wider">&nbsp;</td>
									<td class="col-name col-large">
										<h3 class="section-subtitle">NAME</h3>
									</td>
									<td class="col-role col-small">
										<h3 class="section-subtitle">ROLE</h3>
									</td>
									<td class="col-keystone-id col-small">
										<h3 class="section-subtitle">KEYSTONE ID</h3>
									</td>
									<td class="col-department col-small">
										<h3 class="section-subtitle">DEPARTMENT</h3>
									</td>
									<td class="col-location col-small">
										<h3 class="section-subtitle">LOCATION</h3>
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="col-tool">
										<input type="checkbox" class="select-row-highlight">
									</td>
									<td class="col-tool wider edit-user">
										<button type="button" class="button button-link button-compact"></button>
									</td>
									<td class="col-name col-large">
										<h2 class="user-name">Kayla Valiquette</h2>
									</td>
									<td class="col-role col-small">
										<div class="col-value">Administrator</div>
									</td>
									<td class="col-keystone-id col-small">
										<div class="col-value">kvaliquette@bravadohealth.com</div>
									</td>
									<td class="col-department col-small">
										<div class="col-value">Training &amp; Implementation</div>
									</td>
									<td class="col-location col-small">
										<div class="col-value">Corporate</div>
									</td>
								</tr>
								<tr>
									<td class="col-tool">
										<input type="checkbox" class="select-row-highlight">
									</td>
									<td class="col-tool wider edit-user">
										<button type="button" class="button button-link button-compact"></button>
									</td>
									<td class="col-name col-large">
										<h2 class="user-name">Jon Miragliotta</h2>
									</td>
									<td class="col-role col-small">
										<div class="col-value">Key Master</div>
									</td>
									<td class="col-keystone-id col-small">
										<div class="col-value">jmiragliotta@bravadohealth.com</div>
									</td>
									<td class="col-department col-small">
										<div class="col-value">Sales</div>
									</td>
									<td class="col-location col-small">
										<div class="col-value">Corporate</div>
									</td>
								</tr>
								<tr class="editmode selected">
									<td class="col-tool">
										<input type="checkbox" class="select-row-highlight" disabled="">
									</td>
									<td class="col-tool wider edit-cancel">
										<button type="button" class="button button-link button-compact"></button>
									</td>
									<td class="col-name col-large">
										<input type="text" class="form-textbox textbox-name-split" placeholder="first name" value="Brooklyn">
										<input type="text" class="form-textbox textbox-name-split" placeholder="middle name" value="">
										<input type="text" class="form-textbox textbox-name-split" placeholder="last name" value="Enders">
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
									<td class="col-keystone-id col-small">
										<input type="email" class="form-textbox" value="benders@bravadohealth.com">
									</td>
									<td class="col-department col-small">
										<div class="select-wrapper">
											<select class="form-control">
												<option value="Product Management">Product Management</option>
												<option value="C-Suite">C-Suite</option>
												<option value="Sales">Sales</option>
												<option value="Marketing">Marketing</option>
												<option value="Technical Support">Technical Support</option>
												<option value="RCM">RCM</option>
												<option value="Finance">Finance</option>
												<option value="Business Development">Business Development</option>
												<option value="Software Engineering">Software Engineering</option>
												<option selected="" value="Human Resources">Human Resources</option>
												<option value="Training & Implementation">Training &amp; Implementation</option>
											</select>
										</div>
									</td>
									<td class="col-location col-small">
										<div class="select-wrapper">
											<select class="form-control">
												<option value="Dallas, TX">Dallas, TX</option>
												<option selected="" value="Corporate">Corporate</option>
												<option value="Miami, FL">Miami, FL</option>
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
							</tbody>
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="table-note pull-right">Active Users: <span class="active-user-row-count">3</span></div>
									</td>
								</tr>
							</tfoot>
						</table>
					</section>
					<!-- end Edit Keystone Users -->
					<!--section id="admin-roles" class="flow-section hidden">
						<div class="row header-row">
							<div class="column large-3 medium-12">
								<h2 class="section-title mobile-edit"> Manage Roles </h2>
							</div>
							<div class="column large-9 menu-hide">
								<div class="description"> Manage Keystone roles here. </div>
							</div>
						</div>
					</section-->
				</admin>
			</div>
		</div>
	</div>
	<div class="alert-curtain hidden">
		<div class="popover-container alert">
			<div class="popover">
				<div class="popover-inner-content">
					<div class="row">
						<div class="column center-row not-mobile">
							<img src="../global/images/alert_icon.png" alt="Alert" width="62" class="alert-icon" />
						</div>
						<div class="column center-row">
							<h4 class="alert-popup-header">Are you sure?</h4>
						</div>
					</div>
					<div class="row">
						<div class="column large-12">
							<p class="alert-popup-msg"></p>
						</div>
					</div>
					<div class="button-alert-wrapper">
						<button role="button" class="button button-link subdued button-back closealert"><a tabindex="0">Cancel</a></button>
						<button role="button" class="button button-link button-next button-done closealert"><a tabindex="0">Continue</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>