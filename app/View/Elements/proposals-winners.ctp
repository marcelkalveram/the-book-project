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

	<?php

		$proposal = $proposals[1];

		if ($i >= $amount) { continue; } $i++;
		$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));

	?>

	<figure class="proposal winner">

		<?php // echo $this->Html->image('proposal-silver.png', array('class' => 'medal')); ?>

		<blockquote cite="<?php echo $author; ?>">
  			<p class="proposal-text">

				<?php echo $this->Html->link(
				    $this->Text->truncate($proposal['Proposal']['text'], 100, array('exact' => false)),
		    		array('controller'=>'proposals', 'action'=>'vote', $proposal['Proposal']['id'])
				);?>

  			</p>
		</blockquote>

		<figcaption class="proposal-source" style="padding-left: 2.25em; text-align: center;"><?php echo $author; ?><br /><span>Ganador del capítulo 9</span></figcaption></figure>

	<article class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">
		<h1><?php echo $author; ?></h1>
		<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

		<?php //echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para comenzar @thebookproject_ Firma y forma parte!'); ?>

	</article>

	<?php

		$proposal = $proposals[0];

		if ($i >= $amount) { continue; } $i++;
		$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));

	?>

	<figure class="proposal winner first">

		<?php echo $this->Html->image('proposal-winner.png', array('class' => 'trophy')); ?>

		<blockquote cite="<?php echo $author; ?>">
  			<p class="proposal-text">

				<?php echo $this->Html->link(
				    $this->Text->truncate($proposal['Proposal']['text'], 90, array('exact' => false)),
		    		array('controller'=>'proposals', 'action'=>'vote', $proposal['Proposal']['id'])
				);?>

  			</p>
		</blockquote>

		<figcaption class="proposal-source"><?php echo $author; ?></figcaption></figure>

	<article class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">
		<h1><?php echo $author; ?></h1>
		<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

		<?php //echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para comenzar @thebookproject_ Firma y forma parte!'); ?>

	</article>

	<?php

		$proposal = $proposals[2];

		if ($i >= $amount) { continue; } $i++;
		$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));

	?>

	<figure class="proposal winner">

		<?php // echo $this->Html->image('proposal-bronze.png', array('class' => 'medal')); ?>

		<blockquote cite="<?php echo $author; ?>">
  			<p class="proposal-text">

				<?php echo $this->Html->link(
				    $this->Text->truncate($proposal['Proposal']['text'], 100, array('exact' => false)),
		    		array('controller'=>'proposals', 'action'=>'vote', $proposal['Proposal']['id'])
				);?>

  			</p>
		</blockquote>

		<figcaption class="proposal-source" style="padding-left: 2.25em; text-align: center;"><?php echo $author; ?><br /><span>Ganadora del capítulo 9</span></figcaption></figure>

	<article class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">
		<h1><?php echo $author; ?></h1>
		<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

		<?php //echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para comenzar @thebookproject_ Firma y forma parte!'); ?>

	</article>

</section>