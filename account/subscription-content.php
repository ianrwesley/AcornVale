<div class="container main-wrapper">
	<subscription>
		<section id="payment" class="flow-section">
			<div class="payment-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$paymentSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 payment-content">
						<div class="payment-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_PaymentMethod"; ?> </h3>
									<div class="card-number-masked">
										<?php echo "$paymentCardType $paymentCardNumberMasked"; ?>
									</div>
									<button class="button button-link trigger-flow">Edit Payment Information…</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="licenses" class="flow-section flow-section-border">
			<div class="licenses-wrapper">
				<div class="row">
					<div class="column lg-3 md-12">
						<h2 class="section-title mobile-edit"><?php echo "$licensesSectionTitle"; ?></h2>
					</div>
					<div class="column lg-9 md-12 licenses-content">
						<div class="licenses-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> <?php echo "$subTitle_ActiveLicenses"; ?> </h3>
									<div class="active-licenses">
										<ul>
											<li class="license-type proCS"><span class="license-quantity">3</span> Pro CS</li><br>
											<li class="license-type pro"><span class="license-quantity">2</span> Pro</li><br>
											<li class="license-type basic"><span class="license-quantity">1</span> Basic</li>
										</ul>
									</div>
								</div>
								<div class="column lg-5">
									<h3 class="section-subtitle"> AVAILABLE LICENSES </h3>
									<div class="available-licenses">
										<ul>
											<li class="license-type proCS"><span class="license-quantity">1</span> Pro CS</li>
										</ul>
										<button class="button button-link trigger-flow">Assign License…</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</subscription>
</div>