<?php
$pageTitle = "ID Verification";
$titleTag = "Verify Your Identity";
$licenseType = $_GET[ "license" ];
$facilityCreated = "true";
?>

<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="Author" content="Bravado Health">
	<meta name="Description" content="Access all Clara services with your Clara&nbsp;ID.">
	<meta name="Title" content="Clara">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../global/css/clara.global.css" type="text/css">
	<link rel="stylesheet" href="../global/css/clara.setup.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../global/js/clara.global.js"></script>
	<script type="text/javascript" src="../global/js/clara.setup.js"></script>
	<title><?php echo $titleTag; ?></title>
</head>

<body class="setup-body flow-step-body choose-license">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Verify your identity</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-header description">
					OK, you want to use a <b>Pro CS</b> license.
					</div>
               		<div class="intro-text">
					Before you start writing e-prescriptions for controlled substances, we need to verify some information about you.
					</div>
                </div>
			</div>
			<div class="flow-section identity-verification">
				<div class="container-id-verification centered">
					<form class="row">
						<div class="column lg-12">
							<div class="select-wrapper error-msg-wrapper lg-12 <?php if($verificationSuccess == "true" && $designation !== "") {echo "selected";} ?>">
								<select class="form-text">
									<option <?php if($verificationSuccess !== "true") {echo "selected";} ?> disabled>designation</option>
									<option <?php if($verificationSuccess == "true" && $designation == "MD") {echo "selected";} ?>>MD</option>
									<option <?php if($verificationSuccess == "true" && $designation == "DO") {echo "selected";} ?>>DO</option>
									<option <?php if($verificationSuccess == "true" && $designation == "NP") {echo "selected";} ?>>NP</option>
									<option <?php if($verificationSuccess == "true" && $designation == "PA") {echo "selected";} ?>>PA</option>
									<option <?php if($verificationSuccess == "true" && $designation == "HMD") {echo "selected";} ?>>HMD</option>
									<option <?php if($verificationSuccess == "true" && $designation == "ND") {echo "selected";} ?>>ND</option>
									<option <?php if($verificationSuccess == "true" && $designation == "OD") {echo "selected";} ?>>OD</option>
								</select>
							</div>
							<div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text field-icon" placeholder="mobile number" value="<?php if($verificationSuccess == "true") {echo $mobileNumber;} ?>">
								<icon class="icon-smartphone nofocus-icon"></icon><icon class="icon-smartphone hasfocus-icon"></icon>
								<span class="error-msg"></span>
							</div>
							<div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="state license number" value="<?php if($verificationSuccess == "true") {echo $stateLicenseNumber;} ?>">
								<span class="error-msg"></span>
							</div>
							<div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="NPI number" value="<?php if($verificationSuccess == "true") {echo $NPInumber;} ?>">
								<span class="error-msg"></span>
							</div>
							<div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="DEA number" value="<?php if($verificationSuccess == "true") {echo $DEAnumber;} ?>">
								<span class="error-msg"></span>
							</div>
							<div class="error-msg-wrapper lg-12">
								<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text optional" placeholder="state registration" value="<?php if($verificationSuccess == "true") {echo $stateRegistration;} ?>">
								<span class="error-msg"></span>
							</div>
						</div>
					</form>
				</div>
			</div>