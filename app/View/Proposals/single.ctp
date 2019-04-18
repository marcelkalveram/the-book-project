<?php $this->assign('bg-image', 'background-header-proposals.png'); ?>
<?php $this->assign('bg-image-alt', 'Gafas mirando los dispositivos multimedia para leer las propuestas'); ?>
<?php $this->assign('bg-image-class', 'header-proposals'); ?>
<?php $this->assign('active-menu-item', 'proposals'); ?>
<?php $this->assign('page-title', 'Las propuestas'); ?>

<div class="quote">
    <h2>Propuestas para <b>el cuarto capítulo</b> de The Book Project</h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix">

	<h3>La propuesta de <?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?></h3>
	<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

	<h4 class="share-single">Comparte esta propuesta en las redes sociales</h4>

	<?php

		$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));
		echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para seguir @thebookproject_ Firma y forma parte!');

	?>

</section>