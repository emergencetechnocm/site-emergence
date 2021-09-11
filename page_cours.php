<?php 
require "include/functions.php";
      session_start();
     logged_only(); 
require 'sous_parties/header.php';
// 
?>

<link rel="stylesheet" type="text/css" href="css/cours.css"> 
<div id="banniere"> 
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
       <!-- ************message de bienvenue******************* -->          
  <h2 class="bienvenue"> bienvenue sur votre compte <?= $_SESSION['auth']->username; ?> </h2>
             
</div >


<div class="container-fluid" >
            
            <div class="row  ">
         

<div class="col-12 col-md-9"  style="background-image:url(images/coeur);  border:groove; 
margin-left:0px; margin-right:0px; padding:40px; border-radius: 5px;float: left; min-height:153vh" >
 

 <div class="container-fluid" >
         <div class="row align-items-center">
           <div class="col-12 col-md-4 my-5 " style=" padding-left:90px ;">
                <div class="dropdown">

          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size:20px;">cours & TD</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_electronique_Analogique.php">Electronique Analogique  </a>
             <a class="dropdown-item" href="page_electronique_numérique.php">Electronique numerique  </a>
             <a class="dropdown-item" href="#">mathematiques</a>
            <!-- <a class="dropdown-item" href="#">Electrotechnque  </a>
            <a class="dropdown-item" href="#">informatique </a>
            <a class="dropdown-item" href="#">Automatique</a>
            <a class="dropdown-item" href="#">cours d'EPS</a> -->
            
          </div>
        </div>
                 </div>


      <div class="col-12 col-md-4 my-5 " style="float:right; padding-left:90px; ">
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px;">epreuves d'examens</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="page_bac_géneral.php">Baccalaureat géneral </a>
            <a class="dropdown-item" href="page_bac_technique.php">Baccalaureat technique </a>
            <a class="dropdown-item" href="page_probatoire_géneral.php">Probatoire géneral </a>
            <a class="dropdown-item" href="page_probatoire_technique.php">Probatoire technique </a>
            <a class="dropdown-item" href="page_BEPC.php">BEPC</a>
            <a class="dropdown-item" href="page_CAP_industriel.php">CAP industriels</a>
            <a class="dropdown-item" href="page_CAP_STT.php">CAP STT</a>
            
            </div>
        </div>
      

         </div>


<div class="col-12 col-md-4 my-5 " style="float:right; padding-left:90px; ">
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:20px;">epreuves concours</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="page_ENSET.php"> ENSET </a>
            <a class="dropdown-item" href="page_IUT.php"> IUT </a>
            <!-- <a class="dropdown-item" href="page_bac_technique.php">Baccalaureat technique </a>
            <a class="dropdown-item" href="page_probatoire_géneral.php">Probatoire géneral </a>
            <a class="dropdown-item" href="page_probatoire_technique.php">Probatoire technique </a>
            <a class="dropdown-item" href="page_BEPC.php">BEPC</a>
            <a class="dropdown-item" href="page_CAP_industriel.php">CAP industriels</a>
            <a class="dropdown-item" href="page_CAP_STT.php">CAP STT</a> -->
            
            </div>
        </div>
      

         </div>




        
  </div> 
 
</div>
</div>

    <div class="col-12 col-md-3 " id="contenu-droit" >

        <?php require 'sous_parties/aside.php'; ?>
       
    </div>

 
</div>	
</div>  



<?php
require 'sous_parties/footer.php';
?>