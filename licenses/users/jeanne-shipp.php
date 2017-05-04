<?php
$userFirstName = "Jeanne";
$userLastName = "Shipp";
$userName = "$userFirstName $userLastName";
$userID = "jgayshipp@gmail.com	";
$userPhone = "+1 (281) 385-5190"
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $userName; ?> - Keystone</title>
	<?php include "../../global/globalui.php"; ?>
	<!--script type="text/javascript" src="../../account/js/keystone.account.js"></script-->
	<script type="text/javascript" src="../js/keystone.licenses.js"></script>
	<link rel="stylesheet" href="../../account/css/keystone.account.css" type="text/css">
	<link rel="stylesheet" href="../css/keystone.licenses.css" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php include "../../global/globalnav.php"; ?>
		<div class="manage facility">
			<div class="persona-splash clearfix">
				<div class="persona-bg account"></div>
				<div class="container no-float">
					<div class="row person-wrapper">
						<div class="column large-9 small-12">
							<div class="flex-container">
								<h1 class="keystone-user"><span id="facility_name"><?php echo $userName; ?></span> <small id="username" class="keystone-username">Clara&nbsp;ID: <span><strong class="username"><?php echo $userID; ?></strong></span></small> </h1>
							</div>
						</div>
						<div class="column large-3 not-mobile">
							<div class="flex-container">
								<div class="switch pull-right">
									<button id="switch-view-button" class="button button-flat">
										<a href="../licenses-users-view.php">Back</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<account>
					<section id="user-account" class="flow-section">
						<div class="user-account-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Profile</h2>
								</div>
								<div class="column large-9 medium-12 user-account-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="user-account-details clearfix">
												<div class="row">
													<div class="column large-5">
														<h3 class="section-subtitle">CLARA ID</h3>
														<div class="profile-value"><?php echo $userID; ?></div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle">RESCUE MOBILE NUMBER</h3>
														<div class="profile-value"><?php echo $userPhone; ?></div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
												<div class="row">
													<div class="column large-5">
														<h3 class="section-subtitle">SUPER USER</h3>
														<div class="super-user profile-value">No</div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle">PROVIDER</h3>
														<div class="key-owner profile-value">No</div>
													</div>
												</div>
											</div>
											<div class="editable user-account-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Profile</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> Clara ID </h3>
														<div class="username ellipsis">
															<?php echo $userID; ?>
														</div>
														<div class="pop-wrapper extended" id="popwrapper-0">
															<button id="startChangeUsernameFlow" class="button button-link" onclick="startChangeUsernameFlow()"> Change Clara ID… </button>
															<div class="popover-content">
																<div class="popover-container" id="popover-0">
																	<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center">
																		<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																			<div class="popover-inner-content">
																				<div class="step-content" id="step-1">
																						<div class="details">
																							<div class="flow-label">Enter a new email for the user's Clara ID:</div>
																						</div>
																						<div class="pop-wrapper field-pop-wrapper">
																							<div class="email-input-wrapper">
																								<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control emailInputId form-textbox popover-field" placeholder="email@example.com" id="emailInputId">
																							</div>
																						</div>
																						<div class="details">
																							<div class="flow-label"><strong>Did you confirm with <?php echo $userName; ?> that she wants to change her email?</strong> The user will need to confirm their new email address before their Clara ID can be changed.</div>
																						</div>
																				</div>
																				<div class="step-content next-step" id="step-2">
																						<div class="details">
																							<div class="flow-label">An email with a verification code has been sent to <strong id="step-2-email">x</strong>.
																								<hr class="separator"/>Enter the code here:</div>
																						</div>
																						<div class="pop-wrapper field-pop-wrapper">
																							<div class="email-input-wrapper">
																								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="6" class="form-control codeInputId form-textbox popover-field" placeholder="Enter code here" id="codeInputId">
																							</div>
																						</div>
																				</div>
																				<div class="step-footer clearfix">
																					<div class="toolbar-footer clearfix">
																						<button tabindex="0" type="button" class="button button-link last nav-action pull-left icon-suffix resend" id="emailResendCode">Resend Code</button>
																						<div class="button-group pull-right">
																							<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right" onclick="cancelChangeUsername()">Cancel</button>
																							<button tabindex="0" type="button" class="button button-link first nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled="">Change Clara ID…</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">The user's Clara ID is used to access all Bravado Health products and services.</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-flat button-done" onclick="saveSection()">Save</button>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> RESCUE MOBILE NUMBER </h3>
														<div class="rescue-number"><?php echo $userPhone; ?></div>
														<button class="button button-link"> Change Rescue Number… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> A verified mobile number can be used to help reset the user's password. </div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle" id="nameLabel"> NAME </h3>
														<div class="form-group change-name">
															<div class="field-wrapper first-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="first-name form-textbox" type="text" value="<?php echo $userFirstName; ?>" placeholder="first name">
															</div>
															<div class="field-wrapper middle-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="middle-name form-textbox" type="text" value="" placeholder="middle name (optional)">
															</div>
															<div class="field-wrapper last-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="last-name form-textbox" type="text" value="<?php echo $userLastName; ?>" placeholder="last name">
															</div>
														</div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> SUPER USER </h3>
														<button class="button button-link"> Assign Super User Privileges… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> The Super User is a critical role for every Clara facility. The assignee will be notified of their elevated privileges via email. </div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">PROVIDER</h3>
														<button class="button-switch"><div class="button-switch-pull"></div></button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"><?php echo $userName; ?> is not a provider. They cannot access Teach, Treat or Transfer.</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</accordian>
								</div>
							</div>
						</div>
					</section>
					<section id="modules" class="flow-section flow-section-border">
						<div class="modules-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Facilities</h2>
								</div>
								<div class="column large-9 medium-12 modules-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="modules-details clearfix">
												<div class="row">
													<div class="column large-10">
														<h3 class="section-subtitle">ACTIVE FACILITIES</h3>
														<div class="row">
															<div class="column large-6">
																<div class="profile-value">
																	<ul>
																		<li><a href="../facilities/beaumont-emergency-center.php">Beaumont Emergency Center</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
											</div>
											<div class="editable modules-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Facilities</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
													<div class="row edit-row flushbottom">
													<div class="column large-10 small-12">
														<h3 class="section-subtitle">ACTIVE FACILITIES</h3>
														<table class="no-wrap table users">
															<thead>
																<tr>
																	<td class="col-tool"><input type="checkbox" class="select-all"></td>
																	<td class="col-facility-name col-large">
																		<h3 class="section-subtitle">FACILITY NAME</h3><span class="sort asc"></span>
																	</td>
																	<td class="col-facility-id col-small">
																		<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
																	</td>
																	<td class="col-user-last-login col-small col-small">
																		<h3 class="section-subtitle">LAST LOGIN</h3><span class="sort none"></span>
																	</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="col-tool">
																		<input type="checkbox" class="select-row-highlight">
																	</td>
																	<td class="col-facility-name col-large">
																		<div class="col-value"><a role="link">Beaumont Emergency Center</a></div>
																	</td>
																	<td class="col-facility-id col-small">
																		<div class="col-value"><a role="link">BEC-0</a></div>
																	</td>
																	<td class="col-user-last-login col-small">
																		<div class="col-value">3/23/17&nbsp;&nbsp;02:47 am</div>
																	</td>
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td colspan="4">
																		<div class="button-group">
																			<div class="pop-wrapper" id="popwrapper-2">
																				<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Grant Access to Facility…</button></div>
																				<div class="popover-content">
																					<div class="popover-container" id="popover-2">
																						<div class="popover-wrapper popover-wrapper-direction-top popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-top popover-align-center popover-type-action">
																								<div class="popover-inner-content narrow add-user-step-0">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
																											<div class="search-field-wrapper">
																												<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
																											</div>
																											<div class="wrap-line">Or <a role="link" class="big-link" href="../licenses-add-facility-view-step-1.php">add a new facility…</a></div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group pull-right">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Grant Access…</button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<button type="button" class="button button-link button-compact subdued" disabled="">Remove Access to Facilities</button>
																		</div>
																	</td>
																</tr>
															</tfoot>
														</table>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-flat button-done" onclick="saveSection()">Save</button>
													</div>
												</div>
												</div>
											</div>
										</div>
									</accordian>
								</div>
							</div>
						</div>
					</section>
				</account>
			</div>
		</div>
	</div>
	<?php include "../../global/globalfooter.php"; ?>
</body>

</html>