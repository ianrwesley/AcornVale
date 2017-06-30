<?php
$pageTitle = "Meet Clara";
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
	<link rel="stylesheet" href="../global/css/clara.shop.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../global/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="../global/js/clara.global.js"></script>
	<script type="text/javascript" src="../global/js/clara.shop.js"></script>
	<title>Customize Your Plan - Bravado Health</title>
</head>

<body class="shop-body">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>
		<div class="container cs-configure-container">
			<div class="row">
				<div class="column lg-6">
					<img class="little-clara lc-helper-img" src="../global/images/shop/little-clara-helper.png" data-spy="affix" data-offset-top="50">
				</div>
				<div class="column lg-6">
					<header>
						<div class="header-wrap">
							<h1 class="cs-configure-title">Customize your Clara <?php if($licenseType == "proCS") {echo 'Pro CS';} elseif($licenseType == "pro") {echo 'Pro';}?> plan.</h1>
						</div>
						<ul class="cs-planspecs">
							<li>E-prescribe <span class="highlight">non-controlled</span> substances</li>
							<?php if($licenseType == "proCS") {
									echo '<li>E-prescribe <span class="highlight">controlled</span> substances</li>';
								}
							?>
							<li class="sub-spec">Identity proofing</li>
							<li class="sub-spec">Contraindication alerts</li>
							<li class="sub-spec">Pediatric dosing</li>
							<li>Technical support Monday through Friday, 8:00 a.m. to 5:00 p.m. ET</li>
						</ul>
					</header>
					<div class="section-content">
						<!-- configuration selections -->
						<div class="cs-configuration-selections">
							<div class="cs-configuration-category">
								<h2 class="cs-configuration-group-title">Licenses</h2>
								<?php if($licenseType == "proCS") {
									echo '<div class="cs-configuration-optiongroup">
											<h3 class="cs-option-title">Clara Pro CS<!--button class="button button-link cs-help-btn"><icon class="icon-help"></icon></button--></h3>
											<span class="cs-option-learnmoretxt"><a data-toggle="modal" data-target="#cs-overlay-configure-pro-CS">How many Clara Pro CS licenses do you need?</a></span>
											<div class="option-toggle-wrap">
												<div class="btn-group option-toggle-group option-toggle-proCS-licenses">
													<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3"><input id="proCS-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="1" value="1"></div> <span class="btn-option-description"><b>Pro CS</b> licenses</span></span><span class="cs-optional-price-delta">+ $760.00<sup class="cs-price-freq-unit">/user/year</sup></span></div>
												</div>
											</div>
										</div>';
									}
								?>
								<div class="cs-configuration-optiongroup">
									<h3 class="cs-option-title">Clara Pro<!--button class="button button-link cs-help-btn"><icon class="icon-help"></icon></button--></h3>
									<span class="cs-option-learnmoretxt"><a data-toggle="modal" data-target="#cs-overlay-configure-pro">How many Clara Pro licenses do you need?</a></span>
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-pro-licenses">
											<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3"><input id="pro-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="<?php if($licenseType == "pro") { echo "1"; } else { echo "0"; } ?>" value="<?php if($licenseType == "pro") { echo "1"; } else { echo "0"; } ?>"></div><span class="btn-option-description"><b>Pro</b> licenses</span></span><span class="cs-optional-price-delta">+ $560.00<sup class="cs-price-freq-unit">/user/year</sup></span></div>
										</div>
									</div>
								</div>
								<div class="cs-configuration-optiongroup">
									<h3 class="cs-option-title">Basic<!--button class="button button-link cs-help-btn"><icon class="icon-help"></icon></button--></h3>
									<span class="cs-option-learnmoretxt"><a data-toggle="modal" data-target="#cs-overlay-configure-basic">How many Basic licenses do you need?</a></span>
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-basic-licenses">
											<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3"><input id="basic-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="0" value="0"></div><span class="btn-option-description"><b>Basic</b> licenses</span></span><span class="cs-optional-price-delta">+ $196.00<sup class="cs-price-freq-unit">/user/year</sup></span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="cs-configuration-category">
								<h2 class="cs-configuration-group-title">Optional</h2>
								<div class="cs-configuration-optiongroup">
									<h3 class="cs-option-title">Medication Education</h3>
									<span class="cs-option-learnmoretxt"><a data-toggle="modal" data-target="#cs-overlay-configure-meded">Learn more about Medication Education</a></span>
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-meded">
											<button class="btn plan-btn active"><span class="btn-text">None</span></button>
											<button class="btn plan-btn"><span class="btn-text">Medication Education</span><span class="cs-optional-price-delta">+ $1,020.00<sup class="cs-price-freq-unit">/year</sup></span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END configuration selections -->
						<!-- shoptray -->
						<div class="cs-shoptray sticky-shoptray">
							<div class="container">
								<div class="cs-shoptray-gethelp">
									<div>
									Get help buying:<br>
									<!--button class="chat-online cs-buttonlink">Chat now</button-->
									Call 1-800-MY-CLARA
									</div>
								</div>
								<div class="cs-purchaseoptions">
									<div class="purchase-info">
										<div class="price-info">
											<div class="cs-price primary">
												<span class="cs-current-price" id="total-price">$<?php if($licenseType == "proCS") { echo "760"; } elseif($licenseType == "pro") { echo "560"; } ?>.00<sup class="cs-price-freq-unit">/year</sup></span>
												<span class="payment-options"><a href="#" class="more">View monthly pricing</a></span>
											</div>
											<div class="add-to-cart primary">
												<!--button type="submit" class="button button-flat cs-button-lg" name="add-to-cart" value="add-to-cart">
													Create Your Clara&nbsp;ID
												</button-->
												<button type="submit" class="button button-flat cs-button-lg" name="add-to-cart" value="add-to-cart">
													<a href="../create/create-claraid.php?license=<?php echo $licenseType; ?>">Check Out</a>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- END shoptray -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
	<!-- Modal Basic Licenses -->
	<div class="modal fade cs-overlay-popup" id="cs-overlay-configure-basic" tabindex="-1" role="dialog" aria-labelledby="Basic Licenses">
		<div class="modal-dialog" role="document">
			<div class="modal-content text-centered cs-overlay-content">
				<div class="modal-body">
					<h1 class="header"><b>Basic</b> Licenses</h1>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat, est sit amet placerat vestibulum, urna velit viverra massa, sed facilisis mi eros ullamcorper massa. Sed ac velit sollicitudin, accumsan ipsum eget, consequat ipsum.</p>
					<p class="description">Phasellus quis malesuada mauris. Vestibulum condimentum convallis facilisis. Integer turpis dolor, fermentum a arcu at, venenatis tristique erat. Vestibulum orci mauris, finibus eget elit sit amet, tristique pellentesque sem. Suspendisse lacinia leo nec semper vehicula. Praesent posuere rhoncus velit. Donec elementum lobortis finibus.</p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	</div>
	<!-- Modal Pro Licenses -->
	<div class="modal fade cs-overlay-popup" id="cs-overlay-configure-pro" tabindex="-1" role="dialog" aria-labelledby="Pro Licenses">
		<div class="modal-dialog" role="document">
			<div class="modal-content text-centered cs-overlay-content">
				<div class="modal-body">
					<h1 class="header">Clara <b>Pro</b> Licenses</h1>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat, est sit amet placerat vestibulum, urna velit viverra massa, sed facilisis mi eros ullamcorper massa. Sed ac velit sollicitudin, accumsan ipsum eget, consequat ipsum.</p>
					<p class="description">Phasellus quis malesuada mauris. Vestibulum condimentum convallis facilisis. Integer turpis dolor, fermentum a arcu at, venenatis tristique erat. Vestibulum orci mauris, finibus eget elit sit amet, tristique pellentesque sem. Suspendisse lacinia leo nec semper vehicula. Praesent posuere rhoncus velit. Donec elementum lobortis finibus.</p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	</div>
	<!-- Modal Pro CS Licenses -->
	<div class="modal fade cs-overlay-popup" id="cs-overlay-configure-pro-CS" tabindex="-1" role="dialog" aria-labelledby="Pro CS Licenses">
		<div class="modal-dialog" role="document">
			<div class="modal-content text-centered cs-overlay-content">
				<div class="modal-body">
					<h1 class="header">Clara <b>Pro CS</b> Licenses</h1>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat, est sit amet placerat vestibulum, urna velit viverra massa, sed facilisis mi eros ullamcorper massa. Sed ac velit sollicitudin, accumsan ipsum eget, consequat ipsum.</p>
					<p class="description">Phasellus quis malesuada mauris. Vestibulum condimentum convallis facilisis. Integer turpis dolor, fermentum a arcu at, venenatis tristique erat. Vestibulum orci mauris, finibus eget elit sit amet, tristique pellentesque sem. Suspendisse lacinia leo nec semper vehicula. Praesent posuere rhoncus velit. Donec elementum lobortis finibus.</p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	</div>
	<!-- Modal Medication Education -->
	<div class="modal fade cs-overlay-popup" id="cs-overlay-configure-meded" tabindex="-1" role="dialog" aria-labelledby="Medication Education">
		<div class="modal-dialog" role="document">
			<div class="modal-content text-centered cs-overlay-content">
				<div class="modal-body">
					<h1 class="header"><b>Medication Education</b></h1>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat, est sit amet placerat vestibulum, urna velit viverra massa, sed facilisis mi eros ullamcorper massa. Sed ac velit sollicitudin, accumsan ipsum eget, consequat ipsum.</p>
					<p class="description">Phasellus quis malesuada mauris. Vestibulum condimentum convallis facilisis. Integer turpis dolor, fermentum a arcu at, venenatis tristique erat. Vestibulum orci mauris, finibus eget elit sit amet, tristique pellentesque sem. Suspendisse lacinia leo nec semper vehicula. Praesent posuere rhoncus velit. Donec elementum lobortis finibus.</p>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	</div>
</body>

</html>