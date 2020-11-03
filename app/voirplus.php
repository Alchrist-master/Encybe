<?php
		include 'baseconnexion.php';

		$base = connexion();

		$id = $_POST['id'];
		$limit = (int) trim($_POST['limit']);
		//var_dump($sms);die();

		if ($limit <= 00 || $id<= 0) {
			exit;
		}

		$req = $base->prepare('SELECT id FROM relations WHERE ((receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)) AND statue = :s ');
		$req->bindValue('r',$_SESSION['user']['id']);
		$req->bindValue('d',$id);
		$req->bindValue('s',2);
		$req->execute();
		$verification = $req->fetch();

		if (!isset($verification['id'])) {
			exit();
		}

		$nombre_afficher = 10;
		$min = 0;
		$max = 0;

		$req = $base->prepare('SELECT count(id) as nbr FROM chats WHERE (id_from = :f  AND id_to = :t) OR (id_from = :t  AND id_to = :f)');
		$req->bindValue('f',$_SESSION['user']['id']);
		$req->bindValue('t',$id);
		$req->execute();
		$count_conversation = $req->fetch();

		$min = $count_conversation['nbr'] - $limit;

		if ($min > $nombre_afficher) {
			$max = $nombre_afficher;
			$min = $min - $nombre_afficher;
		}else{
			if ($min > 0) {
				$max = $min;
			}else{
				$max = 0;
			}
				$min = 0;
		}

		$req = $base->prepare("SELECT *
 			FROM chats 
			WHERE (id_from = :f  AND id_to = :t) OR (id_from = :t  AND id_to = :f)
			ORDER BY date_sms LIMIT $min,$max");
		$req->bindValue('f',$_SESSION['user']['id']);
		$req->bindValue('t',$id);
		$req->execute();
		$conversation = $req->fetchAll();

		/*if ($min <= 0) {
?>
<div>
<script type="text/javascript">
	var el = document.getElementById('voirplus');
	el.classList.add('btn_masquer'); 
</script>
</div>
<?php
		}	*/
?>
<div id="voirplus"></div>
<?php foreach ($conversation as $value): 
		if ($value['id_from'] == $_SESSION['user']['id']) {
			
?>
	<div class="text-right moi">
		<?=$value['sms']?> 
	</div>
<?php }else{ ?>
	<div class="lui">
		<?=$value['sms']?>
	</div>
<?php } endforeach ?>