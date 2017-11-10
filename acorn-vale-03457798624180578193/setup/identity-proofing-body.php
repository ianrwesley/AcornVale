<?php
$pageTitle = "$titleTag";
$titleTag = "Identity Proofing";
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

<body class="setup-body flow-step-body identity-proofing">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Identity proofing</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-header description">
					You're almost there.
					</div>
               		<div class="intro-text">
					You need to be identity proofed before you can e-prescribe controlled substances with Clara.
					</div>
                </div>
			</div>
			<div class="flow-section identity-proofing">
				<div class="container-md centered">
					<div class="row">
						<div class="column lg-12">
							<div class="id-ver-section-wrap">
								<h2 class="id-ver-type">Identity Proofing</h2>
								<button class="button button-flat id-ver-launch-flow">Begin ID Proofing</button>
								<p class="description">Required for all prescribers.</p>
							</div>
						</div>	
					</div>
				</div>
			</div>