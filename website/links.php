<?php	

session_start();

$page_title="KDE.ie | Links | Nascanna";

include ( "header.php" );

$language = check_session_language(); 

include ( "links.$language.php" );

include ( "footer.php" );

?>  
