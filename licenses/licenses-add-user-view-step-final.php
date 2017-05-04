<?php
	$pageTitle = "Invite Clara Users";
	$menuName = "Licenses";
	$moduleTitle = "Invite Users";
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
    <section class="create-wizard create-user">
		<div class="step-header">
			<h3 class="step-number">SUCCESS</h3>
			<icon class="icon-checkmark success xl"></icon>
			<h1 class="step-label">You've invited 3 new users to Clara!</h1>
			<p class="step-description">View the new users <a role="link" href="licenses-users-view.php">here</a>.</p>
		</div>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>