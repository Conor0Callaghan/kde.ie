<?php

/* Start the session, this is used for the language varible. This language variable is used to select in which language to load a page. */

session_start();

include ( "functions.php" ); 

/* Check the language, if it's not set, set it to English en */

$language = check_session_language(); 

/* Print the HTML headers */

print <<<HTML

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="author" content="kde.ie team">

<meta name="description" content="KDE K Desktop Environment in Ireland">
  		
<meta name="keywords" content="KDE,Ireland,K Desktop Environment,KDE Ireland,KDE in Ireland,Irish">
 	
<link rel="shortcut icon" href="images/kde.ico"><link rel="icon" href="images/kde.ico">

HTML;

print "<title>$page_title</title>";

print <<<HTML

  <style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);
    	@import url('files/main.css');
	@import url('files/lightbox.css');
  </style>
  
</head>

<body>

<div class="maincontent">

<a href="https://github.com/ivernus/kde.ie"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>

HTML;

/* Print the menu, language dependent */

if ( "$language" == "en" )
{
	print_menu('en');
}
else
{
	print_menu('ie');
}

print <<<HTML

	<div class="spacer"></div>
  	<div class="spacer"></div>
HTML;

?>
