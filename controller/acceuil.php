<?php 

	include 'models/users.php'; 
	include 'models/articles.php'; 
	$prof = 'Professeur'; 
	$stude = 'Etudiant'; 


	$professeur = users_count($prof);
	$student = users_count($stude);
	include 'views/acceuil.php'; 

?>