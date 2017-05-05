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
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="first name" name="first-name" value="<?php echo $firstName ?>">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="last name" name="last-name" value="<?php echo $lastName ?>">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4 optional" placeholder="middle name" name="middle-name" value="<?php echo $middleName ?>">
							</div>
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="address" name="address" value="<?php echo $address ?>">
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="city" name="city" value="<?php echo $city ?>">
								<div class="select-wrapper lg-4 <?php if ($state !== ""){ echo "selected"; } ?>">
									<select class="form-text">
										<option value="" <?php if ($state == ""){ echo "selected"; } ?> disabled>state</option>
										<option value="AL" <?php if ($state == "AL"){ echo "selected"; } ?>>Alabama</option>
										<option value="AK" <?php if ($state == "AK"){ echo "selected"; } ?>>Alaska</option>
										<option value="AZ" <?php if ($state == "AZ"){ echo "selected"; } ?>>Arizona</option>
										<option value="AR" <?php if ($state == "AR"){ echo "selected"; } ?>>Arkansas</option>
										<option value="CA" <?php if ($state == "CA"){ echo "selected"; } ?>>California</option>
										<option value="CO" <?php if ($state == "CO"){ echo "selected"; } ?>>Colorado</option>
										<option value="CT" <?php if ($state == "CT"){ echo "selected"; } ?>>Connecticut</option>
										<option value="DE" <?php if ($state == "DE"){ echo "selected"; } ?>>Delaware</option>
										<option value="DC" <?php if ($state == "DC"){ echo "selected"; } ?>>D.C.</option>
										<option value="FL" <?php if ($state == "FL"){ echo "selected"; } ?>>Florida</option>
										<option value="GA" <?php if ($state == "GA"){ echo "selected"; } ?>>Georgia</option>
										<option value="HI" <?php if ($state == "HI"){ echo "selected"; } ?>>Hawaii</option>
										<option value="ID" <?php if ($state == "ID"){ echo "selected"; } ?>>Idaho</option>
										<option value="IL" <?php if ($state == "IL"){ echo "selected"; } ?>>Illinois</option>
										<option value="IN" <?php if ($state == "IN"){ echo "selected"; } ?>>Indiana</option>
										<option value="IA" <?php if ($state == "IA"){ echo "selected"; } ?>>Iowa</option>
										<option value="KS" <?php if ($state == "KS"){ echo "selected"; } ?>>Kansas</option>
										<option value="KY" <?php if ($state == "KY"){ echo "selected"; } ?>>Kentucky</option>
										<option value="LA" <?php if ($state == "LA"){ echo "selected"; } ?>>Louisiana</option>
										<option value="ME" <?php if ($state == "ME"){ echo "selected"; } ?>>Maine</option>
										<option value="MD" <?php if ($state == "MD"){ echo "selected"; } ?>>Maryland</option>
										<option value="MA" <?php if ($state == "MA"){ echo "selected"; } ?>>Massachusetts</option>
										<option value="MI" <?php if ($state == "MI"){ echo "selected"; } ?>>Michigan</option>
										<option value="MN" <?php if ($state == "MN"){ echo "selected"; } ?>>Minnesota</option>
										<option value="MS" <?php if ($state == "MS"){ echo "selected"; } ?>>Mississippi</option>
										<option value="MO" <?php if ($state == "MO"){ echo "selected"; } ?>>Missouri</option>
										<option value="MT" <?php if ($state == "MT"){ echo "selected"; } ?>>Montana</option>
										<option value="NE" <?php if ($state == "NE"){ echo "selected"; } ?>>Nebraska</option>
										<option value="NV" <?php if ($state == "NV"){ echo "selected"; } ?>>Nevada</option>
										<option value="NH" <?php if ($state == "NH"){ echo "selected"; } ?>>New Hampshire</option>
										<option value="NJ" <?php if ($state == "NJ"){ echo "selected"; } ?>>New Jersey</option>
										<option value="NM" <?php if ($state == "NM"){ echo "selected"; } ?>>New Mexico</option>
										<option value="NY" <?php if ($state == "NY"){ echo "selected"; } ?>>New York</option>
										<option value="NC" <?php if ($state == "NC"){ echo "selected"; } ?>>North Carolina</option>
										<option value="ND" <?php if ($state == "ND"){ echo "selected"; } ?>>North Dakota</option>
										<option value="OH" <?php if ($state == "OH"){ echo "selected"; } ?>>Ohio</option>
										<option value="OK" <?php if ($state == "OK"){ echo "selected"; } ?>>Oklahoma</option>
										<option value="OR" <?php if ($state == "OR"){ echo "selected"; } ?>>Oregon</option>
										<option value="PA" <?php if ($state == "PA"){ echo "selected"; } ?>>Pennsylvania</option>
										<option value="RI" <?php if ($state == "RI"){ echo "selected"; } ?>>Rhode Island</option>
										<option value="SC" <?php if ($state == "SC"){ echo "selected"; } ?>>South Carolina</option>
										<option value="SD" <?php if ($state == "SD"){ echo "selected"; } ?>>South Dakota</option>
										<option value="TN" <?php if ($state == "TN"){ echo "selected"; } ?>>Tennessee</option>
										<option value="TX" <?php if ($state == "TX"){ echo "selected"; } ?>>Texas</option>
										<option value="UT" <?php if ($state == "UT"){ echo "selected"; } ?>>Utah</option>
										<option value="VT" <?php if ($state == "VT"){ echo "selected"; } ?>>Vermont</option>
										<option value="VA" <?php if ($state == "VA"){ echo "selected"; } ?>>Virginia</option>
										<option value="WA" <?php if ($state == "WA"){ echo "selected"; } ?>>Washington</option>
										<option value="WV" <?php if ($state == "WV"){ echo "selected"; } ?>>West Virginia</option>
										<option value="WI" <?php if ($state == "WI"){ echo "selected"; } ?>>Wisconsin</option>
										<option value="WY" <?php if ($state == "WY"){ echo "selected"; } ?>>Wyoming</option>
									</select>
								</div>
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="5" class="form-text lg-4" placeholder="zip code" name="zip code" value="<?php echo $zipCode ?>">
							</div>
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="birthday" name="birthday"  value="<?php echo $birthday ?>">
								<div class="select-wrapper lg-4 optional <?php if ($gender !== ""){ echo "selected"; } ?>">
									<select class="form-text">
										<option value="" <?php if ($gender == ""){ echo "selected"; } ?> disabled>gender</option>
										<option value="Male" <?php if ($gender == "Male"){ echo "selected"; } ?>>Male</option>
										<option value="Female" <?php if ($gender == "Female"){ echo "selected"; } ?>>Female</option>
									</select>
								</div>
								<div class="input-wrapper has-controls lg-4">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text optional has-controls" placeholder="weight" name="weight" value="<?php echo $weight ?>">
									<div class="control">
										<span>lbs</span>
									</div>
								</div>
							</div>
						</div>
						<div class="flow-section">
							<h2 class="section-title">Contact</h2>
							<div class="fieldgroup">
								<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="email" name="email" value="<?php echo $email ?>">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="phone" name="phone" value="<?php echo $phone ?>">
							</div>
						</div>
						<div class="flow-section">
							<h2 class="section-title">Medical History</h2>
							<div class="fieldcontrols">
								<input type="text" id="add-allergies" placeholder="<?php if ($allergies == "None"){ echo "No "; } ?>allergies" value="<?php echo $allergies ?>">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-allergies-check" class="checkbox" <?php if ($allergies == "None"){ echo "checked"; } ?>><label for="no-allergies-check">None</label>
								</div>
							</div>
							<div class="fieldcontrols">
								<input type="text" id="add-homemeds" placeholder="<?php if ($homemeds == "None"){ echo "No "; } ?>home medications" value="<?php if ($homemeds == "None"){ echo ""; } else {echo $homemeds;} ?>">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-homemeds-check" class="checkbox" <?php if ($homemeds == "None"){ echo "checked"; } ?>><label for="no-homemeds-check">None</label>
								</div>
							</div>
							<div class="fieldcontrols">
								<input type="text" id="add-diagnoses" placeholder="<?php if ($diagnoses == "None"){ echo "No "; } ?>diagnoses or pre-existing conditions" value="<?php if ($diagnoses == "None"){ echo ""; } else {echo $diagnoses;} ?>">
								<div class="checkbox-wrapper">
									<input type="checkbox" id="no-diagnoses-check" class="checkbox" <?php if ($diagnoses == "None"){ echo "checked"; } ?>><label for="no-diagnoses-check">None</label>
								</div>
							</div>
						</div>
					</div>