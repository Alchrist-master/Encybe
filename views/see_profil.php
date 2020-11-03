<?php

    $id1 = $_GET['id'];
    $id2 = $_SESSION['user']['id'];
    $demandeur = $_SESSION['user']['id'];
    $receveur = $_GET['id'];
    $statue = 1;
    $bloquer = $_SESSION['user']['id'];

if (isset($_POST['ajout'])) {

	$verif_relation = relation($id1, $id2);

	if (isset($verif_relation['id'])) {
        echo "<script>alert('Déjà amis')</script>";  
	}else{

        $relation = create_relation($demandeur, $receveur, $statue);
        echo "<script>alert('Vous aviez envoyer une demande d'amitié à".$id2.")</script>";  
        //var_dump($verif_relation,$relation);die();
    }

    header('location:index.php?page=see_profil&id='.$id);

}elseif (isset($_POST['suppr'])) {
	$delete = delete_relation($id1, $id2);
    header('location:index.php?page=see_profil&id='.$id);
}
?>


<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

   <!-- Start Advisor Details 
    ============================================= -->
    <div class="adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                        <?php if(isset($see_profil['statue']) && $see_profil['demandeur'] ==$_SESSION['user']['id'] && $see_profil['statue'] <>2) :?>
                            <h6 class="alert alert-info">Demande en attente</h6>
                        <?php endif?>
                    <img src="public/assets/img/profil/<?= $see_profil['photo'] ?>" alt="Thumb">
                    <div class="desc">
                        <h4><?= $see_profil['nom'] ?> <?= $see_profil['prenom'] ?></h4>
                        <span><?= $see_profil['profession'] ?></span>
                        <ul>
                            <li>
                                <a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <?php if (isset($_SESSION['user']['id'])) :?>
                            <form method="post">
                                <?php if(!isset($see_profil['statue'])) :?>
                            <li>
                                <button class="btn btn-success" style="border-radius: 10px;" name="ajout" type="submit">Ajouter</button>
                            </li>
                                 <?php endif ?>
                                
                                <?php if(isset($see_profil['statue']) && $see_profil['receveur'] == $_SESSION['user']['id'] ) :?>
                            <li>
                                <button class="btn btn-success" style="border-radius: 10px;" name="ajout" type="submit">Accepter</button>
                            </li>
                                <?php endif?>

                                <?php if(isset($see_profil['statue']) && $see_profil['demandeur'] == $_SESSION['user']['id'] ) :?>
                            <li>
                                <button class="btn btn-danger" style="border-radius: 10px;" name="suppr" type="submit">Suppr</button>
                            </li>
                            <?php endif ?>
                        	</form>
                                <?php endif ?>
                        	</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Infos
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    Courses
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <p>
                                        <?= $see_profil['bio'] ?>
                                    </p>
                                    <ul>
                                        <li>
                                            Contact <span><?= $see_profil['tel'] ?></span>
                                        </li>
                                        <li>
                                            Email <span><?= $see_profil['email'] ?></span>
                                        </li>
                                        <li>
                                            Proession <span><?= $see_profil['profession'] ?></span>
                                        </li>
                                        <li>
                                            Passion <span><?= $see_profil['passion'] ?></span>
                                        </li>
                                        <li>
                                            Expérience <span><?= $see_profil['experience'] ?></span>
                                        </li>
                                        <li>
                                            Langue <span><?= $see_profil['langue'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab2" class="tab-pane fade">
                            </div>
                            <!-- End Single Tab -->
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div><br>
    <!-- End Advisor Details -->



<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
</body>
</html>