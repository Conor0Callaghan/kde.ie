<?php	

session_start();

$page_title="KDE.ie | Screenshots | Taispeántas";

include ( "header.php" );

$language = check_session_language(); 

include ( "screenshots.$language.php" );

include ( "footer.php" );

?>   
