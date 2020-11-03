<!DOCTYPE html>
<html>
<head><?php include 'head.php'; ?></head>
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
	.nul{
		font-weight: 600;
	}
	.moi{
		float: left;
		width: auto;
		max-width: 80%;
		margin-left: 26px;
		position: relative;
		padding: 7px 20px;
		color: #000;
		background: #E5E5EA;
		border-radius: 30px 10px 20px 1px;
		margin-bottom: 15px;
		clear: both;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, .3);

	}
	.lui{
		float: right;
		width: auto;
		max-width: 80%;
		margin-right: 26px;
		position: relative;
		padding: 7px 20px;
		color: #fff;
		background: #0093f6;
		border-radius: 10px 10px 1px 30px ;
		margin-bottom: 15px;
		clear: both;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, .3);
	}
	.chat{
		border: 1px solid red;
		padding: 10px 0;
		border-radius: 10px;
		overflow: scroll;
		height: 400px;
        margin: 20px 0;
		background-color: orange;
        position: relative;
        word-break: break-word;
	}
	.send{
		border: 1px solid #ccc;
		position: relative;
		border-radius: 10px;
		padding-top: 5px;
		background-color: white;
		margin-bottom: 30px;
	}
	.text_send{
		border: none;
		overflow: none;
		resize: none;
		width: 90%;
		outline: none;
		padding: 0 5px;
	}
	.send_fa{
		position: absolute;
		top: 0px;
		right: 2px;
		font-size: 28px;
	}
	.send_btn{
		border: none;
		background: transparent;
		outline: none;
	}
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
          margin-top: : 10px;
    }
    .btn_me{
        width: 100%;
        display: flex;
        outline: none !important;
        background: transparent;
        border: none;
        color: black;
        text-align: center;
        margin-bottom: 10px;
        padding: 5px 20px;
        transition: all .5s ease;
        box-shadow: 2px 2px 4px rgba(33, 33, 33, .1);
    }
    .btn_me:hover{ 
        width: 100%;
        background: #3498db;
        border: none;
        color: white;
        border: 5px;
        border-radius: 10px;
    }
    .btn_masquer{ 
        display: none;
    }
</style>
    <!-- Start Registration & Faq 
    ============================================= -->
    <div class="reg-area inc-faq">
        <div class="containe">
            <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container">
                            <table  class="table" style="margin-bottom: -10px;">
                                <tr>                    
                                    <td>
                                        <a href="index.php?page=see_profil&id=<?= $_GET['id']?>">
                                            <img src="public/assets/img/profil/<?= $admin['photo'] ?>" class="imag">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?page=see_profil&id=<?= $_GET['id']?>">
                                        <h3 style="margin-top: 10px;"><?= $admin['prenom'] ?> <?= $admin['nom'] ?></h3>
                                        </a>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="text-light chat" style="margin: 5px;margin-top: 10px;" id="msg">
                            <?php if ($count_conversation['nbr'] > $nombre_afficher):?>
                                <button id="voir_plus" class="btn_me">Voir plus ...</button>
                            <?php endif ?>
                            <div id="voirplus"></div>
								<?php foreach ($conversation as $value): 
										if ($value['id_from'] == $_SESSION['user']['id']) {
											
								?>
									<div class="text-right moi">
										<?=$value['sms']?> 
									</div>
								<?php }else{ ?>
									<div class="lui">
										<?=$value['sms']?>
									</div>
								<?php } endforeach ?>
                        <div id="afficher"></div>
                        </div>
                        <div class="send">
                        	<form method="POST" id="send">
                        		<?php if(isset($_SESSION['vide']) && $_SESSION['vide']):?>
                        			<div class="alert alert-info">Aucune message trouvé</div>
                        		<?php $_SESSION['vide'] = false; endif ?>

                        		<?php if(isset($_SESSION['echec']) && $_SESSION['echec']):?>
                        			<div class="alert alert-danger">Message non envoyé</div>
                        		<?php $_SESSION['echec'] = false; endif ?>
                        		<textarea class="autoExpand text_send" rows="1" name="mail" id="message" placeholder="Envoyer votre message"></textarea>
                        		<div class="send_fa">
                        			<button class="btn send_btn" name="send"><i class="fa fa-paper-plane"></i></button>
                        		</div>
                        	</form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration & Faq  -->

<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
<script src="public/assets/js/main.js"></script>
  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $('#chats').addClass('active');

        $(document).ready(function(){

            document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;

        	$('#send').on("submit",function(e){
        		e.preventDefault();
        		var id;
        		var message;
        		id = <?= json_encode($id, JSON_UNESCAPED_UNICODE); ?>;
        		message = document.getElementById('message').value;

        		document.getElementById('message').value='' ;
        		if (id > 0 && message !="") {
        			$.ajax({
        				url : 'app/send_mail.php',
        				method : 'POST',
        				dataType : 'html',
        				data : {id: id, message: message},

        				success : function(data){
        					$('#afficher').append(data);
                            document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;
        				},

        				error :function(e, xhr, s){
        					let error = e.responseJSON;
        					if(e.status == 403 && typeof error !== 'undefined'){
        						alert('Erreur 403');
        					}else if(e.status == 404){
        						alert('Erreur 404');
        					}else{
        						alert('Erreur 401');
        					}
        				},
        			});
        		}
        	});

        	var char_auto = 0;
        	char_auto = clearInterval(char_auto);
        	char_auto = setInterval(charauto,2000);

        	function charauto(){
        		var id = <?= json_encode($id, JSON_UNESCAPED_UNICODE); ?>;

        			$.ajax({
        				url : 'app/charauto.php',
        				method : 'POST',
        				dataType : 'html',
        				data : {id: id},

        				success : function(data){
        					if (data.trim() !="") {

        					$('#afficher').append(data);
                            document.getElementById('msg').scrollTop = document.getElementById('msg').scrollHeight;

        					}
        				},

        				error :function(e, xhr, s){
        					let error = e.responseJSON;
        					if(e.status == 403 && typeof error !== 'undefined'){
        						alert('Erreur 403');
        					}else if(e.status == 403){
        						alert('Erreur 403');
        					}else{
        						alert('Erreur 403');
        					}
        				},
        			});
        	}

            <?php if ($count_conversation['nbr'] > $nombre_afficher):?>
                var req = 0;

                $('#voir_plus').click(function(){

                var id;
                var el;
                req += <?= $nombre_afficher ?>;
                id = <?= json_encode($id, JSON_UNESCAPED_UNICODE); ?>;

                    $.ajax({
                        url : 'app/voirplus.php',
                        method : 'POST',
                        dataType : 'html',
                        data : {limit: req,id: id},

                        success : function(data){
                           $(data).hide().appendTo('#voirplus').fadeIn(2000);
                            document.getElementById('voirplus').removeAttribute('id');
                        },

                        error :function(e, xhr, s){
                            let error = e.responseJSON;
                            if(e.status == 403 && typeof error !== 'undefined'){
                                alert('Erreur 403');
                            }else if(e.status == 403){
                                alert('Erreur 403');
                            }else{
                                alert('Erreur 403');
                            }
                        },
                    });
                });
            <?php endif ?>

        });
</script>

</body>
</html>