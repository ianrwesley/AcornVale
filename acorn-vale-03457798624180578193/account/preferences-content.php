<div class="container main-wrapper">
	<account>
		<section id="profile" class="flow-section">
			<div class="profile-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$favoritesSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 profile-content">
						<div class="profile-details clearfix">
							<div class="row">
								<div class="column lg-4 gutter-right">
									<div class="fieldgroup">
										<div class="input-wrapper has-icon">
											<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text field-icon search-field" placeholder="search" name="search" value="">
											<icon class="icon-search nofocus-icon"></icon><icon class="icon-search hasfocus-icon"></icon>
										</div>
									</div>
									<div class="vertical-menu-options">
										<button type="button" role="link" class="button button-link" data-toggle="modal" data-target="#ca-create-med-favorite"><icon class="icon-add"></icon>Create Favorite</button>
									</div>
								</div>
								<div class="column lg-8">
									<div class="medications-wrapper">
										<?php
											if ($RXdrugNames == "") {
												echo "<p class='no-results'>You don't have any medication favorites.</p>";
											} elseif ($RXdrugNames !== "") {
												include "favorite-prescriptions.php";
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</account>
</div>