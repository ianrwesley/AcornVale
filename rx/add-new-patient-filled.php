<?php include "../variables/patient-variables/variable-test-patient-demographics.php"; ?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column confirm-col">
						<div class="flow-section">
							<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
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
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											<a href="add-medical-history.php"><?php echo $primaryButtonLabel ?></a>
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
	<?php include "modal-discard-new-patient.php"; ?>
</body>

</html>