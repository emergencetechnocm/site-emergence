
<?php require "sous_parties/header.php"; ?>


                                    <!--********* php commentaires************* -->

<?php 

if (isset($_POST['submit'])) {
  extract($_POST);

  if (!empty($nom) and !empty($email) and !empty($message)) {
    require_once('db.php');
    $req=$pdo->prepare('INSERT INTO commentaires_differents_types_de_cellules( nom,email,messages,datepost) VALUES(?,?,?,NOW())');
    $req->execute(array($nom,$email,$message));  
  }
}

 ?>


                                   <!--********* php commentaires************* -->



<link rel="stylesheet" type="text/css" href="css/panneau.css"> 
<div id="banniere"> 
	<!-- ici se trouve la banniere -->
	                    
	     	 	   
</div >								   



<div class="container-fluid" >
            
            <div class="row">

   <div class="col-12 col-md-9" style="background-image:url(images/coeur.png); width: 69.2%; border:groove; 
      margin-left:0px; margin-right:0px; padding:30px; border-radius:5px; font-size:20px; float: left; min-height:150vh" >

           <h4 class="grand_titre"> LES DIFFERENTS TYPES DE CELLULES SOLAIRES </h4>
   	    <p class="presentation"><br>
          Il existe trois générations de cellules solaires :
          <ul>
            <li>  1<sup>ere</sup> génération : Silicium Crystallin ;</li>
            <li>  2<sup>eme</sup> génération : Couche minces ;</li>
            <li>  3<sup>eme</sup> génération ; PV émergents.</li>
          </ul>
        Les efficiences  à travers les trois générations varient entre 10%  et 46% .

		   </p>

      <h5 style="font-weight: bold; text-align: center;"> 1<sup>ere</sup> génération des cellules solaires</h5>

		    <p class="para" style="text-align: justify;">
          Les cellules de première génération encore appelées <strong>cellules classiques, traditionnelles ou cellules « wafers »</strong> sont faites de silicium cristallin et sont classées en deux groupes : <strong>monocristallin et multicristallin</strong>, selon leur structure cristalline.
        </p>

        <p style="text-align: center;"> <img src=" images/cellules.png" title="les cellules"  height="174" width="290"> </p>

        <p class="para" style="text-align: justify;">
          Les panneaux solaires de types monocristallin possèdent des cellules qui ont été découpés d’un morceau de silicium cultivé d’un seul cristal unique.
        </p>

        <p class="para" style="text-align: justify;">
          Les cellules solaires multicristallines ou polycristallines sont composées de plusieurs cristaux orientés en différentes directions.<br>Le silicium liquide est placé dans un creuset en graphite, puis refroidit par le bas durant plusieurs dizaines d’heures.
        </p>
        <p style="text-align: center;"> <img src="images/multicristalline.PNG" title="les cellules"  height="200" width="420"> </p>


         <p class="para" style="text-align: justify;">
         	     Les cellules cristallines présentent sur le marché ont des efficiences d’environs 21-23% ; mais certaines laboratoires ont réussi à atteindre 25,6%.
         </p>

          <h5 style="font-weight: bold; text-align: center;"> 2<sup>eme</sup> génération des cellules solaires</h5>

          <p class="para" style="text-align: justify;">
               La deuxième génération inclut les cellules solaires à couches minces (thin flim), telles que le silicium amorphe, le CdTe (tellurure de cadmiun), les cellules CIGS (cuivre –indium-gallium-sélénium).<br>Les cellules aux silicium ont une épaisseur d’environ 200 micromètres et les cellules à couches minces ont moins de 10 micromètre d’épaisseur.<br>En laboratoire, les cellules du CIGS et de CdTe ont atteint une efficience de de 18% tandis que le silicium amorphe n’a atteint que 13%.<br>Cependant, les cellules CdTe posent un défi lorsqu’ils atteignent leur fin de vie compte tenu de leur teneur en cadmium. Le Cadmiun represente un risque environnemental.
         </p>

         <p class="para" style="text-align: justify;">
            4% de la production annuelle mondiale de cellules solaires  est consacrée à la technologie des couches minces alors que les cellules solaires au silicium cristallin dominent  le marché  à 90% et plus.
          </p>

         <p style="text-align: center;"> <img src="images/Couches minces.PNG" title="les cellules"  height="250" width="450"> </p>

         <h5 style="font-weight: bold; text-align: center;"> 3<sup>eme</sup> génération des cellules solaires</h5>
         <p class="para" style="text-align: justify;">
                 La troisième génération des cellules solaires inclut un certain nombre de technologies à couches minces dites « PV émergents ». La plupart d’entre elles n’ont pas encore été utilisés commercialement et sont toujours dans la phase de développement.
          </p>

          <p class="para" style="text-align: justify;">
                 Les technologies de couches minces émergentes peuvent être aussi minces que 0,6 micromètre. La plupart utilisent des matériaux organiques, souvent des composés organométalliques ainsi que des substances inorganiques.
          </p>
          <p class="para" style="text-align: justify;">
                 Ils sont fabriqués en utilisant des substances peu couteuses. Par exemple de l’encre photovoltaïque peut être déposée sur un film à l’aide d’une imprimante à jet d’encre ou bien un colorant photovoltaïque peut être vaporiser sur un substrat de verre.<br>Cette technologie requiert un investissement 10 à 20 fois inférieurs à ceux nécessités par la production des panneaux en silicium.<br><strong>Les cellules Pérovskites font parties de technologies prometteuses. Elles utilisent des panneaux peu couteux.</strong>
          </p>

          <p class="para" style="text-align: justify;">
                 Une cellule photovoltaïque de type pérovskite comprend un élément chimique ayant une structure de pérovskite, le plus souvent un hybride organique-inorganique de plomb ou un halogénure d’étain.
          </p>

          <p style="text-align: center;"> <img src="images/perovskite.PNG" title="les cellules"  height="200" width="400"> </p>

          <p class="para" style="text-align: justify;">
                 L’efficience de la cellule solaire de type pérovskite sous les conditions de laboratoire s’est améliorée considérablement passant de 14 à 22 %.<br><strong>Les chercheurs travaillent sur l’élimination du plomb des cellules solaires perovskite, le Plomb étant un danger pour l’environnement.</strong> 
          </p> <br> <br>





   <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  $('.repondre').click(function(){
    var id = $(this).attr('data-rel');
    if($('#comform-div-' + id).hasClass('hidden'))
    {
      $('.repondre').removeClass('button-blue');
      $(this).addClass('button-blue').css('float','left');
      $('.comform-div').addClass('hidden');
      $('#comform-div-' + id).find('p').show();
      $('#comform-div-' + id).removeClass('hidden');
      return false;
    }
    else
    {
      $('#comform-' + id).submit();
      return false;
    }
  });
