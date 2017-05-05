$(document).ready(function () {
	"use strict";
	
	// Credentials: On Focus
	$(".si-input-field").focusin(function() {
		$(this).parent().addClass("focus");
		$(this).parent().siblings(".field-separator").addClass("focus");
	});
	
	// Credentials: Off Focus
	$(".si-input-field").focusout(function() {
		$(this).parent().removeClass("focus");
		$(this).parent().siblings(".field-separator").removeClass("focus");
	});
	
	// Enable Submit Button for Sign In
	var x = $("#sign-in");
	$(".si-input-field").keyup(function () {
		if ($("#pwd").val() !== "") {
			if ($("#keystoneId").val() !== "") {
				x.prop("disabled", false);
			} else {
				x.prop("disabled", true);
			}
		} else {
			x.prop("disabled", true);
		}
	});
	
	// Validation for Sign In
	$("#sign-in").one("click", function () {
		$("#signin-form").validate({
			errorContainer: "#error-msg-container",
			errorElement: "error",
			errorPlacement: function (error) {
				error.appendTo("#error-msg");
			},
			groups: {
				signin: "keystoneId password"
			},
			rules: {
				keystoneId: {
					email: false,
					pattern: /^[a-zA-Z0-9_.+-]+@bravadohealth\.com$/
				},
				password: {
					pattern: /^Keystone123$/
				}
			},
			messages: {
				keystoneId: {
					pattern: "Your Clara ID or password was incorrect. <a class='forgot-link' target='_blank' href='password/verifyemail.php'>Forgot password?</a>"
				},
				password: {
					pattern: "Your Clara ID or password was incorrect. <a class='forgot-link' target='_blank' href='password/verifyemail.php'>Forgot password?</a>"
				},
			}
		});
	});
	
	// Enable Submit Button for Password Recovery
	var y = $("#action");
	$(".form-textbox").keyup(function () {
		if ($("#emailInputId").val() !== "") {
			y.prop("disabled", false);
		} else {
			y.prop("disabled", true);
		}
	});
	
	// Validation for Password Recovery
	$("#action").one("click", function () {
		$("#recovery-form").validate({
			errorContainer: "#error-msg-container",
			errorElement: "error",
			errorPlacement: function (error) {
				error.appendTo("#error-msg");
			},
			rules: {
				emailInputId: {
					email: false,
					pattern: /^[a-zA-Z0-9_.+-]+@bravadohealth\.com$/
				}
			},
			messages: {
				emailInputId: {
					pattern: "Enter a valid Bravado Health email."
				}
			}
		});
	});
	
	$(".form-field-birthday").focus(function() {
		$(this).attr('placeholder', 'mm/dd/yyyy');
	}).blur(function() {
		$(this).attr('placeholder', 'birthday');
	});
	
	$("#pwd").popover({ 
		content: function() {
		  return $("#pwd-strength-content").html();
		}
	});
	
	$(".field-info").popover();
	$(".form-pwd").popover();
	$(".has-error").popover("show");
	
});