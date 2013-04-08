<?php	

session_start();

$page_title="KDE.ie | Contact | LINX?";

include ( "header.php" );

$language = check_session_language(); 

include ( "links.$language.php" );

include ( "footer.php" );

?>  
