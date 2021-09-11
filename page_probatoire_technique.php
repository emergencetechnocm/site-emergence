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
                         
</div >






<div class="container-fluid" >
            
            <div class="row  ">

         
<div class="col-12 col-md-9"  style="background-image:url(images/coeur); width: 69.2%; border:groove; margin-left:0px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:150vh" >
 

 <div class="container-fluid" >
         <div class="row align-items-center">
           <div class="col-12 col-md-6 my-5" style=" padding-left:90px ; ">
                <div class="dropdown">

          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Probatoire F2</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <!-- <a class="dropdown-item" href="#">Mecanique appliquée</a> -->
            <a class="dropdown-item" href="page_probatoire_techniquel_math.php">Mathematique</a>
            <a class="dropdown-item" href="page_Francais probatoire F.php">Français</a>
            
          </div>
        </div>
                 </div>


                   <div class="col-12 col-md-6 my-5" style="float:right; padding-left:90px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Probatoire F3</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <!-- <a class="dropdown-item" href="#">mécanique apliquée</a> -->
            <a class="dropdown-item" href="page_probatoire_techniquel_math.php">mathematique</a>
            <a class="dropdown-item" href="page_probatoire_technique_machine_électrique.php">machines électriques </a>
            <a class="dropdown-item" href="page_circuits electroniques, industriels et numériques.php">Circuits electroniques, industriels et numériques </a>
            <!-- <a class="dropdown-item" href="#">physiques</a>
            <a class="dropdown-item" href="#">Essais et mesures </a> -->
            <a class="dropdown-item" href="page_Francais probatoire F.php">Français</a>
            </div>
        </div>


         <div class="col-12 col-md-6 my-5" style=" padding-left:90px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Probatoire F4</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <!-- <a class="dropdown-item" href="#">Mecanique appliquée</a> -->
            <a class="dropdown-item" href="page_probatoire_techniquel_math.php">Mathematique</a>
            <a class="dropdown-item" href="page_Francais probatoire F.php">Français</a>
            
            </div>
        </div>



         <div class="col-12 col-md-6 my-5" style="float:right; padding-left:90px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px"> Probatoire F5</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
           <!--  <a class="dropdown-item" href="#">Mecanique appliquée</a> -->
            <a class="dropdown-item" href="page_probatoire_techniquel_math.php">Mathematique</a>
            <a class="dropdown-item" href="page_Francais probatoire F.php">Français</a>
            
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