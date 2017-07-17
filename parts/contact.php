<?php 
  $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
?>
    <section style="background: url('<?php echo $bg; ?>') no-repeat center bottom fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
      <?php get_sidebar(); ?>
      <div class="inside-zone contact ">
        <h2>Datos</h2>
        <?php the_content(); ?>
      </div>
    </section>