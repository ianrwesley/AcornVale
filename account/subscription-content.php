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
						<h2 class="section-title mobile-edit"> Subscription </h2>
					</div>
					<div class="column lg-9 md-12 licenses-content">
						<div class="licenses-details clearfix">
							<div class="row">
								<div class="column lg-5">
									<h3 class="section-subtitle"> RENEWAL DATE </h3>
									<div class="card-number-masked">
										<?php echo "$subscriptionExpiration"; ?>
									</div>
								</div>
								<div class="column lg-5">
									<h3 class="section-subtitle"> ANNUAL TOTAL </h3>
									<div class="card-number-masked">
										<?php echo "$subscriptionCurrentTotal"; ?>
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