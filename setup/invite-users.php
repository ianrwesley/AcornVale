<?php
$pageTitle = "Invite Users";
$titleTag = "Manage Your Team";
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

<body class="setup-body flow-step-body invite-users">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Invite users</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-text">
					New <b>Pro CS</b> and <b>Pro</b> users will be required to pass identity verification.
					</div>
                </div>
			</div>
			<div class="flow-section">
				<div class="container-md centered">
					<div class="row">
						<div class="column lg-12 assign-license-type-wrap">
							<h2 class="license-type-header">Pro CS</h2>
							<textarea class="form-text form-text-area form-add-users" placeholder="Copy/paste email addresses"></textarea>
							<div class="assigned-value-wrap">
								Assign <span class="bold">0</span> of <span class="bold">3</span> unassigned <span class="bold">Pro CS</span> licenses
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column lg-12 assign-license-type-wrap">
							<h2 class="license-type-header">Pro</h2>
							<textarea class="form-text form-text-area form-add-users" placeholder="Copy/paste email addresses"></textarea>
							<div class="assigned-value-wrap">
								Assign <span class="bold">0</span> of <span class="bold">2</span> unassigned <span class="bold">Pro</span> licenses
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column lg-12 assign-license-type-wrap">
							<h2 class="license-type-header">Basic</h2>
							<textarea class="form-text form-text-area form-add-users" placeholder="Copy/paste email addresses"></textarea>
							<div class="assigned-value-wrap">
								Assign <span class="bold">0</span> of <span class="bold">1</span> unassigned <span class="bold">Basic</span> licenses
							</div>
						</div>
					</div>
					<div class="row">
						<textarea class="form-text form-text-area form-add-users" placeholder="Add a personal message (optional)"></textarea>
					</div>
				</div>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link secondary-action">
						<a href="../home/home-view.php">Skip</a>
					</button>
					<button type="button" role="link" class="button button-flat">
						<a href="finished.php">Invite Users</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>