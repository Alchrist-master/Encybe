<?php 
  include 'baseconnexion.php';
  $base = connexion();

if (isset($_POST['article'])) {
	
	$search = (string) trim($_POST['article']);
	$req = $base->prepare('SELECT * FROM articles WHERE titre LIKE ? LIMIT 10');
	$req->execute(array("%$search%"));
	$req = $req->fetchAll();
	foreach ($req as $value) {
		?>
		<a href="index.php?page=see_article&id=<?= $value['id']?>">
		<div style='margin-top: 20px 0;border-bottom: 2px solid #ccc '>
			 <?= $value['titre']?>
		</div></a>
		<?php
	}
}?>