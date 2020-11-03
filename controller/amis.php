<?php 

if (isset($_SESSION['connected']) and $_SESSION['connected']) {

		include 'models/users.php';
		include 'models/relations.php';

		$afficher = see_invitation($_SESSION['user']['id'], 1);
		$count = count_invitation($_SESSION['user']['id']);
		$amis = see_friends($_SESSION['user']['id']);
		$count_amis = count_friend($_SESSION['user']['id']);


		if (isset($_POST['accepter'])) {
			$id_relation = (int) $_POST['id_relation'];

			if ($id_relation > 0) {

				$reverifier = reverifier($id_relation);
				//	var_dump($reverifier);die();

			if (isset($reverifier['id'])) {

				accepter($id_relation,$_SESSION['user']['id']);
				header('location:index.php?page=amis');
			}
				
			}
		}elseif (isset($_POST['refuser'])) {
			$id_relation = (int) $_POST['id_relation'];

			if ($id_relation > 0) {

				refuser($id_relation,$_SESSION['user']['id']);
				header('location:index.php?page=demande');
				
			}

		}
		include 'views/amis.php';
	} else {
		include 'views/connexion.php';
	}
 ?> 