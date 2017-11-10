<?php
$pageTitle = "Prescriptions";
$patientFirstName = "William";
$patientMiddleName = "Hamish";
$patientLastName = "Wallace";
$patientFullName = "$patientFirstName $patientMiddleName $patientLastName";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage Patients - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
</head>

<body class="rx-app">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div class="flow-section">
			<div class="container-xs centered">
				<div class="title">
					<h1><?php echo $patientFullName ?></h1>	
				</div>
				<div class="row">
					<div class="col-md-12">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>