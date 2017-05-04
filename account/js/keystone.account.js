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

// ADMIN ONLY FUNCTIONS BELOW HERE

// Switch between Account view and Administrator view
//function switchView() {
//	"use strict";
//	$("account").toggleClass("hidden");
//	$("admin").toggleClass("hidden");
//	if ($("account").hasClass("hidden")) {
//		$("#switch-view-button").text("Account");
//		$(document).prop("title", "Administrator - Keystone");
//	} else {
//		$("#switch-view-button").text("Admin");
//		$(document).prop("title", "Manage your Keystone ID");
//	}
//}

// Switch to Users module
//function adminUsers() {
//	$(".menu-button").removeClass("active");
//	$(event.target).addClass("active");
//	$("#admin-roles").addClass("hidden");
//	$("#admin-add-users").removeClass("hidden");
//}

// Switch to Roles module
//function adminRoles() {
//	$(".menu-button").removeClass("active");
//	$(event.target).addClass("active");
//	$("#admin-add-users").addClass("hidden");
//	$("#admin-roles").removeClass("hidden");
//}

$(document).ready(function() {
	"use strict";
	
	$(".clear-row-button").click(function() {
		$(this).css("display", "none");
		$(this).closest(".row").find("input").val("");
		$(this).closest(".row").find("select").removeClass("selected").val("role");
	});
	
	$("#addRows").click(function() {
		$("#invite-users-wrapper").append("<div class='row no-columns'><div class='flex-field-wrapper'><input type='text' class='form-flex-control form-flex-textbox large-4 short' placeholder='email'><input type='text' class='form-flex-control form-flex-textbox large-3 short' placeholder='first name'><input type='text' class='form-flex-control form-flex-textbox large-3 short' placeholder='last name'><div class='flex-select-wrapper large-2'><select class='form-flex-control short'><option selected='' value='role' disabled=''>role</option><option value='Key Administrator'>Administrator</option><option value='Key Master'>Key Master</option><option value='Key User'>Key User</option></select></div></div></div>");
		
	});
	
	
	$("select").change(function(){
		$(this).addClass("selected");
	});
	
	$(".select-row-highlight").click(function() {
		$(this).closest("tr").toggleClass("selected");
	});
	
	$(".select-row-highlight").click(function() {
		var checkBox = "input[type='checkbox']";
		if ($(checkBox).is(":checked")) {
			$(this).closest("section").find(".description").addClass("hide");
			$(this).closest("section").find(".table-tools").addClass("show");
		} else {
			$(this).closest("section").find(".description").removeClass("hide");
			$(this).closest("section").find(".table-tools").removeClass("show");
		}
	});
	
	$(".select-all").click(function() {
		if ($(".select-all").is(":checked")) {
			$(this).closest("section").find(".description").addClass("hide");
			$(this).closest("section").find(".table-tools").addClass("show");
		} else {
			$(this).closest("section").find(".description").removeClass("hide");
			$(this).closest("section").find(".table-tools").removeClass("show");
		}
	});
	
	//$(".select-all").click(function() {
	//	var selectAll = $(".select-all");
	//	var selectedBoxes = "input[type='checkbox']";
	//	if (selectAll.is(":checked")) {
	//		$(this).parents(".table-tools").siblings().find(selectedBoxes).prop("checked", true);
	//		$(this).parents(".table-tools").siblings().find("tr").addClass("selected");
	//	} else {
	//		$(this).parents(".table-tools").siblings().find(selectedBoxes).prop("checked", false);
	//		$(this).parents(".table-tools").siblings().find("tr").removeClass("selected");
	//	}
	//});
	
	$(".select-all").click(function() {
		var checkBox = "input[type='checkbox']";
		if ($(checkBox).is(":checked")) {
			$(this).parents(".table").find(checkBox).prop("checked", true);
			$(this).parents(".table").find("tr, .table-row").addClass("selected");
		} else {
			$(this).parents(".table").find(checkBox).prop("checked", false);
			$(this).parents(".table").find("tr, .table-row").removeClass("selected");
		}
	});
	
	$(".col-large, .col-small").click(function() {
		var selectRowHighlight = $(this).siblings(".col-tool").find(".select-row-highlight");
		$(this).closest("tr").toggleClass("selected");
		if (selectRowHighlight.is(":checked")) {
			selectRowHighlight.prop("checked", false);
		} else {
			selectRowHighlight.prop("checked", true);
		}	
	});
	
	$(".pending-users .header-row").click(function() {
		if (!$(".pending-users").hasClass("expanded")) {
			$(this).siblings("accordian").toggleClass("open");
			$(this).closest(".sub-section").toggleClass("expanded");
		} else {}
	});
	
	var existingRowCount = $("tbody tr").length;
	$(".existing-row-count").text(existingRowCount);
	
	//var pendingRowCount = $(".pending-users .table-row").length;
	//$(".pending-row-count").text(pendingRowCount);
});

function adminMenuFunction() {
	"use strict";
	$(".menu-button").removeClass("active");
	$(event.target).addClass("active");
	$(".main-section").addClass("hidden");
}

function adminInviteUsers() {
	"use strict";
	adminMenuFunction();
	$("#admin-invite-users").removeClass("hidden");
}

function adminEditUsers() {
	"use strict";
	adminMenuFunction();
	$("#admin-edit-users").removeClass("hidden");
	$(".notification-msg").text("Changes saved.");
}