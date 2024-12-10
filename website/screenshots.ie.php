<?php

// Wow the below is very very lazy I know :( maybe we should use a loop to feed in some variables. 

print <<<HTML

	<span class="heading">Taispeántas</span>

        <div class="contenttext">
       	Anseo tá cupla taispeántas o an leagan níos nua do KDE ag rith ar bosca Linux. Tá a lán bogearraí le fháil ar KDE, ach tá cupla de na feidhmchlár le taispáint ar an leathanach seo. 
        </div>

	<div class="spacer">

	<div class="contenttext">
  	
  		<div class="screenshot">
  		  <a href="images/screenshots/large/screenshot001.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot001.png" alt="Screenshot of KDE desktop" class="smallscreenshot"/></a>
		<br>KDE
  		</div>


    	<div class="screenshot">
  		  <a href="images/screenshots/large/screenshot002.png" rel="lightbox[kde]" title="This is a desktop screenshot!" ><img src="images/screenshots/small/screenshot002.png" alt="Screenshot of KDE desktop" class="smallscreenshot" /></a>	
		<br>KDE 
		</div>


      	<div class="screenshotend">
  		  <a href="images/screenshots/large/screenshot003.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot003.png" alt="Screenshot of KDE folder creation" class="smallscreenshot" /></a>
		<br>KDE ag ullmhú fillteán nua 
      	</div>

	<br><br>


        <div class="screenshot">
                  <a href="images/screenshots/large/screenshot004.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot004.png" alt="Text editor" class="smallscreenshot"/></a>
                <br>Eagarthóir téacs
                </div>


        <div class="screenshot">
                  <a href="images/screenshots/large/screenshot005.png" rel="lightbox[kde]" title="This is a desktop screenshot!" ><img src="images/screenshots/small/screenshot005.png" alt="Disk drive folder viewer" class="smallscreenshot" /></a>
                <br>Diosca crua
                </div>


        <div class="screenshotend">
                  <a href="images/screenshots/large/screenshot006.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot006.png" alt="Marble mapping software" class="smallscreenshot" /></a>
                <br>Marble bogearraí tíreolaíocht
        </div>


	<br>
	<br>

        <div class="screenshot">
                  <a href="images/screenshots/large/screenshot007.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot007.png" alt="Screenshot of Mahjong game" class="smallscreenshot"/></a>
                <br>Cluiche Mahjong
                </div>


        <div class="screenshot">
                  <a href="images/screenshots/large/screenshot008.png" rel="lightbox[kde]" title="This is a desktop screenshot!" ><img src="images/screenshots/small/screenshot008.png" alt="Screenshot of Amarok" class="smallscreenshot" /></a>
                <br>Amarok seinnteoir ceol
                </div>


        <div class="screenshotend">
                  <a href="images/screenshots/large/screenshot009.png" rel="lightbox[kde]" title="This is a desktop screenshot!"><img src="images/screenshots/small/screenshot009.png" alt="Screenshot of Digikam" class="smallscreenshot" /></a>
                <br>Digikam bainisteoir pictuír
        </div>


	</div>
	
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
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

</script> 

HTML;

?>


