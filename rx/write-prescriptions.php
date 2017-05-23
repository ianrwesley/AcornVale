<?php
	$rxFlowProgress = 4;
	$existingPatient = $_GET[ "existing" ];
	include "../variables/patient-variables/variable-empty.php";

	if ($existingPatient == "william-woolworth-wallace") {
		include "../variables/patient-variables/variable-test-patient-demographics.php";
		include "../variables/patient-variables/variable-test-patient-medhistory.php";
	} elseif ($existingPatient == "william-hamish-wallace") {
		include "../variables/patient-variables/variable-wallace2-patient-demographics.php";
		include "../variables/patient-variables/variable-wallace2-patient-medhistory.php";
	} else {
		include "../variables/patient-variables/variable-test-patient-demographics.php";
		include "../variables/patient-variables/variable-test-patient-medhistory.php";
	}
?>

<?php include "write-prescriptions-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<?php include "confirm-info-body.php"; ?>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action disabled">
											<a href="write-prescriptions-filled.php"><?php echo $primaryButtonLabel ?></a>
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
	<?php include "../global/globalfooter.php"; ?>
	<?php include "modal-cancel-writing-prescriptions.php"; ?>
	<?php include "modal-edit-patient.php"; ?>
</body>

</html>