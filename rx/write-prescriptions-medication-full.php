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
			<div class="error-msg-wrapper lg-4 has-controls dosage">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="4" class="form-text" placeholder="dose" name="dose" value="'. $RXdosageArray[$RXdrugNamesKey] .'">
				<div class="control dosage-unit">
					<span>'. $RXdosageUnitArray[$RXdrugNamesKey] .'</span>
				</div>
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text" placeholder="frequency" name="frequency" value="'. $RXfrequencyArray[$RXdrugNamesKey] .'">
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4">
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
				<icon class="icon-calculator nofocus-icon"></icon>
				<div class="error-msg">Error.</div>
			</div>
		</div>
		<div class="fieldgroup">
			<div class="error-msg-wrapper lg-3 refill-quantity">
				<input type="text" maxlength="2" class="form-text refills" placeholder="0" name="refill quantity" id="refill-quantity" value="'. $RXrefillsArray[$RXdrugNamesKey] .'">
				<label for="refill-quantity">refill';
			if ($RXrefillsArray[$RXdrugNamesKey] !== "1") {
				echo 's';
			}	
			echo '</label>
				<div class="error-msg">Error.</div>
			</div>
			<div class="error-msg-wrapper lg-4 substitutes">
				<div class="switch-wrapper">
					<input type="checkbox" class="js-switch" name="substitutes allowed" id="substitutes-allowed" />
				</div>
				<label for="substitutes-allowed">substitutes OK</label>
				<div class="error-msg">Error.</div>
			</div>
		</div>
	</div>';}
	}
?>