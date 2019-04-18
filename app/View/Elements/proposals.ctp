<!-- PROPOSALS -->
<section class="proposals clearfix">

	<h3><?php echo $text; ?></h3>

	<?php

		if ( ! isset($amount)) { $amount = 90; }
		$i = 0;

		// sort by passed parameter
		if ( isset($sort) ) {
			$proposals = Hash::sort($proposals, '{n}.Proposal.' . $sort, 'desc');
		}

	?>

	<?php foreach ( $proposals as $proposal ) { ?>

		<?php

			if ($i >= $amount) { continue; } $i++;
			$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));

		?>

		<figure class="proposal">
    		<blockquote cite="<?php echo $author; ?>">
      			<p class="proposal-text">

					<?php echo $this->Html->link(
					    $this->Text->truncate($proposal['Proposal']['text'], 130, array('exact' => false)),
			    		array('controller'=>'proposals', 'action'=>'vote', $proposal['Proposal']['id'])
					);?>

      			</p>
    		</blockquote>

<!-- 			<p class="votes">

				<?php

					$voteText = ($proposal['Proposal']['votes'] == 1) ? 'voto' : 'votos';

				?>

				<?php echo $this->Html->link(
				    $proposal['Proposal']['votes'],
				    array('controller' => 'proposals', 'action' => 'vote', $proposal['Proposal']['id']),
				    array('title' => 'La propuesta de ' . $author . ' ha recibido ' . $proposal['Proposal']['votes'] . ' ' . $voteText)
				);?>
			</p> -->

    		<figcaption class="proposal-source">—&nbsp;<?php echo $author; ?></figcaption>

    		<!-- <a href="#proposal-<?php echo $proposal['Proposal']['id']; ?>">Leer más...</a> -->
			<?php echo $this->Html->link(
			    'Leer más...',
			    array('controller'=>'proposals', 'action'=>'vote', $proposal['Proposal']['id']),
			    array('class' => 'fancybox')
			);?>

  		</figure>

		<article class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">
			<h1><?php echo $author; ?></h1>
			<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

			<?php //echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para comenzar @thebookproject_ Firma y forma parte!'); ?>

		</article>

	<?php } ?>

</section>