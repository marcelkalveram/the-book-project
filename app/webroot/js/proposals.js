$(document).ready(function() {

	$('.fancybox').fancybox({maxWidth: 800});

	var $proposalOverlay = $('.proposal-overlay');

	if ( ! $proposalOverlay.length) {
		return;
	}

	$('.switch-language a', $proposalOverlay).on('click', function(event) {

		event.preventDefault();

		var lang = $(this).attr('class');
		console.log(lang);

		if (lang === 'spanish') {
			$proposalOverlay.find('.spanish').hide();
			$proposalOverlay.find('.english').show();
			return;
		}

		$proposalOverlay.find('.spanish').show();
		$proposalOverlay.find('.english').hide();

	});

});