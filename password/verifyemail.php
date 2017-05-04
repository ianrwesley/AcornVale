<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="Author" content="Bravado Health">
	<meta name="Description" content="Access all Clara services with your Clara ID.">
	<meta name="Title" content="Clara 1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="../global/css/clara.global.css" type="text/css">
	<link rel="stylesheet" href="../signin/css/clara.signin.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="../global/js/clara.global.js"></script>
	<script type="text/javascript" src="../signin/js/clara.signin.js"></script>
	<title>Recover Your Clara ID - Bravado Health</title>
</head>

<body class="si-body">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>
		<div class="container auth-container">
			<div class="widen">
				<h1 class="header">Having trouble signing in?</h1>
				<p class="description desktop paragraph-break">You’ve come to the right place to reset a forgotten password or recover a Clara ID.</p>
			</div>
			<div class="container si-container">
				<form method="post" action="emailsent.php" id="recovery-form">
					<div class="single-field-wrapper">
						<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-control form-textbox" placeholder="name@example.com" id="emailInputId" name="emailInputId">
					</div>
					<div class="pop-container error signin-error">
						<div class="error pop-bottom" id="error-msg-container">
							<p id="error-msg"></p>
						</div>
					</div>
					<button id="action" class="si-button single-field" disabled="">
						<input type="submit">
							<icon class="icon-submit"></icon>
						</input>
					</button>
				</form>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>