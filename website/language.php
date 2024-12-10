<?php	

if (session_id() == "")
  session_start();

$page_title="KDE.ie | Language | Teanga";

include ( "header.php" );

$language = check_session_language(); 

include ( "language.$language.php" );

include ( "footer.php" );

?>   
