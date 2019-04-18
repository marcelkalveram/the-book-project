$(document).ready(function() {

	window.fbAsyncInit = function() {

	    FB.init({
	        appId : '182108195314273',
	        status : true,
	        cookie : true,
	        xfbml : true
	    });

	};

	// function to create like button
	(function(d, s, id) {

	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/es_ES/all.js";
	fjs.parentNode.insertBefore(js, fjs);

	}(document, 'script', 'facebook-jssdk'));


	// Twitter share button
	$('.twitter-share').click(function(event) {

		var width  = 575,
		    height = 400,
		    left   = ($(window).width()  - width)  / 2,
		    top    = ($(window).height() - height) / 2,
		    url    = this.href,
		    opts   = 'status=1' +
		             ',width='  + width  +
		             ',height=' + height +
		             ',top='    + top    +
		             ',left='   + left;

		window.open(url, 'twitter', opts);

		return false;

	});

	// Facebook share button
	$('.facebook-share').bind('click', function( e ) {

		e.preventDefault();

	    FB.ui(
	      {
	       method: 'feed',
	       name: 'He escrito un comienzo en The Book Project. Pronto saldrán las propuestas. Entra, anímate y vótame!',
	       caption: 'http://thebookproject.es',
	          description: (
	          'Es un proyecto que nace de la ilusión de crear una historia de todos, redactar un relato de la mano de un montón de autores, los cuales podéis ser vosotros.'
	       ),
	       link: 'http://thebookproject.es',
	       picture: 'http://thebookproject.es/img/facebook-share.jpg',
	       redirect_uri: 'http://thebookproject.es/',
	       actions: [
	            { name: 'Participa!', link: 'http://thebookproject.es/participate' }
	       ]
	       
	      },

	      function(response) {

	      }

	    );

	});	

});