 <link rel="stylesheet" type="text/css" href="css/connexion.css">
<div id="banniere"> 
	<!-- ici se trouve la banniere -->

	<!-- *****************lien inscrire et se connecter********** -->
						
	<!-- ************ceci est une partie du compte******************* -->

             <?php  if (isset($_SESSION['flash'] )): ?>
             	<?php  foreach($_SESSION['flash'] as $type=>$message): ?>
             		<div class="alert alert-<?=$type; ?>">
             			<?=$message;?>
             		</div>	
                <?php endforeach;?>
                 <?php unset($_SESSION['flash']);?>
            <?php endif;?>
             		
	     	 	   
</div >

<div id="contenu">

<h2> bienvenue sur votre compte <?= $_SESSION['auth']->username; ?> </h2>


             
</div>

