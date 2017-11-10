$(document).ready(function () {
	'use strict';
	
	var priceFreqAnnual = "\/year";
	var priceFreqMonthly = "\/month";
	var priceFreqWrap = $(".cs-price-freq-unit-toggle");
	
	var basicPriceAnnual = "$196.00";
	var claraProPriceAnnual = "$560.00";
	var claraProCSPriceAnnual = "$760.00";
	
	var basicPriceMonthly = "$18.00";
	var claraProPriceMonthly = "$52.00";
	var claraProCSPriceMonthly = "$72.00";
	
	var basicPriceWrap = $(".cs-basic").find(".cs-current-price");
	var claraProPriceWrap = $(".cs-clarapro").find(".cs-current-price");
	var claraProCSPriceWrap = $(".cs-clarapro-cs").find(".cs-current-price");
	
	function showPriceAnnual() {
		basicPriceWrap.text(basicPriceAnnual);
		claraProPriceWrap.text(claraProPriceAnnual);
		claraProCSPriceWrap.text(claraProCSPriceAnnual);
		priceFreqWrap.text(priceFreqAnnual);
	}
	
	function showPriceMonthly() {
		basicPriceWrap.text(basicPriceMonthly);
		claraProPriceWrap.text(claraProPriceMonthly);
		claraProCSPriceWrap.text(claraProCSPriceMonthly);
		priceFreqWrap.text(priceFreqMonthly);
	}
	
	showPriceAnnual();
	
	$('.price-toggle-annual').on('click',function(){
		showPriceAnnual();
		$('.plan-btn').removeClass('active');
	});
	
	$('.price-toggle-monthly').on('click',function(){
		showPriceMonthly();
		$('.plan-btn').removeClass('active');
	});
	
	var maxHeight = -1;
	
	$('.cs-planspecs').each(function() {
		maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
	});

	$('.cs-planspecs').each(function() {
		$(this).css('min-height', maxHeight);
	});
	
	$('#user-accept-terms').on('click',function(){
		$('#license-terms').modal('hide');
	});
	
	
});