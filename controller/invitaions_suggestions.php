<?php 

if (isset($_SESSION['connected']) and $_SESSION['connected']) {

		include 'models/users.php';
		include 'models/relations.php';
		include 'views/invitaions_suggestions.php';
	} else {
		include 'views/connexion.php';
	}
 ?>