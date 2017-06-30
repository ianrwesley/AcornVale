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
				<div class="container-md centered">
					<div class="row">
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
							<h2 class="id-ver-type">Designation</h2>
							<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">' . $designation . '</span></div><icon class="icon-checkmark success"></icon>';}
								else {echo '<div class="select-wrapper lg-12">
									<select class="form-text">
										<option selected disabled>designation</option>
										<option>MD</option>
										<option>DO</option>
										<option>NP</option>
										<option>PA</option>
										<option>HMD</option>
										<option>ND</option>
										<option>OD</option>
									</select>
								</div>
								<p class="description">Required for all prescribers.</p>
								<button class="button button-link button-compact save-button">Save</button>';}
							?>
							</div>
						</div>
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
								<h2 class="id-ver-type">Mobile Number</h2>
								<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">' . $mobileNumber . '</span></div><icon class="icon-checkmark success"></icon>';}
									else {echo '<div class="error-msg-wrapper lg-12 has-icon">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text field-icon" placeholder="mobile phone">
									<icon class="icon-smartphone nofocus-icon"></icon><icon class="icon-smartphone hasfocus-icon"></icon>
									</div>
									<p class="description">Required for all prescribers.</p>
									<button class="button button-link button-compact save-button">Save</button>';}
								?>
							</div>
						</div>
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
								<h2 class="id-ver-type">ID Proofing</h2>
								<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">Passed</span></div><icon class="icon-checkmark success"></icon>';}
									else {echo '<button class="button button-link id-ver-launch-flow">Begin ID Proofing</button>
									<p class="description">Required for all prescribers.</p>';}
								?>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
								<h2 class="id-ver-type">State License</h2>
								<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">' . $stateLicenseNumber . '</span></div><icon class="icon-checkmark success"></icon>';}
									else {echo '<button class="button button-link id-ver-launch-flow">Add State License</button>
									<p class="description">Required for all prescribers.</p>';}
								?>
							</div>
						</div>
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
								<h2 class="id-ver-type">NPI Number</h2>
								<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">' . $NPInumber . '</span></div><icon class="icon-checkmark success"></icon>';}
									else {echo '<button class="button button-link id-ver-launch-flow">Add NPI Number</button>
									<p class="description">Required for all prescribers.</p>';}
								?>
							</div>
						</div>
						<div class="column lg-4">
							<div class="id-ver-section-wrap <?php if($verificationSuccess == "true") {echo "success";} ?>">
								<h2 class="id-ver-type">DEA Number</h2>
								<?php if($verificationSuccess == "true") {echo '<div class="id-ver-value-wrap"><span class="id-ver-value">' . $DEAnumber . '</span></div><icon class="icon-checkmark success"></icon>';}
									else {echo '<button class="button button-link id-ver-launch-flow">Add DEA Number</button>
									<p class="description">Required for prescribers of controlled substances.</p>';}
								?>
							</div>
						</div>	
					</div>
				</div>
			</div>