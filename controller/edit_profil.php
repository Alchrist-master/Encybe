<?php 

	if (isset($_SESSION['connected']) and $_SESSION['connected']) {

           include 'models/users.php';

		if (isset($_POST['modifier'])) {
			$nom = strip_tags($_POST['sms']);
			$prenom = strip_tags($_POST['prenom']);
			$address = strip_tags($_POST['address']);
			$email = strip_tags($_POST['email']);
			$competence = strip_tags($_POST['competence']);
			$experience = strip_tags($_POST['experience']);
			$tel = strip_tags($_POST['tel']);
			$passion = strip_tags($_POST['passion']);
			$bio = strip_tags($_POST['bio']);
			$langue = strip_tags($_POST['langue']);
			$photo = "rien";
			$id = $_SESSION['user']['id'];

			$admin = update_users($nom, $prenom, $email, $tel, $address, $bio, $photo, $competence, $experience, $langue, $passion, $id);
			if ($admin) {
				header('location:index.php?page=profil');

			}else{

				$_SESSION['echec'] = true;
			}

		}

		include 'views/edit_profil.php';
	} else {
		include 'views/connexion.php';
	}
 ?>