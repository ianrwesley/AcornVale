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
			<div class="">
				<h1 class="header">Reset your password</h1>
				<p class="description desktop paragraph-break">
				Enter a new password below to regain access to your Keystone account.
				</p>
			</div>
			<div class="container si-container">
				<form method="post" action="../account/account-view.php" id="reset-form">
					<div class="field-wrapper">
						<input type="password" class="form-control form-textbox" placeholder="password" id="pwd" name="pwd">
						<input type="password" class="form-control form-textbox" placeholder="confirm password" id="pwdConfirm" name="pwdConfirm">
					</div>
					<div class="pop-container error signin-error">
						<div class="error pop-bottom" id="error-msg-container">
							<p id="error-msg"></p>
						</div>
					</div>
					<button id="action" class="si-button" disabled="">
						<input type="submit">
							<icon class="icon-submit"></icon>
						</input>
					</button>
				</form>
				<div class="password-strength">
					<div class="sub-heading">Your password must have:</div>
					<div class="error error-one">
							<icon class="icon-checkmark"></icon>
					 		<span class="message">8 or more characters</span>
					 		<error></error>
					</div>
					<div class="error error-two">
							<icon class="icon-checkmark"></icon>
					 		<span class="message">Uppercase &amp; lowercase letters</span>
					 		<error></error>
					</div>
					<div class="error error-three success">
							<icon class="icon-checkmark"></icon>
					 		<span class="message">At least one number</span>
					 		<error></error>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>