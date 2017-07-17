<?php 
  $texto = get_field("texto-superior", "option");
  $goHome = get_field("go-home", "option");
 ?>
  <div class="top-text hidden-xs">
    <h6><?php echo $texto; ?></h6>
  </div>
  <aside class="sidebar">
    <a href="<?php bloginfo('url'); ?>"><div class="logo"></div></a>
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="the-menu">
        <li><a href="./sobre-1190">SOBRE 1190</a></li>
        <li><a href="./productos-y-servicios">PRODUCTOS Y SERVICIOS</a></li>
        <li><a href="./galeria">GALERÍA</a></li>
        <li><a href="./contact">CONTACTO</a></li>
      </ul>
    </div><!--/.nav-collapse -->

    <?php if (!(is_home())||(is_page('contacto'))): ?>
      <div class="imgon">
        <img src="<?php echo $goHome; ?>" alt="1190 Sports" class="img-responsive">

        <div class="videaso en-interiores" id="video">
            <div class="close-videaso"><span class="glyphicon glyphicon-remove"></span></div>
            <?php 
            $youtube = get_field("youtube", "option");
            ?>  
            <iframe id="player-interior" width="" src="https://www.youtube.com/embed/<?php echo $youtube; ?>?autoplay=0&controls=0&rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div><!-- <a href="<?php bloginfo('url'); ?>"></a> -->
    <?php endif ?>

  </aside>




  <?php if (!is_home()): ?>
  <?php endif ?>