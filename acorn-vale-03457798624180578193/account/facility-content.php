<div class="container main-wrapper">
	<facility>
		<section id="facility" class="flow-section">
			<div class="facility-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$facilitySectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 facility-content">
						<accordian class="closed">
							<div class="accordian-fade">
								<div class="facility-details clearfix">
									<div class="row">
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_FacilityName"; ?> </h3>
											<div class="username ellipsis">
												<?php echo "$facilityName"; ?>
											</div>
										</div>
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Address"; ?> </h3>
											<div class="user-role"><?php echo "$facilityAddressFull"; ?></div>
										</div>
										<div class="column lg-2 section-edit">
											<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
										</div>
									</div>
									<div class="row next-row">
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Phone"; ?> </h3>
											<div class="username ellipsis">
												<?php echo "$facilityPhone"; ?>
											</div>
										</div>
										<div class="column lg-5">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Fax"; ?> </h3>
											<div class="user-role"><?php echo "$facilityFax"; ?></div>
										</div>
									</div>
								</div>
								<div class="editable facility-edit clearfix">
									<div class="editable-header mobile-only">
										<h2 class="mobile-section-title"><?php echo "$facilitySectionTitle"; ?></h2>
										<button class="button button-flat button-done button-done-mobile">Done</button>
									</div>
									<div class="mobile-section-wrap">
									<div class="row edit-row tall-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_FacilityName"; ?> </h3>
											<div class="username ellipsis" id="usernameConfirmation">
												<?php echo "$facilityName"; ?>
											</div>
											<button class="button button-link trigger-flow">Change Facility Name…</button>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility name… </div>
										</div>
										<div class="column lg-2 section-edit">
											<button class="button button-flat button-done" onclick="saveProfile()">Save</button>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Address"; ?> </h3>
											<div class="error-msg-wrapper lg-12">
												<input class="form-text" placeholder="address" value="<?php echo "$facilityStreet"; ?>">
											</div>
											<div class="fieldgroup">
												<div class="error-msg-wrapper lg-4">
													<input class="form-text" placeholder="city" value="<?php echo "$facilityCity"; ?>">
												</div>
												<div class="error-msg-wrapper select-wrapper <?php if ($facilityState !== ""){ echo "selected"; } ?> lg-4">
													<select class="form-text">
														<option value="" <?php if ($facilityState == ""){ echo "selected"; } ?> disabled>state</option>
														<option value="AL" <?php if ($facilityState == "AL"){ echo "selected"; } ?>>Alabama</option>
														<option value="AK" <?php if ($facilityState == "AK"){ echo "selected"; } ?>>Alaska</option>
														<option value="AZ" <?php if ($facilityState == "AZ"){ echo "selected"; } ?>>Arizona</option>
														<option value="AR" <?php if ($facilityState == "AR"){ echo "selected"; } ?>>Arkansas</option>
														<option value="CA" <?php if ($facilityState == "CA"){ echo "selected"; } ?>>California</option>
														<option value="CO" <?php if ($facilityState == "CO"){ echo "selected"; } ?>>Colorado</option>
														<option value="CT" <?php if ($facilityState == "CT"){ echo "selected"; } ?>>Connecticut</option>
														<option value="DE" <?php if ($facilityState == "DE"){ echo "selected"; } ?>>Delaware</option>
														<option value="DC" <?php if ($facilityState == "DC"){ echo "selected"; } ?>>D.C.</option>
														<option value="FL" <?php if ($facilityState == "FL"){ echo "selected"; } ?>>Florida</option>
														<option value="GA" <?php if ($facilityState == "GA"){ echo "selected"; } ?>>Georgia</option>
														<option value="HI" <?php if ($facilityState == "HI"){ echo "selected"; } ?>>Hawaii</option>
														<option value="ID" <?php if ($facilityState == "ID"){ echo "selected"; } ?>>Idaho</option>
														<option value="IL" <?php if ($facilityState == "IL"){ echo "selected"; } ?>>Illinois</option>
														<option value="IN" <?php if ($facilityState == "IN"){ echo "selected"; } ?>>Indiana</option>
														<option value="IA" <?php if ($facilityState == "IA"){ echo "selected"; } ?>>Iowa</option>
														<option value="KS" <?php if ($facilityState == "KS"){ echo "selected"; } ?>>Kansas</option>
														<option value="KY" <?php if ($facilityState == "KY"){ echo "selected"; } ?>>Kentucky</option>
														<option value="LA" <?php if ($facilityState == "LA"){ echo "selected"; } ?>>Louisiana</option>
														<option value="ME" <?php if ($facilityState == "ME"){ echo "selected"; } ?>>Maine</option>
														<option value="MD" <?php if ($facilityState == "MD"){ echo "selected"; } ?>>Maryland</option>
														<option value="MA" <?php if ($facilityState == "MA"){ echo "selected"; } ?>>Massachusetts</option>
														<option value="MI" <?php if ($facilityState == "MI"){ echo "selected"; } ?>>Michigan</option>
														<option value="MN" <?php if ($facilityState == "MN"){ echo "selected"; } ?>>Minnesota</option>
														<option value="MS" <?php if ($facilityState == "MS"){ echo "selected"; } ?>>Mississippi</option>
														<option value="MO" <?php if ($facilityState == "MO"){ echo "selected"; } ?>>Missouri</option>
														<option value="MT" <?php if ($facilityState == "MT"){ echo "selected"; } ?>>Montana</option>
														<option value="NE" <?php if ($facilityState == "NE"){ echo "selected"; } ?>>Nebraska</option>
														<option value="NV" <?php if ($facilityState == "NV"){ echo "selected"; } ?>>Nevada</option>
														<option value="NH" <?php if ($facilityState == "NH"){ echo "selected"; } ?>>New Hampshire</option>
														<option value="NJ" <?php if ($facilityState == "NJ"){ echo "selected"; } ?>>New Jersey</option>
														<option value="NM" <?php if ($facilityState == "NM"){ echo "selected"; } ?>>New Mexico</option>
														<option value="NY" <?php if ($facilityState == "NY"){ echo "selected"; } ?>>New York</option>
														<option value="NC" <?php if ($facilityState == "NC"){ echo "selected"; } ?>>North Carolina</option>
														<option value="ND" <?php if ($facilityState == "ND"){ echo "selected"; } ?>>North Dakota</option>
														<option value="OH" <?php if ($facilityState == "OH"){ echo "selected"; } ?>>Ohio</option>
														<option value="OK" <?php if ($facilityState == "OK"){ echo "selected"; } ?>>Oklahoma</option>
														<option value="OR" <?php if ($facilityState == "OR"){ echo "selected"; } ?>>Oregon</option>
														<option value="PA" <?php if ($facilityState == "PA"){ echo "selected"; } ?>>Pennsylvania</option>
														<option value="RI" <?php if ($facilityState == "RI"){ echo "selected"; } ?>>Rhode Island</option>
														<option value="SC" <?php if ($facilityState == "SC"){ echo "selected"; } ?>>South Carolina</option>
														<option value="SD" <?php if ($facilityState == "SD"){ echo "selected"; } ?>>South Dakota</option>
														<option value="TN" <?php if ($facilityState == "TN"){ echo "selected"; } ?>>Tennessee</option>
														<option value="TX" <?php if ($facilityState == "TX"){ echo "selected"; } ?>>Texas</option>
														<option value="UT" <?php if ($facilityState == "UT"){ echo "selected"; } ?>>Utah</option>
														<option value="VT" <?php if ($facilityState == "VT"){ echo "selected"; } ?>>Vermont</option>
														<option value="VA" <?php if ($facilityState == "VA"){ echo "selected"; } ?>>Virginia</option>
														<option value="WA" <?php if ($facilityState == "WA"){ echo "selected"; } ?>>Washington</option>
														<option value="WV" <?php if ($facilityState == "WV"){ echo "selected"; } ?>>West Virginia</option>
														<option value="WI" <?php if ($facilityState == "WI"){ echo "selected"; } ?>>Wisconsin</option>
														<option value="WY" <?php if ($facilityState == "WY"){ echo "selected"; } ?>>Wyoming</option>
													</select>
												</div>
												<div class="error-msg-wrapper lg-4">
													<input class="form-text" placeholder="zip code" value="<?php echo "$facilityZip"; ?>">
												</div>
											</div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility address… </div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Phone"; ?> </h3>
											<div class="error-msg-wrapper lg-12">
												<input class="form-text" placeholder="phone" value="<?php echo "$facilityPhone"; ?>">
											</div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility phone… </div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Fax"; ?> </h3>
											<div class="error-msg-wrapper lg-12">
												<input class="form-text" placeholder="phone" value="<?php echo "$facilityFax"; ?>">
											</div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility fax… </div>
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
		<section id="settings" class="flow-section flow-section-border">
			<div class="settings-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$settingsSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 settings-content">
						<div class="settings-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_PediatricDosingThreshold"; ?> </h3>
									<button class="button button-link trigger-flow">Change Age Limit…</button>
								</div>
								<div class="column lg-5">
								</div>
								<div class="column lg-2 section-edit">
									<button class="button button-link button-compact button-edit" onclick="editSection()">Edit</button>
								</div>
							</div>
						</div>
						<div class="editable settings-edit clearfix">
							<div class="editable-header mobile-only">
								<h2 class="mobile-section-title"><?php echo "$settingsSectionTitle"; ?></h2>
								<button class="button button-flat button-done button-done-mobile">Done</button>
							</div>
							<div class="mobile-section-wrap">
							<div class="row edit-row">
								<div class="column lg-5 sm-12">
									<h3 class="section-subtitle"> <?php echo "$subTitle_PediatricDosingThreshold"; ?> </h3>
									<button class="button button-link trigger-flow">Change Age Limit…</button>
								</div>
								<div class="column lg-5 sm-12">
									<div class="description">The pediatric dosing threshold is the maximum age of a patient for which the pediatric dosing calculator will appear.</div>
								</div>
								<div class="column lg-2 section-edit">
									<button class="button button-flat button-done" onclick="saveSection()">Save</button>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</facility>
</div>