<?php

if (!isset($_SESSION)) {
		session_start();
	}

	function connexion()
	{
		try {
			$base = new PDO ('mysql:host=localhost;dbname=encybe; charset=utf8', 'root', '',array(PDO::ATTR_PERSISTENT => true));
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		return $base;
	}

?>