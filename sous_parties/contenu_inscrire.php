<link rel="stylesheet" type="text/css" href="css/connexion.css"> 
<div id="banniere" > 
	<!-- ici se trouve la banniere -->
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




<div id="formulaire" >


  <!-- <div id="formulaire"  style=" height: auto; margin-left:100px; display: inline-block; position:relative;  text-align: center;
  vertical-align: top; float: left; width: 55%; margin-left:120px; padding:20px; "> -->
                  

<!-- <h3 class="title"> s'inscrire</h3> -->
<?php  if (!empty($errors)): ?>
  <div class="alert">
    <p> vous n'avez pas remplir le formulaire correctement</p>
      <ul>
            <?php foreach($errors as $error):  ?>
              <li><?=$error;?></li>

            <?php endforeach; ?>
      </ul>
  </div>

      <?php endif;?>


      <div class="row">

   <div class="col-12 col-md-3">
     


   </div>






<div class=" col-12 col-md-6 my-5 mx-2" style="background-image:url(images/coeur.png);background-color: rgba(255,255,255,0.7);  font-family: 'Cuprum', sans-serif;" >
         


         <form action="" method="POST">

  
  <div class="form-group">  
     <label for="">Nom</label>
     <input type="text" name="username" class="form-control" placeholder="Entrez votre nom">
   </div><br>

   <div class="form-group">   
     <label for="">Email</label>
     <input type="text" name="email" class="form-control" placeholder="Entrez votre email">
   </div><br>

   <div class="form-group">   
     <label for="">Mot de passe </label>
     <input type="password" name="password" class="form-control" placeholder="votre mot de passe">
   </div><br>

   <div class="form-group">   
     <label for=""> Confirmer votre mot de passe </label>
     <input type="password" name="password_confirm" class="form-control" placeholder="Confirmer votre mot de passe">
   </div>

   <button type="submit" class="btn btn-primary"> m'inscrire</button>

</form>

 </div>


<div class="col-12 col-md-3">
     


   </div>





</div>
 
</div>

