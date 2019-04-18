$(document).ready(function() {

	/* open proposals fancybox on click */
	$('.fancybox, .proposal-text a').fancybox({maxWidth: 800});

	var $proposalOverlay = $('.proposal-overlay');

	if ( ! $proposalOverlay.length) {
		return;
	}

	/* switch languages on click inside testimonial */
	$('.switch-language a', $proposalOverlay).on('click', function(event) {

		event.preventDefault();

		var lang = $(this).attr('class');

		if (lang === 'spanish') {
			$proposalOverlay.find('.spanish').hide();
			$proposalOverlay.find('.english').show();
			return;
		}

		$proposalOverlay.find('.spanish').show();
		$proposalOverlay.find('.english').hide();

	});

	/* character count on participate page */
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

	});

	// store updated proposals in array
	var updatedProposals = [];

	// on hovering a social counter, set it to update with next refresh
	$('.socialcount').on('mouseenter', 'li', function(event) {

		var id = $(this).parent().data('id'); // get ID of the proposal

		// if it's not in array yet, set to 'update'
		if ( $.inArray(id, updatedProposals) === -1) {
			updatedProposals.push(id);
			var updateUrl = ajaxBaseUrl + 'proposals/triggerUpdate/' + id;
			$.get( updateUrl, function(data) { console.log("UPDATED") } );
		}

	});

	// poshytip for vote counter
	$voteCounter = $('.proposal .votes a');

	// get screen width to only show tooltip for non-touch devices
	var is_touch_device = 'ontouchstart' in document.documentElement;

	if ($voteCounter.length && ! is_touch_device) {

		/* progress steps when user hovers over progress items */
		$voteCounter.poshytip({
			className: 'tip-twitter',
			showTimeout: 1,
			alignTo: 'target',
			alignX: 'center',
			offsetY: 5,
			allowTipHover: false,
			fade: false,
			slide: false
		});

	}

	function viewport() {
		var e = window
		, a = 'inner';
		if ( !( 'innerWidth' in window ) )
		{
		a = 'client';
		e = document.documentElement || document.body;
		}
		return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
	}

	var viewportWidth = viewport().width;

	var agendaItemPositionX = (viewportWidth < 781) ? ((viewportWidth < 521) ? 'right' : 'left') : 'center';
	var agendaItemPositionY = (viewportWidth < 781) ? 'center' : 'top';

	/* progress steps when user hovers over progress items */
	$('.progress-steps li a').poshytip({
		className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: agendaItemPositionX,
		alignY: agendaItemPositionY,
		offsetY: 5,
		offsetX: 7,
		allowTipHover: false,
		fade: false,
		slide: false
	});

	$('#the-book').wowBook({
      height : 600,
      width  : 900,
      startPage: 0,
      centeredWhenClosed: true,
      gutterShadow: true,
      scaleToFit: "#participate-form",
      onReleasePage: function() {
      	$('.arrow-book').fadeOut();
      }
    });

});