<?php
	$pageTitle = "Add a Clara Facility";
	$menuName = "Licenses";
	$moduleTitle = "Add Facilities";
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
    <section class="create-wizard create-facility step-1">
		<div class="step-header">
			<h3 class="step-number">Step 1 of <?php echo $totalAddFacilitySteps; ?></h3>
			<h1 class="step-label">Create the facility</h1>
		</div>
		<div class="step-wrapper">
			<div class="row">
				<div class="column large-6">
					<div class="step-content partial-step">
						<p class="step-description">All users with access to this facility will see this name.</p>
						<input type="text" class="form-control form-textbox wizard-field" name="facility-name" placeholder="facility name">
						<div class="pop-container form-field-error">
							<div class="error pop-bottom">
								<p class="error-msg">
									<error class="error">Facility name cannot be empty.</error>
								</p>
							</div>
						</div>
					</div>
					<div class="step-content partial-step">
						<p class="step-description">Enter the physical address for &#91;Facility&#93;.</p>
						<input type="text" class="form-control form-textbox wizard-field" name="facility-street-1" placeholder="street">
						<input type="text" class="form-control form-textbox wizard-field" name="facility-street-2" placeholder="street 2 (optional)">
						<input type="text" class="form-control form-textbox wizard-field city" name="facility-city" placeholder="city">
						<div class="single-line-wrapper">
							<div class="select-wrapper wizard state single-line">
								<select class="form-control wizard-field" name="facility-state">
									<option value="" selected="" disabled="">state</option>
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
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
							</div>
							<input type="text" maxlength="10" class="form-control form-textbox wizard-field zip-code single-line" name="facility-zip-code" placeholder="zip code">
						</div>
					</div>
				</div>
				<div class="column large-6">
					<div class="step-content partial-step">
						<h2 class="partial-step-label">Is [Facility] accredited by the Joint Commission?</h1>
						<p class="step-description">Verify hospital's accreditation status at <a href="https://www.qualitycheck.org/" target="_blank">qualitycheck.org</a>.</p>
						<fieldset id="jc-accredited-validate" class="radio-wrap wizard-field">
							<div class="label-option-wrap">
								<label class="radio-label">Yes</label>
								<input type="radio" value="Yes" name="jc-accredited-validate" class="radio-option">
							</div>
							<div class="label-option-wrap">
								<label class="radio-label">No</label>
								<input type="radio" value="No" name="jc-accredited-validate" class="radio-option">
							</div>
						</fieldset>
						<input type="text" class="form-control form-textbox wizard-field hco-id" name="facility-hco-id" placeholder="4 to 6-digit HCO ID" disabled="">
					</div>
					<div class="step-content partial-step">
						<h2 class="partial-step-label">Add the Medicare Provider ID for [Facility].</h1>
						<p class="step-description"><a href="https://data.medicare.gov/Hospital-Compare/Hospital-General-Information/xubh-q36u" target="_blank">Look up</a> a hospital's Medicare Provider ID.</p>
						<input type="text" class="form-control form-textbox wizard-field medicare-provider-id" name="facility-medicare-provider-id" placeholder="6-digit Medicare Provider ID">
					</div>
				</div>
			</div>
			<div class="button-next-wrapper">
				<button role="button" class="button button-flat button-next"><a href="licenses-add-facility-view-step-2.php" tabindex="0">Next</a></button>
			</div>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>