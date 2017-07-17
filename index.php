  <?php get_header(); ?>
  <?php 
    $bg = get_field("img-bg", "option");
  ?>
  <?php 
  $youtube = get_field("youtube", "option");
  ?>    
    <section class="homi" style="background: url('<?php echo $bg; ?>') no-repeat center top fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <?php get_sidebar(); ?>
      <!-- <div id="video"></div> -->
      <div class="logo-videaso"></div>
      <div class="play-videaso"></div>
      <div class="videaso">
          <!--<div id="player"></div>-->
		<iframe id="player" width="" src="https://www.youtube.com/embed/<?php echo $youtube; ?>?autoplay=0&controls=0&rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
     	<!-- <iframe id="ytplayer" width="" src="https://www.youtube.com/embed/<?php echo $youtube; ?>?autoplay=1&controls=1&rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe> -->
      </div>
    </section>

<?php get_footer(); ?>