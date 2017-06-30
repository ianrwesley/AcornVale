<?php
$pageTitle = "Prescriptions";
$subnavTitle = "Select a pharmacy";
$subnavProgress = 1;
$primaryButtonLabel = "Write prescriptions…";
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
		<?php include "rx-subnav.php"; ?>
		<div class="page-content select-pharmacy">
		<div class="app-section-body-wrapper">
			<div class="app-background-edit">&nbsp;</div>
			<div class="app-background-confirm">&nbsp;</div>
			<div class="app-section-body-scroll">
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<div class="pharmacy-search-form">
							<div class="header">
								<h2 class="section-title">Find pharmacies near…</h2>
								<div class="proximity-selection-wrap">
									<button type="button" class="button button-inverted <?php if ($rxFlowProgress == "5"){ echo "active"; } ?>">Patient</button>
									<button type="button" class="button button-inverted">Office</button>
								</div>
							</div>
							<!--div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text optional" placeholder="address" value="">
							</div>
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-4">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text optional" placeholder="city" value="">
								</div>
								<div class="select-wrapper error-msg-wrapper lg-4 <?php if ($proximityState !== null){ echo "selected"; } ?>">
									<select class="form-text optional">
										<option value="" <?php if ($proximityState == ""){ echo "selected"; } ?> disabled>state</option>
										<option value="AL" <?php if ($proximityState == "AL"){ echo "selected"; } ?>>Alabama</option>
										<option value="AK" <?php if ($proximityState == "AK"){ echo "selected"; } ?>>Alaska</option>
										<option value="AZ" <?php if ($proximityState == "AZ"){ echo "selected"; } ?>>Arizona</option>
										<option value="AR" <?php if ($proximityState == "AR"){ echo "selected"; } ?>>Arkansas</option>
										<option value="CA" <?php if ($proximityState == "CA"){ echo "selected"; } ?>>California</option>
										<option value="CO" <?php if ($proximityState == "CO"){ echo "selected"; } ?>>Colorado</option>
										<option value="CT" <?php if ($proximityState == "CT"){ echo "selected"; } ?>>Connecticut</option>
										<option value="DE" <?php if ($proximityState == "DE"){ echo "selected"; } ?>>Delaware</option>
										<option value="DC" <?php if ($proximityState == "DC"){ echo "selected"; } ?>>D.C.</option>
										<option value="FL" <?php if ($proximityState == "FL"){ echo "selected"; } ?>>Florida</option>
										<option value="GA" <?php if ($proximityState == "GA"){ echo "selected"; } ?>>Georgia</option>
										<option value="HI" <?php if ($proximityState == "HI"){ echo "selected"; } ?>>Hawaii</option>
										<option value="ID" <?php if ($proximityState == "ID"){ echo "selected"; } ?>>Idaho</option>
										<option value="IL" <?php if ($proximityState == "IL"){ echo "selected"; } ?>>Illinois</option>
										<option value="IN" <?php if ($proximityState == "IN"){ echo "selected"; } ?>>Indiana</option>
										<option value="IA" <?php if ($proximityState == "IA"){ echo "selected"; } ?>>Iowa</option>
										<option value="KS" <?php if ($proximityState == "KS"){ echo "selected"; } ?>>Kansas</option>
										<option value="KY" <?php if ($proximityState == "KY"){ echo "selected"; } ?>>Kentucky</option>
										<option value="LA" <?php if ($proximityState == "LA"){ echo "selected"; } ?>>Louisiana</option>
										<option value="ME" <?php if ($proximityState == "ME"){ echo "selected"; } ?>>Maine</option>
										<option value="MD" <?php if ($proximityState == "MD"){ echo "selected"; } ?>>Maryland</option>
										<option value="MA" <?php if ($proximityState == "MA"){ echo "selected"; } ?>>Massachusetts</option>
										<option value="MI" <?php if ($proximityState == "MI"){ echo "selected"; } ?>>Michigan</option>
										<option value="MN" <?php if ($proximityState == "MN"){ echo "selected"; } ?>>Minnesota</option>
										<option value="MS" <?php if ($proximityState == "MS"){ echo "selected"; } ?>>Mississippi</option>
										<option value="MO" <?php if ($proximityState == "MO"){ echo "selected"; } ?>>Missouri</option>
										<option value="MT" <?php if ($proximityState == "MT"){ echo "selected"; } ?>>Montana</option>
										<option value="NE" <?php if ($proximityState == "NE"){ echo "selected"; } ?>>Nebraska</option>
										<option value="NV" <?php if ($proximityState == "NV"){ echo "selected"; } ?>>Nevada</option>
										<option value="NH" <?php if ($proximityState == "NH"){ echo "selected"; } ?>>New Hampshire</option>
										<option value="NJ" <?php if ($proximityState == "NJ"){ echo "selected"; } ?>>New Jersey</option>
										<option value="NM" <?php if ($proximityState == "NM"){ echo "selected"; } ?>>New Mexico</option>
										<option value="NY" <?php if ($proximityState == "NY"){ echo "selected"; } ?>>New York</option>
										<option value="NC" <?php if ($proximityState == "NC"){ echo "selected"; } ?>>North Carolina</option>
										<option value="ND" <?php if ($proximityState == "ND"){ echo "selected"; } ?>>North Dakota</option>
										<option value="OH" <?php if ($proximityState == "OH"){ echo "selected"; } ?>>Ohio</option>
										<option value="OK" <?php if ($proximityState == "OK"){ echo "selected"; } ?>>Oklahoma</option>
										<option value="OR" <?php if ($proximityState == "OR"){ echo "selected"; } ?>>Oregon</option>
										<option value="PA" <?php if ($proximityState == "PA"){ echo "selected"; } ?>>Pennsylvania</option>
										<option value="RI" <?php if ($proximityState == "RI"){ echo "selected"; } ?>>Rhode Island</option>
										<option value="SC" <?php if ($proximityState == "SC"){ echo "selected"; } ?>>South Carolina</option>
										<option value="SD" <?php if ($proximityState == "SD"){ echo "selected"; } ?>>South Dakota</option>
										<option value="TN" <?php if ($proximityState == "TN"){ echo "selected"; } ?>>Tennessee</option>
										<option value="TX" <?php if ($proximityState == "TX"){ echo "selected"; } ?>>Texas</option>
										<option value="UT" <?php if ($proximityState == "UT"){ echo "selected"; } ?>>Utah</option>
										<option value="VT" <?php if ($proximityState == "VT"){ echo "selected"; } ?>>Vermont</option>
										<option value="VA" <?php if ($proximityState == "VA"){ echo "selected"; } ?>>Virginia</option>
										<option value="WA" <?php if ($proximityState == "WA"){ echo "selected"; } ?>>Washington</option>
										<option value="WV" <?php if ($proximityState == "WV"){ echo "selected"; } ?>>West Virginia</option>
										<option value="WI" <?php if ($proximityState == "WI"){ echo "selected"; } ?>>Wisconsin</option>
										<option value="WY" <?php if ($proximityState == "WY"){ echo "selected"; } ?>>Wyoming</option>
									</select>
								</div>
								<div class="error-msg-wrapper lg-4">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="zip code" value="">
								</div>
							</div-->
							<div class="fieldgroup">
								<div class="input-wrapper lg-4">
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-24-7"><label for="pharmacy-filter-24-7">24/7</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-EPCS"><label for="pharmacy-filter-EPCS">EPCS</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-long-term-care"><label for="pharmacy-filter-long-term-care">Long-term care</label>
									</div>
								</div>
								<div class="input-wrapper lg-3">
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-mail-order" <?php if ($rxFlowProgress == "5"){ echo "checked"; } ?>><label for="pharmacy-filter-mail-order">Mail order</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-retail"><label for="pharmacy-filter-retail">Retail</label>
									</div>
									<div class="option-wrap">
										<input type="checkbox" id="pharmacy-filter-specialty"><label for="pharmacy-filter-specialty">Specialty</label>
									</div>
								</div>
								<div class="input-wrapper lg-5">
									<label>Search within:</label>
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
									<!--div class="select-wrapper error-msg-wrapper lg-12 selected">
										<select class="form-text">
											<option>5 mi</option>
											<option>10 mi</option>
											<option>25 mi</option>
											<option>50 mi</option>
										</select>
									</div-->
								</div>
							</div>
						</div>
						<div class="pharmacy-results-wrap">
							<div class="row">
								<div class="column lg-5">
									<ul class="pharmacy-results-list">
										<li class="pharmacy-result">
											<span class="pharmacy-name">CVS Pharmacy</span>
											<div class="pharmacy-filters-wrap">
												<span class="pharmacy-filters">EPCS, Mail order</span>
											</div>
											<div class="pharmacy-address-wrap">
												<span class="pharmacy-street">1298 County Rd 1</span>
												<span class="pharmacy-location">Dunedin, FL 34698</span>
											</div>
											<div class="pharmacy-phone-wrap">
												<span class="pharmacy-phone">(727) 736-5686</span>
											</div>
										</li>
										<li class="pharmacy-result">
											<span class="pharmacy-name">Walmart Pharmacy</span>
											<div class="pharmacy-filters-wrap">
												<span class="pharmacy-filters">24/7, EPCS, Mail order, Retail</span>
											</div>
											<div class="pharmacy-address-wrap">
												<span class="pharmacy-street">2102 Main St</span>
												<span class="pharmacy-location">Dunedin, FL 34698</span>
											</div>
											<div class="pharmacy-phone-wrap">
												<span class="pharmacy-phone">(727) 431-0278</span>
											</div>
										</li>
										<li class="pharmacy-result <?php if ($rxFlowProgress == "5"){ echo "selected"; } ?>">
											<span class="pharmacy-name"><?php echo "$selectedPharmacyName"; ?></span>
											<div class="pharmacy-filters-wrap">
												<span class="pharmacy-filters"><?php echo "$selectedPharmacyFeatures"; ?></span>
											</div>
											<div class="pharmacy-address-wrap">
												<span class="pharmacy-street"><?php echo "$selectedPharmacyStreet"; ?></span>
												<span class="pharmacy-location"><?php echo "$selectedPharmacyLocation"; ?></span>
											</div>
											<div class="pharmacy-phone-wrap">
												<span class="pharmacy-phone"><?php echo "$selectedPharmacyPhone"; ?></span>
											</div>
										</li>
										<li class="pharmacy-result">
											<span class="pharmacy-name">Pinellas Compounding Pharmacy</span>
											<div class="pharmacy-filters-wrap">
												<span class="pharmacy-filters">Mail order, Specialty</span>
											</div>
											<div class="pharmacy-address-wrap">
												<span class="pharmacy-street">1611 Main St</span>
												<span class="pharmacy-location">Dunedin, FL 34698</span>
											</div>
											<div class="pharmacy-phone-wrap">
												<span class="pharmacy-phone">(727) 239-0300</span>
											</div>
										</li>
										<li class="pharmacy-result">
											<span class="pharmacy-name">Walgreens Pharmacy</span>
											<div class="pharmacy-filters-wrap">
												<span class="pharmacy-filters">EPCS, Mail order, Retail</span>
											</div>
											<div class="pharmacy-address-wrap">
												<span class="pharmacy-street">1477 Main St</span>
												<span class="pharmacy-location">Dunedin, FL 34698</span>
											</div>
											<div class="pharmacy-phone-wrap">
												<span class="pharmacy-phone">(727) 733-3176</span>
											</div>
										</li>
									</ul>
								</div>
								<div class="column lg-7">
									<div class="pharmacy-results-map">
										<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=Pharmacies%20near%201501%20San%20Christopher%20Drive%2C%20Dunedin%2C%20FL&key=AIzaSyAA8in-9pbERQrj9NVr9hgqKAQFD3Ho810"></iframe>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<script type="text/javascript">
						$(window).on('resize',function() {
							$('.pharmacy-results-wrap').css("height", $(window).height() - 382);
						}).trigger('resize');
					</script>