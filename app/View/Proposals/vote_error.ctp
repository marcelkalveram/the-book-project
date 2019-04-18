<?php $this->assign('page-title', 'Tu voto'); ?>

<div class="quote">
	<h2>Oops, ¡Ha habido un peqeuño problema!</h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix vote">

	<h3>Lo sentimos, pero el sistema de votos ha fallado</h3>

	<p>Ruego disculpes las molestias. Vuelve a intentarlo más tarde. Si el problema persiste, <?php echo $this->Html->link('ponte en contacto', array('controller' => 'proposals', 'action' => 'contact')); ?> con nosotros a través del formulario de esta web.</p>

	<div class="clear"></div>

	<p class="backlink">
		<?php echo $this->Html->link(
		    '&laquo; Volver a todas las propuestas',
		    array('controller'=>'proposals', 'action' => 'proposals'),
		    array('escape' => false)
		);?>
	</p>

</section>