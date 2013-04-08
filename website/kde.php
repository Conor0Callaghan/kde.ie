<?php	

session_start();

$page_title="KDE.ie | The home of KDE in Ireland | Baile KDE in Eireann";

include ( "header.php" );

$language = check_session_language(); 

include ( "index.$language.php" );

include ( "footer.php" );

?>
