// Global Navigation Functions
$(document).ready(function () {
	"use strict";
	
	// Open SubMenu: Account
	$("#gn-link-account").click(function() {
		event.preventDefault();
    	$("#globalnav").addClass("accountshow");
		setTimeout(function () { 
    		$("#globalnav").removeClass("accountshow").addClass("accountopen");
		}, 750);
  	});
	
	// Close SubMenu: Account
	$("#gn-accountview-close").click(function() {
		event.preventDefault();
    	$("#globalnav").removeClass("accountopen").addClass("accounthide");
		setTimeout(function () { 
    		$("#globalnav").removeClass("accounthide");
		}, 750);
  	});
	
	$("#gn-link-compact-menu").click(function() {
		event.preventDefault();
    	if(!$("#globalnav").hasClass("compactmenu")) {
    		$("#globalnav").addClass("compactmenu").addClass("menu-options");
		} else {
			$("#globalnav").removeClass("compactmenu");
			setTimeout(function () { 
    		$("#globalnav").removeClass("menu-options");
			}, 750);
		}
		if(!$(".gn-button-compact-menu").hasClass("closed")) {
			  $(".gn-button-compact-menu").removeClass("open").addClass("closed");
		  } else {
			  $(".gn-button-compact-menu").removeClass("closed").addClass("open");
		  }
  	});
	
	$("#gn-link-compact-account").click(function() {
		event.preventDefault();
		if(!$("#globalnav").hasClass("compactmenu")) {
    		$("#globalnav").addClass("compactmenu").addClass("account-options");
		} else {
			$("#globalnav").removeClass("compactmenu");
			setTimeout(function () { 
    		$("#globalnav").removeClass("account-options");
			}, 750);
		}
  	});
	
	function showAlertPopup () {
		$(".alert-curtain").removeClass("hidden");
		$(".alert-curtain .popover-container").css("display", "block");
	}
	
	$(".closealert").click(function() {
		$(".alert-curtain").addClass("hidden");
		$(".alert-curtain .popover-container").css("display", "none");
	});
	
	$(".expiresession-link").click(function() {
		showAlertPopup();
		$(".alert-popup-msg").text("To protect your privacy, this session will time out in {{duration}} seconds. If the session expires, you will need to start over.");
	});
	
	$(".action-pendinguserdelete").click(function() {
		showAlertPopup();
		$(".alert-popup-msg").text("Do you want to delete these Keystone invitations? This action cannot be undone.");
	});
});