<?php

/*****************************************************************************/
// This function will be used to check the session language in use, if it is
// unset, it will set the language to en, which in our case refers to English
/*****************************************************************************/

function check_session_language() 
{
	if ( empty($_SESSION['language']) )
	{
		$_SESSION['language'] = "en";

		$lang = "en";
	}	
	else
	{
		$lang = $_SESSION['language'];
	}

	return $lang;
}

/*****************************************************************************/
// The function will print the menu with the session language passed to it. 
/*****************************************************************************/

function print_menu ($lang)
{
	if ( "$lang" == "en" )
	{
		print <<<HTML

		<div class="maincontent">

			<div class="menubar">
	    		
				<!-- KDE Logo -->

				<div class="iconone" class="menu">
			      <img src="images/plain-logo.png" class="icon">
			    </div>
		    	<div class="menutext">
			      &nbsp; KDE Ireland
		    	</div>


				<!-- Home Link -->

				<a href="index.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/home.png" class="icon">
		 		</div>
			    <div class="menutext">
			      Home
			    </div>
				</a>


				<!-- Contact Link -->

				<a href="contact.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/contact.png" class="icon">
			    </div>
			    <div class="menutext">
			      Contact
			    </div>
				</a>

	
				<!-- Screenshot Link -->

				<a href="screenshots.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/screenie.png" class="icon">
		    	</div>
			    <div class="menutext">
			      Screenshots
			    </div>
				</a>


				<!-- Contribute Link -->
	
				<a href="contribute.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/global2.png" class="icon">
			    </div>
			    <div class="menutext">
			      Contribute
			    </div>
				</a>


				<!-- Links -->

				<a href="links.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/links.png" class="icon">
			    </div>
			    <div class="menutext">
			      Links
			    </div>
				</a>


				<!-- Language Link, hack to stop floating div ahref propogate to other areas -->

				<div class="icon">
			      <a href="language.php" class="menu"><img src="images/icons/globe.png" class="icon"></a>
			    </div>
			    <div class="menutextend">
			      <a href="language.php" class="menu">Change Language</a>
			    </div>

			</div>
HTML;
	
	}
	else
	{
		print <<<HTML

		<div class="maincontent">

			<div class="menubar">
	    		
				<!-- KDE Logo -->

				<div class="iconone" class="menu">
			      <img src="images/plain-logo.png" class="icon">
			    </div>
		    	<div class="menutext">
			      &nbsp; KDE Éireann
		    	</div>


				<!-- Baile Link -->

				<a href="index.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/home.png" class="icon">
		 		</div>
			    <div class="menutext">
			      Baile
			    </div>
				</a>


				<!-- Teagmháil Link -->

				<a href="contact.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/contact.png" class="icon">
			    </div>
			    <div class="menutext">
			      Teagmháil
			    </div>
				</a>

	
				<!-- Gabháil Scáileáin Link -->

				<a href="screenshots.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/screenie.png" class="icon">
		    	</div>
			    <div class="menutext">
			      Taispeántas
			    </div>
				</a>


				<!-- Soláthair link -->
	
				<a href="contribute.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/global2.png" class="icon">
			    </div>
			    <div class="menutext">
			      Glac Páirt
			    </div>
				</a>


				<!-- Links -->

				<a href="links.php" class="menu">
			    <div class="icon">
			      <img src="images/icons/links.png" class="icon">
			    </div>
			    <div class="menutext">
			      Nascanna
			    </div>
				</a>


				<!-- Teanga Link -->

				<div class="icon">
			      <a href="language.php" class="menu"><img src="images/icons/globe.png" class="icon"></a>
			    </div>
			    <div class="menutextend">
			      <a href="language.php" class="menu">Teanga</a>
			    </div>

			</div>
HTML;
	}
}

?>
