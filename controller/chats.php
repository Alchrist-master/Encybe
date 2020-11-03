<?php 

	if (isset($_SESSION['connected']) && $_SESSION['connected']) {
		include 'models/users.php';
		include 'models/relations.php';
		include 'models/chats.php';

		$nbr = count_friend($_SESSION['user']['id']);
		$sms = see_chat($_SESSION['user']['id']);


		include 'views/chats.php';
	}else{
		include 'views/connexion.php';
	}

?>