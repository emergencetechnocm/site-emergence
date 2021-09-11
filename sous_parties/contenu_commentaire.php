<link rel="stylesheet" type="text/css" href="css/blog.css"> 

<div id="banniere"> 
	<!-- ici se trouve la banniere -->
	     	 	   
</div >



<div class=" container-fluid" >
	
	<div class=" row">
      
      <div class=" col-12 col-md-9" style="border: groove; border-radius: 10px; "> 

      	<!--**** ******************ici represente la partie traitement du commentaire *******************-->

          <p style="font-weight: bold;"><a href="page_blog.php"> <i class="fa fa-backward" aria-hidden="true"></i>Retour à la liste des articles</a></p>

	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=tuto;charset=utf8','root','');
	if(isset($_GET['id']) AND !empty($_GET['id'])) {
	   $getid = htmlspecialchars($_GET['id']);
	   $donnees = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles WHERE id = ?');
	   $donnees->execute(array($getid));
	   $donnees = $donnees->fetch();

// **********************************************
	    // include ("afficher_article.php");
	    echo nl2br(htmlspecialchars($donnees['contenu']));
   // ***************************************

	   if(isset($_POST['submit_commentaire'])) {
	      if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
	         $pseudo = htmlspecialchars($_POST['pseudo']);
	         $commentaire = htmlspecialchars($_POST['commentaire']);
	         if(strlen($pseudo) < 25) {


	            $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article, date_time_post) VALUES (?,?,?,NOW())');


	            $ins->execute(array($pseudo,$commentaire,$getid));
	            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
	         } else {
	            $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
	         }
	      } else {
	         $c_msg = "<span style='color:red'>Erreur: Tous les champs doivent être complétés</span>";
	      }
	   }



	   $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_article = ? ORDER BY id DESC');
	   $commentaires->execute(array($getid));

	?>


	<p><?= $donnees['contenu'] ?></p> <!-- cette ligne donne le contenu de l'article -->
	<!-- <br /> -->
	<div class="container-fluid" style="background-image:url(images/coeur); width: 69.2%; border:groove; 
margin-left:145px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:30vh" >


	<h4> <em> Ajouter un commentaire: </em></h4>
	<form method="POST" class="form-group" >
	   <input  type="text" name="pseudo" placeholder="Votre nom" class="form-contol"  cols="60" rows="2"  /><br />
	   <textarea name="commentaire" class="form-contol" placeholder="Votre commentaire..." cols="60" rows="2" ></textarea><br />
	   <input type="submit" value="Poster" name="submit_commentaire" class="btn btn-primary" />
	</form>

</div>

	<?php if(isset($c_msg)) { echo $c_msg; } ?>
	<br />
	<?php while($c = $commentaires->fetch()) { ?>
	   <b><?= $c['pseudo'] ?></b> le <?= $c['date_time_post'] ?><br /><br />  <em style="background: #E7E7E7; margin-left:50px; padding: 5px;border-radius: 4px;"><?= $c['commentaire'] ?> </em><br /><br />
	<?php } ?>
	<?php
	}
	?>


      </div>


     <div class=" col-12 col-md-3" style="border: groove; border-radius:10px;"> 

     <?php require 'sous_parties/aside.php'; ?>

      </div>


	 </div>
</div>









