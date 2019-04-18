$(document).ready(function() {

	var $charCount = $('#charCount span');
	var $locked    = $('.locked, .locked-button');

	$('#ProposalText').keyup( function( textarea ) {

		var len = $(this).val().length;

		$charCount.text(len);

		if (len >= 2000) {
			$locked.css('opacity', 1);
			$locked.find('input').removeAttr('disabled');
		} else {
			$locked.css('opacity', 0.5);
			$locked.find('input').attr('disabled', 'disabled');
		}

	} );

})