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
			<div class="app-section-body">
				<div class="row">
					<div class="column edit-col">
						<div class="flow-section patient-medical-history">
							<h2 class="section-title">Medical History</h2>
							<div class="fieldcontrols first allergies-section">
								<div class="list-populate clearfix">
									<div class="error-msg-wrapper lg-10 <?php if ($fail == "true"){ echo "has-error"; } ?>">
										<input type="text" id="add-allergies" placeholder="<?php if ($allergies == "None"){ echo "No "; } ?>allergies" value="<?php if ($allergies == "None"){ echo ""; } else {echo "";} ?>">
										<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Enter allergies or select "None".</div>
									</div>
									<div class="checkbox-wrapper lg-2">
										<input type="checkbox" id="no-allergies-check" class="checkbox" <?php if ($allergies == "None"){ echo "checked"; } ?>><label for="no-allergies-check">None</label>
									</div>
								</div>
								<div class="list-values">
									<ol class="ordered-list">
									<?php
										if ($allergies !== "" and $allergies !== "None") {
											foreach ($allergiesArray as $allergiesKey => $allergiesValue) {
												echo "<li><span class='allergy'>$allergiesValue</span><label class='rxn-label'>RXN</label><span class='rxn'>$reactionsArray[$allergiesKey]</span><div class='list-item-controls pull-right'><button class='item-control-button item-edit'></button><button class='item-control-button item-delete'></button></div></li>";
											}
										}
									?>
									</ol>
								</div>
							</div>
							<div class="fieldcontrols homemeds-section">
								<div class="list-populate clearfix">
									<div class="error-msg-wrapper lg-10 <?php if ($fail == "true"){ echo "has-error"; } ?>">
										<input type="text" id="add-homemeds" placeholder="<?php if ($homemeds == "None"){ echo "No "; } ?>home medications" value="<?php if ($homemeds == "None"){ echo ""; } else {echo "";} ?>">
										<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Enter home medications or select "None".</div>
									</div>
									<div class="checkbox-wrapper lg-2">
										<input type="checkbox" id="no-homemeds-check" class="checkbox" <?php if ($homemeds == "None"){ echo "checked"; } ?>><label for="no-homemeds-check">None</label>
									</div>
								</div>
								<div class="list-values">
									<ol class="ordered-list">
									<?php
										if ($homemeds !== "" and $homemeds !== "None") {
											foreach ($homemedsArray as $homemedsValue) {
												echo "<li>$homemedsValue<div class='list-item-controls pull-right'><button class='item-control-button item-delete'></button><!--button class='item-control-button item-edit'></button--></div></li>";
											}
										}
									?>
									</ol>
								</div>
							</div>
							<div class="fieldcontrols diagnoses-section">
								<div class="list-populate clearfix">
									<div class="error-msg-wrapper lg-10 <?php if ($fail == "true"){ echo "has-error"; } ?>">
										<input type="text" id="add-diagnoses" placeholder="<?php if ($diagnoses == "None"){ echo "No "; } ?>diagnoses or pre-existing conditions" value="<?php if ($diagnoses == "None"){ echo ""; } else {echo "";} ?>">
										<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Enter diagnoses or select "None".</div>
									</div>
									<div class="checkbox-wrapper lg-2">
										<input type="checkbox" id="no-diagnoses-check" class="checkbox" <?php if ($diagnoses == "None"){ echo "checked"; } ?>><label for="no-diagnoses-check">None</label>
									</div>
								</div>
								<div class="list-values">
									<ol class="ordered-list">
									<?php
										if ($diagnoses !== "" and $diagnoses !== "None") {
											foreach ($diagnosesArray as $diagnosesValue) {
												echo "<li>$diagnosesValue<div class='list-item-controls pull-right'><button class='item-control-button item-delete'></button><!--button class='item-control-button item-edit'></button--></div></li>";
											}
										}
									?>
									</ol>
								</div>
							</div>
						</div>
					</div>