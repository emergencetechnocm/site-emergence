
          <div id="posts" style="background-color:#F8F9F9"><br>
            <!-- <h5 class="aside"> Nos derniers posts  </h5> -->
                <?php
   
        $bdd = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8','root','');
         
        $articles = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');
        if(isset($_GET['q']) AND !empty($_GET['q'])) {
           $q = htmlspecialchars($_GET['q']);
           $articles = $bdd->query('SELECT titre FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
           if($articles->rowCount() == 0) {
              $articles = $bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
           }
        }
        ?>

                     <form method="GET" class="form-group mr-sm-4" style="background-image:url(images/coeur.png); border-radius: 5px;">
                      
                         <input type="search" class="form-contol " name="q" placeholder="Rechercher un article ..." aria-label="Rechercher un article ..." />
                         <button type="submit" class="btn btn-secondary my-2 my-sm-0 mr-sm-1"> rechercher</button>
                             
                     </form>
                    
 
                  <?php if($articles->rowCount() == 1) { ?>
     
                       <?php if($a = $articles->fetch())  {?>
                       <?= '<a href="'.$a['titre'].'.php" class="resultat" >'.$a['titre'].'</a>' ?> 
                       <?php  $articles->closeCursor();?>
                       <?php } ?>
         
                       <?php } ?> <br><br>

           <!-- *****************barre de recherche*********************  -->  
            
             


                                <h4 class="aside" style="font-family: 'Oswald', sans-serif;"> Nos derniers posts  </h4>

                   <div class="my-4" style="background-image: url(css/panneau.png); background-size:cover; border-radius: 5px; font-family:'Oswald', sans-serif; padding-top: 20px;">
                       <!--  <img src="css/panneau.png" class="mr-3"   alt="electronique" width="50" style="border-radius: 5px;"> -->
                           
                                 <a href="comment les cellules solaires produisent-elles de l'électricité.php" class="article" style="color: white; text-align: center; vertical-align: middle;">Comment les cellules solaires produisent-elles de l'électricité ?</a><br><br>

                            
                     </div> 
  
                      
            <div class="my-4" style="background-image: url(images/cellules1.png);background-size:cover; border-radius: 5px;  font-family:'Oswald', sans-serif;padding-top: 20px; ">
                     <!-- <img src="images/types cellules.png" class="mr-3"   alt="electronique" width="50" style="border-radius: 5px;"> -->
                                 <a href="Les différents types de cellules solaires.php" class="article" style="color: white;">les différents types de cellules <span style="color:orange;"> solaires</span> </a><br><br>          
                   </div> 




         </div>




      

<!-- <div class="container-fluid my-4"  >
 
    <div class="row justify-content-around">
<div class="col-12 " style="text-align: center;"  >
          <h4 class="aside" style="text-align: center;">Suivez-nous sur</h4>  
             

          <a href="https://m.facebook.com/Emergence-Technocm-101793484917844/?ref=bookmarks" target="_blank" style=" " ><i class="fa fa-facebook-square" style=" font-size: 3rem; color: #14568C;  "></i></a>

           <a href="https://www.instagram.com/emergencetechnocm/" target="_blank" style="padding:15px;"><i class="fa fa-instagram" style=" font-size: 3rem;color: #14568C;"></i> </a>

           <a href="https://twitter.com/ETechnocm" target="_blank" ><i class="fa fa-twitter-square" style=" font-size: 3rem;color: #14568C;"></i> </a>

        
       </div>
 </div>
</div>

 -->