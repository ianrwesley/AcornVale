<?php
$pageTitle = "Patients";
$menuName = $pageTitle;
include "../variables/patient-variables/variable-test-patients-BATCH.php";
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Manage Patients - Clara</title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
	<link rel="stylesheet" href="../global/css/clara.patients.css" type="text/css">
</head>

<body class="rx-app mg-patients">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<?php include "manage-patients-submenu.php"; ?>
		<div id="mg-patients-content">
			<div class="table-wrapper">
				<div class="fixed-table-header"></div>
				<div class="table-scroll container-xl">
					<table class="mg-patients-table" cellpadding="0" cellspacing="0">
						<thead class="patients-table-header">
							<tr class="header-row">
								<th class="header-column select-column"><span class="header-text"><input type="checkbox"></span></th>
								<th class="header-column name"><span class="header-text">Patient name</span></th>
								<th class="header-column birthday"><span class="header-text">Birthday</span></th>
								<th class="header-column address"><span class="header-text">Address</span></th>
								<th class="header-column phone"><span class="header-text">Phone</span></th>
								<th class="header-column email"><span class="header-text">Email</span></th>
							</tr>
						</thead>
						<tbody class="patients-table-body">
							<?php
								foreach ($patientsArray as $patientsKey => $patientsValue) {
									echo "<tr class='patient-row'>
											<td class='patient-column select-column'><input type='checkbox'></td>
											<td class='patient-column name'><a href='#'>$patientsValue</a></td>
											<td class='patient-column birthday'>$birthDaysArray[$patientsKey]</td>
											<td class='patient-column address'>$addressesArray[$patientsKey]</td>
											<td class='patient-column phone'>$phonesArray[$patientsKey]</td>
											<td class='patient-column email'>$emailsArray[$patientsKey]</td>
										</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<nav class="tablenav">
		<div class="container-xl">
			<div class="pull-left">
				<div class="record-count">
					<p>Total records: <b class="record-count-text">50</b></p>
				</div>
			</div>
			<div class="pagination pull-right">
				<button class="button-menu-item align-right-icon">50 records per page<icon class="icon-chevron-small-down"></icon></button>
				<div class="pagination-button-wrap">
					<button class="button button-tiny page-nav page-back"><icon class="icon-chevron-small-left"></icon></button>
					<span><b>1</b>&nbsp;–&nbsp;<b>50</b></span>
					<button class="button button-tiny page-nav page-forward"><icon class="icon-chevron-small-right"></icon></button>
				</div>
			</div>
		</div>
	</nav>
	<?php include "../global/globalfooter.php"; ?>
	<script type="text/javascript">
		$(window).on('resize',function() {
			$('.table-scroll').height($(window).height() - 259);
		}).trigger('resize');
		
		var patientRows = $( ".patient-row" ).length;
		$(".record-count-text").text(patientRows);	
	</script>
</body>

</html>