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
                    <h1>Ajouter un articles</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php?page=acceuil"><i class="fas fa-home"></i> Acceuil</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Article</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <?php if(isset($_SESSION['vide']) && $_SESSION['vide']):?>
    	<div class="alert alert-info">Remplissez tout les champs</div>
    <?php $_SESSION['vide'] = false; endif ?>

 <!-- Start Students Profiel 
    ============================================= -->
    <div class="edit-profile adviros-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 about-user">
                    <img src="public/assets/img/team/article.jpg" alt="Thumb" id="photo">
                </div>
                <div class="col-md-7 update-info">
                    <h4>Les constituants</h4>
                    <div class="row">
                        <form action="index.php?page=add_article" class="contact-form" method="post" enctype="multipart/data-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Titre" type="text" name="titre">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                	<select class="form-control" name="domaine">
                                		<option>Domaine</option>
                                		<option value="Maths">Mathématique</option>
                                		<option value="Biologie">Biologie</option>
                                		<option value="Phisique">phisique</option>
                                		<option value="Histoire">Histoire</option>
                                		<option value="géographie">géographie</option>
                                		<option value="Sport">Sport</option>
                                		<option value="Anglais">Anglais</option>
                                	</select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Sujets" type="text" name="sujet">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Contenu" name="contenu"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" placeholder="Conclusion" name="conclusion"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                            	<div class="container row">
                                <button type="submit" class="btn" style="background: red;color: white;" onclick="return location.reloard()">
                                    X
                                </button>
                                <button type="submit" class="btn" name="save">
                                    Save
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
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
        $('#articles').addClass('active');
</script>

</body>
</html>