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

<h3> reinitialiser mon mot de passe </h3>

<form action="" method="POST">

  
  <div class="form-group">  
     <label for="">mot de passe</label>
     <input type="password" name="password" class="form-control">
   </div>

   

   <div class="form-group">   
     <label for="">confirmation du mot de passe</label>
     <input type="password" name="password_confirm" class="form-control">
   </div>

  

   <button type="submit" class="btn btn-primary">réinitialiser votre mot de passe</button>

</form>

             
</div>

