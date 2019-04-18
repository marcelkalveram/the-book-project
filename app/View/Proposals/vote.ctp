<?php $this->assign('page-title', 'Tu voto'); ?>

<div class="quote">
	<h2>La propuesta de <span><?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?></span></h2>
</div>

<!-- A single proposal -->
<section class="details full clearfix vote">

	<?php $voteText = ($proposal['Proposal']['votes'] == 1) ? 'voto' : 'votos'; ?>

	<h3 class="vote-title">Esta propuesta ha recibido <span><?php echo $proposal['Proposal']['votes']?></span> <?php echo $voteText; ?>. Para&nbsp;darle&nbsp;tu&nbsp;voto, <?php echo $this->Html->Link('pincha&nbsp;aquí', array($proposal['Proposal']['id'], '#' => 'vote-sso'), array('escape' => false)); ?>.</h3>

	<p><?php echo nl2br($proposal['Proposal']['text']); ?></p>

	<h3 id="vote-sso">Logueate para votar</h3>

	<p>Pincha en el icono de alguna de las redes sociales mostradas abajo para identificarse y poder tener acceso a la votación. Solamente será válido un voto por usuario para así respetar y obtener una elección justa y adecuada.</p>

		<ul>

			<li>

				<!-- Facebook -->
				<?php echo $this->Html->link(
				    $this->Html->image('icon-vote-facebook.png'),
				    array('controller'=>'auth', 'action'=>'facebook'),
				    array('escape' => false)
				);?>

			</li>

			<li>

				<!-- Twitter -->
				<?php echo $this->Html->link(
				    $this->Html->image('icon-vote-twitter.png'),
				    array('controller'=>'auth', 'action'=>'twitter'),
				    array('escape' => false)
				);?>

			</li>

			<li>

				<!-- LinkedIn -->
				<?php echo $this->Html->link(
				    $this->Html->image('icon-vote-linkedin.png'),
				    array('controller'=>'auth', 'action'=>'linkedin'),
				    array('escape' => false)
				);?>

			</li>

			<li>

				<!-- Google+ -->
				<?php echo $this->Html->link(
				    $this->Html->image('icon-vote-googleplus.png'),
				    array('controller'=>'auth', 'action'=>'google'),
				    array('escape' => false)
				);?>

			</li>

		</ul>

	<div class="clear"></div>

	<p class="backlink">
		<?php echo $this->Html->link(
		    '&laquo; Volver a todas las propuestas',
		    array('controller'=>'proposals', 'action' => 'proposals'),
		    array('escape' => false)
		);?>
	</p>

</section>