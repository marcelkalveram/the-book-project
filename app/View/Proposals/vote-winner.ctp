<?php $this->assign('page-title', 'Tu voto'); ?>

<div class="quote">
	<h2>La propuesta de <span><?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?></span></h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix vote">

	<?php $voteText = ($proposal['Proposal']['votes'] == 1) ? 'voto' : 'votos'; ?>

	<?php

		if ($proposal['Proposal']['id'] == 192) {
		echo $this->Html->image('proposal-winner-big.png');
		}
		if ($proposal['Proposal']['id'] == 191) {
		echo $this->Html->image('proposal-silver-big.png');
		}
		if ($proposal['Proposal']['id'] == 189) {
		echo $this->Html->image('proposal-bronze-big.png');
		}


	?>


	<h3 class="vote-title badge-winner">Esta propuesta ha recibido <span><?php echo $proposal['Proposal']['votes']; ?></span> <?php echo $voteText; ?> <?php if ($proposal['Proposal']['id'] == 192) { echo '<span class="starts">y sigue el relato</span>'; } ?>.</h3>

	<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

	<p class="backlink">
		<?php echo $this->Html->link(
		    '&laquo; Volver a todas las propuestas',
		    array('controller'=>'proposals', 'action' => 'proposals'),
		    array('escape' => false)
		);?>
	</p>

</section>