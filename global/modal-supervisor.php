<!-- Modal Sign Prescriptions -->
<div class="modal fade" id="selectSupervisor" tabindex="-1" role="dialog" aria-labelledby="Select Supervisor">
	<div class="modal-dialog select-supervisor" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h1 class="header">Select a supervisor</h1>
				<div class="supervisor-list-wrap">
					<ul class="supervisor-list">
						<?php
							foreach ($supervisorsNameArray as $supervisorsKey => $supervisorsNameValue) {
								echo "<li class='supervisor-list-item'>
									<button class='supervisor-select supervisor-select-btn'>
										<span class='supervisor-name'>$supervisorsNameValue</span>
										<!--span class='pull-right status'>Selected</span-->
									</button>
								</li>"
							;}
						?>
					</ul>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Cancel</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save supervisor</button>
				</div>
			</div>
		</div>
	</div>
</div>