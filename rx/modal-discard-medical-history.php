<!-- Modal -->
<div class="modal fade" id="cancelConfirm" tabindex="-1" role="dialog" aria-labelledby="Discard medical history">
	<div class="modal-dialog caution" role="document">
		<div class="modal-content text-centered">
			<div class="modal-header">
				<h1>Are you sure?</h1>
			</div>
			<div class="modal-body">
				Continuing will discard <?php echo "$firstName $lastName" ?>'s medical history.
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Cancel</button>
					<button type="button" role="link" class="button button-flat primary-action caution">
						<a href="../home/home-view.php?historydiscarded=true">Discard medical history…</a>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>