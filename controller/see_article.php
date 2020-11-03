<?php 
	
	include 'models/articles.php';
	include 'models/commentaires.php';

	$id = $_GET['id'];
	$admin = see_one_article($id);
	$categorie = mm_domaine($admin['domaine'],$id);




	include 'views/see_article.php'; 
?>