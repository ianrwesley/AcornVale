<?php
$pageTitle = "Recover Your Clara ID";
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
	<link rel="stylesheet" href="../global/css/clara.signin.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../global/js/clara.global.js"></script>
	<script type="text/javascript" src="../global/js/clara.signin.js"></script>
	<title>Recover Your Clara ID - Bravado Health</title>
</head>

<body class="si-body recover-id">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Recover Clara&nbsp;ID</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="content-main">
				<div class="content-heading">
					<div class="header-icon-wrap">
						<div class="image image-header caution"></div>
					</div>
					<h2 class="subtitle">
						No Clara&nbsp;ID found
					</h2>
					<p class="description">
						We can’t find a Clara&nbsp;ID matching the information provided.
					</p>
				</div>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link primary-action pull-right">
						<a href="find-claraid.php" class="button-link ">Try Again</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>