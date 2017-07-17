<?php get_header(); ?>
<?php the_post(); ?>


	<?php if ( is_page( 'sobre-1190' ) ) {?>
      <?php get_template_part( '/parts/about');?>
	<?php }elseif ( is_page( 'productos-y-servicios' ) ) { ?>
      <?php get_template_part( '/parts/products-services');?>			
	<?php }elseif ( is_page( 'galeria' ) ) { ?>
      <?php get_template_part( '/parts/gallery');?>
  <?php }elseif ( is_page( 'contacto' ) ) { ?>
      <?php get_template_part( '/parts/contact');?>      
  <?php } ?>


<?php get_footer(); ?>