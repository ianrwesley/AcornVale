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
	<script type="text/javascript" src="../global/js/switchery.js"></script>
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
						<div class="medications-wrapper">
							<?php include "write-prescriptions-medication.php"; ?>
						</div>
						<div class="add-more-wrapper">
							<div class="add-more pull-right" id="add-more-medications-btn">
								<button class="button button-link button-compact">
									<icon class="icon-add"></icon>Add medication
								</button>
							</div>
						</div>
					</div>