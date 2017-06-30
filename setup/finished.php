<?php
$pageTitle = "Welcome to Clara";
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
	<title>Welcome to Clara - Bravado Health</title>
</head>

<body class="setup-body welcome finished">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<div class="page-content">
			<div class="content-main">
				<div class="content-heading">
					<a href="create-facility.php" class="welcome-header"><h1>Congratulations!</h1></a>
				</div>
				<div class="row">
					<div class="column lg-12 clara-img-menu">
						<!--a href="create-facility.php"><img class="clara-welcome-img" src="../global/images/setup/little-clara-welcome.png"></a-->
						<div class="clara-img"></div>
						<div class="button-wrap">
							<button class="button button-flat">
								<a href="../home/home-view.php?tour=true">Take a Quick Tour</a>
							</button>
							<button class="button button-link secondary-action">
								<a href="../home/home-view.php?tour=false">Skip the tour</a>
							</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="column lg-6">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>