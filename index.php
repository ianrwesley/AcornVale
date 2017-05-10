<?php
$pageTitle = "Sign In";
$signOut = $_GET[ "signout" ];
$sessionExpired = $_GET[ "expired" ];
$passwordReset = $_GET[ "passwordreset" ];
?>

<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="Author" content="Bravado Health">
	<meta name="Description" content="Access all Clara services with your Clara ID.">
	<meta name="Title" content="Clara 1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="global/css/clara.global.css" type="text/css">
	<link rel="stylesheet" href="global/css/clara.signin.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="global/js/clara.global.js"></script>
	<script type="text/javascript" src="global/js/clara.signin.js"></script>
	<title>Sign In to Clara</title>
</head>

<body class="si-body auth">
	<div id="wrapper">
		<?php include "global/claraidnav.php"; ?>
		<div class="si-notification-banner <?php if ($signOut !== "true" and $sessionExpired !== "true" and $passwordReset !== "true"){ echo "hidden"; } ?>">
			<div class="si-notification-msg-wrapper">
				<p class="si-notification-msg">
				<?php if ($signOut == "true"){ echo "You have been signed out."; } ?><?php if ($sessionExpired == "true"){ echo "This session has been timed out for your security."; } ?><?php if ($passwordReset == "true"){ echo "Password successfully reset. Try signing in again."; } ?>
				</p>
			</div>
		</div>		
		<div class="container auth-container">
				<div class="logo">
					<img class="clara-si-logo" src="global/images/logo/clara_logo_@2x.png" alt="Clara">
				</div>
				<div class="container si-container">
					<h1 class="si-container-title">Sign in to your Clara account</h1>
					<form method="post" action="home/home-view.php" id="signin-form">
						<div class="ux-border clara-id">
							<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="si-input-field" placeholder="Clara ID" name="clara-ID">
						</div>
						<div class="field-separator"></div>
						<div class="ux-border pwd">
							<input type="password" class="si-input-field si-password" placeholder="Password" name="password">
						</div>
						<div class="pop-container error signin-error">
							<div class="error pop-bottom" id="error-msg-container">
								<p id="error-msg"></p>
							</div>
						</div>
						<!--div class="si-remember-password">
							<input type="checkbox" id="remember-me" checked="true">
							<label id="remember-me-label" for="remember-me">Remember me</label>
						</div-->
						<button id="sign-in" class="si-button" disabled="">
							<input type="submit">
								<icon class="icon-submit"></icon>
							</input>
						</button>
					</form>
					<div id="forgot-link" class="forgot">
						<a role="link" href="password/verifyemail.php">Forgot Clara ID or password?</a>
					</div>
			</div>
		</div>
	</div>
	<?php include "global/globalfooter.php"; ?>
</body>

</html>