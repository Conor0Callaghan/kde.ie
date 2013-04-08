<?php	

session_start();

$page_title="KDE.ie | Contribute | Soláthair";

include ( "header.php" );

$language = check_session_language(); 

include ( "contribute.$language.php" );

include ( "footer.php" );

?>  
