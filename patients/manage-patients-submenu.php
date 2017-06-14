<submenu id="mg-patients-submenu" class="submenu">
	<div class="submenu-content clearfix">
		<div class="submenu-group menu-actions pull-left">
			<div class="button-group">
				<button class="button-menu-item submenu-item"><icon class="icon-add"></icon></button>
				<button class="button-menu-item submenu-item"><span>Import</span></button>
			</div>
			<button class="button-menu-item submenu-item secondary-action deactivate-patient"><icon class="icon-deactivate-patient lg-icon"></icon></button>
			<button class="button-menu-item submenu-item secondary-action toggle-view"><icon class="icon-toggle-view lg-icon"></icon></button>
		</div>
		<div class="submenu-group search pull-right">
			<div class="input-wrapper has-icon">
				<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text field-icon search-field" placeholder="search" name="search" value="">
				<icon class="icon-search nofocus-icon"></icon><icon class="icon-search hasfocus-icon"></icon>
			</div>
		</div>
	</div>
	<div class="submenu-filter-display">
		<span>Showing deactivated patients</span><icon class="icon-close remove-filter"></icon>
	</div>
</submenu>
<script type="text/javascript">
	$('.toggle-view').on('click',function(){
		$(this).toggleClass('show-deactivated').closest('.submenu').find('.submenu-filter-display').toggleClass('show');
	});
</script>