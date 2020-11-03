<?php 

	if (isset($_SESSION['connected']) && $_SESSION['connected']) {
		include 'models/users.php';
		include 'models/relations.php';
		include 'models/chats.php'; 

		$id = $_GET['id'];
		$verification = verification_avant_chat($_SESSION['user']['id'],$id);
		if (!isset($verification['id'])) {
			header('location:index.php?page=chats');
		}

		$admin = see_conversation_profil($id);

		$nombre_afficher = 10;
		$count_conversation = count_conversation($_SESSION['user']['id'],$id);
		$verifier_nombre = 0;

		if (($count_conversation['nbr'] - $nombre_afficher) > 0 ) {
			$verifier_nombre = ($count_conversation['nbr'] - $nombre_afficher);
		}

		$base = connexion();

		$req = $base->prepare("SELECT *
 			FROM chats 
			WHERE (id_from = :f  AND id_to = :t) OR (id_from = :t  AND id_to = :f)
			ORDER BY date_sms LIMIT $verifier_nombre,$nombre_afficher");
		$req->bindValue('f',$_SESSION['user']['id']);
		$req->bindValue('t',$id);
		$req->execute();
		$conversation = $req->fetchAll();

		$up = one_lu($_SESSION['user']['id'],$id); 

		if (isset($_POST['send'])) {
			$sms = strip_tags(nl2br($_POST['mail']));
			//var_dump($sms);die();
			if ($sms == "") {
				$_SESSION['vide'] = true;
			}else{
				$send = send_mail($_SESSION['user']['id'], $id, $sms);
				//var_dump($send,$_SESSION['user']['id'], $id, $sms);die();
				if ($send) {
					header('location:index.php?page=mail_chats&id='.$id);
				}else{
					$_SESSION['echec'] = true;
				}

			}
		}


		include 'views/mail_chats.php';
	}else{
		include 'views/connexion.php';
	}

?>