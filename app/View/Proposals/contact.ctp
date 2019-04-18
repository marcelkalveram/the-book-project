<?php $this->assign('bg-image', 'background-header-contact.png'); ?>
<?php $this->assign('bg-image-alt', 'Sobres volando hacía el buzón de la nube'); ?>
<?php $this->assign('bg-image-class', 'header-contact'); ?>
<?php $this->assign('active-menu-item', 'participate'); ?>
<?php $this->assign('page-title', 'Involúcrate'); ?>

<blockquote class="quote">
<!--     <h2>Si teneis tanto sugerencias como información o puntualización de <span>cualquier fase</span> de este proyecto,<br class="break" />
      éste es <span>vuestro lugar</span> para poder llevar a cabo vuestra finalidad.</h2> -->

	<h2>Este es <span>vuestro sitio</span> para que nos enviéis sugerencias, dudas e inquietudes.<br class="break" /> Podéis contactarnos siempre y en cualquier fase del proyecto. <span>Estaremos encantados</span> de escuchar vuestras peticiones.
</blockquote>

<article class="contact form clearfix" id="contact-form">

	<h3>Expresanos tus<br class="break mobile" /> apreciaciones y/o consultas</h3>
	<p class="help-text">Déjanos las cuestiones o proposiciones, completando en el cuadro situado debajo, para poder hacernoslo llegar y valorar tus dudas o preguntas. En cosa de 24 horas estaremos complacidos de contestar vuestras inquietudes.</p>

	<section class="help-form">

	<?php

		if ( ! empty($success) && $success ) { ?>

			<div class="success-message">
				<h4>¡Gracias por tu consulta!</h4>
				<p>Valorarémos tus recomendaciones y/o incertidumbres lo antes posible para tratar de resolverlas.</p>
			</div>

		<?php } else {

			echo $this->Form->create('Contact');
			echo $this->Form->input('text',         array('type' => 'textarea', 'label' => false, 'required' => false));
			echo $this->Form->input('forename',     array('type' => 'text', 'label' => 'Nombre',             'div' => 'forename', 'required' => false));
			echo $this->Form->input('lastname',     array('type' => 'text', 'label' => 'Apellidos',          'div' => 'lastname', 'required' => false));
			echo $this->Form->input('email',        array('type' => 'text', 'label' => 'Correo electronico', 'div' => 'email',    'required' => false));
			echo $this->Form->end('¡Enviar mensaje!');

		} ?>

	</section>

</article>

<blockquote class="quote">
    <h2>Geolocalizados cerca de la <span>Avenida Blasco Ibáñez</span>, por lo que aprovechamos<br />para brindarle un humilde homenaje al <span>escritor Valenciano</span>.</h2>
</blockquote>

<article class="contact clearfix">

    <h3>Donde estamos</h3>

    <div class="address vcard">

		<p><span class="fn">The Book Project</span> está localizado en la costa mediterránea, más concretamente en la ciudad del Turia, de la Comunidad Valenciana.</p>
		<p>Valencia tiene un “Don” para cautivar a quien la visita y estamos encantados de vivirla y disfrutarla día a día.</p>

		<h4>Dirección</h4>
		<p class="adr">
			<span class="street-address">Calle Bélgica 32</span>, <span class="postal-code">46021</span> <span class="locality">Valencia</span>
		</p>

		<h4>Correo electrónico</h4>
		<p><a href="mailto:info@thebookproject.es" class="email">info@thebookproject.es</a></p>

    </div>

</article>