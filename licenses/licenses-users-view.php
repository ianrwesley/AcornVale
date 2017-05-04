<?php
	$pageTitle = "License Management";
	$menuName = "Licenses";
	$moduleTitle = "Users";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Clara <?php echo $pageTitle; ?> - Keystone</title>
<?php include "../global/globalui.php"; ?>
<script type="text/javascript" src="js/keystone.licenses.js"></script>
<link rel="stylesheet" href="../account/css/keystone.account.css" type="text/css">
<link rel="stylesheet" href="css/keystone.licenses.css" type="text/css">
</head>

<body>
<div id="wrapper">
<?php include "../global/globalnav.php"; ?>
<?php include "licensenav.php"; ?>
<div class="manage <?php echo strtolower($menuName); ?>">
  <div class="container">
    <section class="table-section-wrap">
		<table class="no-wrap table users">
			<thead>
				<tr>
					<td class="col-tool"><input type="checkbox" class="select-all"></td>
					<td class="col-user-name col-large">
						<h3 class="section-subtitle">USER NAME</h3><span class="sort none"></span>
					</td>
					<td class="col-user-id col-small">
						<h3 class="section-subtitle">CLARA ID</h3><span class="sort none"></span>
					</td>
					<td class="col-user-links col-small">
						<h3 class="section-subtitle">FACILITIES</h3><span class="sort none"></span>
					</td>
					<td class="col-user-role col-small">
						<h3 class="section-subtitle">PROVIDER</h3><span class="sort none"></span>
					</td>
					<td class="col-user-super col-small">
						<h3 class="section-subtitle">SUPER</h3><span class="sort none"></span>
					</td>
					<td class="col-user-last-login col-small col-small">
						<h3 class="section-subtitle">LAST LOGIN</h3><span class="sort desc"></span>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/jeanne-shipp.php">Jeanne Shipp</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">jgayshipp@gmail.com</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">1 Hospital</div>
					</td>
					<!--td class="col-user-role col-small" colspan="2">
						<div class="col-value"><a class="action-link">Resend Invite</a></div>
					</td-->
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">Never</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/robert-hyde.php">Dr. Robert Hyde</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">robert.hyde@newlondonhospital.org</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<!--td class="col-user-role col-small" colspan="2">
						<div class="col-value"><a class="action-link">Resend Invite</a></div>
					</td-->
					<td class="col-user-role col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Hyde</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">Never</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/james-cohen.php">Dr. James Cohen</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">rockdocjc@aol.com</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Cohen</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Dr. Cohen</span> is the Super User for Henry County Hospital.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">4/10/16&nbsp;&nbsp;08:32 pm</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/ellen-metz.php">Ellen Metz</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">emetz@lapazhospital.org</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">1 Hospital</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Ellen Metz</span> is the Super User for La Paz Regional Hospital</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/21/17&nbsp;&nbsp;07:37 am</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/erica-sanchez.php">Erica Sanchez</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">esanchez@wcch.com</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Erica Sanchez</span> is the Super User for West Calcasieu Cameron Hospital.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/21/17&nbsp;&nbsp;12:49 pm</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/luis-alfonso.php">Dr. Luis Alfonso</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">dr.luis.alfonso@palmspringshospital.org</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Alfonso</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">No</div>
						<!--div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Dr. Alfonso</span> is the Super User for a facility or corporation.</div></div-->
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/22/17&nbsp;&nbsp;07:49 am</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/julie-shirley.php">Julie Shirley</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">jshirley@barmc.us</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">3 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Julie Shirley</span> is the Super User for Bay Area Regional Medical Center.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/23/17&nbsp;&nbsp;02:47 am</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/rhondee-damon.php">Rhondee Damon</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">rhondeedamon@gmail.com</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">1 Hospital</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Rhondee Damon</span> is the Super User for Elite Care Emergency Room of Plano.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/23/17&nbsp;&nbsp;03:45 pm</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/conner-brosnahan.php">Conner Brosnahan</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">cbrosnahan@snch.org</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">No</div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Conner Brosnahan</span> is the Super User for South Nassau Communities Hospital.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/23/17&nbsp;&nbsp;06:58 pm</div>
					</td>
				</tr>
				<tr>
					<td class="col-tool">
						<input type="checkbox" class="select-row-highlight">
					</td>
					<td class="col-user-name col-large">
						<div class="col-value"><a href="users/cameron-nelson.php">Dr. Cameron Nelson</a></div>
					</td>
					<td class="col-user-id col-small">
						<div class="col-value"><a role="link">drcam1@mac.com</a></div>
					</td>
					<td class="col-user-links col-small">
						<div class="col-value">2 Hospitals</div>
					</td>
					<td class="col-user-role col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo provider"></span><div class="moreinfo-hover"><span class="provider-name">Dr. Nelson</span> can access the Teach, Treat, and Transfer modules in Clara.</div></div>
					</td>
					<td class="col-user-super col-small">
						<div class="col-value">Yes</div>
						<div class="hover-wrapper"><span class="moreinfo super-user"></span><div class="moreinfo-hover"><span class="superuser-name">Dr. Nelson</span> is the Super User for Adams Memorial Hospital.</div></div>
					</td>
					<td class="col-user-last-login col-small">
						<div class="col-value">3/24/17&nbsp;&nbsp;01:16 pm</div>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7">
						<div class="pull-right">Showing Records <span class="showing-row-count">1-10</span> of <span class="existing-row-count">72</span><span class="turn back"></span><span class="turn next"></span></div>
					</td>
				</tr>
			</tfoot>
		</table>
	</section>
  </div>
</div>
	</div>
<?php include "../global/globalfooter.php"; ?>
</body>
</html>