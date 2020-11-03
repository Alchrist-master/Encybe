<?php
		include 'baseconnexion.php';

		$base = connexion();

		$id = $_POST['id'];

		$req = $base->prepare('SELECT id FROM relations WHERE ((receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)) AND statue = :s ');
		$req->bindValue('r',$_SESSION['user']['id']);
		$req->bindValue('d',$id);
		$req->bindValue('s',2);
		$req->execute();
		$verification = $req->fetch();

		if (!isset($verification['id'])) {
			exit();
		}

		$req = $base->prepare('SELECT *
 			FROM chats 
			WHERE  id_to = :t AND id_from = :f AND lu = :l');
		$req->bindValue('f',$id);
		$req->bindValue('t',$_SESSION['user']['id']);
		$req->bindValue('l',1);
		$req->execute();
		$afficher_mail = $req->fetchAll();


		$req = $base->prepare('UPDATE chats set lu = :l
			WHERE  id_to = :t  AND id_from = :f');
		$req->bindValue('l',0);
		$req->bindValue('f',$id);
		$req->bindValue('t',$_SESSION['user']['id']);
		$up = $req->execute();
	  
		//var_dump($afficher_mail);die();
		foreach ($afficher_mail as  $value) {
?> 
	<div class="lui">
		<?= nl2br($value['sms']) ?>
	</div>
<?php
		}
?>