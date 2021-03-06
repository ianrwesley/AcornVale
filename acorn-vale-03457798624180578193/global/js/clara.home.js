$(document).ready(function () {
	'use strict';
	var resultSpacer = "\xa0\xa0\xa0•\xa0\xa0\xa0";

	$('#pick-patient').selectize({
		persist: false,
		maxItems: null,
		valueField: 'name',
		labelField: 'details',
		searchField: ['name', 'details'],
		options: [
			{name: 'William Woolworth Wallace', details: 'Male' + resultSpacer + '4/3/1270' + resultSpacer + '1501 San Christopher Drive, Dunedin, FL 34698'},
			{name: 'William Hamish Wallace', details: 'Male' + resultSpacer + '4/3/2006' + resultSpacer + '306 Lagoon Drive, Palm Harbor, FL 34683'},
			{name: 'Add new patient'}
		],
		render: {
			item: function(item, escape) {
				return '<div>' +
					(item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
					(item.details ? '<span class="details">' + escape(item.details) + '</span>' : '') +
				'</div>';
			},
			option: function(item, escape) {
				var label = item.name || item.details;
				var caption = item.name ? item.details : null;
				return '<div>' +
					'<span class="label">' + escape(label) + '</span>' +
					(caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
				'</div>';
			}
		},
		onItemAdd: function(value, $item) {
			var patientLink = value.replace(/\s+/g, '-').toLowerCase();
			//window.location.href = '/acorn-vale-03457798624180578193/rx/' + patientLink + '.php';
			if (patientLink === 'add-new-patient') {
				window.location.href = '/acorn-vale-03457798624180578193/rx/' + patientLink + '.php';
			}
			if (patientLink !== 'add-new-patient') {
				window.location.href = '/acorn-vale-03457798624180578193/rx/write-prescriptions.php?existing=' + patientLink;
			}
		}
	});
	
	$('#add-allergies').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#add-homemeds').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#add-diagnoses').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#edit-allergies').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#edit-homemeds').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#edit-diagnoses').selectize({
		plugins: ['remove_button'],
		delimiter: ',',
		persist: false,
		create: function(input) {
			return {
				value: input,
				text: input
			};
		}
	});
	
	$('#select-none-allergies').on('click',function(){
		$(this).closest('.fieldcontrols').html('<icon class="icon-allergy allergy-label"></icon>No allergies. <div class="pull-right"><button class="button-link button-tiny" data-toggle="modal" data-target="#addAllergies">Add allergies</button></div>');
	});
	$('#select-none-homemeds').on('click',function(){
		$(this).closest('.fieldcontrols').html('<icon class="icon-medication-bottle homemed-label"></icon>No home medications. <div class="pull-right"><button class="button-link button-tiny" data-toggle="modal" data-target="#addHomeMeds">Add home medications</button></div>');
	});
	$('#select-none-diagnoses').on('click',function(){
		$(this).closest('.fieldcontrols').html('<icon class="icon-diagnosis diagnosis-label"></icon>No diagnoses or pre-existing conditions. <div class="pull-right"><button class="button-link button-tiny" data-toggle="modal" data-target="#addDiagnoses">Add diagnoses</button></div>');
	});
	
	$('.add-more-allergies-btn').on('click',function(){
		$(this).closest('.active-items-wrap').find('.active-items-content').append('<div class="flow-section"><div class="header-wrap med-history-item-header clearfix"><h2 class="section-title">New allergy</h2><div class="pull-right button-group"><button class="button button-link button-tiny secondary-action"><icon class="icon-delete"></icon>Remove</button><!--button class="button button-link button-tiny secondary-action markerror"><icon class="icon-error"></icon>Mark Error</button><button class="button button-link button-tiny secondary-action discontinue"><icon class="icon-discontinue"></icon>Discontinue</button--></div></div><div class="fieldgroup"><div class="error-msg-wrapper lg-4"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="allergy" name="phone" value=""><div class="error-msg">Error</div></div><div class="error-msg-wrapper lg-8"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="reactions" name="email" value=""><div class="error-msg">Error</div></div></div></div>');
		//$(this).remove();
	});
	
	$('.add-more-homemeds-btn').on('click',function(){
		$(this).closest('.active-items-wrap').find('.active-items-content').append('<div class="flow-section"><div class="header-wrap med-history-item-header clearfix"><h2 class="section-title">New home medication</h2><div class="pull-right button-group"><button class="button button-link button-tiny secondary-action"><icon class="icon-delete"></icon>Remove</button><!--button class="button button-link button-tiny secondary-action markerror"><icon class="icon-error"></icon>Mark Error</button><button class="button button-link button-tiny secondary-action discontinue"><icon class="icon-discontinue"></icon>Discontinue</button--></div></div><div class="fieldgroup"><div class="error-msg-wrapper lg-12"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="drug name" name="drug name" value=""><div class="error-msg">Error</div></div></div><div class="fieldgroup"><div class="error-msg-wrapper lg-4 has-controls dosage"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="dose" name="dose" value=""><div class="control dosage-unit"><span>units</span></div><div class="error-msg">Error</div></div><div class="error-msg-wrapper lg-4"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="frequency" name="frequency" value=""><div class="error-msg">Error</div></div><div class="error-msg-wrapper lg-4"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="last taken" name="last taken" value=""><div class="error-msg">Error</div></div></div></div>');
		//$(this).remove();
	});
	
	$('.add-more-diagnoses-btn').on('click',function(){
		$(this).closest('.active-items-wrap').find('.active-items-content').append('<div class="flow-section"><div class="header-wrap med-history-item-header clearfix"><h2 class="section-title">New diagnosis or condition</h2><div class="pull-right button-group"><button class="button button-link button-tiny secondary-action"><icon class="icon-delete"></icon>Remove</button><!--button class="button button-link button-tiny secondary-action markerror"><icon class="icon-error"></icon>Mark Error</button><button class="button button-link button-tiny secondary-action discontinue"><icon class="icon-discontinue"></icon>Discontinue</button--></div></div><div class="fieldgroup"><div class="error-msg-wrapper lg-12"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-text" placeholder="diagnosis or pre-existing condition" name="phone" value=""><div class="error-msg">Error</div></div></div></div>');
		//$(this).remove();
	});
	
	//$('.field-icon').on('click',function(){
	//	$(this).siblings('.nofocus-icon').addClass('in-focus');
	//});
	
	$('.show-discontinued').on('click',function(){
		//$(this).closest('.fieldcontrols').find('.discontinued-list').addClass('show');
		$(this).closest('.button-group').find('.hide-discontinued').addClass('active');
		$(this).removeClass('active');
	});
	
	$('.hide-discontinued').on('click',function(){
		//$(this).closest('.fieldcontrols').find('.discontinued-list').removeClass('show');
		$(this).closest('.button-group').find('.show-discontinued').addClass('active');
		$(this).removeClass('active');
	});
	
	$('#add-more-medications-btn').on('click',function(){
		$('.medication').addClass('collapsed').removeClass('expanded');
		$.ajax({
			url: 'write-prescriptions-medication-empty.php',
			success: function(html) {
				$('.medications-wrapper').append(html);
			}
		});
    });
	
	$(".medication-title").each(function(i) {
		$(this).find(".med-ordinal").addClass("med-ordinal-" + (i));
	});

	var ordinals = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth", "Eleventh", "Twelfth", "Thirteenth", "Fourteenth", "Fifteenth", "Sixteenth", "Seventeenth", "Eighteenth", "Nineteenth", "Twentieth"];
	$.each(ordinals, function(index, value) {
		$('.med-ordinal-' + index).text(value);
	});
	
	$('.medication-favorite-btn').on('click',function(){
		$(this).children('icon').toggleClass('icon-favorite').toggleClass('icon-favorite-selected');
	});
	
	$('.medication-pharmacynote-btn').on('click',function(){
		$(this).closest('.medication').addClass('has-note').find('.pharmacy-note').addClass('show');
	});
	
	$('.remove-pharmacy-note').on('click',function(){
		$(this).closest('.medication').removeClass('has-note').find('.pharmacy-note').removeClass('show');
	});
	
	$('.edit-med-history-toggle').on('click',function(){
		var sectionTarget = $(this).attr('data-target');
		$(this).closest('.btn-group').children('.btn').removeClass('focus');
		$(this).closest('.patient-medical-history').children('.flow-section-scroll').children('.flow-section').removeClass('show');
		$(this).closest('.patient-medical-history').find(sectionTarget).addClass('show');
	});
	
	$('.ep-link').on('click',function(){
		var contentTarget = $(this).attr('data-target');
		$('.ep-item').removeClass('active');
		$(this).parent('.ep-item').addClass('active');
		$(this).closest('.modal-body').find('.edit-patient-section-wrap > .flow-section').removeClass('show');
		$(this).closest('.modal-body').find(contentTarget).addClass('show');
	});
	
	$('#two-factor-next-step-1').on('click',function(){
		$(this).closest('.modal-content').find('.step-one').removeClass('focus').addClass('inactive');
		$(this).closest('.modal-content').find('.step-two').removeClass('inactive').addClass('focus');
	});
	
	$('#2FA-print-button').on('click',function(){
		$(this).closest('.title-wrap').addClass('print-mode');
	});
	
	$('#2FA-print-cancel').on('click',function(){
		$(this).closest('.title-wrap').removeClass('print-mode');
	});
	
	$('.peds-update-weight').on('click',function(){
		$(this).closest('.inapp-notification-container').find('.notification-msg').html('<div class="row"><div class="column lg-8">What does <span class="strong">William Hamish Wallace</span> weigh?</div><div class="fieldgroup column lg-4"><div class="input-wrapper has-controls weight lg-12"><input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="254" class="form-text no-margin" placeholder="weight" name="weight" value=""><div class="control"><span>lbs</span></div></div></div></div>');
		$(this).closest('.button-group').html('<button class="button button-link button-compact secondary-action">Go back</button><button class="button button-link button-compact">Save weight</button>');
	});
	
	$('.peds-confirm-weight').on('click',function(){
		$(this).closest('.inapp-notification-container').find('.notification-msg').html('<icon class="icon-checkmark success-color"></icon><span class="strong">William Hamish Wallace</span> weighs <span>80 lbs</span><div class="pull-right"><button class="button button-link button-tiny secondary-action">Update weight</button></div>.');
		$(this).closest('.notification-controls').addClass('collapsed');
	});
	
	$("#patient-birthday").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
	$("#patient-phone").mask("(999) 999-9999");
	
	$(window).on('resize',function() {
		$('.app-section-body-scroll').height($(window).height() - 176);
	}).trigger('resize');
	
	$(window).on('resize',function() {
		$('.auth-body-scroll').height($(window).height() - 335);
	}).trigger('resize');
	
	$('.field-info').popover();
});