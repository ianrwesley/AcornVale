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
			<h3 class="step-number">Step 2 of <?php echo $totalAddUserSteps; ?></h3>
			<h1 class="step-label">Grant access to facilities</h1>
			<p class="step-description">Before users can do anything in Clara, they need access to at least one facility.</p>
		</div>
		<table class="no-wrap table users">
			<thead>
				<tr>
					<td class="col-tool"><input type="checkbox" class="select-all"></td>
					<td class="col-user-name col-large">
						<h3 class="section-subtitle">USER NAME</h3><span class="sort none"></span>
					</td>
					<td class="col-user-clara-id col-small">
						<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
					</td>
					<td class="col-user-prescriber col-small">
						<h3 class="section-subtitle">PRESCRIBER</h3><span class="sort asc"></span>
					</td>
					<td class="col-user-super col-has-popover col-small">
						<h3 class="section-subtitle">SUPER USER</h3><span class="sort none"></span>
					</td>
					<td class="col-user-facilities col-has-popover col-small">
						<h3 class="section-subtitle">FACILITIES</h3><span class="sort none"></span>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/robert-hyde.php">Dr. Robert Hyde</a></div>
					</td>
					<td class="col-user-clara-id col-small">
						<div class="col-value"><a role="link">robert.hyde@newlondonhospital.org</a></div>
					</td>
					<td class="col-user-prescriber col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Hyde</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Assign Super User Privileges…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
														</div>
													</div>
													<div class="step-footer clearfix">
														<div class="toolbar-footer clearfix">
															<div class="button-group pull-right">
																<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Assign Privileges…</button>
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
					</td>
					<td class="col-user-facilities col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Grant Access to Facility…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
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
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/james-cohen.php">Dr. James Cohen</a></div>
					</td>
					<td class="col-user-clara-id col-small">
						<div class="col-value"><a role="link">rockdocjc@aol.com</a></div>
					</td>
					<td class="col-user-prescriber col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Cohen</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Assign Super User Privileges…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
														</div>
													</div>
													<div class="step-footer clearfix">
														<div class="toolbar-footer clearfix">
															<div class="button-group pull-right">
																<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Assign Privileges…</button>
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
					</td>
					<td class="col-user-facilities col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Grant Access to Facility…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
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
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/ellen-metz.php">Ellen Metz</a></div>
					</td>
					<td class="col-user-clara-id col-small">
						<div class="col-value"><a role="link">emetz@lapazhospital.org</a></div>
					</td>
					<td class="col-user-prescriber col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Assign Super User Privileges…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
														</div>
													</div>
													<div class="step-footer clearfix">
														<div class="toolbar-footer clearfix">
															<div class="button-group pull-right">
																<button tabindex="0" type="button" class="button button-link last nav-cancel pull-right close-popover-link">Cancel</button>
																<button tabindex="0" type="button" class="button button-link first nav-action pull-right" disabled="">Assign Privileges…</button>
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
					</td>
					<td class="col-user-facilities col-has-popover col-small">
						<div class="col-value">
							<div class="pop-wrapper">
								<div class="col-value"><button type="button" class="button button-link button-compact open-popover-link">Grant Access to Facility…</button></div>
								<div class="popover-content">
									<div class="popover-container">
										<div class="popover-wrapper popover-wrapper-direction-bottom popover-wrapper-align-center narrow popover-inline">
											<div class="popover popover-direction-bottom popover-align-center popover-type-action">
												<div class="popover-inner-content narrow add-user-step-0">
													<div class="step-content">
														<div class="pop-wrapper field-pop-wrapper">
															<label class="textbox-label" for="facility-super-user">Search existing Clara facilities:</label>
															<div class="search-field-wrapper">
																<input type="text" class="form-control form-textbox super-user" name="lookup-facility-super-user" placeholder="lookup clara facility">
															</div>
															<div class="wrap-line">Or <a role="link" class="text-link" href="../licenses/licenses-add-facility-view-step-1.php">add a new facility…</a></div>
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
						</div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6">
						<div class="table-footer-padding"></div>
					</td>
				</tr>
			</tfoot>
		</table>
		<div class="button-next-wrapper">
			<button role="button" class="button button-flat button-back"><a href="licenses-add-user-view-step-1.php" tabindex="0">Back</a></button>
			<button role="button" class="button button-flat button-next button-done" disabled=""><a href="licenses-add-user-view-step-final.php" tabindex="0">Grant Access</a></button>
			<button role="button" class="button button-flat button-skip"><a href="licenses-add-user-view-step-final.php" tabindex="0">Skip</a></button>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>