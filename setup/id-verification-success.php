<?php
$pageTitle = "ID Verification";
$titleTag = "Verify Your Identity";
$licenseType = $_GET[ "license" ];
$facilityCreated = "true";
$verificationSuccess = "true";
include "../variables/user-variables/variable-test-user-profile.php";
include "../variables/user-variables/variable-test-facility-profile.php";
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
				<h1>Verification successful</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<icon class="icon-checkmark success xl"></icon>
                </div>
			</div>
			<div class="flow-section identity-verification">
				<div class="container-id-verification centered">
					<form class="section-wrap success">
						<div class="row">
							<div class="column lg-12">
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $userFullName;} ?></span>
							</div>
						</div>
						<div class="row">
							<div class="column lg-6">
								<h3 class="section-subtitle">DESIGNATION</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $designation;} ?></span>
							</div>
							<div class="column lg-6">
								<h3 class="section-subtitle">MOBILE NUMBER</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $mobileNumber;} ?></span>
							</div>
						</div>
						<div class="row">
							<div class="column lg-6">
								<h3 class="section-subtitle">STATE LICENSE</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $stateLicenseNumber;} ?></span>
							</div>
							<div class="column lg-6">
								<h3 class="section-subtitle">NPI NUMBER</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $NPInumber;} ?></span>
							</div>
						</div>
						<div class="row">
							<div class="column lg-6">
								<h3 class="section-subtitle">DEA NUMBER</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $DEAnumber;} ?></span>
							</div>
							<div class="column lg-6">
								<h3 class="section-subtitle">STATE REGISTRATION</h3>
								<span class="id-ver-value"><?php if($verificationSuccess == "true") {echo $stateRegistration;} ?></span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link primary-action">
						<a href="identity-proofing.php">Continue</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>