<?php
$pageTitle = "Facility";
$menuName = $pageTitle;
$adminView = $_GET[ "admin" ];
include "../variables/user-variables/variable-test-user-profile.php";
include "../variables/user-variables/variable-test-facility-profile.php";
//$fail = "true";

$facilitySectionTitle = "Facility";
$subTitle_FacilityName = "FACILITY NAME";
$subTitle_Address = "ADDRESS";
$subTitle_Phone = "PHONE";
$subTitle_Fax = "FAX";

$settingsSectionTitle = "Settings";
$subTitle_PediatricDosingThreshold = "PEDIATRIC DOSING THRESHOLD";
$subTitle_MobileNumber = "MOBILE NUMBER";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage your Facility</title>
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
			<?php include "facility-content.php"; ?>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>