<?php $this->assign('bg-image', 'background-header-new.png'); ?>
<?php $this->assign('bg-image-alt', 'Los escritores Miguel de Cervantes, Oscar Wilde y Virgina Woolf alrededor de libros, plumas y creatividad literaria.'); ?>
<?php $this->assign('bg-image-class', ''); ?>
<?php // $this->assign('active-menu-item', 'index'); ?>
<?php $this->assign('page-title', 'Una plataforma al servicio de la escritura y divulgación'); ?>

<!-- QUOTE -->
<blockquote class="quote">
  <h2>Es un proyecto que nace de la ilusión de <span>crear una historia</span> de todos,<br class="break"/>redactar un relato <span>de la mano</span> de un montón de autores, los&nbsp;cuales&nbsp;podéis&nbsp;ser <span>vosotros</span>.</h2>
</blockquote>

<!-- INTRO -->
<section class="intro clearfix">

	<!-- INTRO > VOTE -->
 	<article class="box vote">
		<h3>¡Apoya nuestra campaña!</h3>
		<p>Formarás parte de un libro escrito a mil manos.<br class="break" /> Y quien sabe hasta donde te puedes involucrar!</p>
		<p><b>¡Date a conocer siguiendo el hilo <br class="break" />narrativo en un relato jamás realizado!</b></p>
		<p>Pincha el link y escribe tu propuesta.</p>
		<?php echo $this->Html->link('¡Involúcrate!', array('action' => 'participate'), array('class' => 'button')); ?>
	</article>

	<!-- INTRO > VOTE -->
<!-- 	<article class="box vote">
		<h3>¡Escoge como sigue la historia!</h3>
		<p>Vota el capítulo más apropiado para The&nbsp;Book&nbsp;Project ¡De ti depende hasta donde quieres involucrarte!</p>
		<p><b>¡Da tu punto de vista y loguéate en cuestión<br class="break" /> de segundos en un proyecto jamás&nbsp;realizado!</b></p>
		<p>Pincha el link y forma parte.</p>
		<?php echo $this->Html->link('¡Finalistas!', array('action' => 'proposals'), array('class' => 'button')); ?>
	</article> -->

	<!-- INTRO > VIDEO -->
	<div class="box video">
    	<h3>Mira el vídeo!</h3>
    	<iframe src="//player.vimeo.com/video/75366721" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>

</section>

<!-- PROPOSALS -->

<?php echo $this->element('proposals-winners', array('amount' => 3, 'text' => 'La propuesta ganadora del capítulo 12', 'sort' => 'created')); ?>

<div class="pentian">

	<div class="notice">

		<img width="80" src="img/collaborators-pentian-round.png" class="notice-icon" alt="">

		<p>Ya puedes encontrar nuestro libro en el catálogo de Pentian, donde hemos abierto una campaña de crowdfunding. <br class="desktop"> <b>Si puedes ayudarnos a hacerlo realidad, visita la página y apoyanos.</b></p>
		<p class="cta-button"><a title="Página de The Book Project en Pentian" href="http://pentian.com/book/fund/687">Apoya The Book Project en Pentian</a></p>
	</div>

</div>

<!-- SOCIAL MEDIA -->
<?php echo $this->element('social-media-icons'); ?>

<!-- DETAILS -->
<section class="details timetable clearfix">

  <h3>Esta fue nuestra agenda</h3>

	<article class="date-1">
		<h4>1 de Enero de 2014<span>:</span> <b>Empieza la primera fase de entregas</b></h4>
		<p>En esa fecha empezamos la fase de envío de propuestas, para seleccionar, quien empezar el relato de los anteriores autores ganadores. Podéis enviar vuestra propuesta y darle publicidad en las redes sociales para difundir vuestra continuación del relato.</p>
	</article>

