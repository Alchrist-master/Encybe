<!DOCTYPE html>
<html>
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
<header><?php include 'menu.php'; ?></header>

<style type="text/css">
	.imag{
		  width: 50px;
		  border-radius: 50%;
		  padding: 3px;
		  border: 2px solid #e74c3c;
		  height: auto;
		  float: left;
		  cursor: pointer;
		  -moz-transition: 0.3s border ease;
		  -o-transition: 0.3s border ease;
		  -webkit-transition: 0.3s border ease;
		  transition: 0.3s border ease;
		  margin-right: -5px;
	}
	.image{
		  width: 50px;
		  border-radius: 50%;
		  padding: 3px;
		  border: 2px solid #e74c3c;
		  height: auto;
		  float: left;
		  cursor: pointer;
		  -moz-transition: 0.3s border ease;
		  -o-transition: 0.3s border ease;
		  -webkit-transition: 0.3s border ease;
		  transition: 0.3s border ease;
		  margin-right: -5px;
		  position: hidden;
	}
	.nul{
		font-weight: 600;
			}
</style>

							    <!--<section class="advisor-area default-padding" style="height: 10px;">
							        <div class="container">
							            <div class="row">
							                <div class="col-md-12">
							                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">

							                        <div class="advisor-item">
							                            <div class="info-box">
							                                <img src="public/assets/img/advisor/1.jpg" alt="Thumb" class="image">
							                            </div>    
							                        </div> 

							                        <div class="advisor-item">
							                            <div class="info-box">
							                                <img src="public/assets/img/advisor/2.jpg" alt="Thumb" class="image">
							                            </div>    
							                        </div> 

							                        <div class="advisor-item">
							                            <div class="info-box">
							                                <img src="public/assets/img/advisor/3.jpg" alt="Thumb" class="image">
							                            </div>    
							                        </div> 
							                    </div>
							                </div>
							            </div>
							        </div>
							    </section>-->
    <!-- Start Registration & Faq 
    ============================================= -->
    <div class="reg-area inc-faq">
        <div class="containe">
            <div class="row">
                    <div class="col-md-12">
                        <div class="text-light" style="margin: 5px;margin-top: 10px;">
							<table  class="table table-hover">
								<tr> discussion instantanné
								</tr>
								<?php foreach ($sms as $value): ?>
								<tr class="<?php if($value['id_from'] <> $_SESSION['user']['id'] && $value['lu'] == 1){echo 'active'; } ?>">					
									<td>
										<a href="index.php?page=mail_chats&id=<?=$value['id']?>" style="color: blue;">
											<img src="public/assets/img/profil/<?= $value['photo'] ?>" class="imag">	
										</a>
									</td>
									<td>
										<a href="index.php?page=mail_chats&id=<?=$value['id']?>" style="color: blue;" class="nul">
										<?= $value['nom'] ?> <?= $value['prenom'] ?>
										</a>
									</td>
									<td>
										<a href="index.php?page=mail_chats&id=<?=$value['id']?>" style="color: black;">
										<?php if(isset($value['sms'])){?>
											<?= $value['sms'] ?>
										<?php }else{?>
											<i><b>Dites lui bonjours!</b></i>
										<?php } ?>
										</a>
									</td>
									<td>
										<a href="index.php?page=mail_chats&id=<?=$value['id']?>" style="color: black;">
										<?php if(isset($value['date_sms'])):?>
											<?= date('d-m-Y à H:i', strtotime($value['date_sms']))?>
										<?php endif ?>
										</a>
									</td>
								</tr>
								<?php endforeach ?>
							</table>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration & Faq  -->

<?php include 'footer.php'; ?>
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
        $('#chats').addClass('active');
</script>

</body>
</html>