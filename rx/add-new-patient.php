<?php
$firstName = "";
$middleName = "";
$lastName = "";
$fullName = "$firstName $middleName $lastName";
$address = "";
$city = "";
$state = "";
$zipCode = "";
$birthday = "";
$gender = "";
$weight = "";
$email = "";
$phone = "";
$allergies = "";
$homemeds = "";
$diagnoses = "";
?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column lg-6 app-right">
						<div class="flow-section">
							<h2 class="section-title">New Patient Confirmation</h2>
							<div class="verify-info empty">
								<h3 class="header">Patient details are displayed here</h3>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action">
											<a href="../home/home-view.php">Cancel</a>
										</button>
										<button type="button" role="link" class="button button-flat primary-action disabled">
											<a href="add-new-patient-filled.php">Add patient…</a>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>