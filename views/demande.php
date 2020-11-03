<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

<body>
	<nav class="navbar text-center"><br>
		<h3>Invitations</h3>
		<div class="container">
			<div class="row">
				<?php foreach ($afficher as $value) {?>
					<div class="col-sm-3 text-center">
					 <div class="card amis" style="width: 18rem;">
					  <div class="col-md-12 col-md-12-sm-12 col-xs-12">
					  <img class="card-img-top" src="public/assets/img/profil/<?= $value['photo'] ?>" alt="Card image cap"></div>
					  <div class="card-body">
					    <h5 class="card-title"><?= $value['nom'] ?> <?= $value['prenom'] ?></h5>
					    <p class="card-text"><?= $value['profession'] ?></p>
					    <form method="post" action="index.php?page=demande">
					    <input type="hidden" name="id_relation" value="<?= $value['id'] ?>">
					    <button class="btn btn-info" style="border-radius: 10px;" name="accepter"><i class="fas fa-edit">A</i></button>
					    <button class="btn btn-danger" style="border-radius: 10px;" name="refuser"><i class="fas fa-delet">R</i></button>
						</form>
					  </div>
					  </div>
					</div>
				<?php }?>
			</div>
		</div>
	</nav>
</body>



<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>

</body>
</html>