<?php
$pageTitle = "Preferences";
$menuName = $pageTitle;
$adminView = $_GET[ "admin" ];
include "../variables/user-variables/variable-test-user-profile.php";
include "../variables/patient-variables/variable-test-patient-prescriptions.php";
//$fail = "true";

$favoritesSectionTitle = "Medication Favorites";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage your Clara Preferences</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/clara.account.js"></script>
	<link rel="stylesheet" href="../global/css/clara.account.css" type="text/css">
</head>

<body class="account-body">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div class="manage <?php echo strtolower($menuName); ?>">
			<?php include "account-persona.php"; ?>
			<?php include "account-subnav.php"; ?>
			<?php include "preferences-content.php"; ?>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
	<?php include "modal-remove-favorite-medication.php"; ?>
</body>

</html>