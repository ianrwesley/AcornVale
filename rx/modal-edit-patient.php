<!-- Modal -->
<div class="modal fade" id="editPatient" tabindex="-1" role="dialog" aria-labelledby="Edit patient">
	<div class="modal-dialog long" role="document">
		<div class="modal-content edit-patient-content">
			<div class="modal-body">
				<div class="modal-header no-margin">
					<h1><?php echo $fullName ?></h1>
				</div>
				<nav class="ep-subnav">
					<ul class="ep-content">
						<li class="ep-item active"><a class="ep-link" data-target="#edit-patient-demographics">Profile</a></li>
						<li class="ep-item"><a class="ep-link" data-target="#edit-patient-medical-history">Medical History</a></li>
					</ul>
				</nav>
				<div class="edit-patient-section-wrap clearfix">
					<?php include "edit-demographics-content.php"; ?>
					<?php include "edit-medical-history-content.php"; ?>
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