<?php 
 
	function see_chat($id){
		$base = connexion();

		$req = $base->prepare('SELECT u.id,u.nom,u.prenom,u.photo,c.sms,c.date_sms,c.id_from,c.lu
 			FROM (
			SELECT if(r.demandeur = :i ,r.receveur, r.demandeur) id_user, MAX(c.id) max_id
			FROM relations r 
			LEFT JOIN chats c ON ((c.id_from, c.id_to) = (r.demandeur, r.receveur) OR (c.id_from, c.id_to) = (r.receveur, r.demandeur))
			WHERE demandeur = :i  OR receveur = :i  AND statue = 2
			GROUP BY if(c.id_from = :i ,c.id_to,c.id_from), r.id) AS dm
			LEFT JOIN chats c ON c.id = dm.max_id
			LEFT JOIN users u ON u.id = dm.id_user
			ORDER BY c.date_sms DESC ');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetchAll();
	}


	function see_conversation($id1,$id2,$min,$max){
		$base = connexion();

		$req = $base->prepare("SELECT *
 			FROM chats 
			WHERE (id_from = :f  AND id_to = :t) OR (id_from = :t  AND id_to = :f)
			ORDER BY date_sms LIMIT :mi,:max");
		$req->bindValue('f',$id1);
		$req->bindValue('t',$id2);
		$req->bindValue('mi',$min);
		$req->bindValue('max',$max);
		$req->execute();
		return $req->fetchAll();
	}


	function count_conversation($id1,$id2){
		$base = connexion();

		$req = $base->prepare('SELECT count(id) as nbr FROM chats WHERE (id_from = :f  AND id_to = :t) OR (id_from = :t  AND id_to = :f)');
		$req->bindValue('f',$id1);
		$req->bindValue('t',$id2);
		$req->execute();
		return $req->fetch();
	}

	function send_mail($id1, $id2, $mail){
		$base = connexion();

		$req = $base->prepare('INSERT INTO chats(id_from, id_to, sms,lu) VALUES(:f, :t, :s, :l)');
		$req->bindValue('f',$id1);
		$req->bindValue('t',$id2);
		$req->bindValue('s',$mail);
		$req->bindValue('l',1);

		return $req->execute();
	}

	function one_one($id1,$id2){
		$base = connexion();

		$req = $base->prepare('SELECT *
 			FROM chats 
			WHERE  id_to = :t AND id_from = :f AND lu = :l');
		$req->bindValue('f',$id1);
		$req->bindValue('t',$id2);
		$req->bindValue('l',1);
		$req->execute();
		return $req->fetchAll();
	}

	function one_lu($id1,$id2){
		$base = connexion();

		$req = $base->prepare('UPDATE chats set lu = :l
			WHERE  id_to = :t  AND id_from = :f');
		$req->bindValue('l',0);
		$req->bindValue('f',$id2);
		$req->bindValue('t',$id1);
		return $req->execute();
	}


 ?>