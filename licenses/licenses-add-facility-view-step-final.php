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
			<h3 class="step-number">SUCCESS</h3>
			<icon class="icon-checkmark success xl"></icon>
			<h1 class="step-label">[Facility] has been created</h1>
			<p class="step-description">View the new facility <a role="link">here</a>.</p>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>