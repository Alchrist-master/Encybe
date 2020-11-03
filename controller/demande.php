<?php 

	if (isset($_SESSION['connected']) && $_SESSION['connected']) {
		include 'models/relations.php';

		$afficher = see_invitation($_SESSION['user']['id'], 1);

		if (isset($_POST['accepter'])) {
			$id_relation = (int) $_POST['id_relation'];

			if ($id_relation > 0) {

				$reverifier = reverifier($id_relation);
				//	var_dump($reverifier);die();

			if (isset($reverifier['id'])) {

				accepter($id_relation,$_SESSION['user']['id']);
				header('location:index.php?page=demande');
			}
				
			}
		}elseif (isset($_POST['refuser'])) {
			$id_relation = (int) $_POST['id_relation'];

			if ($id_relation > 0) {

				refuser($id_relation,$_SESSION['user']['id']);
				header('location:index.php?page=demande');
				
			}

		}
		
		include 'views/demande.php';
	}else{
		include 'views/connexion.php';
	}
 ?>