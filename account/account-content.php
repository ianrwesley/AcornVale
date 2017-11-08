<div class="container main-wrapper">
	<account>
		<section id="account" class="flow-section">
			<div class="profile-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$accountSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 profile-content">
						<accordian class="closed">
							<div class="accordian-fade">
								<div class="profile-details clearfix">
									<div class="row">
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_ClaraID"; ?> </h3>
											<div class="username ellipsis">
												<?php echo "$claraID"; ?>
											</div>
										</div>
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Role"; ?> </h3>
											<div class="user-role"><?php echo "$userRole"; ?></div>
										</div>
										<div class="column lg-2 section-edit">
											<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
										</div>
									</div>
									<div class="row">
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Birthday"; ?> </h3>
											<div class="user-birthday">
												<?php echo "$userBirthday"; ?>
											</div>
										</div>
									</div>
								</div>
								<div class="editable profile-edit clearfix">
									<div class="editable-header mobile-only">
										<h2 class="mobile-section-title"><?php echo "$accountSectionTitle"; ?></h2>
										<button class="button button-flat button-done button-done-mobile">Done</button>
									</div>
									<div class="mobile-section-wrap">
									<div class="row edit-row tall-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_ClaraID"; ?> </h3>
											<div class="username ellipsis" id="usernameConfirmation">
												<?php echo "$claraID"; ?>
											</div>
											<?php include "popover-change-claraid.php"; ?>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Use your Clara&nbsp;ID to access all your Bravado Health products and services. </div>
										</div>
										<div class="column lg-2 section-edit">
											<button class="button button-flat button-done" onclick="saveProfile()">Save</button>
											<button class="button button-link button-cancel secondary-action">Cancel</button>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle" id="nameLabel"> NAME </h3>
											<div class="form-group change-name">
												<div class="error-msg-wrapper lg-12">
													<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="first-name form-text has-popover-error" type="text" value="<?php echo "$userFirstName"; ?>" placeholder="first name" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="Enter a first name.">
												</div>
												<div class="error-msg-wrapper lg-12">
													<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="middle-name form-text" type="text" value="<?php echo "$userMiddleName"; ?>" placeholder="middle name (optional)">
												</div>
												<div class="error-msg-wrapper lg-12">
													<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="last-name form-text has-popover-error" type="text" value="<?php echo "$userLastName"; ?>" placeholder="last name" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="Enter a last name.">
												</div>
											</div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Birthday"; ?> </h3>
											<div class="error-msg-wrapper lg-12">
												<input autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" class="first-name form-text has-popover-error has-error" type="text" value="<?php echo "$userBirthday"; ?>" placeholder="first name" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="Enter a valid birthday.">
											</div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your correct birth date is required to enable some Clara services. </div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Role"; ?> </h3>
											<div class="user-role"> <?php echo "$userRole"; ?> </div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> You are the facility owner.<br>To transfer ownership of <?php echo "$facilityName"; ?> to another Clara user, or to cancel the account, call 1-866-727-4789. </div>
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
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$securitySectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 security-content">
						<div class="security-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_Password"; ?> </h3>
									<?php include "popover-change-password.php"; ?>
								</div>
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_MobileNumber"; ?> </h3>
									<div class="mobile-number"><?php echo "$mobileNumber"; ?></div>
								</div>
								<div class="column lg-2 section-edit">
									<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
								</div>
							</div>
						</div>
						<div class="editable security-edit clearfix">
							<div class="editable-header mobile-only">
								<h2 class="mobile-section-title"><?php echo "$securitySectionTitle"; ?></h2>
								<button class="button button-flat button-done button-done-mobile">Done</button>
							</div>
							<div class="mobile-section-wrap">
							<div class="row edit-row">
								<div class="column lg-5 sm-12">
									<h3 class="section-subtitle"> <?php echo "$subTitle_Password"; ?> </h3>
									<?php include "popover-change-password.php"; ?>
								</div>
								<div class="column lg-5 sm-12">
									<div class="description">Last changed March 14, 2017.</div>
								</div>
								<div class="column lg-2 section-edit">
									<button class="button button-flat button-done" onclick="saveSection()">Save</button>
									<button class="button button-link button-cancel secondary-action">Cancel</button>
								</div>
							</div>
							<!--div class="row edit-row">
								<div class="column lg-5 sm-12">
									<h3 class="section-subtitle"> SECURITY QUESTIONS </h3>
									<button class="button button-link"> Change Security Questions… </button>
								</div>
								<div class="column lg-5 sm-12">
									<div class="description"> These questions are used to verify your identity or help reset your password. </div>
								</div>
							</div-->
							<div class="row edit-row">
								<div class="column lg-5 sm-12">
									<h3 class="section-subtitle"> <?php echo "$subTitle_MobileNumber"; ?> </h3>
									<div class="mobile-number"><?php echo "$mobileNumber"; ?></div>
									<button class="button button-link"> Change Mobile Number… </button>
								</div>
								<div class="column lg-5 sm-12">
									<div class="description"> A verified mobile number can be used to help reset your password. </div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="credentials" class="flow-section flow-section-border">
			<div class="credentials-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$credentialsSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 credentials-content">
						<div class="credentials-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_Designation"; ?> </h3>
									<div class="designation"> <?php echo "$designation"; ?> </div>
								</div>
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_StateLicense"; ?> </h3>
									<div class="state-license-number"> <?php echo "$stateLicenseNumber ($stateLicenseLocation)"; ?> </div>
								</div>
								<div class="column lg-2 section-edit">
									<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
								</div>
							</div>
							<div class="row next-row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_NPInumber"; ?> </h3>
									<div class="npi-number"> <?php echo "$NPInumber"; ?> </div>
								</div>
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_DEAnumber"; ?> </h3>
									<div class="dea-number"> <?php echo "$DEAnumber"; ?> </div>
								</div>
							</div>
						</div>
						<div class="editable credentials-edit clearfix">
							<div class="editable-header mobile-only">
								<h2 class="mobile-section-title"><?php echo "$credentialsSectionTitle"; ?></h2>
								<button class="button button-flat button-done button-done-mobile">Done</button>
							</div>
							<div class="mobile-section-wrap">
								<div class="row edit-row">
									<div class="column lg-5 sm-12">
										<h3 class="section-subtitle"> <?php echo "$subTitle_Designation"; ?> </h3>
										<div class="select-wrapper selected error-msg-wrapper lg-12">
											<select class="form-text selected">
												<option selected=""><?php echo "$designation"; ?></option>
												<option>DO</option>
												<option>NP</option>
												<option>PA</option>
												<option>HMD</option>
												<option>ND</option>
												<option>OD</option>
											</select>
										</div>
									</div>
									<div class="column lg-5 sm-12">
										<div class="description"> Your clinical designation determines your prescribing privileges in Clara. </div>
									</div>
									<div class="column lg-2 section-edit">
										<button class="button button-flat button-done" onclick="saveSection()">Save</button>
										<button class="button button-link button-cancel secondary-action">Cancel</button>
									</div>
								</div>
								<div class="row edit-row">
									<div class="column lg-5 sm-12">
										<h3 class="section-subtitle"> <?php echo "$subTitle_StateLicense"; ?> </h3>
										<div class="inline-update"><div class="state-license-number"> <?php echo "$stateLicenseNumber ($stateLicenseLocation)"; ?> </div></div>
										<button class="button button-link"> Change State License Number… </button>
									</div>
									<div class="column lg-5 sm-12">
										<div class="description"> A verified medical state license is required to prescribe in Clara. </div>
									</div>
								</div>
								<div class="row edit-row">
									<div class="column lg-5 sm-12">
										<h3 class="section-subtitle"> <?php echo "$subTitle_NPInumber"; ?> </h3>
										<div class="inline-update"><div class="npi-number"> <?php echo "$NPInumber"; ?> </div></div>
										<button class="button button-link"> Change NPI Number… </button>
									</div>
									<div class="column lg-5 sm-12">
										<div class="description"> A verified NPI number is required to prescribe in Clara. </div>
									</div>
								</div>
								<div class="row edit-row">
									<div class="column lg-5 sm-12">
										<h3 class="section-subtitle"> <?php echo "$subTitle_DEAnumber"; ?> </h3>
										<div class="inline-update"><div class="npi-number"> <?php echo "$DEAnumber"; ?> </div></div>
										<button class="button button-link"> Change DEA Number… </button>
									</div>
									<div class="column lg-5 sm-12">
										<div class="description"> A verified DEA number is required to prescribe controlled substances in Clara. </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--section id="payment" class="flow-section flow-section-border">
			<div class="payment-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$paymentSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 payment-content">
						<div class="payment-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_PaymentMethod"; ?> </h3>
									<div class="card-number-masked">
										<?php echo "$paymentCardType $paymentCardNumberMasked"; ?>
									</div>
									<button class="button button-link trigger-flow">Edit Payment Information…</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section-->
	</account>
</div>