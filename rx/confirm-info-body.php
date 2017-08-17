<?php
$confirmInfoTitle = "Patient Details";
?>


<div class="row">
	<div class="column lg-9">
		<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
	</div>
	<div class="column lg-3 edit-patient-button <?php if ($rxFlowProgress < 2) { echo "hidden"; } ?>">
		<button role="button" class="button button-link button-tiny" data-toggle="modal" data-target="#edit<?php if ($rxFlowProgress < 4) { echo "Demographics"; } else { echo "Patient"; } ?>">Edit <?php if ($rxFlowProgress < 4) { echo "profile"; } else { echo "patient"; } ?></button>
	</div>
</div>
<div class="confirm-info <?php if ($rxFlowProgress == 0) { echo "empty"; } ?>">
	<div class="header filled"><?php if ($rxFlowProgress > 0) { echo "$fullName"; } else { echo "Patient details are displayed here."; } ?></div>
	<div class="confirm-info-sticky <?php if ($rxFlowProgress == 0) { echo "hidden"; } ?>">
		<div class="row clearfix">
			<div class="column lg-12">
				<span class="confirm-info-item first"><?php echo "$birthdayClean <span class='sub-detail age'>($age yrs. old)</span>"; ?></span><span class="confirm-info-item"><?php echo $gender ?></span><span class="confirm-info-item"><?php echo $weightString ?></span>
			</div>
		</div>
	</div>
	<div class="confirm-info-flow-wrap">
		<div class="confirm-info-flow <?php if ($rxFlowProgress == 0 || $rxFlowProgress == 6 || $rxFlowProgress == 7) { echo "hidden"; } ?> <?php if ($rxFlowProgress == 1) { echo "current-flow-step"; } ?>">
			<div class="row clearfix">
				<div class="column lg-6">
					<h3 class="row-header"><icon class="icon-home"></icon>Address</h3>
					<span class="detail-overflow address-street"><?php echo $address ?></span><br>
					<span class="detail-overflow address-city-state"><?php echo "$city, $state $zipCode"; ?></span>
				</div>
				<div class="column lg-6">
					<h3 class="row-header">Contact</h3>
					<span class="detail phone"><icon class="icon-smartphone"></icon><?php echo $phone ?></span><br>
					<span class="detail email"><icon class="icon-mail"></icon><?php echo $email ?></span>
				</div>
			</div>
		</div>
		<div class="confirm-info-flow medical-history <?php if ($rxFlowProgress == 4 || $rxFlowProgress == 5 || $rxFlowProgress < 3) { echo "hidden"; } ?> <?php if ($rxFlowProgress == 2 || $rxFlowProgress == 3) { echo "current-flow-step"; } ?> <?php if ($rxFlowProgress == 6 || $rxFlowProgress == 7) { echo "first"; }?>">
			<div class="row clearfix">
				<div class="column lg-6">
					<h3 class="row-header allergy-label"><icon class="icon-allergy"></icon>Allergies</h3>
					<span class="allergies"><?php echo $allergies ?></span>
				</div>
				<div class="column lg-6">
					<h3 class="row-header homemed-label"><icon class="icon-medication-bottle"></icon>Home Medications</h3>
					<span class="homemeds"><?php echo $homemeds ?></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="column lg-12">
					<h3 class="row-header diagnosis-label"><icon class="icon-diagnosis"></icon>Diagnoses &amp; Conditions</h3>
					<span class="diagnoses"><?php echo $diagnoses ?></span>
				</div>
			</div>
		</div>
		<div class="confirm-info-flow prescriptions <?php if ($rxFlowProgress < 7) { echo "hidden"; } ?> <?php if ($rxFlowProgress == 6 || $rxFlowProgress == 7) { echo "current-flow-step"; } ?>">
			<div class="row clearfix">
				<div class="column lg-12">
					<h3 class="row-header prescriptions-label"><icon class="icon-prescription"></icon>Prescriptions</h3>
					<ol class="ordered-list">
						<?php
							if ($RXdrugNames !== "" and $RXdrugNames !== "None") {
								foreach ($RXdrugNamesArray as $RXdrugNamesKey => $RXdrugNamesValue) {
									echo "<li><div class='row'><div class='column lg-8'><span class='rx-drug-name'>$RXdrugNamesValue</span></div><div class='column lg-2'><span class='sub-detail small'>$RXrefillsArray[$RXdrugNamesKey] refill";
									if ($RXrefillsArray[$RXdrugNamesKey] !== "1") {
										echo 's';
									}
									echo "</span></div><div class='column lg-2'><span class='sub-detail small'>$RXsubstitutionsArray[$RXdrugNamesKey]</span></div></div><span class='sub-detail lg-3'>#<b>$RXdispenseAmtArray[$RXdrugNamesKey]</b></span><span class='sub-detail lg-9'><i>sig.</i> $RXcustomSigArray[$RXdrugNamesKey]</span></li>";
								}
							} elseif ($RXdrugNames == "" or $RXdrugNames == "None") {
								echo "<li>None</li>";
							}
						?>
					</ol>
				</div>
			</div>
		</div>
		<div class="confirm-info-flow pharmacy <?php if ($rxFlowProgress == 6 || $rxFlowProgress == 7 || $rxFlowProgress < 5) { echo "hidden"; } ?> <?php if ($rxFlowProgress == 4 || $rxFlowProgress == 5) { echo "current-flow-step"; } ?>">
			<div class="row clearfix">
				<div class="column lg-12">
					<h3 class="row-header pharmacy-label"><icon class="icon-pharmacy"></icon>Pharmacy</h3>
					<div class="pharmacy-confirm-wrap">
						<div class="row">
							<div class="column lg-6">
								<span class="pharmacy-name"><?php echo "$selectedPharmacyName"; ?></span>
								<div class="pharmacy-address-wrap">
									<span class="pharmacy-street"><?php echo "$selectedPharmacyStreet"; ?></span>
									<span class="pharmacy-location"><?php echo "$selectedPharmacyLocation"; ?></span>
								</div>
							</div>
							<div class="column lg-6 pharmacy-details">
								<div class="pharmacy-filters-wrap">
									<span class="pharmacy-filters"><?php echo "$selectedPharmacyFeatures"; ?></span>
								</div>
								<div class="pharmacy-contact-wrap">
									<span class="detail pharmacy-phone"><icon class="icon-smartphone"></icon><?php echo "$selectedPharmacyPhone"; ?></span>
									<span class="detail pharmacy-fax"><icon class="icon-fax"></icon><?php echo "$selectedPharmacyFax"; ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>