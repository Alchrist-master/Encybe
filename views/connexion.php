 <!DOCTYPE html>
<html lang="en">
<head>
	<title>EncyBe | Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="public/assets/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/connexion/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(public/connexion/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Se connecter
					</span>

						<a class="btn btn-warning text-right" href="index.php?page=inscription">
							Inscription
						</a>
				</div>
                    <?php if(isset($_SESSION['vide']) && $_SESSION['vide']) :?>
                        <div class="alert alert-warning">Le remplissage des champs sont obligatoires</div>
                    <?php $_SESSION['vide'] = false; endif ?>

                    <?php if(isset($_SESSION['username']) && $_SESSION['username']) :?>
                        <div class="alert alert-info">Email ou téléphone incorrecte</div>
                    <?php $_SESSION['username'] = false; endif ?>


                    <?php if(isset($_SESSION['password']) && $_SESSION['password']) :?>
                        <div class="alert alert-danger">Mot de passe incorrecte</div>
                    <?php $_SESSION['password'] = false; endif ?>


                    <?php if(isset($_SESSION['existe']) && $_SESSION['existe']) :?>
                        <div class="alert alert-danger">Compte inexistant</div>
                    <?php $_SESSION['existe'] = false; endif ?>

                    <?php if(isset($_SESSION['echec']) && $_SESSION['echec']) :?>
                        <div class="alert alert-danger">Echec de connexion</div>
                    <?php $_SESSION['echec'] = false; endif ?>

				<form class="login100-form validate-form" method="post" action="index.php?page=connexion">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="username" placeholder="Email ou téléphone">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Pass</span>
						<input class="input100" type="password" name="password" placeholder="Entrer votre mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Rappel
							</label>
						</div>

						<div>
							<a href="index.php?page=pass_oublie" class="txt1">
								Mot de passe oublié?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-warning" name="connexion">
							Connexion
						</button>
					</div>
				</form>
	<div class="container">
	<a href="index.php?page=acceuil">Retour</a>
	</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="public/connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public/connexion/js/main.js"></script>

</body>
</html>