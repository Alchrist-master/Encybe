<?php 

	if (isset($_SESSION['connected']) && $_SESSION['connected']) {
		include 'models/users.php';

			$photo = $_SESSION['user']['photo'];

		if ($_SESSION['user']['experience'] !="") {
			$experience = $_SESSION['user']['experience'];
		}else{
			$experience = "Aucune";
		}
		
		if (isset($_POST['modifier'])) {
			$nom = strip_tags(trim($_POST['nom']));
			$prenom = strip_tags(trim($_POST['prenom']));
			$email = strip_tags(trim($_POST['email']));
			$tel = strip_tags(trim($_POST['tel']));
			$bio = strip_tags(nl2br($_POST['bio']));

			$admin_name = update_name($nom, $prenom, $email, $tel, $bio, $_SESSION['user']['id']);
			if ($admin_name) {
				$_SESSION['success'] = true;
			}else{
				$_SESSION['echec'] = true;
			}
		}
		
		if (isset($_POST['pass'])) {
			$pwd = md5(sha1($_POST['pwd']));
			$rpwd = md5(sha1($_POST['rpwd']));
			$npwd = md5(sha1($_POST['npwd']));

			if ($npwd != $_SESSION['user']['pass'] ) {
				$_SESSION['pass'] = true;
			}else{
				if ($pwd == $rpwd) {

					$admin_pass = update_pass($pwd, $_SESSION['user']['id']);

					if ($admin_pass) {
						$_SESSION['success'] = true;
					}else{
						$_SESSION['echec'] = true;
					}
					
				}else{
					$_SESSION['cpass'] = true;
				}

			}
		}



		include 'views/profil.php';
	}else{
		include 'views/connexion.php';
	}





 ?>