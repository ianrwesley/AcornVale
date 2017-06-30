<?php
$pageTitle = "Account";
$menuName = $pageTitle;
$adminView = $_GET[ "admin" ];
include "../variables/user-variables/variable-test-user-profile.php";
//$fail = "true";

$accountSectionTitle = "Account";
$subTitle_ClaraID = "CLARA&nbsp;ID";
$subTitle_Role = "ROLE";
$subTitle_Birthday = "BIRTHDAY";

$securitySectionTitle = "Security";
$subTitle_Password = "PASSWORD";
$subTitle_MobileNumber = "MOBILE NUMBER";

$credentialsSectionTitle = "Credentials";
$subTitle_Designation = "DESIGNATION";
$subTitle_StateLicense = "STATE LICENSE";
$subTitle_NPInumber = "NPI NUMBER";
$subTitle_DEAnumber = "DEA NUMBER";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage your Clara ID</title>
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
			<?php include "account-content.php"; ?>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>