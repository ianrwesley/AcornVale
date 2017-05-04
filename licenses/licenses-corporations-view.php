<?php
	$pageTitle = "License Management";
	$menuName = "Licenses";
	$moduleTitle = "Corporations";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clara <?php echo $pageTitle; ?> - Keystone</title>
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
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>