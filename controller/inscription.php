<?php 

	include 'models/users.php';

if (isset($_POST['inscription'])) {
	$nom = strip_tags($_POST['nom']);
	$prenom = strip_tags($_POST['prenom']);
	$date = (string) $_POST['date'];
	$lieu = strip_tags($_POST['lieu']); 
	$address = strip_tags($_POST['address']);
	$email = strip_tags($_POST['email']);
	$tel = strip_tags($_POST['tel']);
	$profession = strip_tags($_POST['profession']);
	$pass = md5(sha1($_POST['pass']));
	$rpass = md5(sha1($_POST['rpass']));
	//var_dump($_REQUEST);die();

	if ($nom !="" && $prenom  !="" && $date  !="" && $lieu !="" && $address !="" && $email  !="" && $tel !="" && $profession  !="" && $pass !="" && $rpass !=""){
		
		if ($pass == $rpass) {
			$inscrit = users_inscription($nom, $prenom, $date, $lieu, $address, $email, $tel, $profession, $pass);
			//var_dump($_REQUEST);die();
			if ($inscrit) {
				header('location:index.php?page=connexion');
			}else{

				$_SESSION['echec'] = true;

			}
		}else{

			$_SESSION['pass'] = true;

		}
	}else{

		$_SESSION['vide'] = true;


	}

}


include 'views/inscription.php'; 

?>