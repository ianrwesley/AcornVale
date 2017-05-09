<?php
$pageTitle = "Prescriptions";
$menuName = $pageTitle;
$patientDiscarded = $_GET[ "patientdiscarded" ];
$historyDiscarded = $_GET[ "historydiscarded" ];
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Pick a Patient - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="js/clara.home.js"></script>
	<link rel="stylesheet" href="css/clara.home.css" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div class="home-notification-banner <?php if ($patientDiscarded !== "true" and $historyDiscarded !== "true"){ echo "hidden"; } ?>">
			<div class="home-notification-msg-wrapper">
				<p class="home-notification-msg">
					<?php if ($patientDiscarded == "true"){ echo "<span class='home-notification-icon icon-checkmark'></span>New patient successfully discarded."; } ?>
					<?php if ($historyDiscarded == "true"){ echo "<span class='home-notification-icon icon-checkmark'></span>Medical history successfully discarded."; } ?>
				</p>
			</div>
		</div>
		<div id="pick-patient-content" class="page-content">
			<div class="flow-section">
				<div class="container-xs centered">
					<div class="title">
						<h1>Pick a patient</h1>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<select id="pick-patient" placeholder="patient's name or birthday"></select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>