<?php
$pageTitle = "Create Facility";
$titleTag = "Set Up Your Facility";
$licenseType = $_GET[ "license" ];
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

<body class="setup-body flow-step-body">
	<div id="wrapper">
		<?php include "../global/setupnav.php"; ?>	
		<header class="hero">
			<div class="container">
				<h1>Set up your facility</h1>
			</div>
		</header>
		<div class="page-content">
			<div class="container">
				<div class="intro text-centered">
					<div class="intro-text">
					Start by entering your facility's information below.
					</div>
                </div>
			</div>
			<div class="flow-section">
				<div class="container-xs centered">
					<div class="row fieldset">
						<div class="column lg-12">
							<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="facility name">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Address is required.</div>
						</div>
						<div class="column lg-12">
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-12 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text home-address-field field-icon" placeholder="address" name="address" value="<?php echo $address ?>">
									<icon class="icon-business nofocus-icon"></icon><icon class="icon-business hasfocus-icon"></icon>
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Address is required.</div>
								</div>
							</div>
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="city">
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Last name is required.</div>
								</div>
								<div class="error-msg-wrapper select lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<div class="select-wrapper lg-12">
										<select class="form-text">
											<option value="" <?php if ($state == ""){ echo "selected"; } ?> disabled>state</option>
											<option value="AL" <?php if ($state == "AL"){ echo "selected"; } ?>>Alabama</option>
											<option value="AK" <?php if ($state == "AK"){ echo "selected"; } ?>>Alaska</option>
											<option value="AZ" <?php if ($state == "AZ"){ echo "selected"; } ?>>Arizona</option>
											<option value="AR" <?php if ($state == "AR"){ echo "selected"; } ?>>Arkansas</option>
											<option value="CA" <?php if ($state == "CA"){ echo "selected"; } ?>>California</option>
											<option value="CO" <?php if ($state == "CO"){ echo "selected"; } ?>>Colorado</option>
											<option value="CT" <?php if ($state == "CT"){ echo "selected"; } ?>>Connecticut</option>
											<option value="DE" <?php if ($state == "DE"){ echo "selected"; } ?>>Delaware</option>
											<option value="DC" <?php if ($state == "DC"){ echo "selected"; } ?>>D.C.</option>
											<option value="FL" <?php if ($state == "FL"){ echo "selected"; } ?>>Florida</option>
											<option value="GA" <?php if ($state == "GA"){ echo "selected"; } ?>>Georgia</option>
											<option value="HI" <?php if ($state == "HI"){ echo "selected"; } ?>>Hawaii</option>
											<option value="ID" <?php if ($state == "ID"){ echo "selected"; } ?>>Idaho</option>
											<option value="IL" <?php if ($state == "IL"){ echo "selected"; } ?>>Illinois</option>
											<option value="IN" <?php if ($state == "IN"){ echo "selected"; } ?>>Indiana</option>
											<option value="IA" <?php if ($state == "IA"){ echo "selected"; } ?>>Iowa</option>
											<option value="KS" <?php if ($state == "KS"){ echo "selected"; } ?>>Kansas</option>
											<option value="KY" <?php if ($state == "KY"){ echo "selected"; } ?>>Kentucky</option>
											<option value="LA" <?php if ($state == "LA"){ echo "selected"; } ?>>Louisiana</option>
											<option value="ME" <?php if ($state == "ME"){ echo "selected"; } ?>>Maine</option>
											<option value="MD" <?php if ($state == "MD"){ echo "selected"; } ?>>Maryland</option>
											<option value="MA" <?php if ($state == "MA"){ echo "selected"; } ?>>Massachusetts</option>
											<option value="MI" <?php if ($state == "MI"){ echo "selected"; } ?>>Michigan</option>
											<option value="MN" <?php if ($state == "MN"){ echo "selected"; } ?>>Minnesota</option>
											<option value="MS" <?php if ($state == "MS"){ echo "selected"; } ?>>Mississippi</option>
											<option value="MO" <?php if ($state == "MO"){ echo "selected"; } ?>>Missouri</option>
											<option value="MT" <?php if ($state == "MT"){ echo "selected"; } ?>>Montana</option>
											<option value="NE" <?php if ($state == "NE"){ echo "selected"; } ?>>Nebraska</option>
											<option value="NV" <?php if ($state == "NV"){ echo "selected"; } ?>>Nevada</option>
											<option value="NH" <?php if ($state == "NH"){ echo "selected"; } ?>>New Hampshire</option>
											<option value="NJ" <?php if ($state == "NJ"){ echo "selected"; } ?>>New Jersey</option>
											<option value="NM" <?php if ($state == "NM"){ echo "selected"; } ?>>New Mexico</option>
											<option value="NY" <?php if ($state == "NY"){ echo "selected"; } ?>>New York</option>
											<option value="NC" <?php if ($state == "NC"){ echo "selected"; } ?>>North Carolina</option>
											<option value="ND" <?php if ($state == "ND"){ echo "selected"; } ?>>North Dakota</option>
											<option value="OH" <?php if ($state == "OH"){ echo "selected"; } ?>>Ohio</option>
											<option value="OK" <?php if ($state == "OK"){ echo "selected"; } ?>>Oklahoma</option>
											<option value="OR" <?php if ($state == "OR"){ echo "selected"; } ?>>Oregon</option>
											<option value="PA" <?php if ($state == "PA"){ echo "selected"; } ?>>Pennsylvania</option>
											<option value="RI" <?php if ($state == "RI"){ echo "selected"; } ?>>Rhode Island</option>
											<option value="SC" <?php if ($state == "SC"){ echo "selected"; } ?>>South Carolina</option>
											<option value="SD" <?php if ($state == "SD"){ echo "selected"; } ?>>South Dakota</option>
											<option value="TN" <?php if ($state == "TN"){ echo "selected"; } ?>>Tennessee</option>
											<option value="TX" <?php if ($state == "TX"){ echo "selected"; } ?>>Texas</option>
											<option value="UT" <?php if ($state == "UT"){ echo "selected"; } ?>>Utah</option>
											<option value="VT" <?php if ($state == "VT"){ echo "selected"; } ?>>Vermont</option>
											<option value="VA" <?php if ($state == "VA"){ echo "selected"; } ?>>Virginia</option>
											<option value="WA" <?php if ($state == "WA"){ echo "selected"; } ?>>Washington</option>
											<option value="WV" <?php if ($state == "WV"){ echo "selected"; } ?>>West Virginia</option>
											<option value="WI" <?php if ($state == "WI"){ echo "selected"; } ?>>Wisconsin</option>
											<option value="WY" <?php if ($state == "WY"){ echo "selected"; } ?>>Wyoming</option>
										</select>
									</div>
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">State is required.</div>
								</div>
								<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="zip code">
									<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Last name is required.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row fieldset">
						<div class="column lg-12">
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text field-icon" placeholder="phone number">
									<icon class="icon-smartphone nofocus-icon"></icon><icon class="icon-smartphone hasfocus-icon"></icon>
								</div>
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text field-icon" placeholder="fax number">
									<icon class="icon-fax nofocus-icon"></icon><icon class="icon-fax hasfocus-icon"></icon>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="column lg-12">
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="facility NPI number">
								</div>
								<div class="error-msg-wrapper lg-6 <?php if ($fail == "true"){ echo "has-error"; } ?>">
									<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="facility DEA number">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="controls-footer">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link secondary-action">
						<a href="choose-license.php">Continue without validating</a>
					</button>
					<button type="button" role="link" class="button button-link primary-action">
						<a href="choose-license.php">Validate</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>