<?php
$pageTitle = "Choose License";
$titleTag = "Choose Your License Type";
$licenseType = $_GET[ "license" ];
$facilityCreated = "true";
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
				<h1>Choose your license type</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-text description">
					You purchased <span>Pro CS</span>, <span>Pro</span>, and <span>Basic</span> licenses for Clara.
					</div>
              		<div class="intro-text">
					Which license type will you use with your Clara ID &#40;<b><?php echo "$claraID"; ?></b>&#41;?
					</div>
                </div>
			</div>
			<div class="flow-section">
				<div class="container-md centered">
					<div class="row">
						<div class="column lg-4">
							<button class="lg-selection-wrap selection-wrap-btn">
								<h2 class="license-type">Basic</h2>
								<p class="description">For staff who manage patients and your account.</p>
							</button>
						</div>
						<div class="column lg-4">
							<button class="lg-selection-wrap selection-wrap-btn">
								<h2 class="license-type">Pro</h2>
								<p class="description">For clinicians who prescribe non&#8209;controlled substances.</p>
							</button>
						</div>
						<div class="column lg-4">
							<button class="lg-selection-wrap selection-wrap-btn">
								<h2 class="license-type">Pro CS</h2>
								<p class="description">For clinicians who prescribe controlled substances.</p>
							</button>
						</div>	
					</div>
				</div>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link primary-action pull-right">
						<a href="id-verification.php">Continue</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>