<!-- PROPOSALS -->
<section class="proposals clearfix">

	<h3>Las propuestas</h3>

	<?php

		if ( ! isset($amount)) { $amount = 90; }
		$i = 0;

	?>

	<?php foreach ( $proposals as $proposal ) { ?>

		<?php

			if ($i >= $amount) { continue; } $i++;
			$author = ucwords(strtolower($proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']));

		?>

		<figure class="proposal">
    		<blockquote cite="<?php echo $author; ?>">
      			<p class="proposal-text">
      				<a href="#proposal-<?php echo $proposal['Proposal']['id']; ?>">
      					<?php echo $this->Text->truncate( $proposal['Proposal']['text'], 130, array('exact' => false) ); ?>
      				</a>
      			</p>
    		</blockquote>

			<?php echo $this->Rating->socialCount($proposal['Proposal']['facebook_count'], $proposal['Proposal']['twitter_count']); ?>

    		<figcaption class="proposal-source">—&nbsp;<?php echo $author; ?></figcaption>

    		<a class="fancybox" href="#proposal-<?php echo $proposal['Proposal']['id']; ?>">Leer más...</a>

  		</figure>

		<article class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">
			<h1><?php echo $author; ?></h1>
			<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

			<?php echo $this->Rating->displayButtons($proposal['Proposal']['id'], 'Lee y comparte la propuesta de ' . $author . ', puede ser finalista para seguir @thebookproject_'); ?>

		</article>

	<?php } ?>

</section>