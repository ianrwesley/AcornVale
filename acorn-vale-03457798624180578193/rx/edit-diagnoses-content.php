<div class="flow-section-wrap">
	<div class="active-items-wrap">
		<div class="active-items-content">
			<?php
				if ($diagnoses == "" or $diagnoses == "None") {
					echo "<div class='flow-section'>
							<h2 class='section-title'>First diagnosis or condition</h2>
							<div class='fieldgroup'>
								<div class='error-msg-wrapper lg-12'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='diagnosis or pre-existing condition' name='diagnosis' value=''>
									<div class='error-msg'>Error</div>
								</div>
							</div></div>";
				}
				elseif ($diagnoses !== "" and $diagnoses !== "None") {
					foreach ($diagnosesArray as $diagnosisKey => $diagnosesValue) {
						echo "<div class='flow-section'>
								<div class='header-wrap med-history-item-header clearfix'>
									<h2 class='section-title'>$ordinalsArray[$diagnosisKey] diagnosis or condition</h2>
									<div class='pull-right button-group'><button class='button button-link button-tiny secondary-action markerror'><icon class='icon-error'></icon>Mark Error</button><button class='button button-link button-tiny secondary-action discontinue'><icon class='icon-discontinue'></icon>Discontinue</button></div>
								</div>
								<div class='fieldgroup'>
									<div class='error-msg-wrapper lg-12'>
										<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='diagnosis or pre-existing condition' name='diagnosis' value='$diagnosesValue'>
										<div class='error-msg'>Error</div>
									</div>
								</div></div>";
					}
				}
			?>
		</div>
		<div class="add-more-wrapper">
			<div class="add-more pull-right add-more-diagnoses-btn">
				<button class="button button-link button-compact"><icon class="icon-add"></icon>Add diagnosis</button>
			</div>
		</div>
	</div>
</div>