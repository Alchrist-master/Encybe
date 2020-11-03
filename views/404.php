<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
<body>
<header><?php include 'menu.php'; ?></header>

<!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog standard full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-12 col-md-offset-3">
                        <!-- Single Item -->
                        <div class="single-item col-md-offset-1">
                            <div class="item">
                                <div class="thumb">
                                    <a href="index.php?page=acceuil"><img src="public/assets/img/404.png" alt="Thumb"></a>
                                </div>
                            </div>
                        </div>
                                    <h3>Cette page n'est pas disponible pour le moments</h3>
                    </div>
                    <!-- End Blog Content -->
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
        $('#acceuil').addClass('active');
</script>

</body>
</html>