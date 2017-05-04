$(document).ready(function () {
	"use strict";

	$(".moreinfo").hover(
		function () {
			$(this).siblings(".moreinfo-hover").addClass("show");
		},
		function () {
			$(this).siblings(".moreinfo-hover").removeClass("show");
		}
		);
	
	$(".select-row-highlight").click(function() {
		var checkBox = "input[type='checkbox']";
		$(this).closest("tr").toggleClass("selected");
		if ($(checkBox).is(":checked")) {
			$(this).closest("body").find(".nav-tools").addClass("show");
		} else {
			$(this).closest("body").find(".nav-tools").removeClass("show");
		}
	});
	
	$("#clara-add-dropdown").click(function() {
		$(this).children(".dropdown-items").toggleClass("open");
	});
	
	$(".open-popover-link").click(function() {
		$(this).closest(".pop-wrapper").find(".popover-container").addClass("visible");
		$(this).closest("accordian").css("overflow", "visible");
	});
	
	$(".close-popover-link").click(function() {
		$(this).closest(".pop-wrapper").find(".popover-container").removeClass("visible");
	});
	
	$(".link-inline-user-invite").click(function() {
		$(this).closest(".add-user-step-0").addClass("hidden");
		$(this).closest(".popover").find(".add-user-step-1").addClass("visible");
	});
	
	$(".button-switch").click(function() {
		$(this).toggleClass("on");
		$(this).children(".button-switch-pull").toggleClass("on");
		$(this).closest(".moduleselect-item").toggleClass("activated");
	});
	
});

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

// LOSE FOCUS Cancel Username Flow
$(document).on("click", function (event) {
	"use strict";
	var x = $(".popover-container");
	if (x.css("display") === "none") {} else {
		if (!$(event.target).closest(".pop-wrapper").length) {
			$(".popover-container").removeClass("visible");
			$("accordian").css("overflow", "hidden");
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