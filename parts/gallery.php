<?php 
  $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
?>
    <section style="background: url('<?php echo $bg; ?>') no-repeat center bottom fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
      <?php get_sidebar(); ?>
      </aside>
      <div class="inside-zone">
        <h2>Galería de fotos</h2>
        <div class="flow in-img">
          <?php the_content(); ?>
        </div>
      </div>
    </section>