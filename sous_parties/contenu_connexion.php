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

<div id="formulaire"  >


  <!-- <div id="formulaire"  style=" height: auto; margin-left:100px; display: inline-block; position:relative;
  vertical-align: top; float: left; width: 60%; margin-left:120px; padding:30px; ">
 -->


<!-- <h3 class="title"> se connecter</h3> -->
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





    <div class="col-12 col-md-12 " style="text-align: center; margin-top:40px; font-family: 'Oswald', sans-serif;"> 

  <h6 class="title" >Inscrivez vous <a href="inscrire.php" style=" margin-right:280px; color:blue; text-decoration:underline; text-align: center; " >ici</a></h6><br>

   </div>





     <div class="row">

      

   <div class="col-12 col-md-3">
     

   </div>




 
<!-- <h6 class="title">Inscrivez vous <a href="inscrire.php" style="float:center; margin-right:200px; color:blue; text-decoration:underline; " >ici</a></h6><br> -->


<div class="col-12 col-md-6  mx-2 " style="background-image:url(images/coeur.png);background-color: rgba(255,255,255,0.7); margin-bottom: 40px; font-family: 'Cuprum', sans-serif;" >

<form action="" method="POST">

  
  <div class="form-group">  
     <label for="">Nom ou email</label>
     <input type="text" name="username" class="form-control">
   </div><br>

   

   <div class="form-group">   
     <label for="">Mot de passe <a href="forgot.php">(j'ai oublié mon mot de passe)</a></label>
     <input type="password" name="password" class="form-control">
   </div><br>

   <div class="form-group">   
     <label > 
     <input type="checkbox" name="remember" value="1"/> se souvenir de moi
     </label>
   </div>
  

   <button type="submit" class="btn btn-primary"> se connecter</button>

</form>
             
</div>


<div class="col-12 col-md-3">
     


   </div>



</div>


 </div>