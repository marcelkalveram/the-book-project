<?php $this->assign('page-title', 'Tu voto'); ?>

<div class="quote">
	<h2>¡Hemos recibido tu voto!</h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix vote">

	<h3>Gracias por tu participación</h3>

	<p>En un breve período podrás apreciar que tu voto ha subido al contador de tu propuesta favorita. Esperamos que sea importante para conseguir el vencedor en el comienzo del relato.</p>

	<div class="clear"></div>

	<p class="backlink">
		<?php echo $this->Html->link(
		    '&laquo; Volver a todas las propuestas',
		    array('controller'=>'proposals', 'action' => 'proposals'),
		    array('escape' => false)
		);?>
	</p>

</section>