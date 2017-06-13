<?php
	if ($RXdrugNames == "") {
		echo "";
	} else {
		foreach ($RXdrugNamesArray as $RXdrugNamesKey => $RXdrugNamesValue) {
			echo '<div class="flow-section medication collapse in';
			if ($RXdrugNamesValue !== $RXlastDrug) {
				echo ' collapsed';
			}
			echo '"><script type="text/javascript">
			$(".medication-title").each(function(i) {
				$(this).find(".med-ordinal").addClass("med-ordinal-" + (i));
			});

			var ordinals = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth", "Eleventh", "Twelfth", "Thirteenth", "Fourteenth", "Fifteenth", "Sixteenth", "Seventeenth", "Eighteenth", "Nineteenth", "Twentieth"];
			$.each(ordinals, function(index, value) {
				$(".med-ordinal-" + index).text(value);
			});
			
			$(".medication-pharmacynote-btn").on("click",function(){
				$(this).closest(".medication").addClass("has-note").find(".pharmacy-note").addClass("show");
			});
			
			$(".remove-pharmacy-note").on("click",function(){
				$(this).closest(".medication").removeClass("has-note").find(".pharmacy-note").removeClass("show");
			});

			$(".medication-favorite-btn").on("click",function(){
				$(this).children("icon").toggleClass("icon-favorite").toggleClass("icon-favorite-selected");
			});

			$(".medication-edit-btn").on("click",function(){
				$(".medication").removeClass("expanded").addClass("collapsed");
				$(this).closest(".medication").removeClass("collapsed").addClass("in").addClass("expanded");
			});

			$(".medication-save-changes-btn").on("click",function(){
				$(this).closest(".medication").addClass("collapsed").removeClass("expanded");
			});

			$(".medication-delete-btn").on("click",function(){
				$(this).closest(".medication").remove();
				$(".medication-title").each(function(i) {
					$(this).find(".med-ordinal").removeClass("med-ordinal-" + (i+1)).addClass("med-ordinal-" + (i));
				});
				$.each(ordinals, function(index, value) {
					$(".med-ordinal-" + index).text(value);
				});
			});
		</script>
		<div class="section-header">
			<h2 class="section-title medication-title"><span class="med-ordinal"></span> Medication <span class="med-count"></span></h2>
			<div class="button-group condensed pull-right">
				<!--button class="button button-link button-tiny">Edit</button-->
				<button class="button button-link button-tiny medication-save-changes-btn">Save changes</button>
				<button class="button button-link button-icon medication-edit-btn"><icon class="icon-edit"></icon></button>
				<button class="button button-link button-icon medication-delete-btn"><icon class="icon-delete"></icon></button>
				<button class="button button-link button-icon medication-revert-btn"><icon class="icon-revert"></icon></button>
				<button class="button button-link button-icon medication-pharmacynote-btn"><icon class="icon-add-note"></icon></button>
				<button class="button button-link button-icon medication-favorite-btn"><icon class="icon-favorite"></icon></button>
			</div>
		</div>
		<div class="fieldgroup drug-name">
			<div class="error-msg-wrapper lg-12">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="drug name" name="drug name" value="'. $RXdrugNamesValue .'">
				<div class="error-msg">Drug name is required.</div>
			</div>
		</div>
		<div class="fieldgroup">
			<div class="error-msg-wrapper lg-5 has-controls dosage">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="4" class="form-text" placeholder="dose" name="dose" value="'. $RXdosageArray[$RXdrugNamesKey] .'">
				<div class="select-wrapper control dosage-unit">
					<select class="dosage-unit-select">
						<option>'. $RXdosageUnitArray[$RXdrugNamesKey] .'</option>
					</select>
				</div>
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="frequency" name="frequency" value="'. $RXfrequencyArray[$RXdrugNamesKey] .'">
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-3">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="duration" name="duration" value="'. $RXdurationArray[$RXdrugNamesKey] .'">
				<div class="error-msg">Error.</div>
			</div>
		</div>
		<div class="fieldgroup">
			<div class="error-msg-wrapper lg-8">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="custom sig" name="custom sig" value="'. $RXcustomSigArray[$RXdrugNamesKey] .'">
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text field-icon field-disabled dispense-amount" placeholder="dispense amount" name="dispense amount" value="'. $RXdispenseAmtArray[$RXdrugNamesKey] .'" tabindex="-1">
				<icon class="icon-variable nofocus-icon"></icon>
				<div class="error-msg">Error.</div>
			</div>
		</div>
		<div class="fieldgroup">
			<div class="error-msg-wrapper lg-4">
				<input type="text" maxlength="2" class="form-text refills" placeholder="earliest fill date" name="earliest fill date" value="">
				<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4 refill-quantity">
				<input type="text" maxlength="2" class="form-text refills" placeholder="0 refill';
			if ($RXrefillsArray[$RXdrugNamesKey] !== "1") {
				echo 's';
			}
			echo '" name="refill quantity" value="'. $RXrefillsArray[$RXdrugNamesKey] .'">
				<!--div class="label-vertical-center"><label for="refill-quantity">refills</label></div-->
				<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Error.</div>
			</div>
			<!--div class="error-msg-wrapper lg-3 refill-quantity">
				<input type="text" maxlength="2" class="form-text refills" placeholder="0" name="refill quantity" value="'. $RXrefillsArray[$RXdrugNamesKey] .'">
				<label for="refill-quantity">refill';
			if ($RXrefillsArray[$RXdrugNamesKey] !== "1") {
				echo 's';
			}	
			echo '</label>
				<div class="error-msg">Error.</div>
			</div-->
			<div class="error-msg-wrapper lg-4 substitutes">
				<div class="switch-wrapper">
					<input type="checkbox" class="js-switch" name="substitutes allowed" id="substitutes-allowed" />
				</div>
				<div class="label-vertical-center"><label for="refill-quantity">refills</label></div>
				<div class="error-msg">Error.</div>
			</div>
		</div>
		<div class="fieldgroup">
			<div class="error-msg-wrapper lg-12">
				<textarea class="form-text form-text-area pharmacy-note" placeholder="note to pharmacy" name="note to pharmacy" value="" rows="2"></textarea>
				<div class="remove-note"><button class="button button-link button-tiny secondary-action remove-pharmacy-note">remove note</button></div>
				<div class="error-msg">Error.</div>
			</div>
		</div>
	</div>';}
	}
?>