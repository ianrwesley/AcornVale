<?php
	if ($RXdrugNames == "") {
		echo "";
	} else {
		foreach ($RXdrugNamesArray as $RXdrugNamesKey => $RXdrugNamesValue) {
			echo '<div class="medication-item-wrap"><div class="flow-section medication collapse in';
			//if ($RXdrugNamesValue !== $RXlastDrug) {
				echo ' collapsed';
			//}
			echo '"><script type="text/javascript">
			$(".medication-edit-btn").on("click",function(){
				$(".medication").removeClass("expanded").addClass("collapsed");
				$(this).closest(".medication-item-wrap").find(".medication").removeClass("collapsed").addClass("in").addClass("expanded");
			});
			
			$(".medication-save-btn").on("click",function(){
				$(".medication").removeClass("expanded").addClass("collapsed");
			});
		</script>
		<div class="fieldgroup-constrain-width">
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
					<div class="label-vertical-center"><label for="refill-quantity">substitutes OK</label></div>
					<div class="error-msg">Error.</div>
				</div>
			</div>
		</div>
		<div class="table-view-controls">
			<button type="button" class="table-view-control favorite"><icon class="icon-favorite"></icon></button>
			<button type="button" class="table-view-control save"><icon class="icon-save"></icon><label class="control-label">Save</label></button>
			<button type="button" class="table-view-control delete" data-toggle="modal" data-target="#removeMedFavConfirm"><icon class="icon-delete"></icon><label class="control-label">Delete</label></button>
		</div>
	</div>
	<div class="expand-button-wrap">
		<button class="expand-medication-button medication-edit-btn"></button>
		<button class="collapse-medication-button medication-save-btn"></button>
	</div>
	</div>';}
	}
?>