<!-- Modal -->
<div class="modal fade modal-interaction-alert" id="alertInteraction" tabindex="-1" role="dialog" aria-labelledby="Duplicate Therapy">
	<div class="modal-dialog" role="document">
		<div class="modal-content text-centered">
			<div class="modal-header">
				<h1 class="header-alert"><img class="caution-img" src="../global/images/caution.png" alt="Caution!">Duplicate Therapy Alert</h1>
			</div>
			<div class="modal-body interaction-body">
				<div class="section-wrap">
					<div class="row">
						<div class="column lg-4"><span class="row-label">This medication</span></div>
						<div class="column lg-8"><span class="bold highlight-error">Benadryl 25MG PO Tablet</span> <i>duplicates</i></div>
					</div>
					<div class="row">
						<div class="column lg-4"><span class="row-label">Existing medication</span></div>
						<div class="column lg-8"><span class="bold">Benadryl 50MG Tablet</span></div>
					</div>
				</div>
				<!--div class="section-wrap section-details severity-section">
					<div class="row">
						<div class="column lg-4"><span class="row-label">DAI severity</span></div>
						<div class="column lg-8"><span class="bold">Severe</span></div>
					</div>
					<div class="row">
						<div class="column lg-4"><span class="row-label">Details</span></div>
						<div class="column lg-8"><p>This patient is allergic to penicillins. Cephelaxin is a&#40;n&#41; cephalosporin and may show allergic cross-reactivity to penicillins.</p><p>Patient reacts with: <i>drug rash.</i></p></div>
					</div>
				</div-->
				<div class="section-wrap section-details">
					<div class="row">
						<div class="column lg-4"><span class="row-label">Override reason</span></div>
						<div class="column lg-8">
							<span><i>Check all that apply:</i></span>
							<ul class="checklist">
								<li><input type="checkbox" id="override-1"><label for="override-1">Patient will discontinue existing or home therapy</label></li>
								<li><input type="checkbox" id="override-3"><label for="override-3">Documented medication incorrect/outdated</label></li>
								<!--div class="clearfix">
									<li><input type="checkbox" id="override-7"><label for="override-7">Other</label><input type="text" class="form-text"></li>
								</div>
								<li><input type="checkbox" id="override-8"><label for="override-8">Don't show this alert again</label><icon class="icon-help-inverted"></icon></li-->
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-flat secondary-action caution" disabled>Continue Rx…</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Remove Rx</button>
				</div>
			</div>
		</div>
	</div>
</div>