<div class="flow-section-wrap">
	<div class="active-items-wrap">
		<div class="active-items-content">
			<?php
				if ($homemeds == "" or $homemeds == "None") {
					echo "<div class='flow-section'>
							<h2 class='section-title'>First home medication</h2>
							<div class='fieldgroup'>
								<div class='error-msg-wrapper lg-12'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='drug name' name='drug name' value=''>
									<div class='error-msg'>Error</div>
								</div>
							</div>
							<div class='fieldgroup'>
								<div class='error-msg-wrapper lg-4 has-controls dosage'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' maxlength='4' class='form-text' placeholder='dose' name='dose' value=''>
									<div class='control dosage-unit'>
										<span>units</span>
									</div>
									<div class='error-msg'>Error</div>
								</div>
								<div class='error-msg-wrapper lg-4'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='frequency' name='frequency' value=''>
									<div class='error-msg'>Error</div>
								</div>
								<div class='error-msg-wrapper lg-4'>
									<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='last taken' name='last taken' value=''>
									<div class='error-msg'>Error</div>
								</div>
							</div></div>";
				}
				elseif ($homemeds !== "" and $homemeds !== "None") {
					foreach ($homemedsArray as $homemedsKey => $homemedsValue) {
						echo "<div class='flow-section'>
									<div class='header-wrap clearfix'>
										<h2 class='section-title'>$ordinalsArray[$homemedsKey] home medication</h2>
										<div class='pull-right'><button class='button button-link button-tiny secondary-action discontinue'><icon class='icon-discontinue'></icon>Discontinue</button></div>
									</div>
									<div class='fieldgroup'>
										<div class='error-msg-wrapper lg-12'>
											<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='drug name' name='drug name' value='$homemedsValue'>
											<div class='error-msg'>Error</div>
										</div>
									</div>
									<div class='fieldgroup'>
										<div class='error-msg-wrapper lg-4 has-controls dosage'>
											<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' maxlength='4' class='form-text' placeholder='dose' name='dose' value='$homemedsDoseArray[$homemedsKey]'>
											<div class='control dosage-unit'>
												<span>$homemedsDoseUnitArray[$homemedsKey]</span>
											</div>
											<div class='error-msg'>Error</div>
										</div>
										<div class='error-msg-wrapper lg-4'>
											<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='frequency' name='frequency' value='$homemedsFrequencyArray[$homemedsKey]'>
											<div class='error-msg'>Error</div>
										</div>
										<div class='error-msg-wrapper lg-4'>
											<input type='text' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' class='form-text' placeholder='last taken' name='last taken' value='$homemedsLastTakenArray[$homemedsKey]'>
											<div class='error-msg'>Error</div>
										</div>
									</div></div>";
					}
				}
			?>
		</div>
		<div class="add-more-wrapper">
			<div class="add-more pull-right add-more-homemeds-btn">
				<button class="button button-link button-compact"><icon class="icon-add"></icon>Add home medication</button>
			</div>
		</div>
	</div>
	<?php
		if ($homemedsDiscontinued !== "") {
			echo "<div class='discontinued-section'><ol class='ordered-list'><div class='discontinued-label'>Discontinued home medications</div>";
			foreach ($homemedsDiscontinuedArray as $homemedsDiscontinuedKey => $homemedsDiscontinuedValue) {
				echo "<li class='discontinued-item'><div class='list-item-details pull-left lg-10'><span class='detail home-medication-name'>$homemedsDiscontinuedValue</span><span class='sub-detail home-medication-dosage'>$homemedsDoseDiscontinuedArray[$homemedsDiscontinuedKey]</span><span class='sub-detail home-medication-frequency lg-3'>$homemedsFrequencyDiscontinuedArray[$homemedsDiscontinuedKey]</span><span class='sub-detail home-medication-last-taken'>$homemedsLastTakenDiscontinuedArray[$homemedsDiscontinuedKey]</span></div><div class='list-item-controls pull-right'><button class='button button-link button-tiny secondary-action'><icon class='icon-add'></icon>Recontinue</button></div></li>";
			}
			echo "</ol></div>";
		}
	?>
</div>