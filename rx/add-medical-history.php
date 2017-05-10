<?php
	include "../variables/patient-variables/variable-empty.php";
	include "../variables/patient-variables/variable-test-patient-demographics.php";
?>

<?php include "add-medical-history-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<div class="row">
								<div class="column lg-9">
									<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
								</div>
								<div class="column lg-3 edit-patient-button">
									<button role="button" class="button button-link button-compact" data-toggle="modal" data-target="#editPatient">Edit patient</button>
								</div>
							</div>
							<div class="confirm-info">
								<div class="header filled"><?php echo $fullName ?></div>
								<div class="confirm-info-flow first last">
									<div class="row clearfix">
										<div class="column lg-12">
											<span class="confirm-info-item first"><?php echo $birthday ?></span><span class="confirm-info-item"><?php echo $gender ?></span><span class="confirm-info-item"><?php echo $weightString ?></span>
										</div>
									</div>
									<div class="row clearfix">
										<div class="column lg-6">
											<h3 class="row-header">Address</h3>
											<span><?php echo $address ?></span><br>
											<span><?php echo "$city, $state $zipCode" ?></span>
										</div>
										<div class="column lg-6">
											<h3 class="row-header">Contact</h3>
											<span><?php echo $phone ?></span><br>
											<span class="email-address"><?php echo $email ?></span>
										</div>
									</div>
								</div>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action">
											<a href="../home/home-view.php">Cancel</a>
										</button>
										<button type="button" role="link" class="button button-flat primary-action disabled">
											<a href="add-medical-history-filled.php"><?php echo $primaryButtonLabel ?></a>
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
	</div>
	<?php include "../global/globalfooter.php"; ?>
	<?php include "modal-edit-patient.php"; ?>
</body>

</html>