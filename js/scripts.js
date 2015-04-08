(function ($, root, undefined) {
	
	$(function () {
	'use strict';

	   	var target = $('.mble-nav');

		target.hide();
		$('#nav-toggle').click( function(){
			self = $(this);
			$(target).slideToggle(300);
		})
	});
	
})(jQuery, this);
