<?php 

if (isset($_POST['submit'])) {
  extract($_POST);

  if (!empty($nom) and !empty($email) and !empty($message)) {
    require_once('db.php');
    $req=$pdo->prepare('INSERT INTO commentaires_cellules_solaires( nom,email,messages,datepost) VALUES(?,?,?,NOW())');
    $req->execute(array($nom,$email,$message));  
  }
}

 ?>

 
 
<?php require 'sous_parties/header.php';?>


<link rel="stylesheet" type="text/css" href="css/panneau.css">
<div id="banniere"> 
  <!-- ici se trouve la banniere -->
                      
             
</div >                  



<div class="container-fluid" >
            
            <div class="row">

   <div class="col-12 col-md-9" style="background-image:url(images/coeur.png); width: 69.2%; border:groove; 
      margin-left:0px; margin-right:0px; padding:30px; border-radius:5px; font-size:20px; float: left; min-height:150vh" >

           <h4 class="grand_titre"> COMMENT LES CELLULES SOLAIRES PRODUISENT-ELLES DE L’ELECTRICITE ? </h4>
        <p class="para" style="text-align:justify; "><br>

        Grâce à la baisse spectaculaire du prix des panneaux solaires, l’énergie solaire est devenu la moins chère de toutes les énergies. Chacun peut désormais disposer de cette énergie à moindre coût. En plus d’être moins chère, cette énergie est extrêmement abondante, il suffit de placer votre panneau solaire dans un endroit très bien éclairé.<br>Avant de se lancer dans l’utilisation de cette énergie, il serait important de savoir comment elle fonctionne et comment l’électricité est produite.
     </p>

     <p class="para" style="text-align:justify; "> L’énergie solaire peut être convertir directement en électricité à l’aide des <strong>cellules solaires</strong> grâce à <strong>l’effet photovoltaïque</strong>, mais aussi indirectement par des<strong> centrales solaires thermiques à concentration (CSTC)</strong>.<br>Les CSTC utilisent les lentilles ou des miroirs pour concentrer la lumière du soleil sur un fluide colporteur. Ce fluide, chauffé à une température de  l’ordre de 250 à 1000℃,  produit de l’électricité à l’aide d’une turbine à vapeur.<br>Dans cet article, nous nous intéresserons uniquement aux systèmes photovoltaïque. 

        </p>

         <p class="para">
           <p class="para" style="text-align:justify; ">Déjà plus haut, nous avons dit que l’énergie solaire peut être convertir directement en électricité à l’aide des cellules solaires grâce à l’effet photovoltaïque.
           </p>

               <h4 style="color:#A63716;text-align: center;"> Qu’est-ce que l’effet photovoltaïque ?</h4>

        <p class="para" style="text-align:justify; ">
       <strong>L’effet photovoltaïque</strong> a été découvert en 1839 par le physicien français Becquerel. Il s’agit  ici de la création d'une force électromotrice liée à l'absorption d'énergie lumineuse dans un solide.<br>Un panneau solaire est constitué de plusieurs cellules solaires. La cellule solaire est faite d’un matériaux semi-conducteur, comme le silicium qui a été dopé avec un agent qui a la propension de gagner ou de perdre des électrons, tels que le phosphore ou le bore.Dans le domaine des semi-conducteurs, le dopage est l'action d'ajouter des impuretés en petites quantités à une substance pure afin de modifier ses propriétés de conductivité. 
          Les propriétés des semi-conducteurs sont en grande partie régies par la quantité de porteurs de charge qu'ils contiennent. Ces porteurs sont les électrons ou les trous. <br><br>Il existe deux types de dopage :
        </p>
         <ul> 
         <li>le dopage de <strong> type N</strong>, qui consiste à apporter une forte densité d'électrons, qui sont négativement chargés ;</li>
        <li>le dopage de <strong> type P</strong>, qui consiste à installer un déficit d'électrons, donc un excès de trous, considérés comme positivement chargés.</li>
        </ul>
         
         <p class="para" style="text-align:justify; ">
         Les schémas suivants présentent des exemples de dopage du silicium respectivement par du phosphore (dopage N) et du bore (dopage P). Dans le cas du phosphore (à gauche), un électron supplémentaire est amené. Dans le cas du bore (à droite), il manque un électron ; c'est donc un trou d'électron qui est amené.
         </p>


         <p style="text-align: center;"> <img src=" images/dope.PNG  " title="dopage"  height="250" width="500"> </p>

          <p class="para" style="text-align:justify; ">
         Lorsque les deux types de silicium sont réunis, ils forment ce que nous appelons une jonction PN qui est la base de la cellule solaire.
         </p>

         <p style="text-align: center;"> <img src=" images/jonctionPN.PNG " title="dopage"  height="250" width="500"> </p>
                La recombinaison du surplus de trous et d’électrons des zones P et N mise en contact génère une barrière de potentiel appelée la zone de déplétion.
                <p style="text-align: center;"> <img src=" images/depletion.PNG " title="zone de déplétion"  height="450" width="600"> </p>

         <p class="para" style="text-align:justify; ">
                Il se crée un champs électrique (E) interne au niveau de la jonction. La force du champ électrique agit dans la direction opposée à la force de diffusion et empêche les charges libres restantes dans chaque zone de traverser la jonction pour se recombiner. 
          </p>

                     
        </p>
         
         <p class="para" style="text-align:justify; ">
          Quand un photon heurte une cellule solaire l’une des trois choses suivantes peuvent se produire :
           <ul> 
               <li><strong>Le photon peut traverser la cellule, cela arrive aux photon de faible énergie.</strong></li>
               <li><strong>Le photon peut être refléter par la surface de la cellule.</strong></li>
               <li><strong>Le photon peut être absorber par le silicium pour produire de l’électricité.</strong></li>

           </ul>
           <p style="text-align: center;"> <img src=" images/photon.PNG " title="photon"  height="350" width="500"> </p>

               Nous allons à present voir comment l'energie electrique est produite.la figure ci-dessous represente la bande d'energie d'un semi-conducteur 
                <p style="text-align: center;"> <img src=" images/bande.PNG " title="bande d'énergie"  height="400" width="500"> </p>

            <p class="para" style="text-align:justify; ">

                Quand un photon est absorbé, son énergie est transmise à un électron dans le réseau cristallin.  Cette énergie excite un électron de type P et le lance dans la bande de conduction où il est libre de se déplacer dans le semi-conducteur. <br>Quand l’électron quitte le silicium de type P, il laisse sa place vide créant un trou. Un électron d’atome voisin se déplace dans le trou laissant ainsi un autre trou derrière lui, et se propage ainsi des trous partout dans la structure cristalline.<br> De cette manière l’électricité commence à circulée dans le circuit auquel la cellule est raccordée.<br>
                Idéalement, un photon ayant une énergie égale à celle de la bande interdite heurte la cellule solaire et fait passer un électron de la bande de valence à la bande de conduction.<br>
                L’énergie de la bande interdite varie selon le matériau :

            </p>
                <p style="text-align: center;"> <img src=" images/energie.PNG " title="énergie de la bande de conduction"  height="103" width="500"> </p>

            <p class="para" style="text-align:justify; ">
                 La plupart des panneaux solaires sont constitués de cellules solaires à base du silicium. Cependant, une grande partie du rayonnement solaire atteignant la Terre est composée de photons ayant des énergies supérieures à la bande interdite du silicium.<br>Ces photons d’énergies élevée sont quand même absorbés par la cellule solaire, mais leurs énergies supplémentaires autrement dit la différence entre leurs énergies et celle de la bande interdite du silicium est convertie en chaleur, plutôt qu’en électricité.</p>
                 <p style="text-align: center;"> <img src=" images/chaleur.PNG " title="chaleur" height="300" width="450"> </p>

                 <strong>Quel est l'influence de la chaleur sur la panneau solaire? cela fera l'objet d'un autre article.</strong> <br><br>


                        <h3 style=" color:#22427C; font-weight: bold;">Ajouter un commentaire</h3><br>
                  

     <form action="" method="POST" style="background-color:;">

  
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
        $req=$pdo->prepare('SELECT *FROM commentaires_cellules_solaires ORDER BY id DESC');
        $req->execute();
        while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {
         
          ?>

        <div class="container-fluid my-4" style="background-color:#FBFCFA; border-radius:10px; ">

           
          <!-- *************afichage gravatar**************** -->

            
             <?php $avatar="http://2.gravatar.com/avatar/".md5($reponse->email)."?s=50&"; ?>

             <img src=" <?php echo $avatar; ?>"> 

              <!-- *************afichage gravatar**************** -->



           <span style="font-weight: bold; font-size:20px;"> <?php echo $reponse->nom; ?></span> le <?php echo $reponse->datepost ;  ?> <br>

            <span style="font-size:17px;"> <?php  echo $reponse->messages; ?></span> <br> <a style="text-decoration:underline; font-size: 15px; " href=" reponses.php?id= <?php echo $reponse->id; ?>"  >Repondre</a> 
            <a style=" font-size: 15px;" href=" reponses.php?id= <?php echo $reponse->id; ?>">
            Nombre de reponses:

            <?php 

            $nombredeReponse=$pdo->prepare('SELECT *FROM  reponses where id_parent=?');
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

      
      <?php require 'sous_parties/aside.php'; ?>
      
   </div>

 
</div>
</div>

<?php require 'sous_parties/footer.php';?>