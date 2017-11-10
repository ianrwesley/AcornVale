<?php
$pageTitle = "Welcome to Clara";
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
	<title>Welcome to Clara - Bravado Health</title>
</head>

<body class="setup-body welcome">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<div class="page-content">
			<div class="content-main">
				<div class="content-heading">
					<a href="create-facility.php" class="welcome-header"><h1>Welcome to Clara<sub class="clara-logo-tm">&trade;</sub></h1></a>
				</div>
				<a href="create-facility.php"><img class="clara-welcome-img" src="../global/images/setup/little-clara-welcome.png"></a>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link primary-action pull-right">
						<a href="create-facility.php" class="button-link">Get Started</a>
					</button>
				</div>
			</div>
			<p class="footnote">
				We emailed a copy of your receipt to <span><b>d•••••@ipresume.com</b></span>.
			</p>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>