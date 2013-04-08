<?php	

session_start();

$page_title="KDE.ie | Contact | Teagmháil";

include ( "header.php" );

$language = check_session_language(); 

include ( "contact.$language.php" );

include ( "footer.php" );

?> 
