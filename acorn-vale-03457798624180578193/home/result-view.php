<?php
$pageTitle = $sendResult;
$menuName = $pageTitle;
$sendResult = $_GET[ "sendresult" ];
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php echo $sendResult ?></title>
	<?php include "../global/globalui.php"; ?>
	<script type="text/javascript" src="../global/js/clara.home.js"></script>
	<link rel="stylesheet" href="../global/css/clara.home.css" type="text/css">
</head>

<body id="results-page" class="rx-app results-body">
	<div id="wrapper">
		<?php include "../global/globalnav.php"; ?>
		<div class="page-content">
			<div class="flow-section">
				<div class="content-main">
					<div class="content-heading">
						<icon class="icon-<?php if($sendResult == "Success") echo "checkmark"; else echo "close"; ?> <?php if($sendResult == "Success") echo "success"; else echo "error"; ?> xl"></icon>
						<h2 class="subtitle">
							<?php if($sendResult == "Success") echo "Success"; else echo "Error"; ?>
						</h2>
						<p class="description">
							<?php if($sendResult == "Success") echo "All prescriptions were sent successfully."; else echo "An error occurred trying to send one or more prescriptions.<br>They will be prepared for you to print instead."; ?>
						</p>
						<p class="description callout">
							<?php if($sendResult == "Error") echo "<img class='caution mini' src='../global/images/caution.png'> Make sure your pop-up blocker is disabled."; ?>
						</p>
					</div>
				</div>
				<div class="controls-footer">
					<!--div class="button-group flow-controls print-rx-button-group <?php if($sendResult == "Success") echo "hidden";?>">
						<button type="button" role="link" class="button button-flat primary-action">
							<a href="home-view.php" class="button-link">Print Rx</a>
						</button>
					</div-->
					<div class="button-group flow-controls">
						<button type="button" role="link" class="button button-link primary-action">
							<a href="home-view.php" class="button-link">Done</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "../global/globalfooter.php"; ?>
</body>

</html>