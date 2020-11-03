<?php 

	function users_connected($email, $pass){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM users WHERE email = :e OR tel = :e AND pass = :p');
		$req->bindValue('e', $email);
		$req->bindValue('p', $pass);
		$req->execute();
		return $req->fetch();
	}

		function username($utilisateur){
		$base = connexion();
		$req = $base->prepare('SELECT * FROM users WHERE username = :u');
		$req->bindValue('u',$utilisateur);
		$req->execute();
		return $req->fetch()?true : false;
	}


	function password($mdp){
		$base = connexion();
		$req = $base->prepare('SELECT * FROM users WHERE pass = :p');
		$req->bindValue('p',$mdp);
		$req->execute();
		return $req->fetch()?true : false;
	}

	function users_inscription($nom, $prenom, $date, $lieu, $address, $email, $tel, $profession, $pass){
		$base = connexion();

		$req = $base->prepare('INSERT INTO users(nom, prenom, email, tel, address, profession, date_naissance, lieu_naissance, pass) VALUES (:n, :pr, :e, :t, :a, :pro, :d, :l, :p)');
		$req->bindValue('n',$nom);
		$req->bindValue('pr',$prenom);
		$req->bindValue('d',$date);
		$req->bindValue('l',$lieu);
		$req->bindValue('a',$address);
		$req->bindValue('e',$email);
		$req->bindValue('t',$tel);
		$req->bindValue('pro',$profession);
		$req->bindValue('p',$pass);
		return $req->execute();
	}

	function users_count($count){
		$base = connexion();

		$req = $base->prepare('SELECT COUNT(*) as nbr From users WHERE profession = :e');
		$req->bindValue('e',$count);
		$req->execute();
		return $req->fetch()['nbr'];
	}

	function update_name($nom, $prenom, $email, $tel, $bio, $id){
		$base = connexion();

		$req = $base->prepare('UPDATE users SET nom= :n, prenom= :pr, email= :e, tel= :t, bio= :b WHERE  id=:i');
		$req->bindValue('n',$nom);
		$req->bindValue('pr',$prenom);
		$req->bindValue('e',$email);
		$req->bindValue('t',$tel);
		$req->bindValue('b',$bio);
		$req->bindValue('i',$id);

		return $req->execute()?true : false;
	}

	function update_pass($pwd, $id){
		$base = connexion();

		$req = $base->prepare('UPDATE users SET pass = :p WHERE  id=:i');
		$req->bindValue('p',$pwd);
		$req->bindValue('i',$id);

		return $req->execute()?true : false;
	}

	function pass_oublie($id){
		$base = connexion();

		$req = $base->prepare('');
		$req->bindValue('n',$id);
		return $req->execute();
	}

	function see_friend($id){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM users WHERE id <> :i order by id desc LIMIT 30');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetchAll();
	}

	function see_profil_of_users($id){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM users WHERE id = :i');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetch();
	}

	function see_conversation_profil($id){
		$base = connexion();

		$req = $base->prepare('SELECT * FROM users WHERE id = :i');
		$req->bindValue('i',$id);
		$req->execute();
		return $req->fetch();
	}



	
 ?>