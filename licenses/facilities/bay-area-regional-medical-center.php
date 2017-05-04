<?php
$facilityName = "Bay Area Regional Medical Center";
$facilityID = "BARMC-0";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $facilityName; ?> - Keystone</title>
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
								<h1 class="keystone-user"><span id="facility_name"><?php echo $facilityName; ?></span> <small id="username" class="keystone-username">Clara&nbsp;ID: <span><strong class="username"><?php echo $facilityID; ?></strong></span></small> </h1>
							</div>
						</div>
						<div class="column large-3 not-mobile">
							<div class="flex-container">
								<div class="switch pull-right">
									<button id="switch-view-button" class="button button-flat">
										<a href="../licenses-facilities-view.php">Back</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<account>
					<section id="facility-account" class="flow-section">
						<div class="facility-account-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Account</h2>
								</div>
								<div class="column large-9 medium-12 account-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="facility-account-details clearfix">
												<div class="row">
													<!--div class="column large-5">
														<h3 class="section-subtitle">FACILITY NAME</h3>
														<div class="profile-value"><?php echo $facilityName; ?></div>
													</div-->
													<div class="column large-5">
														<h3 class="section-subtitle">ADDRESS</h3>
														<div class="profile-value">200 Blossom Street<br>Webster, TX 77598</div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle">KEY OWNER</h3>
														<div class="key-owner profile-value">Jon Miragliotta</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
											</div>
											<div class="editable facility-account-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Account</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> FACILITY NAME </h3>
														<div class="username ellipsis">
															<?php echo $facilityName; ?>
														</div>
														<div class="pop-wrapper extended" id="popwrapper-0">
															<button id="startChangeUsernameFlow" class="button button-link" onclick="startChangeUsernameFlow()"> Change Facility Name… </button>
															<div class="popover-content">
																<div class="popover-container" id="popover-0">
																	<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center">
																		<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																			<div class="popover-inner-content">
																				<div class="step-content" id="step-1">
																						<div class="details">
																							<div class="flow-label">Enter a new name for the facility:</div>
																						</div>
																						<div class="pop-wrapper field-pop-wrapper">
																							<div class="email-input-wrapper">
																								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control emailInputId form-textbox popover-field" placeholder="facility name" id="emailInputId">
																							</div>
																						</div>
																						<div class="details">
																							<div class="flow-label"><strong class="warning">All users with access to <?php echo $facilityName; ?> will be notified of this change via email.</strong> Proceed with caution.</div>
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
																							<button tabindex="0" type="button" class="button button-link first nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled="">Change Facility Name…</button>
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
														<div class="description">The facility name appears to all users who have access.</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-flat button-done" onclick="saveSection()">Save</button>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">ADDRESS</h3>
															<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="200 Blossom Street" placeholder="street">
															<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="" placeholder="street 2 (optional)">
															<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="Webster" placeholder="city">
															<div class="single-line-wrapper">
																<div class="select-wrapper state single-line">
																	<select class="form-control selected" name="facility-state">
																		<option value="AL">Alabama</option>
																		<option value="AK">Alaska</option>
																		<option value="AZ">Arizona</option>
																		<option value="AR">Arkansas</option>
																		<option value="CA">California</option>
																		<option value="CO">Colorado</option>
																		<option value="CT">Connecticut</option>
																		<option value="DE">Delaware</option>
																		<option value="DC">District of Columbia</option>
																		<option value="FL">Florida</option>
																		<option value="GA">Georgia</option>
																		<option value="HI">Hawaii</option>
																		<option value="ID">Idaho</option>
																		<option value="IL">Illinois</option>
																		<option value="IN">Indiana</option>
																		<option value="IA">Iowa</option>
																		<option value="KS">Kansas</option>
																		<option value="KY">Kentucky</option>
																		<option value="LA">Louisiana</option>
																		<option value="ME">Maine</option>
																		<option value="MD">Maryland</option>
																		<option value="MA">Massachusetts</option>
																		<option value="MI">Michigan</option>
																		<option value="MN">Minnesota</option>
																		<option value="MS">Mississippi</option>
																		<option value="MO">Missouri</option>
																		<option value="MT">Montana</option>
																		<option value="NE">Nebraska</option>
																		<option value="NV">Nevada</option>
																		<option value="NH">New Hampshire</option>
																		<option value="NJ">New Jersey</option>
																		<option value="NM">New Mexico</option>
																		<option value="NY">New York</option>
																		<option value="NC">North Carolina</option>
																		<option value="ND">North Dakota</option>
																		<option value="OH">Ohio</option>
																		<option value="OK">Oklahoma</option>
																		<option value="OR">Oregon</option>
																		<option value="PA">Pennsylvania</option>
																		<option value="RI">Rhode Island</option>
																		<option value="SC">South Carolina</option>
																		<option value="SD">South Dakota</option>
																		<option value="TN">Tennessee</option>
																		<option selected="" value="TX">Texas</option>
																		<option value="UT">Utah</option>
																		<option value="VT">Vermont</option>
																		<option value="VA">Virginia</option>
																		<option value="WA">Washington</option>
																		<option value="WV">West Virginia</option>
																		<option value="WI">Wisconsin</option>
																		<option value="WY">Wyoming</option>
																	</select>
																</div>
																<input type="text" maxlength="10" class="form-control form-textbox zip-code single-line" name="facility-zip-code" value="77598" placeholder="zip code">
															</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">The physicial location of <?php echo $facilityName; ?>.</div>
													</div>
												</div>
												<!--div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">SUPER USER</h3>
														<div class="field-wrapper search-field-wrapper">
															<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="Julie Shirley" placeholder="assign new super user">
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">The Super User is the primary contact for <?php echo $facilityName; ?>. The Super User is the only client-user who can add or remove Administrators.</div>
													</div>
												</div-->
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">KEY OWNER</h3>
														<div class="field-wrapper search-field-wrapper">
															<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="Jon Miragliotta" placeholder="assign new key owner">
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">This Bravado Health employee is the primary contact for <?php echo $facilityName; ?>.</div>
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
					<!--section id="contacts" class="flow-section flow-section-border">
						<div class="contacts-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Contacts</h2>
								</div>
								<div class="column large-9 medium-12 contacts-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="contacts-details clearfix">
												<div class="row">
													<div class="column large-5">
														<h3 class="section-subtitle">SUPER USER</h3>
														<div class="super-user profile-value">Julie Shirley</div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle">KEY OWNER</h3>
														<div class="key-owner profile-value">Jon Miragliotta</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
											</div>
											<div class="editable contacts-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Contacts</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">SUPER USER</h3>
															<div class="field-wrapper search-field-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="Julie Shirley" placeholder="assign new super user">
															</div>
														</div>
														<div class="column large-5 small-12">
															<div class="description">The Super User is the primary contact for <?php echo $facilityName; ?>. The Super User is the only client-user who can add or remove Administrators.</div>
														</div>
														<div class="column large-2 section-edit">
															<button class="button button-flat button-done" onclick="saveSection()">Save</button>
														</div>
													</div>
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">KEY OWNER</h3>
															<div class="field-wrapper search-field-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="form-textbox" type="text" value="Jon Miragliotta" placeholder="assign new key owner">
															</div>
														</div>
														<div class="column large-5 small-12">
															<div class="description">This Bravado Health employee is the primary contact for <?php echo $facilityName; ?>.</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</accordian>
								</div>
							</div>
						</div>
					</section-->
					<section id="modules" class="flow-section flow-section-border">
						<div class="modules-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Modules</h2>
								</div>
								<div class="column large-9 medium-12 modules-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="modules-details clearfix">
												<div class="row">
													<!--div class="column large-5">
														<h3 class="section-subtitle">ACTIVE MODULES</h3>
														<div class="profile-value">
															<ul>
																<li>Treat</li>
																<li>Transfer</li>
															</ul>
														</div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle">INACTIVE MODULES</h3>
														<div class="profile-value">
															<ul>
																<li>Teach</li>
																<li>Talk</li>
																<li>Track</li>
															</ul>
														</div>
													</div-->
													<div class="column large-10">
														<ul class="moduleselect-items">
															<li class="moduleselect-item moduleselect-item-education activated">
																<div class="moduleselect-link">
																	<figure class="moduleselect-icon"></figure>
																	<span class="moduleselect-label">Teach</span>
																	<span class="moduleselect-activateitem">ACTIVE</span>
																</div>
															</li>
															<li class="moduleselect-item moduleselect-item-medication activated">
																<div class="moduleselect-link">
																	<figure class="moduleselect-icon"></figure>
																	<span class="moduleselect-label">Treat</span>
																	<span class="moduleselect-activateitem">ACTIVE</span>
																</div>
															</li>
															<li class="moduleselect-item moduleselect-item-referral activated">
																<div class="moduleselect-link">
																	<figure class="moduleselect-icon"></figure>
																	<span class="moduleselect-label">Transfer</span>
																	<span class="moduleselect-activateitem">ACTIVE</span>
																</div>
															</li>
															<li class="moduleselect-item moduleselect-item-postdischarge">
																<div class="moduleselect-link">
																	<figure class="moduleselect-icon"></figure>
																	<span class="moduleselect-label">Talk</span>
																</div>
															</li>
															<li class="moduleselect-item moduleselect-item-analytics">
																<div class="moduleselect-link">
																	<figure class="moduleselect-icon"></figure>
																	<span class="moduleselect-label">Track</span>
																</div>
															</li>
													</ul>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
											</div>
											<div class="editable modules-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Modules</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">TEACH</h3>
															<ul>
															<li class="moduleselect-item moduleselect-item-education">
																<figure class="moduleselect-icon"></figure>	
															</li>
															<li class="moduleselect-item moduleswitch">
																<button class="button-switch on"><div class="button-switch-pull"></div></button>
															</li>
															</ul>
														</div>
														<div class="column large-5 small-12">
															<div class="description">Discharge instructions.</div>
														</div>
														<div class="column large-2 section-edit">
															<button class="button button-flat button-done" onclick="saveSection()">Save</button>
														</div>
													</div>
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">TREAT</h3>
															<li class="moduleselect-item moduleselect-item-medication">
																<figure class="moduleselect-icon"></figure>	
															</li>
															<li class="moduleselect-item moduleswitch">
																<button class="button-switch on"><div class="button-switch-pull"></div></button>
															</li>
														</div>
														<div class="column large-5 small-12">
															<div class="description">Medication management.</div>
														</div>
													</div>
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">TRANSFER</h3>
															<li class="moduleselect-item moduleselect-item-referral">
																<figure class="moduleselect-icon"></figure>	
															</li>
															<li class="moduleselect-item moduleswitch">
																<button class="button-switch on"><div class="button-switch-pull"></div></button>
															</li>
														</div>
														<div class="column large-5 small-12">
															<div class="description">Referral management.</div>
														</div>
													</div>
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">TALK</h3>
															<li class="moduleselect-item moduleselect-item-postdischarge">
																<figure class="moduleselect-icon"></figure>	
															</li>
															<li class="moduleselect-item moduleswitch">
																<button class="button-switch"><div class="button-switch-pull"></div></button>
															</li>
														</div>
														<div class="column large-5 small-12">
															<div class="description">Post-discharge communication.</div>
														</div>
													</div>
													<div class="row edit-row">
														<div class="column large-5 small-12">
															<h3 class="section-subtitle">TRACK</h3>
															<li class="moduleselect-item moduleselect-item-analytics">
																<figure class="moduleselect-icon"></figure>	
															</li>
															<li class="moduleselect-item moduleswitch">
																<button class="button-switch"><div class="button-switch-pull"></div></button>
															</li>
														</div>
														<div class="column large-5 small-12">
															<div class="description">Data analytics.</div>
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
					<section id="users" class="flow-section flow-section-border">
						<div class="users-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Users</h2>
								</div>
								<div class="column large-9 medium-12 users-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="users-details clearfix">
												<div class="row">
													<div class="column large-10">
														<h3 class="section-subtitle">AUTHORIZED USERS</h3>
														<div class="row">
															<div class="column large-6">
																<div class="profile-value">
																	<ul class="profile-value-list">
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value designated-super-user"><button class="button button-link facility-super-user-link open-popover-link">Julie Shirley</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Julie Shirley</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:jshirley@barmc.us">jshirley@barmc.us</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (281) 525-6753</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/julie-shirley.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Erica Sanchez</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Erica Sanchez</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:esanchez@wcch.com">esanchez@wcch.com</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (337) 528-4715</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/erica-sanchez.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column large-6">
																<div class="profile-value">
																	<ul class="profile-value-list">
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Conner Brosnahan</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Conner Brosnahan</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:esanchez@wcch.com">cbrosnahan@snch.org</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (516) 632-3186</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/conner-brosnahan.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
												<div class="row">
													<div class="column large-10">
														<h3 class="section-subtitle">AUTHORIZED PROVIDERS</h3>
														<div class="row">
															<div class="column large-6">
																<div class="profile-value">
																	<ul class="profile-value-list">
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Dr. Robert Hyde</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Dr. Robert Hyde</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:robert.hyde@newlondonhospital.org">robert.hyde@newlondonhospital.org</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (603) 727-2231</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/robert-hyde.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Dr. James Cohen</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Dr. James Cohen</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:rockdocjc@aol.com">rockdocjc@aol.com</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (419) 592-4015</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/james-cohen.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column large-6">
																<div class="profile-value">
																	<ul class="profile-value-list">
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Dr. Luis Alfonso</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Dr. Luis Alfonso</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:dr.luis.alfonso@palmspringshospital.org">dr.luis.alfonso@palmspringshospital.org</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (305) 558-2500</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/luis-alfonso.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="pop-wrapper">
																				<div class="col-value"><button class="button button-link facility-super-user-link open-popover-link">Dr. Cameron Nelson</button></div>
																				<div class="popover-content">
																					<div class="popover-container">
																						<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																							<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																								<div class="popover-inner-content">
																									<div class="step-content">
																										<div class="pop-wrapper field-pop-wrapper">
																											<div class="details">
																												<h2 class="superuser-name popover-details">Dr. Cameron Nelson</h2>
																												<div class="popover-details">Clara ID: <span><a href="mailto:drcam1@mac.com">drcam1@mac.com</a></span></div>
																												<div class="popover-details">Rescue Mobile Number: <span>+1 (765) 348-0300</span></div>
																											</div>
																										</div>
																									</div>
																									<div class="step-footer clearfix">
																										<div class="toolbar-footer clearfix">
																											<div class="button-group">
																												<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Close</button>
																												<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="../users/cameron-nelson.php">Go To Profile</a></button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="editable users-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Users</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
													<div class="row edit-row">
														<div class="column large-10 small-12">
															<h3 class="section-subtitle">AUTHORIZED USERS</h3>
															<table class="no-wrap table users">
																<thead>
																	<tr>
																		<td class="col-tool"><input type="checkbox" class="select-all"></td>
																		<td class="col-user-name col-large">
																			<h3 class="section-subtitle">USER NAME</h3><span class="sort none"></span>
																		</td>
																		<td class="col-user-id col-small">
																			<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
																		</td>
																		<td class="col-user-last-login col-small col-small">
																			<h3 class="section-subtitle">LAST LOGIN</h3><span class="sort desc"></span>
																		</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="col-tool col-locked">
																			<!--input type="checkbox" class="select-row-highlight"-->
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value designated-super-user"><a>Julie Shirley</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">jshirley@barmc.us</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">3/23/17&nbsp;&nbsp;02:47 am</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Erica Sanchez</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">esanchez@wcch.com</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">3/23/17&nbsp;&nbsp;03:45 pm</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Conner Brosnahan</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">cbrosnahan@snch.org</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">3/23/17&nbsp;&nbsp;06:58 pm</div>
																		</td>
																	</tr>
																</tbody>
																<tfoot>
																	<tr>
																		<td colspan="4">
																			<div class="button-group">
																				<div class="pop-wrapper" id="popwrapper-2">
																					<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link button-add-icon">Grant User Access…</button></div>
																					<div class="popover-content">
																						<div class="popover-container" id="popover-2">
																							<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
																								<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																									<div class="popover-inner-content narrow add-user-step-0">
																										<div class="step-content">
																											<div class="pop-wrapper field-pop-wrapper">
																												<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
																												<div class="search-field-wrapper">
																													<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara user">
																												</div>
																												<div class="wrap-line">Or <a role="link" class="big-link link-inline-user-invite">invite a new Clara user…</a></div>
																											</div>
																										</div>
																										<div class="step-footer clearfix">
																											<div class="toolbar-footer clearfix">
																												<div class="button-group pull-right">
																													<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																													<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Grant User Access…</button>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="popover-inner-content narrow add-user-step-1">
																										<div class="step-content">
																											<div class="pop-wrapper field-pop-wrapper full-width">
																												<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control form-textbox popover-field" placeholder="email">
																												<input type="text" class="form-control form-textbox popover-field" placeholder="full name">
																												<div class="select-wrapper full-width">
																													<select class="form-control">
																														<option selected="" value="" disabled="">super user</option>
																														<option value="Yes">Yes</option>
																														<option value="No">No</option>
																													</select>
																												</div>
																												<div class="select-wrapper full-width">
																													<select class="form-control">
																														<option selected="" value="" disabled="">role</option>
																														<option value="Provider">Provider</option>
																														<option value="User">User</option>
																													</select>
																												</div>
																											</div>
																										</div>
																										<div class="step-footer clearfix">
																											<div class="toolbar-footer clearfix">
																												<div class="button-group pull-right">
																													<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link clean">Cancel</button>
																													<button tabindex="0" type="button" class="button button-flat button-compact first nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled=""> Send Invitation </button>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<button type="button" class="button button-link button-compact subdued" disabled="">Remove User Access</button>
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
													<div class="row edit-row">
														<div class="column large-10 small-12">
															<h3 class="section-subtitle">AUTHORIZED PROVIDERS</h3>
															<table class="no-wrap table users">
																<thead>
																	<tr>
																		<td class="col-tool"><input type="checkbox" class="select-all"></td>
																		<td class="col-user-name col-large">
																			<h3 class="section-subtitle">PROVIDER NAME</h3><span class="sort none"></span>
																		</td>
																		<td class="col-user-id col-small">
																			<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
																		</td>
																		<td class="col-user-last-login col-small col-small">
																			<h3 class="section-subtitle">LAST LOGIN</h3><span class="sort desc"></span>
																		</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Dr. Robert Hyde</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">robert.hyde@newlondonhospital.org</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">Never</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Dr. James Cohen</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">rockdocjc@aol.com</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">4/10/16&nbsp;&nbsp;08:32 pm</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Dr. Luis Alfonso</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">dr.luis.alfonso@palmspringshospital.org</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">3/22/17&nbsp;&nbsp;07:49 am</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="col-tool">
																			<input type="checkbox" class="select-row-highlight">
																		</td>
																		<td class="col-user-name col-large">
																			<div class="col-value"><a>Dr. Cameron Nelson</a></div>
																		</td>
																		<td class="col-user-id col-small">
																			<div class="col-value"><a role="link">drcam1@mac.com</a></div>
																		</td>
																		<td class="col-user-last-login col-small">
																			<div class="col-value">3/24/17&nbsp;&nbsp;01:16 pm</div>
																		</td>
																	</tr>
																</tbody>
																<tfoot>
																	<tr>
																		<td colspan="4">
																			<div class="button-group">
																				<div class="pop-wrapper" id="popwrapper-2">
																					<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link button-add-icon">Grant Provider Access…</button></div>
																					<div class="popover-content">
																						<div class="popover-container" id="popover-2">
																							<div class="popover-wrapper popover-wrapper-direction-top popover-wrapper-align-center narrow popover-inline">
																								<div class="popover popover-direction-top popover-align-center popover-type-action">
																									<div class="popover-inner-content narrow add-user-step-0">
																										<div class="step-content">
																											<div class="pop-wrapper field-pop-wrapper">
																												<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
																												<div class="search-field-wrapper">
																													<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara user">
																												</div>
																												<div class="wrap-line">Or <a role="link" class="big-link link-inline-user-invite">invite a new Clara user…</a></div>
																											</div>
																										</div>
																										<div class="step-footer clearfix">
																											<div class="toolbar-footer clearfix">
																												<div class="button-group pull-right">
																													<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																													<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Grant Provider Access…</button>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="popover-inner-content narrow add-user-step-1">
																										<div class="step-content">
																											<div class="pop-wrapper field-pop-wrapper full-width">
																												<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control form-textbox popover-field" placeholder="email">
																												<input type="text" class="form-control form-textbox popover-field" placeholder="full name">
																												<div class="select-wrapper full-width">
																													<select class="form-control">
																														<option selected="" value="" disabled="">super user</option>
																														<option value="Yes">Yes</option>
																														<option value="No">No</option>
																													</select>
																												</div>
																												<div class="select-wrapper full-width">
																													<select class="form-control">
																														<option selected="" value="" disabled="">role</option>
																														<option value="Provider">Provider</option>
																														<option value="User">User</option>
																													</select>
																												</div>
																											</div>
																										</div>
																										<div class="step-footer clearfix">
																											<div class="toolbar-footer clearfix">
																												<div class="button-group pull-right">
																													<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link clean">Cancel</button>
																													<button tabindex="0" type="button" class="button button-flat button-compact first nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled=""> Send Invitation </button>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<button type="button" class="button button-link button-compact subdued" disabled="">Remove Provider Access</button>
																			</div>
																		</td>
																	</tr>
																</tfoot>
															</table>
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