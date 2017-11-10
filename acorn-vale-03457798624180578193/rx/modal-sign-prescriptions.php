<!-- Modal Sign Prescriptions -->
<div class="modal fade cl-auth-overlay-popup" id="cl-auth-sign-prescriptions" tabindex="-1" role="dialog" aria-labelledby="2FA Flow">
	<div class="modal-dialog two-factor" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="title-wrap clearfix">
					<div class="pull-left two-factor-intro">
						<h1 class="title">2-Factor Authentication</h1>
						<a class="description"><button type="button" tabindex="-1" class="button button-link button-compact field-info claraid-field-info" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="The DEA requires two-factor authentication when prescribing Schedule II-V controlled substances.">Why is this step required? <icon class="icon icon-help"></icon></button></a>
					</div>
					<div class="pull-left print-intro">
						<p class="description warning">Are you sure you want to print these controlled substances prescriptions? <span>They will not be sent electronically.</span></p>
					</div>
					<div class="pull-right">
						<button type="button" role="link" class="button button-flat print-button" id="2FA-print-button">Print</button>
						<button type="button" role="link" class="button button-link secondary-action" id="2FA-print-cancel">Cancel</button>
					</div>
				</div>
			</div>
			<div class="modal-body step-one focus">
				<h2 class="header">1. Enter your password</h1>
				<input type="password" autocomplete="off" class="form-text form-pwd" placeholder="password" name="pwd" id="pwd">
				<div class="controls-footer clearfix">
					<div class="button-group flow-controls pull-left">
						<a class="link-compact">Forgot password?</a>
					</div>
					<div class="button-group flow-controls pull-right">
						<button type="button" role="link" class="button button-flat primary-action" id="two-factor-next-step-1">Next</button>
					</div>
				</div>
			</div>
			<div class="modal-body step-two inactive">
				<h2 class="header">2. Confirm your identity</h1>
				<p class="description-inactive">We'll send you a push, text, or call with a passcode.</p>
				<p class="description-focus">We'll contact you at XXX-XXX-5555.</p>
				<div class="button-group call-or-text">
					<button type="button" role="button" class="button"><icon class="icon-checkmark"></icon>Push</button>
					<button type="button" role="button" class="button"><icon class="icon-smartphone"></icon>Text Me</button>
					<button type="button" role="button" class="button"><icon class="icon-phone"></icon>Call Me</button>
				</div>
				<div class="controls-footer clearfix">
					<div class="button-group flow-controls pull-left passcode-wrap">
						<input type="text" autocomplete="off" class="form-text form-pwd" placeholder="passcode" name="pcode" id="pcode">
					</div>
					<div class="button-group flow-controls pull-right">
						<a href="../home/result-view.php?sendresult=Success"><button type="button" role="link" class="button button-flat primary-action">Submit</button></a>
					</div>
				</div>
			</div>
		<!--button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button-->
		</div>
	</div>
</div>