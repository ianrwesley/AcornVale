<div class="pop-wrapper">
	<button id="startChangePasswordFlow" class="button button-link trigger-flow" data-toggle="popover" data-placement="top" data-trigger="click" data-html="true" data-content="<div class='change-password-popover-content'>
								<div class='clearfix'>
									<div class='error-msg-wrapper lg-12 <?php if ($fail == 'true'){ echo 'has-error'; } ?>'>
										<input type='password' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' maxlength='254' class='form-text' placeholder='current password' id='currentPassword'>
										<span class='error-msg <?php if ($fail == 'true'){ echo 'show'; } ?>'>The current password you entered does not match our records.</span>
									</div>
									<div class='error-msg-wrapper lg-12 <?php if ($fail == 'true'){ echo 'has-error'; } ?>'>
										<input type='password' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' maxlength='254' class='form-text' placeholder='new password' id='newPassword'>
									</div>
									<div class='error-msg-wrapper lg-12 <?php if ($fail == 'true'){ echo 'has-error'; } ?>'>
										<input type='password' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' maxlength='254' class='form-text' placeholder='confirm password' id='newPasswordConfirm'>
										<span class='error-msg <?php if ($fail == 'true'){ echo 'show'; } ?>'>The new password and confirm password fields must match exactly.</span>
									</div>
								</div>
								<div class='password-strength'>
									<div class='sub-heading'>Your password must have:</div>
									<div class='error error-one'>
											<icon class='icon-checkmark'></icon>
											<span class='message'>8 or more characters</span>
											<error></error>
									</div>
									<div class='error error-two'>
											<icon class='icon-checkmark'></icon>
											<span class='message'>Upper &amp; lowercase letters</span>
											<error></error>
									</div>
									<div class='error error-three success'>
											<icon class='icon-checkmark'></icon>
											<span class='message'>At least one number</span>
											<error></error>
									</div>
								</div>
								<div class='step-footer clearfix'>
									<div class='toolbar-footer clearfix'>
										<div class='button-group pull-right'>
											<button tabindex='0' type='button' class='button button-link last nav-cancel pull-right' onclick='cancelChangePassword()'>Cancel</button>
											<button tabindex='0' type='button' class='button button-link first nav-action pull-right' onclick='successChangePassword()' id='passwordContinue' disabled=''>Change Password…</button>
										</div>
									</div>
								</div>
								</div>">
		Change Password…
	</button>
</div>