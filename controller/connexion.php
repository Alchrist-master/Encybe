<?php 

include 'models/users.php';

	if (isset($_POST['connexion'])) {
		$username = strip_tags($_POST['username']);
		$password = md5(sha1($_POST['password']));

		if ($username !="" && $password !="") {

			if ($user = users_connected($username, $password)) {
			    $_SESSION['user'] = $user;
				//var_dump($_SESSION['user']); die;
				$_SESSION['connected'] = true;
			    header('Location:index.php?page=profil');
			}elseif (!username($username)) {
				$_SESSION['username'] = true;
			}elseif (!password($password)) {
				$_SESSION['password'] = true;
			}else{
				$_SESSION['existe'] = true;
			}

		}else{
			$_SESSION['vide'] = true;
		}
		
	}


include 'views/connexion.php' 



?>