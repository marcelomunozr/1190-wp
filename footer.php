    <?php //$query = get_page_by_path('contacto'); ?>
   

  <?php 
		$youtube = get_field("youtube", "option");
  ?>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/vendor.js"></script>
<?php if(is_home()){ ?>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/jquery.youtubebackground.js"></script>
    <script>
      jQuery(function($){

        //check if the browser width is less than or equal to the large dimension of an iPad
        if (!$(window).width() <= 768) {
/*          $('#video').YTPlayer({
            fitToBackground: true,
            videoId: 'S2VIR9pmPVc'
          });
*/
          
        }
      });
    </script>
    <script>
      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars:{
            'controls': 0,
            'rel' : 0
          }
        });
      }

      function onPlayerReady(event) {
	      jQuery(function($){
	        if ($(window).width() >= 768) {
        		player.setPlaybackQuality('hd720');
        		player.playVideo();
        		//event.target.playVideo();
	        }else{
        		player.setPlaybackQuality('small');
            $('.play-videaso').click(function(event){
              player.playVideo();
            });
            	//player.clearVideo();
            	//event.target.stopVideo();
	        }
	      });
      }

      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(eliminaVIdeo, 33000);
          $('.videaso').css({'opacity':'1'});
          done = true;
          player.clearVideo();
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
      function eliminaVIdeo() {
        jQuery(function($){
          //$('.videaso').hide();
          $('.videaso').css({'opacity':'0'});
          $('.logo-videaso').fadeIn(400);
          $('.play-videaso').fadeIn(400);
        });
      }
    </script>
    <script type="text/javascript">
      jQuery(function($){
        if ($(window).width() >= 768) {
          $(window).on('load', function() {
            $('#video').fadeIn();
          });
          $('.play-videaso').click(function(event){
            event.stopPropagation();
            $('.logo-videaso').hide();
            $('.play-videaso').hide();
            $('.videaso').fadeIn(400);
            event.preventDefault();
            done = false;
            player.playVideo();

          });
        }else{
          $('.videaso').css({'opacity':'0', 'position': 'absolute','top': '150px','width': '100%','z-index':'200','display':'block'});

          $('.logo-videaso').fadeIn().css({'z-index':'100'});
          $('.play-videaso').fadeIn().css({'z-index':'100'});
          $('.play-videaso, .videaso').click(function(event){
            $('.logo-videaso').hide();
            $('.play-videaso').hide();
            $('.videaso').css({'opacity':'1'});
            done = false;
            player.playVideo();
          });
        }
      });
    </script>
<?php }else{ ?>
    <script>
      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player-interior', {
          height: '390',
          width: '640',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars:{
            'controls': 0,
            'rel' : 0
          }
        });
      }

      function onPlayerReady(event) {
	      jQuery(function($){
	        if ($(window).width() >= 768) {
        		player.setPlaybackQuality('hd720');
	        }else{
        		player.setPlaybackQuality('small');
	        }
	      });
      }

      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(eliminaVIdeo, 33000);
          jQuery(function($){
            $('.videaso.en-interiores').css({'opacity':'1','z-index':'200'});
            $('.imgon').css({'overflow':'inherit'});
          });
          done = true;
          player.clearVideo();
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
      function eliminaVIdeo() {
        jQuery(function($){
          $('#video.videaso.en-interiores').css({'opacity':'0','z-index':'0'});
          $('.logo-videaso').fadeIn(400);
          $('.play-videaso').fadeIn(400);
        });
      }
    </script>
    <script type="text/javascript">
      jQuery(function($){
        if ($(window).width() >= 768) {
          $('.imgon').css({'position':'static'});
          $('.videaso.videaso.en-interiores').css({'position':'fixed'});
          $('.imgon').click(function(event){
            event.stopPropagation();
            $('#video.videaso.en-interiores').fadeIn(400);
            player.playVideo();
            event.preventDefault();
            done = true;
          });
          $('.close-videaso').click(function(event){
            event.stopPropagation();
            $('#video.videaso.en-interiores').fadeOut();
            player.stopVideo();
            event.preventDefault();
            done = false;
          });
        }else{
          $('.imgon').css({'position':'relative'});
          $('.imgon').click(function(event){
            $('.videaso.en-interiores').css({'opacity':'1','z-index':'200'});
            event.preventDefault();
            done = false;
            event.player.playVideo();
          });
          $('.videaso').click(function(event){
            $('.videaso.videaso.en-interiores').css({'opacity':'1'});
            done = false;
            player.playVideo();
          });
          $('.close-videaso').click(function(event){
            event.stopPropagation();
            $('#video.videaso.en-interiores').css({'opacity':'0'});
            $('.imgon').css({'overflow':'hidden'});
            player.stopVideo();
            event.preventDefault();
            done = false;
          });
        }
      });
    </script>
<?php } ?>
    
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/plugins.js"></script>
    

<!--     <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js"></script> -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-83576706-1');ga('send','pageview');

    </script>
    <?php wp_footer(); ?>
  </body>
</html>