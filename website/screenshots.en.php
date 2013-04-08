<?php

print <<<HTML

	<span class="heading">Screenshots</span>

	<div class="spacer">

	<div class="contenttext">
  	
  		<div class="screenshot">
  		  <a href="images/screenshots/large/screenshot001.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot001.png" alt="Screenshot" class="smallscreenshot"/></a>
		<br>Screenshot 1
  		</div>


    	<div class="screenshot">
  		  <a href="images/screenshots/large/screenshot002.png" rel="lightbox[kde]" title="This is a desktop screenshot!" ><img src="images/screenshots/small/screenshot002.png" alt="Screenshot" class="smallscreenshot" /></a>	
		<br>Screenshot 2
		</div>


      	<div class="screenshotend">
  		  <a href="images/screenshots/large/screenshot003.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot003.png" alt="Screenshot" class="smallscreenshot" /></a>
		<br>Screenshot 3
      	</div>

	</div>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

HTML;

?>


