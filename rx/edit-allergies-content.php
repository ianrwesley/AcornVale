<div class="flow-section-wrap">
	<div class="active-items-wrap">
		<div class="active-items-content">
			<?php
				if ($allergies == "" or $allergies == "None") {
					echo "<div class='flow-section'>
							<h2 class='section-title'>First allergy</h2>
							<div class='fieldgroup'>
								<div class='error-msg-wrapper lg-4'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='allergy' name='phone' value=''>
									<div class='error-msg'>Error</div>
								</div>
								<div class='error-msg-wrapper lg-8'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='reactions' name='email' value=''>
									<div class='error-msg'>Error</div>
								</div>
							</div></div>";
				}
				elseif ($allergies !== "" and $allergies !== "None") {
					foreach ($allergiesArray as $allergiesKey => $allergiesValue) {
						echo "<div class='flow-section'>
								<div class='header-wrap med-history-item-header clearfix'>
									<h2 class='section-title'>$ordinalsArray[$allergiesKey] allergy</h2>
									<div class='pull-right button-group'><button class='button button-link button-tiny secondary-action markerror'><icon class='icon-error'></icon>Mark Error</button><button class='button button-link button-tiny secondary-action discontinue'><icon class='icon-discontinue'></icon>Discontinue</button></div>
								</div>
								<div class='fieldgroup'>
									<div class='error-msg-wrapper lg-4'>
										<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='allergy' name='phone' value='$allergiesValue'>
										<div class='error-msg'>Error</div>
									</div>
									<div class='error-msg-wrapper lg-8'>
										<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='reactions' name='email' value='$reactionsArray[$allergiesKey]'>
										<div class='error-msg'>Error</div>
									</div>
								</div></div>";
					}
				}
			?>
		</div>
		<div class="add-more-wrapper">
			<div class="add-more pull-right add-more-allergies-btn">
				<button class="button button-link button-compact"><icon class="icon-add"></icon>Add allergy</button>
			</div>
		</div>
	</div>
	<?php
		if ($allergiesDiscontinued !== "") {
			echo "<div class='discontinued-section'><ol class='ordered-list'><div class='discontinued-label'>Discontinued allergies</div>";
			foreach ($allergiesDiscontinuedArray as $allergiesDiscontinuedKey => $allergiesDiscontinuedValue) {
				echo "<li class='discontinued-item'><span class='detail allergy'>$allergiesDiscontinuedValue</span><label class='rxn-label'>RXN</label><span class='sub-detail rxn'>$reactionsDiscontinuedArray[$allergiesDiscontinuedKey]</span><div class='list-item-controls pull-right'><button class='button button-link button-tiny secondary-action'><icon class='icon-add'></icon>Recontinue</button></div></li>";
			}
			echo "</ol></div>";
		}
	?>
</div>