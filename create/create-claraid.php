<?php
$pageTitle = "Create Your Clara ID";
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
	<title>Create Your Clara ID</title>
</head>

<body class="si-body create-id">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Create your Clara&nbsp;ID</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-text">
					Access all Clara services with a single Clara&nbsp;ID.
					</div>
					<div class="intro-link">
					Already have a Clara&nbsp;ID? <a target="_blank" href="../password/verifyemail.php">Find it here<i class="icon icon-text icon_right_chevron" aria-hidden="true"></i></a>
					</div>
                </div>
			</div>
			<div class="flow-section">
				<div class="container-xs centered">
					<div class="row fieldset">
						<div class="column lg-12">
							<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="name@example.com" name="claraID">
							<div class="field-info-wrapper">
								<button type="button" tabindex="-1" class="button button-link field-info claraid-field-info" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="This will be your new Clara ID.">
									<icon class="icon icon-help"></icon>
								</button>
							</div>
						</div>
					</div>
					<div class="row fieldset">
						<div class="column lg-12">
							<div class="password-input">
								<input type="password" autocomplete="off" class="form-text form-pwd" placeholder="password" name="pwd" id="pwd" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-html="true" data-content="<div class='password-strength'>
								<div class='sub-heading'>Your password must have:</div>
								<div class='error error-one'>
										<icon class='icon-checkmark'></icon>
										<span class='message'>8 or more characters</span>
										<error></error>
								</div>
								<div class='error error-two'>
										<icon class='icon-checkmark'></icon>
										<span class='message'>Upper &amp; lowercase letters</span>
										<error></error>
								</div>
								<div class='error error-three success'>
										<icon class='icon-checkmark'></icon>
										<span class='message'>At least one number</span>
										<error></error>
								</div>
								<span class='hint'>Avoid using a password that you use with other websites or that might be easy for someone else to guess.</span>
								</div>">
							</div>
							<input type="password" autocomplete="off" class="form-text form-pwd" placeholder="confirm password" name="confirm-pwd">
						</div>
					</div>
					<div class="row">
						<div class="column lg-12">
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="first name" name="first-name">
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">First name is required.</div>
								</div>
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="last name" name="last-name">
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Last name is required.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column lg-12">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text form-field-birthday" placeholder="birthday" name="birthday">
							<div class="field-info-wrapper">
								<button type="button" tabindex="-1" class="button button-link field-info bd-field-info" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="Birth date information may be used to help verify your identity or enable certain Clara services.">
									<icon class="icon icon-help"></icon>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-centered centered privacy-details">
				Bravado Health takes your privacy very seriously. <a href="">Learn more…</a>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link primary-action pull-right" data-toggle="modal" data-target="#verifyEmail">
						Continue
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
	<!-- Modal -->
	<div class="modal fade" id="verifyEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  </div>
		  <div class="modal-body">
			Content goes here…
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
</body>

</html>