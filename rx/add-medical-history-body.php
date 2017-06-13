<?php
$pageTitle = "Prescriptions";
$subnavTitle = "Add new patient";
$subnavProgress = 0;
$primaryButtonLabel = "Write prescriptions…";
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

<body class="rx-app app-flow add-medical-history">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<?php include "rx-subnav.php"; ?>
		<div class="page-content">
		<div class="app-section-body-wrapper">
			<div class="app-background-edit">&nbsp;</div><div class="app-background-confirm">&nbsp;</div>
			<div class="app-section-body-scroll">
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<div class="flow-section patient-medical-history">
							<h2 class="section-title">Medical History</h2>
							<div class="fieldcontrols first allergies-section">
								<?php
									if ($allergies == "") {
										echo '<div class="details-popover"><icon class="icon-allergy allergy-label"></icon><a href="#" data-toggle="modal" data-target="#editMedicalHistory">Add allergies</a> or select <a href="#" id="select-none-allergies">none</a>.</div>';
									} else {
										echo '<div class="section-header"><div class="section-label allergy-label"><icon class="icon-allergy"></icon>Allergies</div><div class="button-group pull-right">';
										if ($allergiesDiscontinued !== "") {
											echo '<button class="button-link button-tiny secondary-action">Show errors</button><button class="button-link button-tiny secondary-action show-discontinued active" data-toggle="collapse" data-target="#discontinued-allergies-list" aria-expanded="false" aria-controls="discontinued-allergies-list">Show discontinued</button><button class="button-link button-tiny secondary-action hide-discontinued" data-toggle="collapse" data-target="#discontinued-allergies-list" aria-expanded="false" aria-controls="discontinued-allergies-list">Hide discontinued</button>';
										}
										echo '<button class="button-link button-tiny" data-toggle="modal" data-target="#editMedicalHistory">Edit</button></div></div>';
									}
								?>
								<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Make a selection.</div>
								<div class="list-values">
									<ol class="ordered-list">
										<?php
											if ($allergies !== "" and $allergies !== "None") {
												foreach ($allergiesArray as $allergiesKey => $allergiesValue) {
													echo "<li><span class='detail allergy'>$allergiesValue</span><label class='rxn-label'>RXN</label><span class='sub-detail rxn'>$reactionsArray[$allergiesKey]</span><div class='list-item-controls pull-right'><button class='item-control-button item-discontinue'></button><button class='item-control-button item-markerror'></button></div></li>";
												}
											} elseif ($allergies == "None") {
												echo "<li>None</li>";
											}
										?>
										<div class="discontinued-list collapse" id="discontinued-allergies-list">
											<div class="discontinued-label">Discontinued allergies</div>
											<?php
												if ($allergiesDiscontinued !== "") {
													foreach ($allergiesDiscontinuedArray as $allergiesDiscontinuedKey => $allergiesDiscontinuedValue) {
														echo "<li class='discontinued-item'><span class='detail allergy'>$allergiesDiscontinuedValue</span><label class='rxn-label'>RXN</label><span class='sub-detail rxn'>$reactionsDiscontinuedArray[$allergiesDiscontinuedKey]</span><div class='list-item-controls pull-right'><!--button class='item-control-button item-edit'></button--><button class='item-control-button item-recontinue'></button></div></li>";
													}
												}
											?>
										</div>
									</ol>
								</div>
							</div>
							<div class="fieldcontrols homemeds-section">
								<?php
									if ($homemeds == "") {
										echo '<div class="details-popover"><icon class="icon-medication-bottle homemed-label"></icon><a href="#" data-toggle="modal" data-target="#editMedicalHistory">Add home medications</a> or select <a href="#" id="select-none-homemeds">none</a>.</div>';
									} else {
										echo '<div class="section-header"><div class="section-label homemed-label"><icon class="icon-medication-bottle"></icon>Home Medications</div><div class="button-group pull-right">';
										if ($homemedsDiscontinued !== "") {
											echo '<button class="button-link button-tiny secondary-action">Show errors</button><button class="button-link button-tiny secondary-action show-discontinued active" data-toggle="collapse" data-target="#discontinued-homemeds-list" aria-expanded="false" aria-controls="discontinued-homemeds-list">Show discontinued</button><button class="button-link button-tiny secondary-action hide-discontinued" data-toggle="collapse" data-target="#discontinued-homemeds-list" aria-expanded="false" aria-controls="discontinued-homemeds-list">Hide discontinued</button>';
										}
										echo '<button class="button-link button-tiny" data-toggle="modal" data-target="#editMedicalHistory">Edit</button></div></div>';
									}
								?>
								<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Make a selection.</div>
								<div class="list-values">
									<ol class="ordered-list">
										<?php
											if ($homemeds !== "" and $homemeds !== "None") {
												foreach ($homemedsArray as $homemedsKey => $homemedsValue) {
													echo "<li><div class='list-item-details list-home-med-details pull-left'><span class='detail home-medication-name'>$homemedsValue</span><span class='sub-detail home-medication-dosage'>$homemedsDoseArray[$homemedsKey] $homemedsDoseUnitArray[$homemedsKey]</span><span class='sub-detail home-medication-frequency lg-3'>$homemedsFrequencyArray[$homemedsKey]</span><span class='sub-detail home-medication-last-taken'>$homemedsLastTakenArray[$homemedsKey]</span></div><div class='list-item-controls pull-right'><button class='item-control-button item-discontinue'></button><button class='item-control-button item-markerror'></button></div></li>";
												}
											} elseif ($homemeds == "None") {
												echo "<li>None</li>";
											}
										?>
										<div class="discontinued-list collapse" id="discontinued-homemeds-list">
											<div class="discontinued-label">Discontinued home medications</div>
											<?php
												if ($homemedsDiscontinued !== "") {
													foreach ($homemedsDiscontinuedArray as $homemedsDiscontinuedKey => $homemedsDiscontinuedValue) {
														echo "<li class='discontinued-item'><div class='list-item-details list-home-med-details pull-left'><span class='detail home-medication-name'>$homemedsDiscontinuedValue</span><span class='sub-detail home-medication-dosage'>$homemedsDoseDiscontinuedArray[$homemedsDiscontinuedKey]</span><span class='sub-detail home-medication-frequency lg-3'>$homemedsFrequencyDiscontinuedArray[$homemedsDiscontinuedKey]</span><span class='sub-detail home-medication-last-taken'>$homemedsLastTakenDiscontinuedArray[$homemedsDiscontinuedKey]</span></div><div class='list-item-controls pull-right'><!--button class='item-control-button item-edit'--><button class='item-control-button item-recontinue'></button></button></div></li>";
													}
												}
											?>
										</div>
									</ol>
								</div>
							</div>
							<div class="fieldcontrols diagnoses-section">
								<?php
									if ($diagnoses == "") {
										echo '<div class="details-popover"><icon class="icon-diagnosis diagnosis-label"></icon><a href="#" data-toggle="modal" data-target="#editMedicalHistory">Add diagnoses or conditions</a> or select <a href="#" id="select-none-diagnoses">none</a>.</div>';
									} else {
										echo '<div class="section-header"><div class="section-label diagnosis-label"><icon class="icon-diagnosis"></icon>Diagnoses &amp; Conditions</div><div class="button-group pull-right">';
										if ($diagnosesDiscontinued !== "") {
											echo '<button class="button-link button-tiny secondary-action">Show errors</button><button class="button-link button-tiny secondary-action">Show discontinued</button>';
										}
										echo '<button class="button-link button-tiny" data-toggle="modal" data-target="#editMedicalHistory">Edit</button></div></div>';
									}
								?>
								<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Make a selection.</div>
								<div class="list-values">
									<ol class="ordered-list">
										<?php
											if ($diagnoses !== "" and $diagnoses !== "None") {
												foreach ($diagnosesArray as $diagnosesValue) {
													echo "<li>$diagnosesValue<div class='list-item-controls pull-right'><!--button class='item-control-button item-edit'></button--><button class='item-control-button item-discontinue'></button></div></li>";
												}
											} elseif ($diagnoses == "None") {
												echo "<li>None</li>";
											}
										?>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<?php include "modal-add-allergies.php"; ?>
					<?php include "modal-add-homemeds.php"; ?>
					<?php include "modal-add-diagnoses.php"; ?>