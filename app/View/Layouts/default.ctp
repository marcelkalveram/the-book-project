<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>

	<?php
		echo $this->Html->charset();
		echo $this->Html->css( array('styles-5') );
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

  	<meta name="viewport" content="width=device-width, maximum-scale=1" />

	<link rel="shortcut icon" href="img/favicon.png" type="image/png" />
	<link rel="icon" href="img/favicon.png" type="image/png" />

	<?php

		// when no proposal is set, use the standard description
		if ( ! isset($proposal)) {
			$description = 'Es un proyecto que nace de la ilusión de crear una historia de todos, redactar un relato de la mano de un montón de autores, los cuales podéis ser vosotros.';
		}

		// otherwise, use the truncated text of the proposal
		else {
			$description = trim(substr($proposal['Proposal']['text'], 0, 120)) . '...';
		}

	?>

	<title><?php echo $this->fetch('page-title'); ?> &middot; The Book Project</title>
	<meta name="description" content="<?php echo $description; ?>" />

	<base href="<?php echo $this->webroot; ?>" />

	<?php

		$url = Router::url('/', true);

		// facebook OG meta tags for single proposals
		if ( isset($proposal)) {

			$author = $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname'];

			?>

			<meta property="og:image" content="<?php echo $url ?>img/the-book-project-logo-share-large.jpg" />
			<meta property="og:title" content="Propuesta recibida por <?php echo $author ?> para el comienzo del relato" />
			<meta property="og:url" content="<?php echo $url . 'proposal/' . $proposal['Proposal']['id']; ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:site_name" content="The Book Project" />

			<meta name="twitter:card" content="summary">
			<meta name="twitter:site" content="@thebookproject_">
			<meta name="twitter:creator" content="@thebookproject">
			<meta name="twitter:title" content="Propuesta recibida por <?php echo $author ?> para el comienzo del relato">
			<meta name="twitter:description" content="<?php echo $description; ?>">
			<meta name="twitter:image" content="<?php echo $url ?>img/the-book-project-logo-share-large.jpg">
			<meta name="twitter:url" content="<?php echo $url . 'proposal/' . $proposal['Proposal']['id']; ?>">

		<?php } else { ?>

			<meta property="og:image" content="<?php echo $url ?>img/the-book-project-logo-share-large.jpg" />
			<meta property="og:title" content="The Book Project" />
			<meta property="og:description" content="Es un proyecto que nace de la ilusión de crear una historia de todos, redactar un relato de la mano de un montón de autores, los cuales podéis ser vosotros." />
			<meta property="og:url" content="<?php echo $url; ?>" />
			<meta property="og:type" content="website" />
			<meta property="og:site_name" content="The Book Project" />

		<?php }

	?>

	<script>(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
	var fbds = document.createElement('script');
	fbds.async = true;
	fbds.src = '//connect.facebook.net/en_US/fbds.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(fbds, s);
	_fbq.loaded = true;
	}
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', '6019718566645', {'value':'0.01','currency':'EUR'}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6019718566645&amp;cd[value]=0.01&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>

</head>
<body itemscope itemtype="http://schema.org/Product">

	<!-- MASTHEAD -->
	<header id="masthead">

		<!-- BACKGROUND IMAGE AND LOGO -->
		<div class="bg-image-container <?php echo $this->fetch('bg-image-class'); ?>">

			<img class="bg-image" src="img/<?php echo $this->fetch('bg-image'); ?>" alt="<?php echo $this->fetch('bg-image-alt'); ?>"/>
			<figure class="logo">
		  		<img itemprop="image" src="img/the-book-project-logo.png" alt="Logotipo del proyecto"/>
		  		<figcaption>
					<h1 itemprop="name">The Book Project</h1>
		  		</figcaption>
			</figure>

		</div>

		<!-- NAVIGATION -->
		<nav id="navigation">

			<ul class="button-group">

				<?php
					$activeMenuItem = $this->fetch('active-menu-item');
					$buttonClass 	= 'small button';
				?>

				<li><?php echo $this->Html->link('Inicio', array( 'controller' => 'proposals', 'action' => 'index'), array('class' => 						($activeMenuItem == 'index') 		? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li><?php echo $this->Html->link('Sobre el proyecto', array( 'controller' => 'proposals', 'action' => 'about'), array('class' =>				($activeMenuItem == 'about') 		? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li class="big"><?php echo $this->Html->link('Involúcrate', array( 'controller' => 'proposals', 'action' => 'participate'), array('class' =>  ($activeMenuItem == 'participate') 	? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li><?php echo $this->Html->link('Propuestas', array( 'controller' => 'proposals', 'action' => 'proposals'), array('class' =>					($activeMenuItem == 'proposals') 	? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li><?php echo $this->Html->link('Contacto', array( 'controller' => 'proposals', 'action' => 'contact'), array('class' => 					($activeMenuItem == 'contact') 		? $buttonClass . ' active' : $buttonClass)); ?></li>

			</ul>

		</nav>

	</header>

	<?php echo $this->fetch('content'); ?>

	<!-- PRE FOOTER -->
	<div id="pre-footer" class="clearfix">
		<?php echo $this->Html->image("background-footer.png", array(
		    'alt' => 'Imagen del footer con libros volando entre las nubes'
		)); ?>
	</div>

	<!-- FOOTER TRANSITION -->
	<div id="footer-transition">
		<?php echo $this->Html->image("background-footer-transition.png", array(
		    'alt' => 'Imagen de montañas y transición al menu del footer'
		)); ?>
	</div>

	<!-- FOOTER -->
	<footer id="footer">

		<nav id="footer-wrapper" class="clearfix">
		    <ul class="inline-list right">

				<?php $buttonClass = ''; ?>

				<li class="copyright">&copy; 2014 The Book Project <span>&middot;</span> </li>
			  	<li class="faq-link"><?php echo $this->Html->link('Preguntas frecuentes', array('controller' => 'pages', 'action' => 'display', 'faq'), array('class' => ($activeMenuItem == 'faq') ? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li><?php echo $this->Html->link('Términos y condiciones', array('controller' => 'pages', 'action' => 'display', 'terms'), array('class' => ($activeMenuItem == 'terms') ? $buttonClass . ' active' : $buttonClass)); ?></li>
				<li><?php echo $this->Html->link('Privacidad', array('controller' => 'pages', 'action' => 'display', 'privacy'), array('class' => ($activeMenuItem == 'privacy') ? $buttonClass . ' active' : $buttonClass)); ?></li>

		      </ul>
		</nav>

	    <p class="made-in">Made in Valencia</p>

	</footer>

	<!-- SCRIPTS -->
	<script>
		var ajaxBaseUrl = '<?php echo Router::url('/', true); ?>';
	</script>

	<?php echo $this->Html->script(array('plugins', 'scripts')); ?>
	<?php echo $this->fetch('script'); ?>

	<!-- ANALYTICS -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44562528-1', 'thebookproject.es');
	  ga('send', 'pageview');

	</script>

</body>
</html>