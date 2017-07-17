<?php 
  $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
  $productos = get_field("productos");
?>
    <section style="background: url('<?php echo $bg; ?>') no-repeat center bottom fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
      <?php get_sidebar(); ?>
      <div class="inside-zone products">
        <?php if (!empty($productos)): ?>
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <?php  $i=0;?>
            <?php foreach ($productos as $tab): ?>
              <li role="presentation" class="<?php if ($i==0): ?>active<?php endif ?>"><a href="#<?php echo $tab['titulo-breve']; ?>" aria-controls="<?php echo $tab['titulo-breve']; ?>" role="tab" data-toggle="tab"><?php echo $tab['titulo-breve']; ?></a></li>
              <?php $i++; ?>
            <?php endforeach ?>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <?php  $i=0;?>
            <?php foreach ($productos as $tab): ?>
                <div role="tabpanel" class="tab-pane fade <?php if ($i==0): ?>in active<?php endif ?>" id="<?php echo $tab['titulo-breve']; ?>">
                  <h2><?php echo $tab['titulo-breve']; ?></h2>
                  <p><strong><?php echo $tab['titulo']; ?></strong></p>
                  <div class="flow">
                    <?php if (!empty($tab['texto'])): ?>
                      <?php echo $tab['texto']; ?>
                    <?php endif ?>
                    <?php if (!empty($tab['listado'])): ?>
                      <ul>
                        <?php foreach ($tab['listado'] as $lista): ?>
                            <li><?php echo $lista['lista']; ?></li>
                        <?php endforeach ?>
                      </ul>
                    <?php endif ?>
                  </div>
                  <?php if (!empty($tab['imagen'])): ?>                    
                    <img src="<?php echo $tab['imagen']; ?>" alt="Title" class="img-responsive">
                  <?php endif ?>
                </div>
              <?php $i++; ?>
            <?php endforeach ?>
            <?php wp_reset_postdata();?>
          </div>
        <?php endif ?>

      </div>
    </section>