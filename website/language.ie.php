<?php

print <<<HTML

	<span class="heading">Rogha Teanga</span>

	<div class="contenttext">
	Ar an leathanach seo, clicail ar na link taobh thiar cun rogha do theanga.

	<br><br>

HTML;

if ( isset($_GET['language']) )
{
	if ( $_GET['language'] == "en" )
	{
		$_SESSION['language'] = "en";

		print "Your language has been changed to English! Now you can go back to the <a href='index.php'>home page</a><br><br>";
	}
	elseif ( $_GET['language'] == "ie" )
	{
		$_SESSION['language'] = "ie";

		print "Is e gaeilge do chuid teanga anois! Anois, ar ais go dti an <a href='index.php'>leathanach baile!</a><br><br>";
	}
}
	
print "Is e Gaeilge do chuid teanga | <a href='language.php?language=en'>Switch to English</a>";

print <<<HTML

	</div>

HTML;

?> 
