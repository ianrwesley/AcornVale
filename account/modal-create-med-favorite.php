<!-- Modal Assign Users -->
<div class="modal fade ca-account-overlay-popup" id="ca-create-med-favorite" tabindex="-1" role="dialog" aria-labelledby="Create Favorite Medication">
	<div class="modal-dialog long" role="document">
		<div class="modal-content text-centered ca-overlay-content">
			<div class="modal-body">
				<h1 class="header">Create Favorite Medication</h1>
				<div class="medications-wrapper">
					<?php
						include "../rx/write-prescriptions-medication-empty.php";
					?>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<input type="checkbox" id="addAnother"><label for="addAnother" type="button" class="button button-link secondary-action checkbox-left">Add another</label>
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Cancel</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Create favorite</button>
				</div>
			</div>
		</div>
	</div>
</div>