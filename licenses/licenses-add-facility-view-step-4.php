<?php
	$pageTitle = "Add a Clara Facility";
	$menuName = "Licenses";
	$moduleTitle = "Add Facilities";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?> - Keystone</title>
<?php include "../global/globalui.php"; ?>
<script type="text/javascript" src="js/keystone.licenses.js"></script>
<link rel="stylesheet" href="../account/css/keystone.account.css" type="text/css">
<link rel="stylesheet" href="css/keystone.licenses.css" type="text/css">
</head>

<body>
<div id="wrapper">
<?php include "../global/globalnav.php"; ?>
<?php include "licensenav.php"; ?>
<div class="manage <?php echo strtolower($menuName); ?>">
  <div class="container">
    <section class="create-wizard create-facility step-7">
		<div class="step-header">
			<h3 class="step-number">Step 4 of <?php echo $totalAddFacilitySteps; ?></h3>
			<h1 class="step-label">Assign modules for [Facility]</h1>
			<p class="step-description">Select purchased Clara modules below.</p>
		</div>
		<div class="step-wrapper">
			<div class="step-content">
				<ul class="moduleselect-items">
						<li class="moduleselect-item moduleselect-item-education">
							<a class="moduleselect-link">
								<figure class="moduleselect-icon"></figure>
								<!--span class="moduleselect-activateitem">&#40;Click to Activate&#41;</span-->
								<span class="moduleselect-label">Teach</span>
								<button class="button-switch"><div class="button-switch-pull"></div></button>
							</a>
						</li>
						<li class="moduleselect-item moduleselect-item-medication">
							<a class="moduleselect-link">
								<figure class="moduleselect-icon"></figure>
								<!--span class="moduleselect-activateitem">ACTIVATED</span-->
								<span class="moduleselect-label">Treat</span>
								<button class="button-switch"><div class="button-switch-pull"></div></button>
							</a>
						</li>
						<li class="moduleselect-item moduleselect-item-referral">
							<a class="moduleselect-link">
								<figure class="moduleselect-icon"></figure>
								<!--span class="moduleselect-activateitem">ACTIVATED</span-->
								<span class="moduleselect-label">Transfer</span>
								<button class="button-switch"><div class="button-switch-pull"></div></button>
							</a>
						</li>
						<li class="moduleselect-item moduleselect-item-postdischarge">
							<a class="moduleselect-link">
								<figure class="moduleselect-icon"></figure>
								<!--span class="moduleselect-activateitem">&#40;Click to Activate&#41;</span-->
								<span class="moduleselect-label">Talk</span>
								<button class="button-switch"><div class="button-switch-pull"></div></button>
							</a>
						</li>
						<li class="moduleselect-item moduleselect-item-analytics">
							<a class="moduleselect-link">
								<figure class="moduleselect-icon"></figure>
								<!--span class="moduleselect-activateitem">&#40;Click to Activate&#41;</span-->
								<span class="moduleselect-label">Track</span>
								<button class="button-switch"><div class="button-switch-pull"></div></button>
							</a>
						</li>
				</ul>
				<h3 class="selected-modules">Selected Modules: 2</h3>
				<ul class="selected-modules-list">
					<li class="selected-modules-item">Treat</li>
					<li class="selected-modules-item">Transfer</li>
				</ul>
				<div class="button-next-wrapper">
					<button role="button" class="button button-flat button-back"><a href="licenses-add-facility-view-step-3.php" tabindex="0">Back</a></button>
					<button role="button" class="button button-flat button-next button-done" disabled=""><a href="licenses-add-facility-view-step-final.php" tabindex="0">Add Facility</a></button>
					<button role="button" class="button button-flat button-skip"><a href="licenses-add-facility-view-step-final.php" tabindex="0">Skip</a></button>
				</div>
			</div>
		</div>
		<div class="step-footnote">
			<p class="description">You can skip this step for now. It is required before the facility can be activated.</p>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>