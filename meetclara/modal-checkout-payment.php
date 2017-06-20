<!-- Modal -->
<div class="modal fade" id="checkoutPayment" tabindex="-1" role="dialog" aria-labelledby="Payment">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header">
					<img class="checkout-logo" src="../global/images/logo/clara_logo.svg">
					<h1 class="checkout-header">Clara Subscription</h1>
				</div>
				<div class="modal-main">
					<div class="id-confirm">
						<div class="name">
							<span><?php echo "$userFirstName"; ?></span> <span><?php echo "$userLastName"; ?></span>
						</div>
						<div class="clara-id">
							<span><?php echo "$claraID"; ?></span>
						</div>
					</div>
					<div class="modal-collect-pmt">
						<div class="fieldgroup-stacked">
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-12">
									<input type="text" class="form-text" placeholder="card number" value="">
									<div class="error-msg">
										Error message here.
									</div>
								</div>
							</div>
							<div class="fieldgroup">
								<div class="error-msg-wrapper lg-6">
									<input type="text" class="form-text" placeholder="MM / YY" value="">
									<div class="error-msg">
										Error message here.
									</div>
								</div>
								<div class="error-msg-wrapper lg-6">
									<input type="text" class="form-text" placeholder="CVC" value="">
									<div class="error-msg">
										Error message here.
									</div>
								</div>
							</div>
						</div>
						<div class="remember-pmt">
							<input type="checkbox" name="remember-pmt-info" id="remember-pmt-info"><label for="remember-pmt-info">Remember my payment info</label>
						</div>
					</div>
				</div>
			</div>
			<div class="controls-footer clearfix">
				<div class="button-group flow-controls">
					<button type="button" role="link" class="button button-flat">Place Order Now</button>
				</div>
			</div>
		</div>
	</div>
</div>