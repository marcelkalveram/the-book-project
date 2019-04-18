<?php $this->assign('bg-image', 'background-header.png'); ?>
<?php // $this->assign('active-menu-item', 'index'); ?>
<?php $this->assign('page-title', 'Una plataforma al servicio de la escritura y divulgación'); ?>

<div class="quote">

<h2> ¡Noticias frescas! <span>crear una historia</span> de todos,<br class="break"/>redactar un relato <span>de la mano</span>¡Abrimos la segunda edición!
 los&nbsp;cuales&nbsp;podéis&nbsp;ser <span>vosotros</span>.</h2>

</div>

<div class="intro clearfix">

  <div class="box vote">
      <h3>¡Noticias frescas!¡Abrimos segunda edición!</h3>
      <p>Atrévete, envíanos tu propuesta<br class="break" />y forma parte de un libro colaborativo.</p>
      <p><b>¡Sé tu el siguiente escritor qué nos fascine conocer <br class="break" />y colabore en algo de todos!
</b></p>
      <p>Pincha el link y escribe tu propuesta.</p>
      <?php echo $this->Html->link('¡Involúcrate!', array('action' => 'participate'), array('class' => 'button')); ?>
  </div>    

  <div class="box video">
      <h3>Mira el vídeo!</h3>
      <iframe src="//player.vimeo.com/video/75366721" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>    

</div> 

<!-- <div class="separator"></div> -->

<div class="proposals clearfix">

<h3>Las propuestas</h3>

<p>Aquí será donde colguemos las tres mejores propuestas para que vosotros votéis quien iniciará el relato "The Book Project".<br class="break" />
  Esperamos que leáis con detenimiento y forméis parte de la creatividad.</p>   

<?php foreach ( $proposals as $proposal ) { ?>

  <div class="proposal">
    <blockquote cite="<?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?>">
      <p class="proposal-text"><?php echo $this->Text->truncate( $proposal['Proposal']['text'], 130, array('exact' => false) ); ?></p>
      <p class="proposal-source">— <?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?></p>
    </blockquote>

    <a class="fancybox" href="#proposal-<?php echo $proposal['Proposal']['id']; ?>">Leer más...</a>
  </div>

  <div class="proposal-overlay" id="proposal-<?php echo $proposal['Proposal']['id']; ?>">

    <h1><?php echo $proposal['Proposal']['forename'] . ' ' . $proposal['Proposal']['lastname']; ?></h1>
    <p><?php echo $proposal['Proposal']['text']; ?></p>

  </div>

<?php } ?>

</div>

<?php echo $this->element('social-media-icons'); ?> 


<div class="details clearfix">

<h3>Colaboradores</h3>

  <div class="collaborator">
    <p class="collaborator-logo">
      <?php echo $this->Html->image("collaborators-bibliocafe.png", array(
        "alt" => "Logo de Bibliocafe"
      )); ?>
    </p>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
  </div>

  <div class="collaborator">
    <p class="collaborator-logo">
    <?php echo $this->Html->image("collaborators-lopo.png", array(
      "alt" => "Logo de Bibliocafe"
    )); ?>
    </p>    
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
  </div>

  <div class="collaborator">
    <p class="collaborator-logo">
    <?php echo $this->Html->image("collaborators-libroscom.png", array(
      "alt" => "Logo de Bibliocafe"
    )); ?>
    </p>    
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
  </div>

</div>


<div class="quote mark-stevenson">

  <div class="quotation">
  <p class="image">

    <?php echo $this->Html->image("collaborators-mark-stevenson.png", array(
      "alt" => "Mark Stevenson"
    )); ?>
  </p>
  </div>

  <blockquote>
    <p>&laquo;The Book Project brings together these two fundamental human motivators in a single project – collaborative storytelling. It’s about as human a project as you can imagine – and therefore has a powerful potential.&raquo;</p>

    <p class="cite">– Mark Stevenson <span>(League Of Pragmatic Optimists)</span></p>

  </blockquote>


</div>

<div class="details timetable">

  <h3>Más detalles</h3>

  <div class="date-1">
    <h4>1 de Diciembre: <b>Pistoletazo del proyecto</b></h4>
    <p>Empezamos nuestro proyecto publicando todas vuestras propuestas. Es el momento para que informéis de vuestro relato y os deis publicidad y conozcáis el resto de historias remitidas por los usuarios.</p>
  </div>

  <div class="date-2">
    <h4>21 de diciembre: <b>Fiesta de inauguración @Bibliocafé</h4>
    <p>Realizaremos una presentación de nuestro proyecto en el lugar más emblemático de la literatura. En Bibliocafé os esperamos para inaugurar nuestro proyecto y brindar con vosotros por el comienzo de un bonito reto.</p>
  </div>

  <div class="date-3">
    <h4>1 de Enero: <b>Empieza la primera fase de votación</b></h4>
    <p>El 31 de diciembre finaliza la fase publicación de propuestas. Comenzamos el año conociendo las tres finalistas y abriendo durante 2 semanas el periodo de votaciones.</p>
  </div>

  <div class="clear"></div>

</div>

<?php
  $this->Html->script('vendor/jquery', array('inline' => false));
  $this->Html->script('vendor/jquery.fancybox.pack',   array('inline' => false));
  $this->Html->script('proposals', array('inline' => false));  
?>