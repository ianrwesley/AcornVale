<!-- Modal -->
<div class="modal fade" id="editPatient" tabindex="-1" role="dialog" aria-labelledby="Edit patient">
	<div class="modal-dialog long" role="document">
		<div class="modal-content edit-patient-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h1><?php echo $fullName ?></h1>
			</div>
			<div class="modal-body">
				<div class="flow-section">
					<h2 class="section-title">Demographics</h2>
					<div class="fieldgroup">
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="first name" name="first-name" value="<?php echo $firstName ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">First name is required.</div>
						</div>
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="last name" name="last-name" value="<?php echo $lastName ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Last name is required.</div>
						</div>
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="middle name" name="middle-name" value="<?php echo $middleName ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Middle name is required.</div>
						</div>
					</div>
					<div class="error-msg-wrapper lg-12 <?php if ($fail == "true"){ echo "has-error"; } ?>">
						<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="address" name="address" value="<?php echo $address ?>">
						<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Address is required.</div>
					</div>
					<div class="fieldgroup">
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="city" name="city" value="<?php echo $city ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">City is required.</div>
						</div>
						<div class="error-msg-wrapper select lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<div class="select-wrapper lg-12 <?php if ($state !== ""){ echo "selected"; } ?>">
								<select class="form-text">
									<option value="" <?php if ($state == ""){ echo "selected"; } ?> disabled>state</option>
									<option value="AL" <?php if ($state == "AL"){ echo "selected"; } ?>>Alabama</option>
									<option value="AK" <?php if ($state == "AK"){ echo "selected"; } ?>>Alaska</option>
									<option value="AZ" <?php if ($state == "AZ"){ echo "selected"; } ?>>Arizona</option>
									<option value="AR" <?php if ($state == "AR"){ echo "selected"; } ?>>Arkansas</option>
									<option value="CA" <?php if ($state == "CA"){ echo "selected"; } ?>>California</option>
									<option value="CO" <?php if ($state == "CO"){ echo "selected"; } ?>>Colorado</option>
									<option value="CT" <?php if ($state == "CT"){ echo "selected"; } ?>>Connecticut</option>
									<option value="DE" <?php if ($state == "DE"){ echo "selected"; } ?>>Delaware</option>
									<option value="DC" <?php if ($state == "DC"){ echo "selected"; } ?>>D.C.</option>
									<option value="FL" <?php if ($state == "FL"){ echo "selected"; } ?>>Florida</option>
									<option value="GA" <?php if ($state == "GA"){ echo "selected"; } ?>>Georgia</option>
									<option value="HI" <?php if ($state == "HI"){ echo "selected"; } ?>>Hawaii</option>
									<option value="ID" <?php if ($state == "ID"){ echo "selected"; } ?>>Idaho</option>
									<option value="IL" <?php if ($state == "IL"){ echo "selected"; } ?>>Illinois</option>
									<option value="IN" <?php if ($state == "IN"){ echo "selected"; } ?>>Indiana</option>
									<option value="IA" <?php if ($state == "IA"){ echo "selected"; } ?>>Iowa</option>
									<option value="KS" <?php if ($state == "KS"){ echo "selected"; } ?>>Kansas</option>
									<option value="KY" <?php if ($state == "KY"){ echo "selected"; } ?>>Kentucky</option>
									<option value="LA" <?php if ($state == "LA"){ echo "selected"; } ?>>Louisiana</option>
									<option value="ME" <?php if ($state == "ME"){ echo "selected"; } ?>>Maine</option>
									<option value="MD" <?php if ($state == "MD"){ echo "selected"; } ?>>Maryland</option>
									<option value="MA" <?php if ($state == "MA"){ echo "selected"; } ?>>Massachusetts</option>
									<option value="MI" <?php if ($state == "MI"){ echo "selected"; } ?>>Michigan</option>
									<option value="MN" <?php if ($state == "MN"){ echo "selected"; } ?>>Minnesota</option>
									<option value="MS" <?php if ($state == "MS"){ echo "selected"; } ?>>Mississippi</option>
									<option value="MO" <?php if ($state == "MO"){ echo "selected"; } ?>>Missouri</option>
									<option value="MT" <?php if ($state == "MT"){ echo "selected"; } ?>>Montana</option>
									<option value="NE" <?php if ($state == "NE"){ echo "selected"; } ?>>Nebraska</option>
									<option value="NV" <?php if ($state == "NV"){ echo "selected"; } ?>>Nevada</option>
									<option value="NH" <?php if ($state == "NH"){ echo "selected"; } ?>>New Hampshire</option>
									<option value="NJ" <?php if ($state == "NJ"){ echo "selected"; } ?>>New Jersey</option>
									<option value="NM" <?php if ($state == "NM"){ echo "selected"; } ?>>New Mexico</option>
									<option value="NY" <?php if ($state == "NY"){ echo "selected"; } ?>>New York</option>
									<option value="NC" <?php if ($state == "NC"){ echo "selected"; } ?>>North Carolina</option>
									<option value="ND" <?php if ($state == "ND"){ echo "selected"; } ?>>North Dakota</option>
									<option value="OH" <?php if ($state == "OH"){ echo "selected"; } ?>>Ohio</option>
									<option value="OK" <?php if ($state == "OK"){ echo "selected"; } ?>>Oklahoma</option>
									<option value="OR" <?php if ($state == "OR"){ echo "selected"; } ?>>Oregon</option>
									<option value="PA" <?php if ($state == "PA"){ echo "selected"; } ?>>Pennsylvania</option>
									<option value="RI" <?php if ($state == "RI"){ echo "selected"; } ?>>Rhode Island</option>
									<option value="SC" <?php if ($state == "SC"){ echo "selected"; } ?>>South Carolina</option>
									<option value="SD" <?php if ($state == "SD"){ echo "selected"; } ?>>South Dakota</option>
									<option value="TN" <?php if ($state == "TN"){ echo "selected"; } ?>>Tennessee</option>
									<option value="TX" <?php if ($state == "TX"){ echo "selected"; } ?>>Texas</option>
									<option value="UT" <?php if ($state == "UT"){ echo "selected"; } ?>>Utah</option>
									<option value="VT" <?php if ($state == "VT"){ echo "selected"; } ?>>Vermont</option>
									<option value="VA" <?php if ($state == "VA"){ echo "selected"; } ?>>Virginia</option>
									<option value="WA" <?php if ($state == "WA"){ echo "selected"; } ?>>Washington</option>
									<option value="WV" <?php if ($state == "WV"){ echo "selected"; } ?>>West Virginia</option>
									<option value="WI" <?php if ($state == "WI"){ echo "selected"; } ?>>Wisconsin</option>
									<option value="WY" <?php if ($state == "WY"){ echo "selected"; } ?>>Wyoming</option>
								</select>
							</div>
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">State is required.</div>
						</div>
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="5" class="form-text lg-12" placeholder="zip code" name="zip code" value="<?php echo $zipCode ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Zip code is required.</div>
						</div>
					</div>
					<div class="fieldgroup">
						<div class="error-msg-wrapper lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-12" placeholder="birthday" name="birthday"  value="<?php echo $birthday ?>">
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Birthday is required.</div>
						</div>
						<div class="error-msg-wrapper select lg-4 <?php if ($fail == "true"){ echo "has-error"; } ?>">
							<div class="select-wrapper lg-12 <?php if ($gender !== ""){ echo "selected"; } ?>">
								<select class="form-text">
									<option value="" <?php if ($gender == ""){ echo "selected"; } ?> disabled>gender</option>
									<option value="Male" <?php if ($gender == "Male"){ echo "selected"; } ?>>Male</option>
									<option value="Female" <?php if ($gender == "Female"){ echo "selected"; } ?>>Female</option>
								</select>
							</div>
							<div class="error-msg <?php if ($fail == "true"){ echo "show"; } ?>">Gender is required.</div>
						</div>
						<div class="input-wrapper has-controls lg-4">
							<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text optional has-controls" placeholder="weight" name="weight" value="<?php echo $weight ?>">
							<div class="control">
								<span>lbs</span>
							</div>
						</div>
					</div>
				</div>
				<div class="flow-section">
					<h2 class="section-title">Contact</h2>
					<div class="fieldgroup">
						<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-4 optional" placeholder="phone" name="phone" value="<?php echo $phone ?>">
						<input type="email" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text lg-8 optional" placeholder="email" name="email" value="<?php echo $email ?>">
					</div>
				</div>
				<div class="flow-section patient-medical-history">
					<h2 class="section-title">Medical History</h2>
					<div class="fieldcontrols first allergies-section">
						<div class="list-populate">
							<input type="text" id="edit-allergies" placeholder="<?php if ($allergies == "None"){ echo "No "; } ?>allergies" value="<?php if ($allergies == "None"){ echo ""; } else {echo "";} ?>">
							<div class="checkbox-wrapper">
								<input type="checkbox" id="no-allergies-check" class="checkbox" <?php if ($allergies == "None"){ echo "checked"; } ?>><label for="no-allergies-check">None</label>
							</div>
						</div>
						<div class="list-values">
							<ol class="ordered-list">
							<?php
								if ($allergies !== "" and $allergies !== "None") {
									foreach ($allergiesArray as $allergiesKey => $allergiesValue) {
										echo "<li><span class='allergy'>$allergiesValue</span><label class='rxn-label'>RXN</label><input class='rxn form-text' value='$reactionsArray[$allergiesKey]'></span><div class='list-item-controls pull-right'><button class='item-control-button item-delete'></button><!--button class='item-control-button item-edit'></button--></div></li>";
									}
								}
							?>
							</ol>
						</div>
					</div>
					<div class="fieldcontrols homemeds-section">
						<div class="list-populate">
							<input type="text" id="edit-homemeds" placeholder="<?php if ($homemeds == "None"){ echo "No "; } ?>home medications" value="<?php if ($homemeds == "None"){ echo ""; } else {echo "";} ?>">
							<div class="checkbox-wrapper">
								<input type="checkbox" id="no-homemeds-check" class="checkbox" <?php if ($homemeds == "None"){ echo "checked"; } ?>><label for="no-homemeds-check">None</label>
							</div>
						</div>
						<div class="list-values">
							<ol class="ordered-list">
							<?php
								if ($homemeds !== "" and $homemeds !== "None") {
									foreach ($homemedsArray as $homemedsValue) {
										echo "<li>$homemedsValue<div class='list-item-controls pull-right'><button class='item-control-button item-delete'></button><!--button class='item-control-button item-edit'></button--></div></li>";
									}
								}
							?>
							</ol>
						</div>
					</div>
					<div class="fieldcontrols diagnoses-section">
						<div class="list-populate">
							<input type="text" id="edit-diagnoses" placeholder="<?php if ($diagnoses == "None"){ echo "No "; } ?>diagnoses or pre-existing conditions" value="<?php if ($diagnoses == "None"){ echo ""; } else {echo "";} ?>">
							<div class="checkbox-wrapper">
								<input type="checkbox" id="no-diagnoses-check" class="checkbox" <?php if ($diagnoses == "None"){ echo "checked"; } ?>><label for="no-diagnoses-check">None</label>
							</div>
						</div>
						<div class="list-values">
							<ol class="ordered-list">
							<?php
								if ($diagnoses !== "" and $diagnoses !== "None") {
									foreach ($diagnosesArray as $diagnosesValue) {
										echo "<li>$diagnosesValue<div class='list-item-controls pull-right'><button class='item-control-button item-delete'></button><!--button class='item-control-button item-edit'></button--></div></li>";
									}
								}
							?>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls pull-right">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">Cancel</button>
					<button type="button" role="link" class="button button-flat primary-action" data-dismiss="modal">Save changes…</button>
				</div>
			</div>
		</div>
	</div>
</div>