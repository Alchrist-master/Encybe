<?php 
	
	function artile_count(){
		$base = connexion();

		$req = $base->prepare('SELECT COUNT(*) as nbr From articles');
		$req->execute();
		return $req->fetch()['nbr'];
	}

	function search_article($recherche){
		$base = connexion();

		$req = $base->query('SELECT * FROM articles WHERE titre LIKE ? LIMIT 10', array("%$recheche%"));
		return $req->fetchAll();
	}

	function see_all(){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM articles order by id desc limit 20');
		$req->execute();
		return $req->fetchAll();
	}

	function add_article($titre, $sujet, $contenu, $conclusion, $domaine, $id){
		$base = connexion();

		$req = $base->prepare('INSERT INTO articles (titre, sujet, contenu, conclusion, domaine, id_users) VALUES (:t, :s, :ct, :cc, :d, :i)');
		$req->bindValue('t',$titre);
		$req->bindValue('s',$sujet);
		$req->bindValue('ct',$contenu);
		$req->bindValue('cc',$conclusion);
		$req->bindValue('d',$domaine);
		$req->bindValue('i',$id);
		return $req->execute();
	}

	function see_one_article($id){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM articles WHERE id =:i');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetch();
	}

	function mm_domaine($domaine,$id){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM articles WHERE domaine =:d AND id <> :i');
		$req->bindValue('d',$domaine);
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetchAll();
	}


 ?>