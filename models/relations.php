<?php 

	function relation($id1, $id2) {
		$base = connexion();

		$req = $base->prepare('SELECT id FROM relations WHERE (receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r) ');
		$req->bindValue('r',$id1);
		$req->bindValue('d',$id2);
		$req->execute();
		return $req->fetch();
	}

	function create_relation($demandeur, $receveur, $statue) {
		$base = connexion();

		$req = $base->prepare('INSERT INTO relations(demandeur, receveur, statue) VALUES (:d, :r, :s) ');
		$req->bindValue('d',$demandeur);
		$req->bindValue('r',$receveur);
		$req->bindValue('s',$statue);
		return $req->execute();
	}

	function delete_relation($id1, $id2) {
		$base = connexion();

		$req = $base->prepare('DELETE FROM relations WHERE (receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)');
		$req->bindValue('r',$id1);
		$req->bindValue('d',$id2);
		return $req->execute();
	}

	function friends() {
		$base = connexion();

		$req = $base->prepare('DELETE FROM relations WHERE (receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)');
		$req->bindValue('r',$id1);
		$req->bindValue('d',$id2);
		return $req->execute();
	}

	function see_invitation($receveur, $statue) {
		$base = connexion();

		$req = $base->prepare('SELECT r.id, u.nom, u.prenom, u.profession, u.bio, u.photo,u.id id_users FROM relations r INNER JOIN users u ON u.id = r.demandeur WHERE receveur = :r AND statue = :s');
		$req->bindValue('r',$receveur);
		$req->bindValue('s',$statue);
		$req->execute();
		return $req->fetchAll();
	}

	function refuser($id, $receveur) {
		$base = connexion();

		$req = $base->prepare('DELETE FROM relations WHERE id = :i AND receveur = :r');
		$req->bindValue('i',$id);
		$req->bindValue('r',$receveur);
		return $req->execute();
	}

	function reverifier($id) {
		$base = connexion();

		$req = $base->prepare('SELECT * FROM relations WHERE id = :i AND statue = 1');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetch();
	}

	function accepter($id, $receveur) {
		$base = connexion();

		$req = $base->prepare('UPDATE relations set statue = 2 WHERE id = :i  AND receveur = :r');
		$req->bindValue('i',$id);
		$req->bindValue('r',$receveur);
		return $req->execute();
	}

	function count_friend($id) {
		$base = connexion();

		$req = $base->prepare('SELECT count(id) as nbr FROM relations WHERE (demandeur = :i OR receveur = :i) AND statue = 2');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetch();
	}

	function verification_avant_chat($id1, $id2) {
		$base = connexion();

		$req = $base->prepare('SELECT id FROM relations WHERE ((receveur = :r AND demandeur = :d) OR (receveur = :d AND demandeur = :r)) AND statue = :s ');
		$req->bindValue('r',$id1);
		$req->bindValue('d',$id2);
		$req->bindValue('s',2);
		$req->execute();
		return $req->fetch();

	}

	function count_invitation($id1) {
		$base = connexion();

		$req = $base->prepare('SELECT COUNT(*) as nbr FROM relations WHERE receveur = :r AND statue = :s ');
		$req->bindValue('r',$id1);
		$req->bindValue('s',1);
		$req->execute();
		return $req->fetch();

	}

	function see_friends($id1){
		$base = connexion();

		$req = $base->prepare('SELECT *
			FROM (
				SELECT if (r.receveur = :r,r.demandeur,r.receveur)id_users, MAX(u.id) max_id
				FROM relations r
				LEFT JOIN users u ON u.id = r.receveur or u.id = r.demandeur
				WHERE (r.receveur = :r OR r.demandeur = :r) AND r.statue = :s
				GROUP BY if(r.receveur = :r ,r.demandeur,r.receveur), r.id ) AS dm
			LEFT JOIN users u ON u.id = dm.id_users');
		$req->bindValue('r',$id1);
		$req->bindValue('s',2);
		$req->execute();
		return $req->fetchAll();
	}

	function see_profil($id1, $id2) {
		$base = connexion();

		$req = $base->prepare('SELECT u.*, r.* FROM users u
		LEFT JOIN relations r ON (receveur = u.id AND demandeur = :r) OR (receveur = :r AND demandeur = u.id)
		WHERE u.id = :d');
		$req->bindValue('r',$id1);
		$req->bindValue('d',$id2);
		$req->execute();
		return $req->fetch();
	}

 ?>