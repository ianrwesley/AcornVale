<?php
$pageTitle = "Profile";
$menuName = $pageTitle;
$adminView = $_GET[ "admin" ];
$standardView = $_GET[ "welcome" ];
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage your Keystone ID</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="js/keystone.account.js"></script>
	<link rel="stylesheet" href="css/keystone.account.css" type="text/css">
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
								<h1 class="keystone-user"> <span id="first_name" class="first_name">Jon</span> <span id="last_name" class="last_name">Miragliotta</span> <small id="username" class="keystone-username">Your Keystone&nbsp;ID is <span><strong class="username">jmiragliotta@bravadohealth.com</strong></span></small> </h1>
							</div>
						</div>
						<!--div class="column large-3 not-mobile">
							<div class="flex-container">
								<div class="switch pull-right">
									<button id="switch-view-button" class="button button-flat">
										<a href="admin-view.php?admin=true">Admin</a>
									</button>
								</div>
							</div>
						</div-->
					</div>
				</div>
			</div>
			<div class="container">
				<account>
					<section id="profile" class="flow-section">
						<div class="profile-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Profile</h2>
								</div>
								<div class="column large-9 medium-12 profile-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="profile-details clearfix">
												<div class="row">
													<div class="column large-5">
														<h3 class="section-subtitle"> KEYSTONE ID </h3>
														<div class="username ellipsis">
															jmiragliotta@bravadohealth.com
														</div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle"> ROLE </h3>
														<div class="role">Key Master</div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div>
												</div>
												<div class="row next-row">
													<div class="column large-5">
														<h3 class="section-subtitle"> OFFICE LOCATION </h3>
														<div class="location"> … </div>
													</div>
													<div class="column large-5">
														<h3 class="section-subtitle"> DEPARTMENT </h3>
														<div class="department"> … </div>
													</div>
												</div>
											</div>
											<div class="editable profile-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Profile</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> KEYSTONE ID </h3>
														<div class="username ellipsis" id="usernameConfirmation">
															jmiragliotta@bravadohealth.com
														</div>
														<div class="pop-wrapper" id="popwrapper-0">
															<button id="startChangeUsernameFlow" class="button button-link" onclick="startChangeUsernameFlow()"> Change Email Address… </button>
															<div class="popover-content">
																<div class="popover-container" id="popover-0">
																	<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center">
																		<div class="popover popover-direction-bottom popover-align-center popover-type-action">
																			<div class="popover-inner-content">
																				<div class="step-content" id="step-1">
																						<div class="details">
																							<div class="flow-label">Enter a new email to use as your Keystone ID:</div>
																						</div>
																						<div class="pop-wrapper field-pop-wrapper">
																							<div class="email-input-wrapper">
																								<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control emailInputId form-textbox popover-field" placeholder="yourname@bravadohealth.com" id="emailInputId">
																							</div>
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
																						<div class="button-group pull-right">
																							<button tabindex="0" type="button" class="button button-link last nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled=""> Continue </button>
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
														<div class="editable email-edit clearfix">
															<div class="editable-header mobile-only">
																<h2 class="mobile-section-title">Email</h2>
															</div>
															<div class="mobile-section-wrap">
																<div class="column large-5 small-12">
																	<div class="step-content" id="step-1">
																		<div class="details">
																			<div class="flow-label">Enter a new email to use as your Keystone ID:</div>
																		</div>
																		<div class="pop-wrapper field-pop-wrapper">
																			<div class="email-input-wrapper">
																				<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control emailInputId form-textbox popover-field" placeholder="yourname@bravadohealth.com">
																			</div>
																		</div>
																	</div>
																	<div class="step-footer clearfix">
																		<div class="toolbar-footer clearfix">
																			<div class="button-group pull-right">
																				<button tabindex="0" type="button" class="button button-link last nav-action pull-right" onclick="step2UsernameFlow()" id="emailContinue" disabled=""> Continue </button>
																				<button tabindex="0" type="button" class="button button-link first nav-cancel pull-right mobileFlowCancel"> Cancel </button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> Use your Keystone ID to manage all Bravado Health products and services. </div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-flat button-done" onclick="saveProfile()">Save</button>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle" id="nameLabel"> NAME </h3>
														<div class="form-group change-name">
															<div class="field-wrapper first-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="first-name form-textbox" type="text" value="Jon" placeholder="first name" id="firstNameInput">
															</div>
															<div class="field-wrapper middle-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="middle-name form-textbox" type="text" value="" placeholder="middle name (optional)">
															</div>
															<div class="field-wrapper last-wrapper">
																<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="last-name form-textbox" type="text" value="Miragliotta" placeholder="last name" id="lastNameInput">
															</div>
														</div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">OFFICE LOCATION</h3>
														<div class="select-wrapper">
															<select class="form-control selected" id="locationInputId">
																<option value="" selected="" disabled="">office location</option>
																<option value="Corporate">Corporate</option>
																<option value="Dallas, TX">Dallas, TX</option>
																<option value="Miami, FL">Miami, FL</option>
															</select>
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">Your office location helps deliver more relevant content in Keystone.</div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle">DEPARTMENT</h3>
														<div class="select-wrapper">
															<select class="form-control selected" id="departmentInputId">
																<option value="" selected="" disabled="">department</option>
																<option value="Product Management">Product Management</option>
																<option value="C-Suite">C-Suite</option>
																<option value="Sales">Sales</option>
																<option value="Marketing">Marketing</option>
																<option value="Technical Support">Technical Support</option>
																<option value="RCM">RCM</option>
																<option value="Finance">Finance</option>
																<option value="Business Development">Business Development</option>
																<option value="Software Engineering">Software Engineering</option>
																<option value="Human Resources">Human Resources</option>
																<option value="Training & Implementation">Training &amp; Implementation</option>
															</select>
														</div>
													</div>
													<div class="column large-5 small-12">
														<div class="description">Your department allows access to certain functions in Keystone.</div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> ROLE </h3>
														<div class="role"> Key Master </div>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> Your role defines your privileges in Keystone. </div>
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
					<section id="security" class="flow-section flow-section-border">
						<div class="security-wrapper">
							<div class="row">
								<div class="column large-3 medium-12">
									<h2 class="section-title mobile-edit">Security</h2>
								</div>
								<div class="column large-9 medium-12 security-content">
									<accordian class="closed">
										<div class="accordian-fade">
											<div class="security-details clearfix">
												<div class="row">
													<div class="column large-5">
														<h3 class="section-subtitle"> PASSWORD </h3>
														<button class="button button-link"> Set Password… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description">Password last changed March 14, 2017.</div>
													</div>
													<!--div class="column large-5">
														<h3 class="section-subtitle"> SECURITY QUESTIONS </h3>
														<button class="button button-link"> Change Security Questions… </button>
														<p>&nbsp;</p>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
													</div-->
												</div>
												<!--div class="row next-row">
													<div class="column large-5">
														<h3 class="section-subtitle"> RESCUE MOBILE NUMBER </h3>
														<div class="rescue-number">+1 (214) 519-4541</div>
													</div>
												</div-->
											</div>
											<div class="editable security-edit clearfix">
												<div class="editable-header mobile-only">
													<h2 class="mobile-section-title">Security</h2>
													<button class="button button-flat button-done button-done-mobile">Done</button>
												</div>
												<div class="mobile-section-wrap">
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> PASSWORD </h3>
														<button class="button button-link"> Set Password… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> Last changed . </div>
													</div>
													<div class="column large-2 section-edit">
														<button class="button button-flat button-done" onclick="saveSection()">Save</button>
													</div>
												</div>
												<!--div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> SECURITY QUESTIONS </h3>
														<button class="button button-link"> Change Security Questions… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> These questions are used to verify your identity or help reset your password. </div>
													</div>
												</div>
												<div class="row edit-row">
													<div class="column large-5 small-12">
														<h3 class="section-subtitle"> RESCUE MOBILE NUMBER </h3>
														<div class="rescue-number">+1 (214) 519-4541</div>
														<button class="button button-link"> Change Rescue Number… </button>
													</div>
													<div class="column large-5 small-12">
														<div class="description"> A verified mobile number can be used to help reset your password. </div>
													</div>
												</div-->
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
	<div class="popup-curtain <?php if ($standardView == "true") { } else { echo "hidden"; } ?>">
		<div class="popover-container welcome">
			<div class="popover popover-type-welcome">
				<div class="popover-inner-content">
					<div class="welcome-header-wrap">
						<h2 class="welcome-title">Welcome to Keystone</h2>
						<p class="welcome-intro">To start using Keystone, create your password and complete your profile.</p>
						<h2 class="keystone-user"> <span id="first_name" class="first_name">Jon</span> <span id="last_name" class="last_name">Miragliotta</span> <small id="username" class="keystone-username">Your Keystone&nbsp;ID is <span><strong class="username">jmiragliotta@bravadohealth.com</strong></span></small></h2>
					</div>
					<div class="row edit-row">
						<div class="column large-6 small-12">
							<form method="post" action="../account/account-view.php" id="reset-form">
									<h3 class="section-subtitle">PASSWORD</h3>
									<input type="password" class="form-control form-textbox" placeholder="password" id="pwd" name="pwd">
									<input type="password" class="form-control form-textbox" placeholder="confirm password" id="pwdConfirm" name="pwdConfirm">
								<!--div class="pop-container error signin-error">
									<div class="error pop-bottom" id="error-msg-container">
										<p id="error-msg"></p>
									</div>
								</div-->
							</form>
						</div>
						<div class="column large-6 small-12">
							<div class="password-strength">
								<div class="sub-heading">Your password must have:</div>
								<div class="error error-one">
										<icon class="icon-checkmark"></icon>
										<span class="message">8 or more characters</span>
										<error></error>
								</div>
								<div class="error error-two">
										<icon class="icon-checkmark"></icon>
										<span class="message">Uppercase &amp; lowercase letters</span>
										<error></error>
								</div>
								<div class="error error-three success">
										<icon class="icon-checkmark"></icon>
										<span class="message">At least one number</span>
										<error></error>
								</div>
							</div>
						</div>
					</div>
					<div class="row edit-row">
						<div class="column large-6 small-12">
							<h3 class="section-subtitle">OFFICE LOCATION</h3>
							<div class="select-wrapper">
								<select class="form-control">
									<option value="" selected="" disabled="">office location</option>
									<option value="Corporate">Corporate</option>
									<option value="Dallas, TX">Dallas, TX</option>
									<option value="Miami, FL">Miami, FL</option>
								</select>
							</div>
						</div>
						<div class="column large-6 small-12">
							<h3 class="section-subtitle">DEPARTMENT</h3>
							<div class="select-wrapper">
								<select class="form-control">
									<option value="" selected="" disabled="">department</option>
									<option value="Product Management">Product Management</option>
									<option value="C-Suite">C-Suite</option>
									<option value="Sales">Sales</option>
									<option value="Marketing">Marketing</option>
									<option value="Technical Support">Technical Support</option>
									<option value="RCM">RCM</option>
									<option value="Finance">Finance</option>
									<option value="Business Development">Business Development</option>
									<option value="Software Engineering">Software Engineering</option>
									<option value="Human Resources">Human Resources</option>
									<option value="Training & Implementation">Training &amp; Implementation</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row edit-row">
						<div class="column large-12 small-12 centered">
							<a href="../" class="large-link disabled">Continue</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>