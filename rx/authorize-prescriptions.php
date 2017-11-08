<?php
	$rxFlowProgress = 8;
	$existingPatient = $_GET[ "existing" ];
	$twoFactorStatus = $_GET[ "2FA" ];
	include "../variables/patient-variables/variable-empty.php";

	if ($existingPatient !== null) {
		include "../variables/patient-variables/variable-$existingPatient-demographics.php";
		include "../variables/patient-variables/variable-$existingPatient-medhistory.php";
		include "../variables/patient-variables/variable-$existingPatient-prescriptions.php";
		include "../variables/patient-variables/variable-$existingPatient-pharmacy.php";
	} else {
		include "../variables/patient-variables/variable-test-patient-demographics.php";
		include "../variables/patient-variables/variable-test-patient-medhistory.php";
		include "../variables/patient-variables/variable-test-patient-prescriptions.php";
		include "../variables/patient-variables/variable-test-patient-pharmacy.php";
	}

	$pageTitle = "Prescriptions";
	$subnavTitle = "Authorize";
	$subnavProgress = 3;
	$primaryButtonLabel = "Sign prescriptions";
	$confirmInfoTitle = "New Patient";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Authorize Prescriptions - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/switchery.js"></script>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
</head>

<body class="rx-app app-flow auth-body">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<!--?php include "rx-subnav.php"; ?-->
		<div class="page-content auth-prescriptions-content">
			<div class="app-section-body-wrapper">
				<div class="app-section-body-scroll auth-body-scroll">
					<div class="app-section-body">
						<div class="authorize-prescriptions-wrap">
							<div class="rx-header">
								<div class="container">
									<div class="row">
										<div class="column lg-8 auth-break-wrap">
											<span class="patient-name"><?php echo "$fullName"; ?></span>
											<div class="date-issued-wrap"><label>Date:&nbsp;</label><span class="date-issued"></span></div>
										</div>
										<div class="column lg-4 auth-break-wrap text-right">
											<span class="prescriber-name"><?php echo "$userNameDesignation"; ?></span>
											<span class="prescriber-address"><?php echo "$facilityAddressFull"; ?></span>
											<label>DEA #:&nbsp;</label><span class="prescriber-DEA-number"><?php echo "$DEAnumber"; ?></span>
										</div>
									</div>
								</div>
							</div>
							<div class="medications-wrapper">
								<ol class="ordered-list">
									<?php
										foreach ($RXdrugNamesArray as $RXdrugNamesKey => $RXdrugNamesValue) {
											echo "<li class='rx-auth-ready'>
												<div class='row'>
													<div class='column lg-10 rx-info-wrap'>
														<div class='row'>
															<div class='column lg-9'>
																<span class='rx-drug-name'>$RXdrugNamesValue</span>
																<span class='sub-detail'>#$RXdispenseAmtArray[$RXdrugNamesKey]</span>
																<span class='sub-detail'><i>sig.</i> $RXcustomSigArray[$RXdrugNamesKey]</span>
															</div>
															<div class='column lg-3'>
																<span class='sub-detail'>$RXrefillsArray[$RXdrugNamesKey] refill";
																if ($RXrefillsArray[$RXdrugNamesKey] !== "1") {
																	echo 's';
																}
																echo "</span>
																<span class='sub-detail'>$RXsubstitutionsArray[$RXdrugNamesKey]</span>
															</div>
														</div>
													</div>
													<div class='column lg-2'>
														<div class='confirm-auth-ready'>
															<icon class='icon-circle'></icon>
															<span>Authorize</span>
														</div>
													</div>
												</div>
											</li>"
										;}
									?>
								</ol>
							</div>
							<div class="cl-authtray sticky-authtray">
								<div class="container">
									<div class="row">
										<div class="column legal-statement pull-left">
										By completing the two-factor authentication protocol at this time, you are legally signing the prescription(s) and authorizing the transmission of the above information to the pharmacy for dispensing. The two-factor authentication protocol may only be completed by the practitioner whose name and DEA registration number appear above.
										</div>
										<div class="column auth-button-wrap button-group pull-right">
											<button type="button" role="link" class="button button-link secondary-action">Cancel</button>
											<button type="submit" class="button button-flat primary-action auth-button-lg" name="sign-prescriptions">
												<a data-toggle="modal" data-target="#cl-auth-sign-prescriptions<?php if ($twoFactorStatus == "down") echo "-service-down"; ?>"><?php echo $primaryButtonLabel; ?></a>
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
	<?php include "modal-cancel-writing-prescriptions.php"; ?>
	<?php include "modal-edit-patient.php"; ?>
	<?php include "modal-sign-prescriptions.php"; ?>
	<?php include "modal-sign-prescriptions-service-down.php"; ?>
	<script type="text/javascript">		
		var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = ((''+month).length<2 ? '0' : '') + month + '/' + ((''+day).length<2 ? '0' : '') + day + '/' + d.getFullYear();
		$('.date-issued').text(output);
		
		$('.rx-auth-ready').on('click',function(){
			$(this).find('.confirm-auth-ready').toggleClass('marked');
			$(this).find('icon').toggleClass('icon-circle').toggleClass('icon-checkmark');
			$(this).find('.confirm-auth-ready').find('span').text(function(i, text){
				return text === "Authorize" ? "Ready" : "Authorize";
      		});
		});
	</script>
</body>

</html>