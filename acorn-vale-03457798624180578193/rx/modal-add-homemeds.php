<!-- Modal -->
<div class="modal fade" id="addHomeMeds" tabindex="-1" role="dialog" aria-labelledby="Add diagnoses">
	<div class="modal-dialog long" role="document">
		<div class="modal-content medical-history-content">
			<div class="modal-body medical-history-homemeds homemeds-section">
				<div class="modal-header">
					<h1><icon class="icon-medication-bottle homemed-label"></icon>Home Medications</h1>
				</div>
				<?php include "edit-homemeds-content.php"; ?>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Discard changes</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save home medications</button>
				</div>
			</div>
		</div>
	</div>
</div>