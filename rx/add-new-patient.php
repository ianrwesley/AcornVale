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
		<div id="pick-patient-content">
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
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="state" name="state">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="5" class="form-text lg-4" placeholder="zip code" name="zip code">
							</div>
							<div class="fieldgroup">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4" placeholder="birthday" name="birthday">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4 optional" placeholder="gender" name="gender">
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
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="allergies" name="allergies">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="home medications" name="home-meds">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="diagnoses or pre-existing conditions" name="diagnoses-conditions">
						</div>
					</div>
					<div class="column lg-6 app-right">
						<div class="flow-section">
							<h2 class="section-title">New Patient Confirmation</h2>
							<div class="fieldgroup">
								<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="email" name="email">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-6 optional" placeholder="phone" name="phone">
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