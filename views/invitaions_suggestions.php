<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

<body>
	<nav class="navbar text-center"><br>
		<h3>Liste de suggestion Amis</h3>
		<div class="container">
			<div class="row">
				<!--<?php $id = $_SESSION['user']['id']; foreach (see_friend($id) as $value) {?>
				<div class="col-sm-3">
					<div class="amis">
						<div>
							<h4><?= $value['nom'] ?></h4>
						</div>
						<a href="index.php?page=see_profil&id=<?= $value['id'] ?>" class="btn btn-info">Voir plus</a>
					</div>
				</div>
				<?php }?>-->
				<?php $id = $_SESSION['user']['id']; foreach (see_friend($id) as $value) {?>
					<div class="col-sm-3 text-center">
									<div class="card amis" style="width: 18rem;">
					  <img class="card-img-top" src="public/assets/img/profil/<?= $value['photo'] ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?= $value['nom'] ?> <?= $value['prenom'] ?></h5>
					    <p class="card-text"><?= $value['profession'] ?></p>
					    <a href="index.php?page=see_profil&id=<?= $value['id'] ?>" class="btn btn-info" style="border-radius: 10px;">Voir plus</a>
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