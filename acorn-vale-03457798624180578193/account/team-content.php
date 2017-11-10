<div class="container main-wrapper">
	<team>
		<section id="user-mgmt" class="flow-section">
			<div class="user-mgmt-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$teamSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 user-mgmt-content">
						<div class="user-mgmt-details clearfix">
							<div class="row">
								<div class="column lg-12">
									<div class="btn-group full-width" role="group" aria-label="Show users filter">
										<button type="button" class="btn btn-default button-inverted active lg-4">Active Users<span class="badge">3</span></button>
										<button type="button" class="btn btn-default button-inverted lg-4">Pending Users<span class="badge">0</span></button>
										<button type="button" class="btn btn-default button-inverted lg-4">Unassigned Licenses<span class="badge">0</span></button>
									</div>
									<div class="table-wrapper">
										<div class="table-scroll">
											<table cellpadding="0" cellspacing="0" class="mg-team-table">
												<thead>
													<tr>
														<th><span class="header-text">Name</span></th>
														<th><span class="header-text">License</span></th>
														<th><span class="header-text">Status</span></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="user-name">Brown, Emmett</span><span class="clara-ID">docbrown@tothefuture.bak</span></td>
														<td>Pro CS</td>
														<td class="user-control">Active
															<button class="button button-link trigger-flow" data-toggle="popover" data-placement="top" data-trigger="click" data-html="true" data-content="Remove user from this license?
															<div class='controls-footer'>
																<div class='flow-controls pull-right'>
																	<button class='button button-link secondary-action'>Cancel</button>
																	<button class='button button-link primary-action'>Remove user</button>
																</div>
															</div>">
															<icon class="icon-delete"></icon>
															</button>
														</td>
													</tr>
													<tr>
														<td><span class="user-name"><?php echo "$userLastName"; ?>, <?php echo "$userFirstName"; ?></span><span class="clara-ID"><?php echo "$claraID"; ?></span></td>
														<td>Pro CS</td>
														<td class="user-control">Active
															<button class="button button-link trigger-flow" data-toggle="popover" data-placement="top" data-trigger="click" data-html="true" data-content="Remove user from this license?
															<div class='controls-footer'>
																<div class='flow-controls pull-right'>
																	<button class='button button-link secondary-action'>Cancel</button>
																	<button class='button button-link primary-action'>Remove user</button>
																</div>
															</div>">
															<icon class="icon-delete"></icon>
															</button>
														</td>
													</tr>
													<tr>
														<td><span class="user-name">Watson, John H.</span><span class="clara-ID">drwatson@elementary.com</span></td>
														<td>Pro</td>
														<td class="user-control">Active
															<button class="button button-link trigger-flow" data-toggle="popover" data-placement="top" data-trigger="click" data-html="true" data-content="Remove user from this license?
															<div class='controls-footer'>
																<div class='flow-controls pull-right'>
																	<button class='button button-link secondary-action'>Cancel</button>
																	<button class='button button-link primary-action'>Remove user</button>
																</div>
															</div>">
															<icon class="icon-delete"></icon>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</team>
</div>