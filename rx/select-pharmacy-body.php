<?php
$pageTitle = "Prescriptions";
$subnavTitle = "Select a pharmacy";
$subnavProgress = 1;
$primaryButtonLabel = "Save pharmacy…";
$confirmInfoTitle = "New Patient";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Select a Pharmacy - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/switchery.js"></script>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
</head>

<body class="rx-app app-flow">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<!--?php include "rx-subnav.php"; ?-->
		<div class="page-content select-pharmacy">
		<div class="app-section-body-wrapper">
			<div class="app-background-edit">&nbsp;</div>
			<div class="app-background-confirm">  &nbsp;</div>
			<div class="app-section-body-scroll">
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<div class="pharmacy-search-form">
						<h2 class="section-title">Pharmacy Search</h2>
							<div class="proximity-selection-wrap">
								<label class="field-label">Search near…</label>
								<div class="fieldgroup">
									<div class="input-wrapper lg-2">
										<button type="button" class="button button-inverted form-text <?php if ($rxFlowProgress == "5"){ echo "active"; } ?>">patient</button>
										<error></error>
									</div>
									<div class="input-wrapper lg-2">
										<button type="button" class="button button-inverted form-text">office</button>
										<error></error>
									</div>
									<div class="error-msg-wrapper lg-4">
										<input type="text" class="form-text" placeholder="zip code">
										<error></error>
									</div>
								</div>
							</div>
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-7 pharmacy-name-wrapper">
									<input type="text" class="form-text pharmacy-name" placeholder="pharmacy name">
								</div>
								<div class="input-wrapper lg-5 proximity-search-wrapper">
									<label class="field-label">Search within…</label>
									<input type="text"
									data-provide="slider"
									data-slider-ticks="[1, 2, 3, 4]"
									data-slider-ticks-snap-bounds="10"
									data-slider-ticks-labels='["5 mi", "10 mi", "25 mi", "50 mi"]'
									data-slider-ticks-positions="[0, 22, 55, 100]"
									data-slider-min="1"
									data-slider-max="4"
									data-slider-step="1"
									data-slider-value="2"
									data-slider-tooltip="hide" />
								</div>
							</div>
							<div class="fieldgroup filtergroup">
								<div class="input-wrapper lg-12">
									<button type="button" class="button-menu-item button button-inverted">24/7<icon class="icon-checkmark"></icon></button>
									<button type="button" class="button-menu-item button button-inverted">EPCS<icon class="icon-checkmark"></icon></button>
									<button type="button" class="button-menu-item button button-inverted">Specialty<icon class="icon-checkmark"></icon></button>
									<button type="button" class="button-menu-item button button-inverted">Long-term care<icon class="icon-checkmark"></icon></button>
									
								</div>
								<!--div class="input-wrapper lg-3 shift-up">
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-24-7"><label for="pharmacy-filter-24-7">24/7</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-EPCS"><label for="pharmacy-filter-EPCS">EPCS</label>
									</div>
								</div>
								<div class="input-wrapper lg-4 shift-up"-->
									<!--div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-mail-order" <?php if ($rxFlowProgress == "5"){ echo "checked"; } ?>><label for="pharmacy-filter-mail-order">Mail order</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-retail"><label for="pharmacy-filter-retail">Retail</label>
									</div-->
									<!--div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-long-term-care"><label for="pharmacy-filter-long-term-care">Long-term care</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-specialty"><label for="pharmacy-filter-specialty">Specialty</label>
									</div>
								</div-->
								<div class="error-msg-wrapper lg-12">
									<div class="button-group">
										<button type="button" class="button-menu-item button button-inverted">N/A<icon class="icon-checkmark"></icon></button>
										<button type="button" class="button-menu-item button button-inverted">Retail<icon class="icon-checkmark"></icon></button>
										<button type="button" class="button-menu-item button button-inverted" <?php if ($rxFlowProgress == "5"){ echo "autofocus"; } ?>>Mail order<icon class="icon-checkmark"></icon></button>
									</div>
								</div>
							</div>
						</div>
						<div class="pharmacy-results-wrap">
							<div class="row">
								<div class="column lg-12">
									<ul class="pharmacy-results-list">
									<?php if ($rxFlowProgress == "5"){ echo '
										<li class="pharmacy-result clearfix">
											<div class="pharmacy-main-info-wrap lg-7">
												<span class="pharmacy-name">CVS Pharmacy</span>
												<div class="pharmacy-filters-wrap">
													<span class="pharmacy-filters">EPCS, Mail order</span>
												</div>
												<div class="pharmacy-address-wrap">
													<span class="pharmacy-street">1298 County Rd 1</span>
													<span class="pharmacy-location">Dunedin, FL 34698</span>
												</div>
											</div>
											<div class="pharmacy-contact-wrap lg-5">
												<span class="pharmacy-phone">(727) 736-5686</span>
												<span class="pharmacy-fax">(727) 736-5687</span>
											</div>
										</li>
										<li class="pharmacy-result clearfix">
											<div class="pharmacy-main-info-wrap lg-7">
												<span class="pharmacy-name">Walmart Pharmacy</span>
												<div class="pharmacy-filters-wrap">
													<span class="pharmacy-filters">24/7, EPCS, Mail order, Retail</span>
												</div>
												<div class="pharmacy-address-wrap">
													<span class="pharmacy-street">2102 Main St</span>
													<span class="pharmacy-location">Dunedin, FL 34698</span>
												</div>
											</div>
											<div class="pharmacy-contact-wrap lg-5">
												<span class="pharmacy-phone">(727) 431-0278</span>
												<span class="pharmacy-fax">(727) 431-0279</span>
											</div>
										</li>
										<li class="pharmacy-result clearfix selected">
											<div class="pharmacy-main-info-wrap lg-7">
												<span class="pharmacy-name">' . $selectedPharmacyName . '</span>
												<div class="pharmacy-filters-wrap">
													<span class="pharmacy-filters">' . $selectedPharmacyFeatures . '</span>
												</div>
												<div class="pharmacy-address-wrap">
													<span class="pharmacy-street">' . $selectedPharmacyStreet . '</span>
													<span class="pharmacy-location">' . $selectedPharmacyLocation . '</span>
												</div>
											</div>
											<div class="pharmacy-contact-wrap lg-5">
												<span class="pharmacy-phone">' . $selectedPharmacyPhone . '</span>
												<span class="pharmacy-fax">' . $selectedPharmacyFax . '</span>
											</div>
										</li>
										<li class="pharmacy-result clearfix">
											<div class="pharmacy-main-info-wrap lg-7">
												<span class="pharmacy-name">Pinellas Compounding Pharmacy</span>
												<div class="pharmacy-filters-wrap">
													<span class="pharmacy-filters">Mail order, Specialty</span>
												</div>
												<div class="pharmacy-address-wrap">
													<span class="pharmacy-street">1611 Main St</span>
													<span class="pharmacy-location">Dunedin, FL 34698</span>
												</div>
											</div>
											<div class="pharmacy-contact-wrap lg-5">
												<span class="pharmacy-phone">(727) 239-0300</span>
												<span class="pharmacy-fax">(727) 239-0301</span>
											</div>
										</li>
										<li class="pharmacy-result clearfix">
											<div class="pharmacy-main-info-wrap lg-7">
												<span class="pharmacy-name">Walgreens Pharmacy</span>
												<div class="pharmacy-filters-wrap">
													<span class="pharmacy-filters">EPCS, Mail order, Retail</span>
												</div>
												<div class="pharmacy-address-wrap">
													<span class="pharmacy-street">1477 Main St</span>
													<span class="pharmacy-location">Dunedin, FL 34698</span>
												</div>
											</div>
											<div class="pharmacy-contact-wrap lg-5">
												<span class="pharmacy-phone">(727) 733-3176</span>
												<span class="pharmacy-fax">(727) 733-3177</span>
											</div>
										</li>'; } else { 
										echo '<div class="no-results-wrap"><p class="no-results">Search results display here</p></div>'; }
										?>
									</ul>
								</div>
								<!-- class="column lg-7">
									<div class="pharmacy-results-map">
										<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Pharmacies%20near%201501%20San%20Christopher%20Drive%2C%20Dunedin%2C%20FL&key=AIzaSyAA8in-9pbERQrj9NVr9hgqKAQFD3Ho810"></iframe>
									</div>
								</div-->
							</div>
						</div>	
					</div>
					<script type="text/javascript">
						$(window).on('resize',function() {
							$('.pharmacy-results-wrap').css("height", $(window).height() - 482);
						}).trigger('resize');
					</script>