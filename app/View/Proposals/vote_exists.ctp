<?php $this->assign('page-title', 'Tu voto'); ?>

<div class="quote">
	<h2>Oops, ¡hay un pequeño problema!</h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix vote">

	<h3>Lo sentimos, pero sólo puedes votar una vez.</h3>

	<p>Para una selección democráticamente adecuada sólo está permitido una votación por usuario. Esperemos que entiendas nuestro compromiso con los demás participantes y nuestra filosofía.</p>

	<div class="clear"></div>

	<p class="backlink">
		<?php echo $this->Html->link(
		    '&laquo; Volver a todas las propuestas',
		    array('controller'=>'proposals', 'action' => 'proposals'),
		    array('escape' => false)
		);?>
	</p>

</section>