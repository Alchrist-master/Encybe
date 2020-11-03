
<!DOCTYPE html>
<html lang="fr">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">
    <title>EncyBe</title>
    <link rel="shortcut icon" href="public/assets/img/favicon.png" type="image/x-icon">
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="public/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="public/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="public/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="public/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="public/assets/css/animate.css" rel="stylesheet" />
    <link href="public/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="public/assets/style.css" rel="stylesheet">
    <link href="public/assets/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>
	<?php include 'menu.php';?>

    <!-- Invitations 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Invitations</h2>
                        <span style="color: orange;">(<?= $count['nbr'] ?>)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <?php foreach ($afficher as $value) {?>
                        <!-- Single Item -->
                        <div class="item">
                        	<a href="">                           
                        	 <div class="col-md-5 thumb">
                                <img src="public/assets/img/profil/<?= $value['photo'] ?>" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p><?= $value['bio'] ?></p>
                                <h4><?= $value['prenom'] ?> <?= $value['nom'] ?></h4>
                                <h4><?= $value['profession'] ?></h4>
                                <form method="post" action="index.php?page=amis">
                                <input type="hidden" name="id_relation" value="<?= $value['id'] ?>">
                               <button class="btn" name="accepter" style="background: transparent;"> <span>Accepter</span></button>
                                <a href="index.php?page=see_profil&id=<?= $value['id_users'] ?>" class="btn"><span>Voir plus</span></a>
                                </form>
                            </div></a>

                        </div>
                        <!-- Single Item -->
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invitations -->

    <!-- Friend
    ============================================= -->
    <section id="advisor" class="advisor-area default-padding">
        <div class="container">
        	<div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Vos  Amis</h2>
                        <span>(<?= $count_amis['nbr'] ?>)</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">
                        <?php foreach ($amis as  $am) {?>
                        <!-- Single Item -->
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="public/assets/img/profil/<?= $am['photo'] ?>" alt="Thumb">  
                                <div class="info-title">
                                    <h4><?= $am['nom'] ?> <?= $am['prenom'] ?></h4>
                                    <span><?= $am['profession'] ?></span>
                                </div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <div class="overlay-content">
                                                <h4>Apropos</h4>
                                                <p>
                                                   <?= $am['bio'] ?>
                                                </p>
                                                <a href="index.php?page=see_profil&id=<?= $am['id_users'] ?>">Voir plus</a>
                                                <div class="social">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </div> 
                        <!-- Single Item -->
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Friend-->

     <!-- Suggestions
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Suggestions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                    	<?php  foreach (see_friend($_SESSION['user']['id']) as $value) {  ?>
                        <!-- Single Item -->
                        <div class="item">
                        	<a href="index.php?page=see_profil&id=<?= $value['id']?>">
                            <div class="col-md-5 thumb">
                                <img src="public/assets/img/profil/<?= $value['photo']?>" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p><?= $value['bio']?></p>
                                <h4><?= $value['prenom']?> <?= $value['nom']?></h4>
                                <h4><?= $value['profession']?></h4>
                                <form>
                               <a href="" class="btn"> <span>Ajouter</span></a>
                                <a href="index.php?page=see_profil&id=<?= $value['id']?>" class="btn"><span>Voir plus</span></a></form>
                                
                            </div></a>
                        </div>
                        <!-- Single Item -->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Suggestions -->

<?php include 'footer.php'; ?>
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="public/assets/js/jquery-1.12.4.min.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/equal-height.min.js"></script>
    <script src="public/assets/js/jquery.appear.js"></script>
    <script src="public/assets/js/jquery.easing.min.js"></script>
    <script src="public/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="public/assets/js/modernizr.custom.13711.js"></script>
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <script src="public/assets/js/wow.min.js"></script>
    <script src="public/assets/js/isotope.pkgd.min.js"></script>
    <script src="public/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="public/assets/js/count-to.js"></script>
    <script src="public/assets/js/bootsnav.js"></script>
    <script src="public/assets/js/main.js"></script>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#amis').addClass('active');
</script>

</body>

<!-- Mirrored from thememine.net/themeforest/examin/teachers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 12:37:16 GMT -->
</html>