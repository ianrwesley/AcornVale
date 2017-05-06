<?php include "../variables/patient-variables/variable-william-woolworth-wallace.php"; ?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column lg-6 app-right">
						<div class="flow-section">
							<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
							<div class="confirm-info">
								<h3 class="header"><?php echo $fullName ?></h3>
								<div class="confirm-info-flow">
									<div class="row clearfix">
										<div class="column lg-12">
											<span class="confirm-info-item first"><?php echo $birthday ?></span><span class="confirm-info-item"><?php echo $gender ?></span><span class="confirm-info-item"><?php echo $weightString ?></span>
										</div>
									</div>
									<div class="row clearfix">
										<div class="column lg-12">
											<span><?php echo $address ?></span><br><span><?php echo "$city, $state $zipCode" ?></span>
										</div>
									</div>
									<div class="row clearfix">
										<div class="column lg-12">
											<span><?php echo $phone ?></span>
										</div>
									</div>
									<div class="row clearfix">
										<div class="column lg-12">
											<span><?php echo $email ?></span>
										</div>
									</div>
								</div>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-right">
										<button type="button" role="link" class="button button-link secondary-action" data-toggle="modal" data-target="#cancelConfirm">
											Cancel
										</button>
										<button type="button" role="link" class="button button-flat primary-action">
											<a href=""><?php echo $primaryButtonLabel ?></a>
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
	<!-- Modal -->
	<div class="modal fade" id="cancelConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog caution" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h1>Are you sure?</h1>
		  </div>
		  <div class="modal-body">
			Continuing will discard this new patient's information.
		  </div>
		 	<div class="controls-footer clearfix">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-link secondary-action" data-dismiss="modal">
						Cancel
					</button>
					<button type="button" role="link" class="button button-flat primary-action caution">
						<a href="../home/home-view.php?patientdiscarded=true">Discard new patient…</a>
					</button>
				</div>
			</div>
		</div>
	  </div>
	</div>
</body>

</html>