<!-- Modal -->
<div class="modal fade" id="editPatient" tabindex="-1" role="dialog" aria-labelledby="Edit patient">
	<div class="modal-dialog long" role="document">
		<div class="modal-content edit-patient-content">
			<div class="modal-body">
				<div class="modal-header no-margin">
					<h1><?php echo $fullName ?></h1>
				</div>
				<?php include "edit-patient-content-demographics.php"; ?>
				<div class="flow-section patient-medical-history medical-history-content">
					<h2 class="section-title">Medical History</h2>
						<div class="segmented-control-wrap medical-history-toggle">
							<div class="btn-group" role="group" aria-label="">
								<button type="button" class="btn btn-default btn-show-allergies edit-med-history-toggle focus" data-target="#edit-section-allergies">
									<div class="section-label allergy-label"><icon class="icon-allergy"></icon>Allergies</div>
								</button>
								<button type="button" class="btn btn-default btn-show-homemeds edit-med-history-toggle" data-target="#edit-section-homemeds">
									<div class="section-label homemed-label"><icon class="icon-medication-bottle"></icon>Home Meds</div>
								</button>
								<button type="button" class="btn btn-default btn-show-diagnoses edit-med-history-toggle" data-target="#edit-section-diagnoses">
									<div class="section-label diagnosis-label"><icon class="icon-diagnosis"></icon>Diagnoses</div>
								</button>
							</div>
						</div>
					<div class="flow-section allergies-section show" id="edit-section-allergies">
						<?php include "edit-allergies-content.php"; ?>
					</div>
					<div class="flow-section homemeds-section" id="edit-section-homemeds">
						<?php include "edit-homemeds-content.php"; ?>
					</div>
					<div class="flow-section diagnoses-section" id="edit-section-diagnoses">
						<?php include "edit-diagnoses-content.php"; ?>
					</div>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Discard changes</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>