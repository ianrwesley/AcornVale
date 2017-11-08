// BUTTON Cancel Username Flow
function cancelChangeUsername() {
	"use strict";
	$("#popover-0").css("display", "none");
	$(".popover-field").val("");
	$("#step-1").css("display", "block");
	$(".next-step").css("display", "none");
	$("#emailContinue").attr({
		"onclick" : "step2UsernameFlow()",
		"disabled" : "true"
	});
}

// BUTTON Cancel Password Flow
function cancelChangePassword() {
	"use strict";
	$("#popover-1").css("display", "none");
	$(".popover-field").val("");
	$("#passwordContinue").attr({
		"disabled" : "true"
	});
}

// LOSE FOCUS Cancel Popover Flow
$(document).on("click", function (event) {
	"use strict";
	var x = $("#popover-0");
	var y = $("#popover-1");
	if (x.css("display") === "none") {} else {
		if (!$(event.target).closest("#popwrapper-0").length) {
			cancelChangeUsername();
		} else {}
	}
	if (y.css("display") === "none") {} else {
		if (!$(event.target).closest("#popwrapper-1").length) {
			cancelChangePassword();
		} else {}
	}
});

// Start Change Username Flow
function startChangeUsernameFlow() {
	"use strict";
	var x = $("#popover-0");
	if (x.css("display") === "block") {} else {
		x.css("display", "block");
		$("#emailInputId").focus();
	}
}

// Start Change Password Flow
function startChangePasswordFlow() {
	"use strict";
	var x = $("#popover-1");
	if (x.css("display") === "block") {} else {
		x.css("display", "block");
		$("#currentPassword").focus();
	}
}

// Username Flow - Go To Step 2
function step2UsernameFlow() {
	"use strict";
	$("#step-1").css("display", "none");
	$("#step-2").css("display", "block");
	$("#emailResendCode").css("display", "block");
	var email = $("#emailInputId").val();
	$("#step-2-email").text(email);
	$("#codeInputId").focus();
	$("#emailContinue").attr({
		"onclick" : "step3UsernameFlow()",
		"disabled" : "true"
	});
}

// Username Flow - Go To Step 3
function step3UsernameFlow() {
	"use strict";
	var email = $("#emailInputId").val();
	$(".username").text(email);
	$("#usernameConfirmation").html(email + "<div id='email-change-success'>&nbsp;</div>");
	cancelChangeUsername();
	$("#email-change-success").css("display", "inline-flex").delay(3000).fadeOut(750);
}

// Enable/Disable Continue Button
$(document).ready(function () {
	"use strict";
	
	var x = $("#emailContinue");
	$(".popover-field").keyup(function () {
		if ($(this).val() !== "") {
			x.prop("disabled", false);
		} else {
			x.prop("disabled", true);
		}
	});
	
	$(".mobile-edit").click(function() {
		var y = $(this).text().toLowerCase();
		var z = "." + y + "-edit";
    	$(z).addClass("edit-mode");
  	});
	
	$(".button-done-mobile").click(function() {
    	$(this).closest(".editable").removeClass("edit-mode");
  	});
	
	$("#startChangeUsernameFlow").click(function() {
    	$(".email-edit").addClass("edit-mode");
  	});
	
	$(".mobileFlowCancel").click(function() {
    	$(this).closest(".editable").removeClass("edit-mode");
  	});
	
	$(".medication-edit-btn").on("click",function(){
		$(".medication").removeClass("expanded").addClass("collapsed");
		$(this).closest(".medication-item-wrap").find(".medication").removeClass("collapsed").addClass("in").addClass("expanded");
	});

	$(".medication-save-btn").on("click",function(){
		$(".medication").removeClass("expanded").addClass("collapsed");
	});
	
	var ids = $('.flow-section').map(function(index) {
		// this callback function will be called once for each matching element
		return this.id;
	});
	
	//alert(ids[0]);
	
	var array = ids;
	var newHTML = [];
	$.each(array, function(index, value) {
		newHTML.push('<span>' + value + '</span>');
	});
	$(".element").html(newHTML.join(""));
});

// Edit Section
function editSection() {
	"use strict";
	var x = $(event.target).parents("section").get(0).id;
	$("." + x + "-details").css("display", "none");
	$("." + x + "-edit").css("display", "block");
	$(event.target).parents("accordian").addClass("open").removeClass("closed");
	setTimeout(function () { 
		$("accordian").addClass("show-overflow");
	}, 400);
}

// Save Section
function saveSection() {
	"use strict";
	var x = $(event.target).parents("section").get(0).id;
	$("." + x + "-edit").css("display", "none");
	$("." + x + "-details").css("display", "block");
	$(event.target).parents("accordian").addClass("closed").removeClass("open");
	setTimeout(function () { 
		$("accordian").removeClass("show-overflow");
	}, 400);
}

// Save PROFILE Section
function saveProfile() {
	"use strict";
	var firstName = $("#firstNameInput").val();
	var lastName = $("#lastNameInput").val();
	var location = $("#locationInputId").val();
	var department = $("#departmentInputId").val();
	$("#first_name").text(firstName);
	$("#last_name").text(lastName);
	$(".location").text(location);
	$(".department").text(department);
	saveSection();
	cancelChangeUsername();
}

$(document).ready(function () {
	"use strict";
	
	$(".trigger-flow").popover();
	$(".has-popover-error").popover();
	$(".sn-button").popover();
});