<!-- 	<article class="date-2">
		<h4>23 de Enero<span>:</span> <b>Empieza la fase de votación</b></h4>
		<p>A partir de este momento se habrán seleccionado a las elegidas, para que los usuarios voten por la que mejor continúa el hilo narrativo del undécimo capítulo, siendo las más votadas, y por lo tanto más repercusión, las que el jurado elija a la idónea. Estará vigente hasta el 31 de Enero.</p>
	</article> -->

	<article class="date-3 clearfix">
		<h4>1 de Marzo de 2015<span>:</span> <b>Finaliza el relato</b></h4>
		<p>En esta fecha conocimos quién fue el elegido para formar parte del duodécimo capítulo. Con este capítulo finalizó el relato y terminó este proyecto.</p>
	</article>

  <figure id="event-poster">
	<?php echo $this->Html->image('inauguracion-the-book-project-03-enero-2014.jpg', array('alt' => 'Cartel del evento de la inauguración de The Book Project en Ubik Café el día 3 de enero 2014 a las 21:00 horas')); ?>
	<figcaption>Inauguración de The Book Project en Ubik Café / Valencia</figcaption>
  </figure>

</section>


	<!-- PROGRESS -->
	<!-- <figure class="progress">

		<ul class="progress-steps">
			<li class="month-1 selected">
				<?php echo $this->Html->link('Propuestas y votación para el comienzo', array('action' => 'proposals'), array('title' => 'El comienzo: Del <b>01 al 15 de enero</b> está abierto el proceso de entregas. Del <b>16 al 31 de enero</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-2 selected">
				<?php echo $this->Html->link('Propuestas y votación para el segundo capítulo', array('action' => 'proposals'), array('title' => 'El segundo capítulo: Del <b>01 al 15 de febrero</b> está abierto el proceso de entregas. Del <b>16 al 28 de febrero</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-3 selected">
				<?php echo $this->Html->link('Propuestas y votación para el tercer capítulo', array('action' => 'proposals'), array('title' => 'El tercer capítulo: Del <b>01 al 22 de marzo</b> está abierto el proceso de entregas. Del <b>23 al 31</b> de marzo fase de votación de las entregas.')); ?>
			</li>
			<li class="month-4 selected">
				<?php echo $this->Html->link('Propuestas y votación para el cuarto capítulo', array('action' => 'proposals'), array('title' => 'El cuarto capítulo: Del <b>01 al 22 de abril</b> está abierto el proceso de entregas. Del <b>23 al 30 de abril</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-5 selected">
				<?php echo $this->Html->link('Propuestas y votación para el quinto capítulo', array('action' => 'proposals'), array('title' => 'El quinto capítulo: Del <b>01 al 22 de mayo</b> está abierto el proceso de entregas. Del <b>23 al 31 de mayo</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-6 selected">
				<?php echo $this->Html->link('Propuestas y votación para el sexto capítulo', array('action' => 'proposals'), array('title' => 'El sexto capítulo: Del <b>01 al 22 de junio</b> está abierto el proceso de entregas. Del <b>23 al 30 de junio</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-7 selected">
				<?php echo $this->Html->link('Propuestas y votación para el séptimo capítulo', array('action' => 'proposals'), array('title' => 'El septimo capítulo: Del <b>01 al 22 de septiembre</b> está abierto el proceso de entregas. Del <b>23 al 30 de septiembre</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-8 selected">
				<?php echo $this->Html->link('Propuestas y votación para el octavo capítulo', array('action' => 'proposals'), array('title' => 'El octavo capítulo: Del <b>01 al 22 de octubre</b> está abierto el proceso de entregas. Del <b>23 al 31 de octubre</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-9 selected">
				<?php echo $this->Html->link('Propuestas y votación para el noveno capítulo', array('action' => 'proposals'), array('title' => 'El noveno capítulo: Del <b>01 al 22 de noviembre</b> está abierto el proceso de entregas. Del <b>23 al 30 de noviembre</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-10 selected">
				<?php echo $this->Html->link('Propuestas y votación para el décimo capítulo', array('action' => 'proposals'), array('title' => 'El décimo capítulo: Del <b>01 al 22 de diciembre</b> está abierto el proceso de entregas. Del <b>23 al 31 de diciembre</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-11 selected">
				<?php echo $this->Html->link('Propuestas y votación para el undécimo capítulo', array('action' => 'proposals'), array('title' => 'El undécimo capítulo: Del <b>01 al 22 de enero</b> está abierto el proceso de entregas. Del <b>23 al 31 de enero</b> fase de votación de las entregas.')); ?>
			</li>
			<li class="month-12 selected">
				<?php echo $this->Html->link('Propuestas y votación para el decimosegundo capítulo', array('action' => 'proposals'), array('title' => 'El decimosegundo capítulo: Del <b>01 al 22 de febrero</b> está abierto el proceso de entregas. Del <b>23 al 28 de febrero</b> fase de votación de las entregas.')); ?>
			</li>
		</ul>

		<figcaption class="progress-steps-pointer">
			<h4>Estamos en la decimosegunda fase</h4>
			<p>El proyecto cuenta con una fase de recepción de propuestas (3 semanas), y durante una fase de votación (1 semana) la comunidad votará para elegir aquellas que el equipo de asesoramiento deberá deliberar; de esta manera se irá construyendo el relato, el cual deberá seguir un hilo conductor.</p>
			<p>El último día de la fase de entregas es el día de reflexión, para que el equipo de asesoramiento seleccione a las finalistas y quedará deshabilitada la caja de envío.</p>
		</figcaption>

	</figure> -->


<!-- MARK STEVENSON QUOTE -->
<aside class="quote mark-stevenson">

	<figure class="quotation">

		<?php echo $this->Html->image("collaborators-mark-stevenson.png", array(
			'alt'   => 'Imagen de Mark Stevenson de LOPO',
			'class' => 'image'
		)); ?>

	    <blockquote>
	    	<p>The Book Project brings together two fundamental human motivators in a single project – collaboration and storytelling. It’s about as human a project as you can imagine – and therefore has a powerful potential... <a class="fancybox" href="#mark-stevenson">Leer&nbsp;más&nbsp;»</a> </p>
	    </blockquote>

    	<figcaption class="cite">– Mark Stevenson <i>(League&nbsp;Of&nbsp;Pragmatic&nbsp;Optimists)</i></figcaption>

	</figure>

	<section class="proposal-overlay" id="mark-stevenson">

		<p class="switch-language">
			<a lang="en" class="spanish" href="#" title="Switch to English version">Switch to English version</a>
			<a lang="es" class="english" href="#" title="Cambia a la versión española">Ir a versión española</a>
		</p>

		<h1 lang="en" class="english">Mark Stevenson about "The Book Project"</h1>
		<h1 lang="es" class="spanish">Mark Stevenson sobre "The Book Project"</h1>

		<article lang="es" class="spanish">
		    <p>Los seres humanos somos narradores de historias por naturaleza. Recuerdo lo que dicen algunos de los científicos e ingenieros con los que trabajo : "Nadie le cuenta a sus hijos una ecuación para saber cuando es hora de acostarse ". Las historias son las armas más poderosas que los seres humanos tenemos para inspirarnos mutuamente, ya sea tanto para bien como para mal, porque ellas mueven el corazón. Los relatos son la razón para que los políticos puedan vender su ideología que ignora la evidencia, pero también los compositores pueden hablar a la verdad en la cara de esa ideología.</p>
		    <p>Los seres humanos son colaboradores naturales. Nos necesitamos unos a otros para reír, llorar, comerciar y explorar nuevas ideas. La creatividad es siempre un acto de casualidad. Si me pides una definición de la raza humana, diría que es una red de co-inspiración. A veces nos inspiramos unos a otros en la grandeza, a veces en la maldad . En la Liga de los optimistas pragmáticos nuestra atención se centra en gran medida en la primera.</p>
		    <p>The Book Project reúne estas dos motivaciones fundamentales del hombre en un solo proyecto: narración colaborativa. Es un proyecto casi tan humano como puedas imaginar - y por lo tanto tiene un potencial de gran alcance.</p>
		    <p>Las historias nos ayudan a imaginar mundos diferentes y al hacerlo, nos ayudan a recrear la nuestra, pero vale la pena señalar que son más poderosas cuando llevan en ellas la verdad: lo mismo sucede con los chistes más divertidos, las canciones más queridas, el grandioso cine, la escritura más célebre.</p>
		    <p>En este proyecto se encontrarán, espero, muchas verdades. No es sólo lo que somos, es lo que podríamos ser."</p>
		</article>

		<article lang="en" class="english">

		    <p>Human beings are natural storytellers. As I remind some of the scientists and engineers I work with, “Nobody tells their children a bedtime equation.” Stories are the most powerful weapon humans have to inspire one another for good, or evil, because they move the heart. Stories are the reason politicians can peddle ideology that ignores evidence and songwriters can talk truth in the face of ideology.</p>
		    <p>Human beings are natural collaborators. We need each other to laugh, cry, trade and explore new ideas with. Creativity is always an act of serendipity. If you were to ask me for a definition of the human race I’d say it’s a co-inspirational network. Sometimes we inspire each other to greatness, sometimes to wickedness. At the League of Pragmatic Optimists our focus is very much on the former.</p>
		    <p>The Book Project brings together these fundamental human motivators in a single project – collaborative storytelling. It’s about as human a project as you can imagine – and therefore has a powerful potential.</p>
		    <p>Stories help us imagine different worlds, and in doing so help us recreate our own, but it is worth noting that they are their most powerful when they carry in them truth: so it is with the funniest jokes, the most loved songs, the greatest movies, the most celebrated writing.</p>
		    <p>In this project you will find, I hope, many truths. Not just about who we are, but who we could be.</p>

		</article>

  </section>

</aside>

<!-- COLLABORATORS -->
<section class="details clearfix collaborators">

	<!-- <h3>Colaboradores</h3> -->

	<article class="collaborator">
		<p class="collaborator-logo bibliocafe">
			<?php echo $this->Html->link(
				$this->Html->image("collaborators-bibliocafe.png", array(
				'alt' => 'Logo de Bibliocafe'
			)),
				'http://www.bibliocafe.es/',
				array('escape' => false, 'target' => '_blank')
			);?>
		</p>
		<p>Cafetería, librería, y lugar de encuentro para los amantes de la literatura. El perfecto local para encontrarte o reunirte con gente afín, preguntar inquietudes o formar parte de las tertulias, en torno al mágico mundo del libro.</p>
	</article>

	<article class="collaborator">
		<p class="collaborator-logo libros">
			<?php echo $this->Html->link(
				$this->Html->image("collaborators-pentian.png", array(
				'alt' => 'Logo de libros.com'
			)),
				'http://libros.com/',
				array('escape' => false, 'target' => '_blank')
			);?>
		</p>
		<p>Plataforma de Crowdfundind para libros en la que todos ganan.
Si tienes un libro que publicar o quieres apoyar a un nuevo talento, puedes hacerlo realidad en la verdadera revolución en la edición.</p>
	</article>

	<article class="collaborator">
		<p class="collaborator-logo lopo">
			<?php echo $this->Html->link(
				$this->Html->image("collaborators-lopo.png", array(
		    	'alt' => 'Logo de League Of Pragmatic Optimists'
		  	)),
		  		'http://leagueofpragmaticoptimists.org/',
		  		array('escape' => false, 'target' => '_blank')
			);?>
		</p>

    	<p>Espacio colaborativo fundado por Mark Stevenson, que incita a mover a cada uno de nosotros a promocionar una visión positiva de la vida, promoviendo una evolución en las mentalidades de los habitantes de este mundo. En definitiva una comunidad que promueve acciones siempre desde un optimismo pragmático.</p>

	</article>

	<div style="clear: left;"></div>

	<article class="collaborator collaborator-big">
		<p class="collaborator-logo ubik">
			<?php echo $this->Html->link(
				$this->Html->image("collaborators-ubik.jpg", array(
				'alt' => 'Logo de libros.com'
			)),
				'http://libros.com/',
				array('escape' => false, 'target' => '_blank')
			);?>
		</p>
		<p>Una librería y cafetería en el barrio vanguardista de Ruzafa con una programación mensual de exposiciones, presentaciones de libros, conciertos y talleres creativos.</p>

		<p>En Ubik Café celebramos la inauguración de nuestro proyecto el día 3 de enero de 2014. Realizamos la presentación a modo de diapositivas, explicando como surgió la idea, como fuimos avanzando sobre ella y como lo tenemos estructurado en fases y períodos. <?php echo $this->Html->link('Aquí podeis ver el cartel del evento', '#event-poster', array('class' => 'fancybox')); ?>, proximamente saldrá un video donde vereis la inauguración del mismo.</p>

	</article>

</section>
