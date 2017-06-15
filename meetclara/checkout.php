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
	<title>Secure Checkout - Bravado Health</title>
</head>

<body class="shop-body checkout-body">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>
		<div class="container cs-configure-container">
			<div class="row">
				<div class="column lg-12">
					<header>
						<div class="header-wrap">
							<h1 class="cs-configure-title">Secure Checkout</h1>
						</div>
					</header>
					<div class="section-content">
						<!-- configuration selections -->
						<div class="cs-configuration-selections cs-checkout">
								<div class="cs-configuration-optiongroup">
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-proCS-licenses">
											<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3 cs-quantity-input"><input id="proCS-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="1" value="4"></div> <span class="btn-option-description"><b>Pro CS</b> licenses</span></span><span class="cs-optional-price-delta">$3,040.00<sup class="cs-price-freq-unit">/year</sup></span></div>
										</div>
									</div>
								</div>
								<div class="cs-configuration-optiongroup">
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-pro-licenses">
											<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3 cs-quantity-input"><input id="pro-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="0" value="2"></div><span class="btn-option-description"><b>Pro</b> licenses</span></span><span class="cs-optional-price-delta">$1,120.00<sup class="cs-price-freq-unit">/year</sup></span></div>
										</div>
									</div>
								</div>
								<div class="cs-configuration-optiongroup">
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-basic-licenses">
											<div class="plan-btn"><span class="btn-text"><div class="input-wrapper lg-3 cs-quantity-input"><input id="basic-license-quantity" class="option-quantity form-text" maxlength="2" placeholder="0" value="1"></div><span class="btn-option-description"><b>Basic</b> licenses</span></span><span class="cs-optional-price-delta">$196.00<sup class="cs-price-freq-unit">/year</sup></span></div>
										</div>
									</div>
								</div>
								<div class="cs-configuration-optiongroup">
									<div class="option-toggle-wrap">
										<div class="btn-group option-toggle-group option-toggle-basic-licenses">
											<div class="plan-btn"><span class="btn-text"><span class="btn-option-description">Medication education</span></span><span class="cs-optional-price-delta">$1,020.00<sup class="cs-price-freq-unit">/year</sup></span></div>
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
												<span class="cs-current-price" id="total-price">$5,376.00<sup class="cs-price-freq-unit">/year</sup></span>
												<span class="payment-options"><a href="#" class="more">Choose monthly pricing</a></span>
											</div>
											<div class="add-to-cart primary">
												<!--button type="submit" class="button button-flat cs-button-lg" name="add-to-cart" value="add-to-cart">
													Create Your Clara&nbsp;ID
												</button-->
												<button type="submit" class="button button-flat cs-button-lg" name="add-to-cart" value="add-to-cart">
													<a href="#">Order Now</a>
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
</body>

</html>