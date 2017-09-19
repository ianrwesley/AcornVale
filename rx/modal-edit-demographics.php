<!-- Modal -->
<div class="modal fade" id="editDemographics" tabindex="-1" role="dialog" aria-labelledby="Edit demographics">
	<div class="modal-dialog full-height" role="document">
		<div class="modal-content edit-patient-content">
			<div class="modal-body">
				<div class="modal-header no-margin">
					<h1><?php echo $fullName ?></h1>
				</div>
				<div class="edit-patient-section-wrap demographics-only clearfix">
					<?php include "edit-demographics-content.php"; ?>
				</div>
			</div>
			<div class="controls-footer fixed bottom clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Discard changes</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>