<?php
		include 'baseconnexion.php';

		$base = connexion();

		$id = $_POST['id'];
		$sms = (string) urldecode(trim($_POST['message']));
		//var_dump($sms);die();

		$req = $base->prepare('SELECT id FROM relations WHERE ((receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)) AND statue = :s ');
		$req->bindValue('r',$_SESSION['user']['id']);
		$req->bindValue('d',$id);
		$req->bindValue('s',2);
		$req->execute();
		$verification = $req->fetch();

		if (!isset($verification['id'])) {
			exit();
		}

		$req = $base->prepare('INSERT INTO chats(id_from, id_to, sms, lu) VALUES(:f, :t, :s, :l)');
		$req->bindValue('f',$_SESSION['user']['id']);
		$req->bindValue('t',$id);
		$req->bindValue('s',$sms);
		$req->bindValue('l',1);
		$send_mail = $req->execute();
		
?>
	<div class="text-right moi">
		<?= nl2br($sms) ?>
	</div>