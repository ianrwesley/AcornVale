<?php
$pageTitle = "Prescriptions";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Add New Patient - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../home/js/clara.home.js"></script>
	<link rel="stylesheet" href="../home/css/clara.home.css" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div id="add-patient-content" class="page-content">
			<div class="app-section-header">
				<div class="container-lg centered">
					<div class="app-header">
						<h1>Add new patient</h1>	
					</div>
				</div>
			</div>
			<div class="app-section clearfix">
				<div class="row">
					<div class="column lg-6 app-left">
						<div class="flow-section">
							<h2 class="section-title">Demographics</h2>
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="first name" name="first-name">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="last name" name="last-name">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4 optional" placeholder="middle name" name="middle-name">
							</div>
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="address" name="address">
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="city" name="city">
								<div class="select-wrapper lg-4">
									<select class="form-text">
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
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="5" class="form-text lg-4" placeholder="zip code" name="zip code">
							</div>
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="birthday" name="birthday">
								<div class="select-wrapper lg-4 optional">
									<select class="form-text">
										<option selected disabled value="">gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4 optional" placeholder="weight" name="weight">
							</div>
						</div>
						<div class="flow-section">
							<h2 class="section-title">Contact</h2>
							<div class="fieldgroup">
								<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="email" name="email">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="phone" name="phone">
							</div>
						</div>
						<div class="flow-section">
							<h2 class="section-title">Medical History</h2>
							<div class="fieldcontrols">
								<input type="text" id="add-allergies" placeholder="allergies" value="">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-allergies-check" class="checkbox"><label for="no-allergies-check">None</label>
								</div>
							</div>
							<div class="fieldcontrols">
								<input type="text" id="add-homemeds" placeholder="home medications" value="">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-homemeds-check" class="checkbox"><label for="no-homemeds-check">None</label>
								</div>
							</div>
							<div class="fieldcontrols">
								<input type="text" id="add-diagnoses" placeholder="diagnoses or pre-existing conditions" value="">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-diagnoses-check" class="checkbox"><label for="no-diagnoses-check">None</label>
								</div>
							</div>
						</div>
					</div>
					<div class="column lg-6 app-right">
						<div class="flow-section">
							<h2 class="section-title">New Patient Confirmation</h2>
							<div class="verify-info empty">
								<h3 class="header">Patient details are displayed here</h3>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action">
											<a href="../home/home-view.php">Cancel</a>
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											Write prescriptions…
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>