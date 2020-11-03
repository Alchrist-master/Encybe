<?php 
	
	if (isset($_POST['send'])) {
		$nom = strip_tags($_POST['nom']);
		$email = strip_tags($_POST['email']);
		$comments = trim(nl2br($_POST['commentaire']));
		$tel = 0;

		if ($nom !="" && $email !="" && $comments !="") {
		 	$admin = comment($nom, $email, $tel, $comments, $id);

		 	if ($admin) {
		 		$_SESSON['success'] = true;
		 	}else{
		 		$_SESSON['echec'] = true;
		 	}

		 }else{
		 	$_SESSON['vide'] = true;
		 } 

	}

?>


<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>
<style type="text/css">
	.para{
		padding: 10px 0;
		overflow: scroll;
		height: 300px;
        margin: 20px 0;
        position: relative;
        word-break: break-word;
	}
</style>

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="info">
                                    <h3>
                                        <a href="blog-single-right-sidebar.html"><?= $admin['titre'] ?></a>
                                    </h3>
                                    <h5><?= $admin['sujet'] ?></h5>
		                                <div class="para">
		                                    <p style="padding: 10px;">
		                                        <?= $admin['contenu'] ?>
		                                    </p>
	                                    </div>
                                    <a href="#">Résumé <i class="fas fa-angle-double-right"></i></a>
                                    		<p>
		                                        <?= $admin['conclusion'] ?>
		                                    </p>
                                    <div class="meta">
                                    	<?php if(isset($_SESSON['vide']) && $_SESSON['vide']):?>
                                    		<div class="alert alert-warning">Champs non remplis</div>
                                    	<?php $_SESSON['vide'] = false; endif?>

                                    	<?php if(isset($_SESSON['success']) && $_SESSON['success']):?>
                                    		<div class="alert alert-success">Commentaires envoyer</div>
                                    	<?php $_SESSON['success'] = false; endif?>
                                    	
                                    	<?php if(isset($_SESSON['echec']) && $_SESSON['echec']):?>
                                    		<div class="alert alert-warning">Echec d'envoie</div>
                                    	<?php $_SESSON['echec'] = false; endif?>
                                    	<form method="post">
				                            <div class="col-md-6">
				                                <div class="row">
				                                    <div class="form-group">
				                                        <input class="form-control" name="nom" placeholder="Nom complet" type="text">
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="row">
				                                    <div class="form-group">
				                                        <input class="form-control" name="email" placeholder="Email" type="email">
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="row">
				                                    <div class="form-group comments">
				                                        <textarea class="form-control" id="comments" name="commentaire" placeholder="Votre commentaire"></textarea>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="row">
				                                    <button type="submit" name="send" class="btn btn-primary">
				                                        Envoyer <i class="fa fa-paper-plane"></i>
				                                    </button>
				                                </div>
				                            </div>                                 		
                                    	</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>

                            <!-- Start Sidebar Item -->
                            <div class="sidebar-item category">
                            	<h5>Domaine : <?= $admin['domaine'] ?></h5>
                                <div class="title">
                                    <h4>Même categories</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                    	<?php foreach ($categorie as $ca) {?>
                                        <li>
                                            <a href="#"><?= $ca['titre'] ?><span>23</span></a>
                                        </li>
                                    <?php }?>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->



<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#articles').addClass('active');
</script>

</body>
</html>