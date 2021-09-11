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

<h3> Mot de passe oublié</h3>


<form action="" method="POST">

    
    <div class="form-group">    
       <label for="">email</label>
       <input type="email" name="email" class="form-control">
   </div>


   <button type="submit" class="btn btn-primary"> se connecter</button>

</form>

             
</div>

