
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <?php if(isset($_SESSION['connected']) && $_SESSION['connected']) {?>
                        <li class="side-menu mt-5"><a href="#"><i class="fa fa-bars"></i></a></li>
                    <?php }else{
                      echo '<li class="side-menu mt-5"><a href="index.php?page=connexion"><i class="fa fa-user"></i></a></li>
                      ' ;
                    } ?>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php?page=acceuil">
                        <img src="public/assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div>
                    <ul data-in="#" data-out="#">
                        <li id="acceuil" style="display: inline-block;margin-top: 25px;" class="btn">
                            <a class="smooth-menu" href="index.php?page=acceuil">Acceuil</a>
                        </li>
                        <li id="articles" style="display: inline-block;margin-top: 25px;" class="btn">
                            <a href="index.php?page=article">Articles</a>
                        </li>
                        <?php if(isset($_SESSION['connected']) && $_SESSION['connected']){?>
                        <li id="profil" style="display: inline-block;margin-top: 25px;"class="btn">
                            <a href="index.php?page=profil">Profil</a>
                        </li>
                        <li id="amis" style="display: inline-block;margin-top: 25px;" class="btn">
                            <a href="index.php?page=amis">Amis</a>
                        </li>
                        <li id="chats" style="display: inline-block;margin-top: 25px;" class="btn">
                            <a href="index.php?page=chats">Messagerie</a>
                        </li>
                         <?php }?>
                        <li id="contact" style="display: inline-block;margin-top: 25px;" class="btn">
                            <a href="index.php?page=contact">Contactez-nous</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <?php if(isset($_SESSION['connected']) && $_SESSION['connected']){?>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title"><?= $_SESSION['user']['nom'] ?></h4>
                    <div class="profile-thumb">
                        <img src="public/assets/img/profil/<?= $_SESSION['user']['photo'] ?>" alt="Profile">
                    </div>
                    <ul>
                        <li><a href="index.php?page=profil">Profile</a></li>
                        <li><a href="index.php?page=edit_profil">Modifier profile</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="index.php?page=chats">Message</a></li>
                        <li><a href="index.php?page=add_article">Ajouter une article</a></li>
                        <li><a href="index.php?page=deconnexion">Déconnexion</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href="index.php?page=amis">Amis</a></li>
                        <li><a href="index.php?page=demande">Invitations</a></li>
                        <li><a href="index.php?page=invitaions_suggestions">Suggestions</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Popular Courses</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Nos pages</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        <?php }else{
            echo '
            <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <a  class="btn btn-warning" href="index.php?page=connexion">
                <i class="fas fa-user"></i> Connectez vous!
            </a>
             </div>';

        } ?>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->