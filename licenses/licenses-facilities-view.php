<?php
	$pageTitle = "License Management";
	$menuName = "Licenses";
	$moduleTitle = "Facilities";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clara <?php echo $pageTitle; ?> - Keystone</title>
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
    <section class="table-section-wrap">
		<table class="no-wrap table facilities">
			<thead>
				<tr>
					<td class="col-tool"><input type="checkbox" class="select-all"></td>
					<td class="col-facility-name col-large">
						<h3 class="section-subtitle">FACILITY NAME</h3><span class="sort asc"></span>
					</td>
					<td class="col-facility-id col-small">
						<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
					</td>
					<td class="col-facility-status col-small">
						<h3 class="section-subtitle">STATUS</h3><span class="sort none"></span>
					</td>
					<td class="col-facility-super-user col-small">
						<h3 class="section-subtitle">SUPER USER</h3><span class="sort none"></span>
					</td>
					<td class="col-facility-owner col-small">
						<h3 class="section-subtitle">KEY OWNER</h3><span class="sort none"></span>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/adams-memorial-hospital.php">Adams Memorial Hospital</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">AMH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Dr. Cameron Nelson</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/bay-area-regional-medical-center.php">Bay Area Regional Medical Center</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">BARMC-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="pop-wrapper" id="popwrapper-0">
							<div class="col-value"><a class="facility-super-user-link open-popover-link">Julie Shirley</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-0">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content medium">
												<div class="step-content" id="popover-0-step-0">
													<div class="pop-wrapper field-pop-wrapper">
														<div class="details">
															<h2 class="superuser-name popover-details">Julie Shirley</h2>
															<div class="popover-details">Clara ID: <span><a href="mailto:jshirley@barmc.us">jshirley@barmc.us</a></span></div>
															<div class="popover-details">Rescue Mobile Number: <span>281-525-6753</span></div>
														</div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right"><a href="users/julie-shirley.php">Go To Profile</a></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/beaumont-emergency-center.php">Beaumont Emergency Center</a><span class="pending-user-label">PENDING</span></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">BEC-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Pending</div>
					</td>
					<td class="col-facility-super-user novalue col-small">
						<div class="pop-wrapper" id="popwrapper-1">
							<div class="col-value"><a class="action-link open-popover-link">Add Super User</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-1">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content narrow add-user-step-0">
												<div class="step-content">
													<div class="pop-wrapper field-pop-wrapper">
														<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
														<div class="search-field-wrapper">
															<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup super user">
														</div>
														<div class="wrap-line">Or <a role="link" class="big-link link-inline-user-invite">invite a new Clara user…</a></div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Add Super User…</button>
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
					</td>
					<td class="col-facility-owner novalue col-small">
						<div class="pop-wrapper" id="popwrapper-3">
							<div class="col-value"><a class="action-link open-popover-link">Add Key Owner</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-3">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content narrow">
												<div class="step-content" id="popover-3-step-1">
													<div class="pop-wrapper field-pop-wrapper">
														<label class="textbox-label" for="facility-super-user">Search Key Owners:</label>
														<div class="search-field-wrapper">
															<input type="text" class="form-control form-textbox super-user nomargin" name="lookup-facility-key-owner" placeholder="lookup key owner">
														</div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Add Key Owner…</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/elite-care-emergency-room-of-plano.php">Elite Care Emergency Room of Plano</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">ECEROP-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Rhondee Damon</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr class="deactivated">
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/henry-county-hospital.php">Henry County Hospital</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">HCH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Deactivated</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Dr. James Cohen</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/la-paz-regional-hospital.php">La Paz Regional Hospital</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">LPRH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Ellen Metz</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/larkin-community-hospital-palm-springs.php">Larkin Community Hospital &#40;Palm Springs&#41;</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">LCH-PS-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Pending</div>
					</td>
					<td class="col-facility-super-user novalue col-small">
						<div class="pop-wrapper" id="popwrapper-2">
							<div class="col-value"><a class="action-link open-popover-link">Add Super User</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-2">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content narrow add-user-step-0">
												<div class="step-content">
													<div class="pop-wrapper field-pop-wrapper">
														<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
														<div class="search-field-wrapper">
															<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup super user">
														</div>
														<div class="wrap-line">Or <a role="link" class="big-link link-inline-user-invite">invite a new Clara user…</a></div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Add Super User…</button>
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
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/new-london-hospital.php">New London Hospital</a><span class="pending-user-label">PENDING</span></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">NLH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Pending</div>
					</td>
					<td class="col-facility-super-user novalue col-small">
						<div class="pop-wrapper" id="popwrapper-2">
							<div class="col-value"><a class="action-link open-popover-link">Add Super User</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-2">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content narrow add-user-step-0">
												<div class="step-content">
													<div class="pop-wrapper field-pop-wrapper">
														<label class="textbox-label" for="facility-super-user">Search existing Clara users:</label>
														<div class="search-field-wrapper">
															<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup super user">
														</div>
														<div class="wrap-line">Or <a role="link" class="big-link link-inline-user-invite">invite a new Clara user…</a></div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Add Super User…</button>
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
					</td>
					<td class="col-facility-owner novalue col-small">
						<div class="pop-wrapper" id="popwrapper-3">
							<div class="col-value"><a class="action-link open-popover-link">Add Key Owner</a></div>
							<div class="popover-content">
								<div class="popover-container" id="popover-3">
									<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
										<div class="popover popover-direction-bottom popover-align-center popover-type-action">
											<div class="popover-inner-content narrow">
												<div class="step-content" id="popover-3-step-1">
													<div class="pop-wrapper field-pop-wrapper">
														<label class="textbox-label" for="facility-super-user">Search Key Owners:</label>
														<div class="search-field-wrapper">
															<input type="text" class="form-control form-textbox super-user nomargin" name="lookup-facility-key-owner" placeholder="lookup key owner">
														</div>
													</div>
												</div>
												<div class="step-footer clearfix">
													<div class="toolbar-footer clearfix">
														<div class="button-group">
															<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
															<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Add Key Owner…</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/south-nassau-communities-hospital.php">South Nassau Communities Hospital</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">SNCH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Conner Brosnahan</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-facility-name col-large">
						<div class="col-value"><a href="facilities/west-calcasieu-cameron-hospital.php">West Calcasieu Cameron Hospital</a></div>
					</td>
					<td class="col-facility-id col-small">
						<div class="col-value">WCCH-0</div>
					</td>
					<td class="col-facility-status col-small">
						<div class="col-value">Live</div>
					</td>
					<td class="col-facility-super-user col-small">
						<div class="col-value"><a class="facility-super-user-link">Erica Sanchez</a></div>
					</td>
					<td class="col-facility-owner col-small">
						<div class="col-value">Jon Miragliotta</div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6">
						<div class="pull-right">Showing Records <span class="showing-row-count">1-10</span> of <span class="existing-row-count">54</span><span class="turn back"></span><span class="turn next"></span></div>
					</td>
				</tr>
			</tfoot>
		</table>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>