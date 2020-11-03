<?php 

	if (isset($_POST['send'])) {
		$nom = strip_tags($_POST['nom']); 
		$email = strip_tags($_POST['email']); 
		$tel = strip_tags($_POST['tel']); 
		$mail = strip_tags($_POST['mail']); 

		//le header du mail
		$header = "From: Encybe";
		$header .= "MIMI-version: 1.0\n";
		$header .= "Content-type: text/html; charset=utf-8\n";
		$header .= "Content-Transfer-Encoding: 8bit";

		//ajout du mail en format html
		$content ="";
	}




include 'views/contact.php'; ?>
<html>.
<head></head>.
<body style="padding: 0%; margin: 0; font-family: Helvetica, Arial, sans-serif">.
	<div style="background: #f7f7f7; padding: 5% 5% 5% 5%; ">.

	</div>
</body>
</html>
