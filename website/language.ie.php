<?php

print <<<HTML

	<span class="heading">Roghnaigh do Theanga</span>

	<div class="contenttext">
	Ar an leathanach seo, is féidir do theanga a roghnú.  Cliceáil ar an teanga atá uait thíos.

	<br><br>

HTML;

if (session_id() == "")
  session_start();

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

		print "Is é an Ghaeilge teanga an tsuímh anois! Fill ar an <a href='index.php'>leathanach baile</a>!<br><br>";
	}
}
	
print "As Gaeilge faoi láthair | <a href='language.php?language=en'>Switch to English</a>";

print <<<HTML

	</div>

HTML;

?> 
