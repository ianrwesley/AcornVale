<?php
	$rxFlowProgress = 1;
	include "../variables/patient-variables/variable-test-patient-demographics.php";
?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<?php include "confirm-info-body.php"; ?>
							</div>
						</div>
					</div>
					<div class="controls-footer stickytray">
						<div class="controls-footer-bg"></div>
						<div class="app-section-body">
							<div class="row">
								<div class="column confirm-col">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											<a href="add-medical-history.php"><?php echo $primaryButtonLabel ?></a>
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
	<?php include "modal-discard-new-patient.php"; ?>
</body>

</html>