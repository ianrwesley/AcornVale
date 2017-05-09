<subnav id="rx-subnav" class="subnav">
	<div class="gn-content">
		<ul class="gn-list gn-menuview">
			<li class="gn-item gn-item-menu"> <a class="gn-link <?php if ($subnavTitle == "Add new patient"){ echo "active"; } ?>"> <icon class="icon-progress <?php if ($subnavProgress > 0){ echo "complete"; } else { echo "incomplete";} ?>"></icon><span class="gn-text">Add new patient</span> </a> </li>
			<li class="gn-item gn-item-menu"> <a class="gn-link <?php if ($subnavTitle == "Write prescriptions"){ echo "active"; } ?>"> <icon class="icon-progress <?php if ($subnavProgress > 1){ echo "complete"; } else { echo "incomplete";} ?>"></icon><span class="gn-text">Write prescriptions</span> </a> </li>
			<li class="gn-item gn-item-menu"> <a class="gn-link <?php if ($subnavTitle == "Select a pharmacy"){ echo "active"; } ?>"> <icon class="icon-progress <?php if ($subnavProgress > 2){ echo "complete"; } else { echo "incomplete";} ?>"></icon><span class="gn-text">Select a pharmacy</span> </a> </li>
			<li class="gn-item gn-item-menu"> <a class="gn-link <?php if ($subnavTitle == "Authorize"){ echo "active"; } ?>"> <icon class="icon-progress <?php if ($subnavProgress > 3){ echo "complete"; } else { echo "incomplete";} ?>"></icon><span class="gn-text">Authorize</span> </a> </li>
		</ul>
	</div>
</subnav>