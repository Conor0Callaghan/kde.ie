<?php

print <<<HTML

	<span class="heading">Select language</span>

	<div class="contenttext">
	On this page you can change your language, please click on the link below to change your language.
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

		print "Is é an Ghaeilge teanga an tsuímh anois! Fill ar an <a href='index.php'>leathanach baile</a>!<br><br>";
	}
}
	
print "Your current language is English | <a href='language.php?language=ie'>Athraigh go Gaeilge</a>";

print <<<HTML

	</div>

HTML;

?>
