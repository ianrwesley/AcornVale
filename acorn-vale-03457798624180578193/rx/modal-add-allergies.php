<!-- Modal -->
<div class="modal fade" id="addAllergies" tabindex="-1" role="dialog" aria-labelledby="Add allergies">
	<div class="modal-dialog long" role="document">
		<div class="modal-content medical-history-content">
			<div class="modal-body medical-history-allergies allergies-section">
				<div class="modal-header">
					<h1><icon class="icon-allergy allergy-label"></icon>Allergies</h1>
				</div>
				<?php include "edit-allergies-content.php"; ?>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Discard changes</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save allergies</button>
				</div>
			</div>
		</div>
	</div>
</div>