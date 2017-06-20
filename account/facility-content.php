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
											<div class="user-role"> <?php echo "$facilityAddressFull"; ?> </div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility address… </div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Phone"; ?> </h3>
											<div class="user-role"> <?php echo "$facilityPhone"; ?> </div>
										</div>
										<div class="column lg-5 sm-12">
											<div class="description"> Your facility phone… </div>
										</div>
									</div>
									<div class="row edit-row">
										<div class="column lg-5 sm-12">
											<h3 class="section-subtitle"> <?php echo "$subTitle_Fax"; ?> </h3>
											<div class="user-role"> <?php echo "$facilityFax"; ?> </div>
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