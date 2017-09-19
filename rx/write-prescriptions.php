<?php
	$rxFlowProgress = 6;
	$existingPatient = $_GET[ "existing" ];
	$alertInteraction = $_GET[ "alert" ];
	include "../variables/patient-variables/variable-empty.php";

	if ($existingPatient !== null) {
		include "../variables/patient-variables/variable-$existingPatient-demographics.php";
		include "../variables/patient-variables/variable-$existingPatient-medhistory.php";
		include "../variables/patient-variables/variable-$existingPatient-pharmacy.php";
	} else {
		include "../variables/patient-variables/variable-test-patient-demographics.php";
		include "../variables/patient-variables/variable-test-patient-medhistory.php";
		include "../variables/patient-variables/variable-test-patient-pharmacy.php";
	}
?>

<?php include "write-prescriptions-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<?php include "confirm-info-body.php"; ?>
							</div>
						</div>
					</div>
					<div class="controls-footer stickytray">
						<!--div class="controls-footer-bg"></div-->
						<div class="app-section-body">
							<div class="row">
								<div class="column lg-5">
									<?php include "rx-sn-flogress.php"; ?>
								</div>
								<div class="column lg-4">
									<div class="select-pharmacy-control">
										<p class="control-header"><b><icon class="icon-pharmacy pharmacy-label"></icon><button class="button-link button-tiny pharmacy-name-restrict field-info" role="link" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="<span class='pharmacy-phone'><?php echo "$selectedPharmacyPhone"; ?></span><span class='pharmacy-fax'><?php echo "$selectedPharmacyFax"; ?></span>"><?php echo "$selectedPharmacyName"; ?></button></b> <a class="inline-edit-link" href="" role="link" data-toggle="modal" data-target="#pharmacySearch">Change</a></p>
										<span class="pharmacy-street"><?php echo "$selectedPharmacyStreet"; ?></span><br>
										<span class="pharmacy-location"><?php echo "$selectedPharmacyLocation"; ?></span>
									</div>
								</div>
								<div class="column lg-3">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action disabled">
											<a href="write-prescriptions-filled.php<?php if ($existingPatient !== null) { echo "?existing=$existingPatient"; } ?>"><?php echo $primaryButtonLabel ?></a>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
	<?php include "modal-cancel-writing-prescriptions.php"; ?>
	<?php include "modal-edit-patient.php"; ?>
	<?php include "modal-select-pharmacy.php"; ?>
	<?php if ($alertInteraction == "drug-allergy") { include "modal-alert-drug-allergy.php"; } elseif ($alertInteraction == "duplicate-therapy") { include "modal-alert-duplicate-therapy.php"; } elseif ($alertInteraction == "drug-drug-minor") { include "modal-alert-drug-drug-minor.php"; } elseif ($alertInteraction == "drug-drug-moderate") { include "modal-alert-drug-drug-moderate.php"; } elseif ($alertInteraction == "drug-drug-major") { include "modal-alert-drug-drug-major.php"; }?>
	<script type="text/javascript">
		$("#alertInteraction").modal();
	</script>
</body>

</html>