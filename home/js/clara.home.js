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
			{details: 'Male' + resultSpacer + '4/3/1270' + resultSpacer + '1501 San Christopher Drive, Dunedin, FL 34698', name: 'William Woolworth Wallace'},
			{details: 'Male' + resultSpacer + '4/3/1288' + resultSpacer + '306 Lagoon Drive, Palm Harbor, FL 34683', name: 'William Hamish Wallace'},
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
			window.location.href = '/acorn-vale-03457798624180578193/rx/' + patientLink + '.php';
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
	
});