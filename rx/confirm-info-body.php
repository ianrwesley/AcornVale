<?php
$confirmInfoTitle = "Patient Details";
?>


<div class="row">
	<div class="column lg-9">
		<h2 class="section-title"><?php echo $confirmInfoTitle ?></h2>
	</div>
	<div class="column lg-3 edit-patient-button <?php if ($rxFlowProgress < 1) { echo "hidden"; } ?>">
		<button role="button" class="button button-link button-tiny" data-toggle="modal" data-target="#editPatient">Edit patient</button>
	</div>
</div>
<div class="confirm-info <?php if ($rxFlowProgress == 0) { echo "empty"; } ?>">
	<div class="header filled"><?php if ($rxFlowProgress > 0) { echo "$fullName"; } else { echo "Patient details are displayed here."; } ?></div>
	<div class="confirm-info-sticky <?php if ($rxFlowProgress == 0) { echo "hidden"; } ?>">
		<div class="row clearfix">
			<div class="column lg-12">
				<span class="confirm-info-item first"><?php echo "$birthdayClean <span class='sub-detail age'>($age yrs. old)</span>"; ?></span><span class="confirm-info-item"><?php echo $gender ?></span><span class="confirm-info-item"><?php echo $weightString ?></span>
			</div>
		</div>
	</div>
	<div class="confirm-info-flow-wrap">
			<?php 
				if ($rxFlowProgress !== 0) {
					echo "<div class='confirm-info-flow'>
							<div class='row clearfix'>
								<div class='column lg-6'>
									<h3 class='row-header'><icon class='icon-home'></icon>Address</h3>
									<span class='detail-overflow address-street'>$address</span><br>
									<span class='detail-overflow address-city-state'>$city, $state $zipCode</span>
								</div>
								<div class='column lg-6'>
									<h3 class='row-header'>Contact</h3>
									<span class='detail phone'><icon class='icon-smartphone'></icon>$phone</span><br>
									<span class='detail email'><icon class='icon-mail'></icon>$email</span>
								</div>
							</div>
						  </div>";
				}
			?>
		<div class="confirm-info-flow <?php if ($rxFlowProgress < 2) { echo "hidden"; } ?>">
			<div class="row clearfix">
				<div class="column lg-6">
					<h3 class="row-header allergy-label"><icon class="icon-allergy"></icon>Allergies</h3>
					<span class="detail-overflow allergies"><?php echo $allergies ?></span><br>
				</div>
				<div class="column lg-6">
					<h3 class="row-header homemed-label"><icon class="icon-medication-bottle"></icon>Home Medications</h3>
					<span class="detail-overflow homemeds"><?php echo $homemeds ?></span><br>
				</div>
			</div>
			<div class="row clearfix">
				<div class="column lg-12">
					<h3 class="row-header diagnosis-label"><icon class="icon-diagnosis"></icon>Diagnoses &amp; Conditions</h3>
					<span class="detail-overflow diagnoses"><?php echo $diagnoses ?></span><br>
				</div>
			</div>
		</div>
	</div>