</script>






<h3 style="color:#22427C; font-weight: bold;">Ajouter un commentaire</h3><br>
                  

     <form action="" method="POST" style="background-color:; font-size:20px;">

  
  <div class="form-group">  
     <input type="text" name="nom" class="form-control" required="" placeholder="votre nom">
   </div>

   <div class="form-group">   
     <input type="email" name="email" class="form-control" required="" placeholder="votre email">
   </div>

   <div class="form-group" class="col-s-12">   
   <textarea name="message" placeholder="Votre commentaire..." required=""  class="form form-contol"></textarea><br>
   
   </div>


   <input type="submit" name ="submit" value ="poster" class="btn btn-primary">

</form><br> 


       
       <?php  
        require_once('db.php');
        $req=$pdo->prepare('SELECT *FROM  commentaires_differents_types_de_cellules ORDER BY id DESC');
        $req->execute();
        while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {
         
          ?>

        <div class="container-fluid my-4" style="background-color:#FEFEFE; border-radius:10px; ">



          <!-- *************afichage gravatar**************** -->

            
             <?php $avatar="http://2.gravatar.com/avatar/".md5($reponse->email)."?s=50&"; ?>

             <img src=" <?php echo $avatar; ?>"> 

              <!-- *************afichage gravatar**************** -->



           <span style="font-weight: bold; font-size:20px;"> <?php echo $reponse->nom; ?></span> le <?php echo $reponse->datepost ;  ?> <br>

            <span style="font-size:17px;"> <?php  echo $reponse->messages; ?></span> <br> <a style="text-decoration:underline; font-size: 15px; " href=" reponses2.php?id= <?php echo $reponse->id; ?>"  >Repondre</a> 
            <a style=" font-size: 15px;" href=" reponses2.php?id= <?php echo $reponse->id; ?>">
            Nombre de reponses:

            <?php 

            $nombredeReponse=$pdo->prepare('SELECT *FROM  reponses2 where id_parent=?');
            $nombredeReponse->execute(array($reponse->id));
             $nombredeReponse= $nombredeReponse->fetchALL();

             echo count($nombredeReponse);

             ?>
            </a>

        </div>
       
       <?php  

        }

        ?>



   </div>



    <div class="col-12 col-md-3 " id="contenu-droit" >

    	<?php require 'sous_parties/aside.php';?>
   	
   </div>

 </div>
</div>




<?php require "sous_parties/footer.php";?>