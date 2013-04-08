 <?php

session_start();

$language=$_SESSION['language'];

echo "I think that the language is now set to $language";

$_SESSION['language'] = "en";

?>
