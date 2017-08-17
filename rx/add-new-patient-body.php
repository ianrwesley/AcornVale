<?php
$pageTitle = "Prescriptions";
$subnavTitle = "Add new patient";
$subnavProgress = 0;
$primaryButtonLabel = "Add medical history…";
$confirmInfoTitle = "Patient Details";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Add New Patient - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
</head>

<body class="rx-app app-flow add-patient">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<!--?php include "rx-subnav.php"; ?-->
		<div class="page-content">
		<div class="app-section-body-wrapper">
			<div class="app-background-edit">&nbsp;</div><div class="app-background-confirm">&nbsp;</div>
			<div class="app-section-body-scroll">
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<?php include "edit-patient-content-demographics.php"; ?>
					</div>