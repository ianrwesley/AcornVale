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
    <section class="create-wizard create-facility step-6">
		<div class="step-header">
			<h3 class="step-number">Step 3 of <?php echo $totalAddFacilitySteps; ?></h3>
			<h1 class="step-label">Assign the Key Owner for [Facility]</h1>
			<p class="step-description">This Bravado Health employee is the primary contact for the account.</p>
		</div>
		<div class="step-wrapper one-column">
			<div class="step-content">
				<div class="search-field-wrapper large">
					<input type="text" class="form-control form-textbox wizard-field super-user" id="facility-super-user" name="facility-super-user" placeholder="assign key owner">
				</div>
				<div class="button-next-wrapper">
					<button role="button" class="button button-flat button-back"><a href="licenses-add-facility-view-step-2.php" tabindex="0">Back</a></button>
					<button role="button" class="button button-flat button-next" disabled=""><a href="licenses-add-facility-view-step-4.php" tabindex="0">Next</a></button>
					<button role="button" class="button button-flat button-skip"><a href="licenses-add-facility-view-step-4.php" tabindex="0">Skip</a></button>
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