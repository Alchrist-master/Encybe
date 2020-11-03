<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>


    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area transparent-nav banner-search content-top-heading bg-fixed text-light text-normal text-center" style="background-image: url(public/assets/img/banner/3.jpg);">

        <div class="item">
            <div class="box-table shadow dark">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="content">
                                    <h3>Faites évoluer votre carrière avec des cours complets</h3>
                                    <form action="index.php?page=article" method="POST">
                                        <input type="text" placeholder="Recherche d'article" class="form-control" name="article" id="search">
                                        <button type="submit" name="recherche">
                                            Recherche
                                        </button>  
                                    </form>
                                    <div style="margin-top: 20px,">
                                        <div id="resultat" style="color: white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End Banner -->

    <!-- Start Top Categories 
    ============================================= -->
    <div id="top-categories" class="top-cat-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Catégories</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="top-cat-items text-light inc-bg-color">
                    <?php foreach (see_all() as $value) { ?>
                        <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item <?php print_r($arr_rand)  ?>" style="background-image: url(public/assets/img/category/1.jpg);">
                            <a href="index.php?page=see_article&id=<?= $value['id'] ?>">
                                <i class="flaticon-education"></i>
                                <div class="info">
                                    <h4><?= $value['titre'] ?></h4>
                                </div>
                                    <span><?= $value['sujet'] ?></span>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Categories -->

<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#articles').addClass('active');

        $(document).ready(function () {
            $('#search').keyup('click', function () {
                $('#resultat').html('');
                var demande = $(this).val();

                if (demande !="") {
                    $.ajax({ 
                        type:'POST',
                        url: 'app/search_article.php',
                        data: "article=" + encodeURIComponent(demande),
                        success: function(data){
                            if (data !="") {
                                $('#resultat').append(data);
                            }else{
                                document.getElementById('resultat').innerHTML = "<div style='font-size:20px; text-align: center; margin-top: 10px;'>Aucun résultat trouvé</div>"
                            }
                        }
                    });
                }
            });
        });

</script>

</body>
</html>