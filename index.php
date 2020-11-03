<?php
	require_once 'app/baseconnexion.php';
	$base = connexion();
	if (isset($_GET['page']) && $_GET['page']) {

		if ($_GET['page'] == 'deconnexion') {
			session_destroy();
			include 'controller/acceuil.php';
		}else{
		   $page = 'controller/' . $_GET['page'] . '.php';
		
			if (is_file($page)) {
				include $page;
		    }else{
		    	//echo "Not found";
		    	include 'controller/404.php';
		    }
		}    
	}else{
		include 'controller/acceuil.php';
	}

?>