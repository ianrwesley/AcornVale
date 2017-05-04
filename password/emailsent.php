<?php
$emailAddress = $_POST["emailInputId"];
?>

<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="Author" content="Bravado Health">
	<meta name="Description" content="Keystone is the service you use to manage Bravado Health services.">
	<meta name="Title" content="Keystone">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="../global/css/keystone.global.css" type="text/css">
	<link rel="stylesheet" href="../signin/css/keystone.signin.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="../global/js/keystone.global.js"></script>
	<script type="text/javascript" src="../signin/js/keystone.signin.js"></script>
	<title>Reset Your Password - Keystone</title>
</head>

<body class="si-body">
	<div id="wrapper">
		<!--div class="signin-bg"></div-->
		<div class="container auth-container">
			<div class="logo-wrap">
				<a href="../"><img class="keystone-signin-logo" src="../global/images/bravado-logo.svg"></a>
			</div>
			<div class="widen">
				<icon class="icon-checkmark success xl"></icon>
				<h1 class="header">We sent you an email</h1>
				<p class="description desktop paragraph-break">
					An email has been sent to <strong><?php echo $emailAddress; ?></strong>. Follow the directions in the email to reset your password.
				</p>
				<a href="../" class="forgot-button">Done</a>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>