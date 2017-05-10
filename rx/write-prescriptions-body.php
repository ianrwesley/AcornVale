<?php
$pageTitle = "Prescriptions";
$subnavTitle = "Write prescriptions";
$subnavProgress = 1;
$primaryButtonLabel = "Select a pharmacy…";
$confirmInfoTitle = "New Patient";
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

<body class="rx-app app-flow write-prescriptions">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<?php include "rx-subnav.php"; ?>
		<div class="page-content">
		<div class="app-section-body-wrapper">
			<div class="app-background-edit">&nbsp;</div><div class="app-background-confirm">&nbsp;</div>
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<div class="flow-section filled-rx-history">
							<h2 class="section-title">Filled Rx History</h2>
							<div class="">
								Medication History
							</div>
						</div>
						<div class="flow-section medication">
							<h2 class="section-title">First Medication</h2>
							<div class="">
								First Med
							</div>
						</div>
						<div class="flow-section medication">
							<h2 class="section-title">Second Medication</h2>
							<div class="">
								Second Med
							</div>
						</div>
					</div>