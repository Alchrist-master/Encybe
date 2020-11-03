<?php 
	if (isset($_SESSION['connected']) and $_SESSION['connected']) {

           include 'models/users.php';
           include 'models/relations.php';
           $id = $_GET['id'];

           $admin = see_profil_of_users($id); 
           $see_profil = see_profil($_SESSION['user']['id'], $id); 


		include 'views/see_profil.php';
	} else {
		include 'views/connexion.php';
	}
 ?>
