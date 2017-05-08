<?php
$fail = "true";
include "../variables/patient-variables/variable-empty.php";
?>

<?php include "add-new-patient-body.php"; ?>
					<div class="column lg-6 app-right-col">
						<div class="flow-section">
							<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
							<div class="confirm-info empty">
								<h3 class="header">Patient details are displayed here</h3>
								<div class="controls-footer clearfix">
									<div class="button-group flow-controls pull-left">
										<button type="button" role="link" class="button button-link secondary-action">
											<a href="../home/home-view.php">Cancel</a>
										</button>
										<button type="button" role="link" class="button button-flat primary-action disabled">
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
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>