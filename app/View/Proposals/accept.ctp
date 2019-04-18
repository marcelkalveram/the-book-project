<?php $this->assign('bg-image', 'background-header-participate.png'); ?>
<?php $this->assign('bg-image-alt', 'Libro con pluma y tinta para involucrarte y empezar tu propuesta'); ?>
<?php $this->assign('bg-image-class', 'header-participate'); ?>
<?php $this->assign('active-menu-item', 'participate'); ?>
<?php $this->assign('page-title', 'Acepta las condiciones de tu propuesta'); ?>

<?php if ( empty($proposal)) { ?>

<!-- QUOTE - ERROR -->
<blockquote class="quote">
    <h2>Oops! Ha habido un error para encontrar tu propuesta.</h2>
</blockquote>

<?php } else { ?>

<!-- QUOTE - SUCCESS -->
<blockquote class="quote">
	<?php if ( ! empty($success) && $success ) { ?>
	<h2>Tu participación ha sido confirmada.</h2>
	<?php } else { ?>
	<h2>Querido/a <?php echo ucfirst(strtolower($proposal['Proposal']['forename'])); ?>, gracias <b>por colaborar</b> en The Book Project.<br />Aquí puedes <b>confirmar tu participación</b> para que tu propuesta entre en esta primera fase de entrega.</h2>
	<?php } ?>
</blockquote>

<?php } ?>

<!-- PARTICIPATE FORM -->
<article id="participate-form" class="form proposal-accept clearfix">

	<?php if ( empty($proposal)) { ?>

		<p>La dirección de correo y el código hash que han sido enviados a esta página no coinciden con ninguna propuesta de nuestra base de datos. Por favor comprueba el email que te hemos mandado donde aparece el enlace para verificar tu propuesta.</p>
		<p>Si todavía aparece este mensaje, por favor <?php echo $this->Html->link('ponte en contacto con el equipo', array('controller' => 'proposals', 'action' => 'contact')); ?> de The Book Project y harémos todo lo posible para ayudarte.</p>

		<p>Gracias,<br />el equipo de The Book Project</p>

	<?php } else { ?>

    <?php

      	if ( ! empty($success) && $success ) { ?>

	      	<section class="success-message">
		        <h4>¡Muchas gracias por aceptar las condiciones de The Book Project!</h4>
	    	    <p>A partir del día 1 de enero verás tu aportación en la pestaña de propuestas.</p>
	    	</section>

	    <?php } else { ?>

		    <?php echo $this->Form->create('Proposal'); ?>

		    <h3>Tu propuesta</h3>

		    <p class="content"><?php echo nl2br($proposal['Proposal']['text']); ?></p>

		    <div class="locked unlocked clearfix">
		    	<?php echo $this->Form->input('conditions', 	array('label' => 'Al hacer clic en "Enviar comienzo", ' . $this->Html->link('acepto las condiciones de uso', array('controller' => 'pages', 'action' => 'display', 'terms'), array('target' => '_blank')) . ' del sitio web', 'type' => 'checkbox', 'div' => 'terms-checkbox', 'class' => 'terms-link')); ?>
		    </div>

		    <div class="unlocked-button">
		      <div class="submit"><input type="submit" value="¡Enviar comienzo!"></div>
		    </div>

    	<?php } ?>

    <?php } ?>

</article>