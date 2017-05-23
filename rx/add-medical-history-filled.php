<?php
	$rxFlowProgress = 3;
	include "../variables/patient-variables/variable-empty.php";
	include "../variables/patient-variables/variable-test-patient-demographics.php";
	include "../variables/patient-variables/variable-test-patient-medhistory.php";
?>

<?php include "add-medical-history-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<?php include "confirm-info-body.php"; ?>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											<a href="write-prescriptions.php"><?php echo $primaryButtonLabel ?></a>
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
	<?php include "modal-discard-medical-history.php"; ?>
	<?php include "modal-edit-patient.php"; ?>
	<?php include "modal-edit-demographics.php"; ?>
	<?php include "modal-edit-medical-history.php"; ?>
</body>

</html>