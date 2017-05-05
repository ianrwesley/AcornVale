<?php
$firstName = "William";
$middleName = "Woolworth";
$lastName = "Wallace";
$fullName = "$firstName $middleName $lastName";
$address = "";
$city = "Dunedin";
$state = "FL";
$zipCode = "34698";
$birthday = "4/3/1270";
$gender = "Male";
$weight = "184";
$email = "williamwallace@freedom.scot";
$phone = "(555) 555-5785";
$allergies = "Tetracycline, Penicillin, NSAIDs";
$homemeds = "None";
$diagnoses = "None";
?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column lg-6 app-right">
						<div class="flow-section">
							<h2 class="section-title">New Patient Confirmation</h2>
							<div class="verify-info">
								<h3 class="header"><?php echo $fullName ?></h3>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action">
											<a href="../home/home-view.php">Cancel</a>
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											<a href="">Add patient…</a>
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