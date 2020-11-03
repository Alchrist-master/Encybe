<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(public/assets/img/banner/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Profile</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php?page=Acceuil"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

      <?php if(isset($_SESSION['success']) && $_SESSION['success']):?>
          <div class="alert alert-success">Modification reussi</div>
      <?php $_SESSION['success'] = false; endif; ?>
      
      <?php if(isset($_SESSION['cpass']) && $_SESSION['cpass']):?>
          <div class="alert alert-warning">Confirmation incorrecte</div>
      <?php $_SESSION['cpass'] = false; endif; ?>
      
      <?php if(isset($_SESSION['pass']) && $_SESSION['pass']):?>
          <div class="alert alert-warning">Anciens mots de passe incorrecte</div>
      <?php $_SESSION['pass'] = false; endif; ?>
      
      <?php if(isset($_SESSION['echec']) && $_SESSION['echec']):?>
          <div class="alert alert-danger">Echec d'inscription</div>
      <?php $_SESSION['echec'] = false; endif; ?>

   <!-- Start Students Profiel 
    ============================================= -->
    <div class="students-profiel adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 thumb">
                    <img src="public/assets/img/profil/<?= $_SESSION['user']['photo'] ?>" alt="Thumb">
                </div>
                <div class="col-md-7 info main-content">
                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Tableau de bord
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                    Infos Plus
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Modifier profile
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
                                        <?= $_SESSION['user']['bio'] ?>
                                    </p>
                                    <ul>
                                        <li>
                                            Nom <span><?= $_SESSION['user']['nom'] ?></span>
                                        </li>
                                        <li>
                                            Prenom <span><?= $_SESSION['user']['prenom'] ?></span>
                                        </li>
                                        <li>
                                            Email <span><?= $_SESSION['user']['email'] ?></span>
                                        </li>
                                        <li>
                                            Contact <span><?= $_SESSION['user']['tel'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="info title">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                           <tr>
                                             <td>Profession</td>
                                             <td><?= $_SESSION['user']['tel'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Date de naissance</td>
                                             <td><?= $_SESSION['user']['date_naissance'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Lieu de naissance</td>
                                             <td><?= $_SESSION['user']['lieu_naissance'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Addresse</td>
                                             <td><?= $_SESSION['user']['address'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Date de naissance</td>
                                             <td><?= $_SESSION['user']['tel'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Expérience</td>
                                             <td><?= $_SESSION['user']['experience'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Langue</td>
                                             <td><?= $_SESSION['user']['langue'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                           <tr>
                                             <td>Passion</td>
                                             <td><?= $_SESSION['user']['passion'] ?></td>
                                             <td><a href="index.php?page=modifer_element&id=" ><i class="fas fa-edit"></i></a></td>
                                           </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane">
                                <div class="info title">
                                    <div class="row">
                                        <form action="index.php?page=profil" class="contact-form" method="post">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Nom" type="text" value="<?= $_SESSION['user']['nom'] ?>" name="nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Prenom" type="text" value="<?= $_SESSION['user']['prenom'] ?>" name="prenom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email" type="text" value="<?= $_SESSION['user']['email'] ?>" name = "email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Téléphone" type="text" value="<?= $_SESSION['user']['tel'] ?>" name ="tel">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <textarea class="form-control" placeholder="Bio/Descrivez-vous" name="bio"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" name="modifier">
                                                    Modifier
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="update-pass">
                                        <h4>Change votre mots de passe</h4>
                                        <div class="row">
                                            <form action="index.php?page=profil" class="contact-form" method="post">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Nouveau mots de passe" type="password" name="pwd">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Confirmez le nouveau mots de passe" type="password" name="rpwd">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Anciens mots de passe" type="password" name="npwd">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="pass">
                                                        Modifier
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Students Profile -->

<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#profil').addClass('active');
</script>

</body>
</html>