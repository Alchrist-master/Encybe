<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

<style type="text/css">
	.btn-success{

	}
</style>
    <!-- Start Registration & Faq 
    ============================================= -->
    <div class="reg-area inc-faq default-padding" style="background-color: orange">
        <div class="container">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-12 reg-form">
                        <div class="reg-box text-light">
                            <h3>Modifier votre profil</h3>
                            <form action="index.php?page=edit_profil" method="post">
                                
                                <?php if(isset($_SESSION['echec']) && $_SESSION['echec']):?>
                                    <div class="alert alert-danger">Echec de modification</div>
                                <?php $_SESSION['echec'] = false; endif; ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nom" type="text" name="nom" value="<?= $_SESSION['user']['nom'] ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Prénom" type="text" name="prenom" value="<?= $_SESSION['user']['prenom'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Adresse" type="text" name="address" value="<?= $_SESSION['user']['address'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" type="email" name="email" value="<?= $_SESSION['user']['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Compétence" type="text" name="competence" value="<?= $_SESSION['user']['competence'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Expérience" type="text" name="experience" value="<?= $_SESSION['user']['experience'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Téléphone" type="text" name="tel" value="<?= $_SESSION['user']['tel'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Langue" type="text" name="langue" value="<?= $_SESSION['user']['langue'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Passion" type="text" name="passion" value="<?= $_SESSION['user']['passion'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Bio" type="text" name="bio" value="<?= $_SESSION['user']['tel'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="reset" style="background-color: red;color: white;border-radius: 5px;" onclick="return location.reload()">
                                            Annuler
                                        </button>
                                        <button type="submit" name="modifier" style="background-color: green; color: white;border-radius: 5px;">
                                            Modifier
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