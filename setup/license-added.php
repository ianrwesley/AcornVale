<?php
$pageTitle = "ID Proofing Successful";
$titleTag = "Your account is ready";
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

<body class="setup-body flow-step-body getting-started">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>You're done!</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-header description">
					Your account is ready to write e-prescriptions for controlled substances.
					</div>
               		<div class="intro-text">
					Access Clara from anywhere using your Clara&nbsp;ID, <b><?php echo $claraID; ?></b>.
					</div>
                </div>
			</div>
			<div class="flow-section identity-verification">
				<div class="container-xs centered">
					<div class="row">
						<div class="column lg-6">
							<div class="lg-selection-wrap">
								<h2 class="selection-header">Get Started</h2>
								<p class="selection-description">Start writing prescriptions.</p>
								<button class="button button-flat lg-12"><a href="../home/home-view.php">Get Started Now</a></button>
							</div>
						</div>
						<div class="column lg-6">
							<div class="lg-selection-wrap">
								<h2 class="selection-header">Add Users</h2>
								<p class="selection-description">Invite the rest of your team.</p>
								<button class="button button-flat lg-12"><a href="invite-users.php">Invite Users</a></button>
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