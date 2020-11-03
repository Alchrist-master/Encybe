<?php 

if (isset($_SESSION['connected']) and $_SESSION['connected']) {

           include 'models/articles.php';

		if (isset($_POST['save'])) {
			$titre = strip_tags($_POST['titre']);
			$domaine = $_POST['domaine'];
			$sujet = strip_tags($_POST['sujet']);
			$contenu = strip_tags(nl2br($_POST['contenu']));
			$conclusion = strip_tags(nl2br($_POST['conclusion']));
			$id = $_SESSION['user']['id'];

			if ($titre !="" && $sujet !="" && $contenu !="" && $conclusion !="" && $domaine !="" && $id !="") {

				$admin = add_article($titre, $sujet, $contenu, $conclusion, $domaine, $id);
				if ($admin) {
					header('location:index.php?page=article');

				}else{

					$_SESSION['echec'] = true;
				}
			}else{
				$_SESSION['vide'] = true;
			}
		}

		include 'views/add_article.php';
	} else {
		include 'views/connexion.php';
	}

 

?>