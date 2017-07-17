
<?php //print_r($query) ;?>
<?php 
  $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
  $texto1190 = get_field("1190-textos");
  $lista1190 = get_field("1190-lista");
  $img1190 = get_field("1190-img");

  $textoSomos = get_field("somos-texto");
  $team = get_field("somos-team");
  $somosImg = get_field("quienes_somos_imagen");

  $hacemosList = get_field("hacemos-listado");
  $hacemosImg = get_field("que_hacemos_imagen");
?>
    <section style="background: url('<?php echo $bg; ?>') no-repeat center bottom fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
      <?php get_sidebar(); ?>

      <div class="inside-zone">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#1190" aria-controls="1190" role="tab" data-toggle="tab">1190 Sports</a></li>
          <li role="presentation"><a href="#somos" aria-controls="somos" role="tab" data-toggle="tab">Quiénes Somos</a></li>
          <li role="presentation"><a href="#hacemos" aria-controls="hacemos" role="tab" data-toggle="tab">Lo que Hacemos</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="1190">
            <h2>1190 Sports</h2>
            <div class="flow">
              <?php echo $texto1190; ?>
              <ul>
                <?php 
                if(!empty($lista1190)){
                    ?>
                <?php foreach ($lista1190 as $lista): ?>
                  <li><?php echo $lista['en-lista'];?></li>                
                <?php endforeach ?>
                <?php wp_reset_postdata();?>
                <?php }?>
              </ul>
            </div>
            <?php 
              if(!empty($img1190)){
            ?>
              <img src="<?php echo $img1190; ?>" alt="1190 Sports" class="img-responsive">
            <?php }?>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="somos">
            <h2>Quiénes Somos</h2>
            <div class="flow">
              <?php echo $textoSomos; ?>
              <?php if (!empty($team)): ?>
                <?php $i=1; ?>      
                <div class="panel-group" id="acordeon" role="tablist" aria-multiselectable="true">

                  <?php foreach ($team as $el): ?>
                    
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="head-<?php echo $i;?>">
                      <a role="button" data-toggle="collapse" data-parent="#acordeon" href="#team-<?php echo $i;?>" aria-expanded="true" aria-controls="team-<?php echo $i;?>">
                        <span class="glyphicon glyphicon-triangle-right"></span><?php echo $el['nombre']; ?>
                      </a>
                    </div>
                    <div id="team-<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-<?php echo $i;?>">
                      <ul>
                        <li><?php echo $el['descripcion-cv']; ?></li>
                      </ul>
                    </div>
                  </div>
                  <?php $i++; ?>
                  <?php endforeach ?>
                  <?php wp_reset_postdata(); ?>

                </div>
              <?php endif ?>

            </div>
            <?php 
              if(!empty($somosImg)){
            ?>
              <img src="<?php echo $somosImg; ?>" alt="1190 Sports" class="img-responsive">
            <?php }?>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="hacemos">
            <h2>Lo que Hacemos</h2>
            <div class="flow">
              <?php if (!empty($team)): ?>
                <ul>
                  <?php foreach ($hacemosList as $listado): ?>
                    <li><?php echo $listado['hacemos-lista']; ?></li>
                  <?php endforeach ?>
                </ul>
              <?php endif ?>
            </div>
            <?php 
              if(!empty($hacemosImg)){
            ?>
              <img src="<?php echo $hacemosImg; ?>" alt="1190 Sports" class="img-responsive">
            <?php }?>
          </div>
        </div>
      </div>
    </section>
