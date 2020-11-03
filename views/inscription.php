<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

    <!-- Start Registration & Faq 
    ============================================= -->
    <div class="reg-area inc-faq default-padding">
        <div class="container">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-12 reg-form">
                        <div class="reg-box text-light">
                            <h3>Inscrivez-vous</h3>
                            <form action="index.php?page=inscription" method="post">

                                <?php if(isset($_SESSION['vide']) && $_SESSION['vide']):?>
                                    <div class="alert alert-warning">Veuillez remplir tout les champs</div>
                                <?php $_SESSION['vide'] = false; endif; ?>
                                
                                <?php if(isset($_SESSION['pass']) && $_SESSION['pass']):?>
                                    <div class="alert alert-warning">Confirmation incorrecte</div>
                                <?php $_SESSION['pass'] = false; endif; ?>
                                
                                <?php if(isset($_SESSION['echec']) && $_SESSION['echec']):?>
                                    <div class="alert alert-danger">Echec d'inscription</div>
                                <?php $_SESSION['echec'] = false; endif; ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nom" type="text" name="nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Prénom" type="text" name="prenom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                <label class="form-label" style="color: white;"> Date de nassance: </label></div>
                                           <div class="col-md-8"><input class="form-control" placeholder="" type="date" name="date"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Lieu de naissance" type="text" name="lieu">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Adresse" type="text" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" type="email" name="email">
                                        </div>
                                    </div>s
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Téléphone" type="text" name="tel">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" name="profession">
                                                <option>Profession</option>
                                                <option value="Elève">Elève</option>
                                                <option value="Etudiant">Etudiant</option>
                                                <option value="Profession">Profession</option>
                                                <option value="Autre">Autre</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Mots de passe" type="password" name="pass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Confirmer le mots de passe" type="password" name="rpass">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="inscription">
                                            s'inscrit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration & Faq  -->
<?php include 'js.php'; ?>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#acceuil').addClass('active');
</script>

</body>
</html>