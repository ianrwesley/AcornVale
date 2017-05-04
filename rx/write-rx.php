<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $patientFullName; ?> - Write Prescription</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../home/js/clara.home.js"></script>
	<link rel="stylesheet" href="../home/css/clara.home.css" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div id="pick-patient-content">
			<div class="flow-section">
				<div class="container-xs centered">
					<div class="title">
						<h1><?php echo $patientFullName; ?></h1>	
					</div>
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>