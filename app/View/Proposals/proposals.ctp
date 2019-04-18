<?php $this->assign('bg-image', 'background-header-proposals.png'); ?>
<?php $this->assign('bg-image-alt', 'Gafas mirando los dispositivos multimedia para leer las propuestas'); ?>
<?php $this->assign('bg-image-class', 'header-proposals'); ?>
<?php $this->assign('active-menu-item', 'proposals'); ?>
<?php $this->assign('page-title', 'Las propuestas'); ?>

<div class="quote quote-proposals">
	<h2>Aqui exponemos <span>las propuestas recibidas</span> por todos aquellos que dieron rienda suelta<br class="break desktop" /> a su imaginación y nos ayudan <span>con este proyecto</span> que deseamos construir.</h2>
</div>

<div class="pentian" style="margin-top: 3em; margin-bottom: -4em;">

	<div class="notice">

		<img width="80" src="img/collaborators-pentian-round.png" class="notice-icon" alt="">

		<p>Ya puedes encontrar nuestro libro en el catálogo de Pentian, donde hemos abierto una campaña de crowdfunding. <br class="desktop"> <b>Si puedes ayudarnos a hacerlo realidad, visita la página y apoyanos.</b></p>
		<p class="cta-button"><a title="Página de The Book Project en Pentian" href="http://pentian.com/book/fund/687">Apoya The Book Project en Pentian</a></p>
	</div>

</div>

<section class="proposals full clearfix">

	<!-- PROPOSALS -->
	<?php echo $this->element('proposals', array('text' => 'Todas las propuestas', 'sort' => 'votes')); ?>

</section>