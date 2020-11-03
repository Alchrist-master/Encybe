<?php 
  $email=null;
  if (!empty($_POST['email'])) {
    $email=$_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = __DIR__ . DIRECTORY_SEPARATOR . '../public/emails' . DIRECTORY_SEPARATOR . date('Y-m-d');
        file_put_contents($file, $email.PHP_EOL, FILE_APPEND);
        $_SESSION['successs']=true;
        $email='null';
        
  }else{
    $_SESSION['errorr']=true;
  }
}
?>  
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-fixed shadow dark-hard default-padding-top text-light" style="background-image: url(public/assets/img/banner/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="public/assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                            <div class="subscribe">
                                <form action="#" method="post">
                                <?php if(isset($_SESSION['errorr']) && $_SESSION['errorr']): ?> 
                                    <div class="alert alert-danger">Echec d'envoi</div>
                                <?php $_SESSION['errorr']=false; endif;?>

                                <?php if(isset($_SESSION['successs']) && $_SESSION['successs']): ?> 
                                    <div class="alert alert-success">Votre email a été bien envoyer</div>
                                <?php $_SESSION['successs']=false; endif;?>

                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Entrez votre Email" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="index.php?page=acceuil#">Acceuil</a>
                                </li>
                                <li>
                                    <a href="index.php?page=article">Articles</a>
                                </li>
                                <li>
                                    <a href="index.php?page=acceuil">A propos</a>
                                </li>
                                <li>
                                    <a href="index.php?page=contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="index.php?page=article">Documentation</a>
                                </li>
                                <li>
                                    <a href="index.php?page=chat">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Adresse</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@gmail.com</a></span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>Disponibilité</h5>
                                <ul>
                                    <li> <span> lun - Mar :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Mer - Sam :</span>
                                      <div class="pull-right"> 8.00 am - 12.00 pm </div>
                                    </li>
                                    <li> <span> Dim : </span>
                                      <div class="pull-right closed"> Sous demande </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2020. All Rights Reserved by <a href="#">Busligne</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Thème et condition</a>
                                </li>
                                <li>
                                    <a href="#">Politique</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->