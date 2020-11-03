<?php 

	function take_comment($nom, $email, $tel, $sms){
		$base = connexion();

		$req = prepare('INSERT INTO contacts (nom, email, tel, sms) VALUES (:n, :e, :t, :s)');
		$req->bindvalue('n', $nom);
		$req->bindvalue('e', $email);
		$req->bindvalue('t', $tel);
		$req->bindvalue('s', $sms);

	}

	function comment($nom, $email, $tel, $sms, $id){
		$base = connexion();

		$req = $base->prepare('INSERT INTO commentaires(nom, email, tel, sms, id_article) VALUES (:n, :e, :t, :s, :i)');
		$req->bindvalue('n', $nom);
		$req->bindvalue('e', $email);
		$req->bindvalue('t', $tel);
		$req->bindvalue('s', $sms);
		$req->bindvalue('i', $id);
		return $req->execute();

	}


 ?>