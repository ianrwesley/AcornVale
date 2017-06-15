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
	<title>Write Prescriptions - Clara</title>
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
			<div class="app-background-edit">&nbsp;</div>
			<div class="app-background-confirm">&nbsp;</div>
			<div class="app-section-body-scroll">
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<?php
							if ($age < 18 && $rxFlowProgress == 4) {
								echo "<div class='pediatric-notification inapp-notification-container'>
										<div class='notification-header-wrap'>
											<h4 class='notification-header'>Pediatric dosing enabled</h4>
										</div>
										<div class='notification-msg-wrap'>
										<p class='notification-msg'>Does <span class='strong'>$fullName</span> weigh <span>$weight $weightUnit</span>?</p>
										</div>
										<div class='notification-controls clearfix'>
											<div class='button-group pull-right'>
												<button class='button button-link button-compact secondary-action peds-update-weight'>Update weight…</button>
												<button class='button button-link button-compact peds-confirm-weight'>Yes</button>
											</div>
										</div>
									  </div>";
							}
						?>
						<div class="medications-wrapper">
							<?php
								if ($RXdrugNames == "") {
									include "write-prescriptions-medication-empty.php";
								} elseif ($RXdrugNames !== "") {
									include "write-prescriptions-medication-full.php";
								}
							?>
						</div>
						<div class="add-more-wrapper">
							<div class="add-more pull-right" id="add-more-medications-btn">
								<button class="button button-link button-compact">
									<icon class="icon-add"></icon>Add medication
								</button>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						var elem = document.querySelector('.js-switch');
						var switchery = new Switchery(elem, { size: 'small' });
					</script>