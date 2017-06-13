<?php
$pageTitle = "Meet Clara";
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
	<title><?php echo $pageTitle; ?> - Bravado Health</title>
</head>

<body class="shop-body">
	<div id="wrapper">
		<?php include "../global/claraidnav.php"; ?>
		<div class="content-wrapper">
			<section>
				<header class="spaced-header meetclara hero">
					<div class="container header-wrap">
						<h1 class="section-title">Meet Clara.</h1>
						<p class="section-subtitle">A fresh take on prescribing for providers and patients.</p>
						<a class="more hero-img-link" href="#">Watch the video</a>
					</div>
				</header>
			</section>
			<section>
				<header class="spaced-header">
					<div class="container header-wrap">
						<h1>Choose your Clara plan.</h1>
					</div>
				</header>
				<div class="section-content">
					<div class="container plan-selection text-centered">
						<div class="price-toggle-wrap">
							<div class="btn-group price-toggle-group">
								<button class="btn plan-btn price-toggle-monthly"><span class="btn-text">Monthly</span></button>
								<button class="btn plan-btn price-toggle-annual active"><span class="btn-text">Annual</span><div class="plan-btn-label ribbon-right">10&#37; discount</div></button>
							</div>
							<!--div>
								<div class="column lg-6">
									<label class="plan-btn-label">&nbsp;</label>
								</div>
								<div class="column lg-6">
									<label class="plan-btn-label">10&#37; discount</label>
								</div>
							</div-->
						</div>
					</div>
					<div class="cs-chatbox">
						<div class="container text-centered">
							Get help purchasing. <!--a href="#">Chat now</a> or call-->Call 1-800-MY-CLARA.
						</div>
					</div>
					<div class="container plan-selection bundle">
						<div class="cs-claraplan clearfix">
							<div class="column lg-4 cs-plandetails cs-basic">
								<h3 class="cs-plan-title">Basic</h3>
								<ul class="cs-planspecs">
									<li>Administer Clara accounts</li>
									<li>Manage patients</li>
									<li>Manage schedule</li>
								</ul>
								<div class="cs-price">
									<span class="cs-current-price"></span><sup class="cs-price-freq-unit">/user</sup><sup class="cs-price-freq-unit cs-price-freq-unit-toggle"></sup>
								</div>
								<div class="add-to-cart">
									<div class="cs-add-licenses-wrap">
										<div class="cs-add-licenses clearfix">
											<div class="input-wrapper lg-3">
												<input id="proCS-license-quantity" class="license-quantity form-text" maxlength="4" placeholder="0" value="">
											</div>
											<div class="column lg-9">
												<span class="option-description"><b>Basic</b> licenses</span>
											</div>
										</div>
										<span class="cs-option-learnmoretxt"><a href="#">How many Basic licenses do you need?</a></span>
									</div>
									<!--button type="submit" class="button button-flat cs-button-lg"><a href="configure.php?product=basic">Select</a></button-->
								</div>
							</div>
							<div class="column lg-4 cs-plandetails cs-clarapro">
								<h3 class="cs-plan-title">Clara Pro</h3>
								<ul class="cs-planspecs">
									<!--li class="cumulative">Administer Clara accounts</li>
									<li class="cumulative">Manage patients</li>
									<li class="cumulative">Manage schedule</li-->
									<li class="cumulative-pkg">Basic &#43;</li>
									<li class="highlight">E-prescribe non-controlled substances</li>
									<li class="sub-spec linked">Annual identity proofing</li>
									<li class="sub-spec linked">Contraindication alerts</li>
									<li class="sub-spec linked">Pediatric dosing</li>
								</ul>
								<div class="cs-price">
									<span class="cs-current-price"></span><sup class="cs-price-freq-unit">/user</sup><sup class="cs-price-freq-unit cs-price-freq-unit-toggle"></sup>
								</div>
								<div class="add-to-cart">
									<div class="cs-add-licenses-wrap">
										<div class="cs-add-licenses clearfix">
											<div class="input-wrapper lg-3">
												<input id="proCS-license-quantity" class="license-quantity form-text" maxlength="4" placeholder="0" value="1">
											</div>
											<div class="column lg-9">
												<span class="option-description"><b>Pro</b> licenses</span>
											</div>
										</div>
										<span class="cs-option-learnmoretxt"><a href="#">How many Clara Pro licenses do you need?</a></span>
									</div>
									<!--button type="submit" class="button button-flat cs-button-lg"><a href="configure.php?product=pro">Select</a></button-->
								</div>
							</div>
							<div class="column lg-4 cs-plandetails cs-clarapro-cs">
								<h3 class="cs-plan-title">Clara Pro CS</h3>
								<ul class="cs-planspecs">
									<!--li class="cumulative">Administer Clara accounts</li>
									<li class="cumulative">Manage patients</li>
									<li class="cumulative">Manage schedule</li>
									<li class="cumulative">E-prescribe non-controlled substances</li>
									<li class="sub-spec cumulative">Annual identity proofing&#42;</li>
									<li class="sub-spec cumulative">Contraindication alerts&#42;</li>
									<li class="sub-spec cumulative">Pediatric dosing&#42;</li-->
									<li class="cumulative-pkg">Clara Pro &#43;</li>
									<li class="highlight">E-prescribe controlled substances</li>
									<li class="sub-spec">Schedule II-V</li>
									<li class="sub-spec linked">All e-prescribing features included</li>
								</ul>
								<div class="cs-price">
									<span class="cs-current-price"></span><sup class="cs-price-freq-unit">/user</sup><sup class="cs-price-freq-unit cs-price-freq-unit-toggle"></sup>
								</div>
								<div class="add-to-cart">
									<div class="cs-add-licenses-wrap">
										<div class="cs-add-licenses clearfix">
											<div class="input-wrapper lg-3">
												<input id="proCS-license-quantity" class="license-quantity form-text" maxlength="4" placeholder="0" value="">
											</div>
											<div class="column lg-9">
												<span class="option-description"><b>Pro CS</b> licenses</span>
											</div>
										</div>
										<span class="cs-option-learnmoretxt"><a href="#">How many Clara Pro CS licenses do you need?</a></span>
									</div>
									<!--button type="submit" class="button button-flat cs-button-lg"><a href="configure.php?product=proCS">Select</a></button-->
								</div>
							</div>
						</div>
						<div class="configure-btn-wrap row">
							<div class="column lg-4">&nbsp;</div>
							<!--div class="column lg-4"><button type="submit" class="button button-flat cs-button-lg"><a href="configure.php?product=proCS">Customize Your Plan</a></button></div-->
							<div class="column lg-4"><button type="submit" class="button button-flat cs-button-lg"><a href="../create/create-claraid.php">Create Your Clara&nbsp;ID</a></button></div>
							<div class="column lg-4">&nbsp;</div>
						</div>
					</div>
					<div class="full-width cs-compare">
						<div class="cs-compare-header">
							<h2>Pro or CS?</h2>
							<p class="cs-compare-link"><a href="#" class="more">Find the right Clara plan for your practice</a></p>
						</div>
						<div class="cs-compare-info">
							<div class="cs-compare-img-placeholder"></div>
							<img class="cs-compare-img little-clara" src="../global/images/meetclara/little-clara-curious.png">
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>