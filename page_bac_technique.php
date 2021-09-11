<?php  
require "include/functions.php";
      session_start();
     logged_only();
require 'sous_parties/header.php';
?>
// 

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
         

<div class="col-12 col-md-9"  style="background-image:url(images/coeur); border:groove; 
margin-left:0px; margin-right:0px; padding:10px; border-radius: 5px;  min-height:153vh" >

 

 <div class="container-fluid" >
         <div class="row align-items-center">
           <div class="col-12 col-md-5 my-5 " style=" padding-left:90px;">
                <div class="dropdown">

          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets Bac F2</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_mécanique appliquée bacc F23.php">Mecanique appliquée</a>
            <a class="dropdown-item" href="page_Bac_technique_math tle F.php">Mathematique</a>
            <a class="dropdown-item" href="page_Histoire&Géographie bacc F.php">Histoire&Géographie </a>
            <a class="dropdown-item" href="page_francais BACC F.php">Français </a>
             <a class="dropdown-item" href="page_francais BACC F.php">Anglais </a>
            <a class="dropdown-item" href="page_Education à la citoyennete BACC F.php">Education à la citoyennete </a>
        </div>
       </div>
        </div>
       



       <div class="col-12 col-md-5 my-5" style="float:right; padding-left:90px;" >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px;   margin-left:15px">Sujets Bac F3</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="page_mécanique appliquée bacc F23.php">mécanique apliquée</a>
            <a class="dropdown-item" href="page_Bac_technique_math tle F.php">mathematique</a>
            <a class="dropdown-item" href="page_electronique de puissance bacc F3.php">Electronique de puisannce </a>
            <a class="dropdown-item" href="page_installation électrique  bacc F3.php">Installation electrique </a>
            <a class="dropdown-item" href="page_commande de machine bacc F3.php">commande des machines</a>
            <a class="dropdown-item" href="page_réalisation d'un projet bacc F3.php">Realisation d'un projet </a>
             <a class="dropdown-item" href="page_Histoire&Géographie bacc F.php">Histoire&Géographie </a>
             <a class="dropdown-item" href="page_francais BACC F.php">Français </a>
             <a class="dropdown-item" href="page_Education à la citoyennete BACC F.php">Education à la citoyennete </a>
            
            </div>
        </div>
        </div>


         <div class="col-12 col-md-5 my-5" style=" padding-left:90px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets Bac F4</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_réglementation BACC F4.php">Reglementation</a>
            <a class="dropdown-item" href="page_Bac_technique_math tle F.php">Mathematique</a>
            <a class="dropdown-item" href="page_Histoire&Géographie bacc F.php">Histoire&Géographie </a>
            <a class="dropdown-item" href="page_francais BACC F.php">Français </a>
            <a class="dropdown-item" href="page_Education à la citoyennete BACC F.php">Education à la citoyennete </a>
            
            </div>
        </div>



         <div class="col-12 col-md-5 my-5" style="float:right; padding-left:90px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px"> Sujets Bac F5</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_Bac_technique_math tle F.php">Mathematique</a>
            <a class="dropdown-item" href="page_technologie bacc F5.php">Technologie</a>
            <a class="dropdown-item" href="page_climatisation-ventilation.php">Climatisation-Ventilation</a>
            <a class="dropdown-item" href="page_refrigération bacc F5.php">Refrigération</a>
            <a class="dropdown-item" href="page_Histoire&Géographie bacc F.php">Histoire&Géographie </a>
            <a class="dropdown-item" href="page_francais BACC F.php">Français </a>
            <a class="dropdown-item" href="page_Education à la citoyennete BACC F.php">Education à la citoyennete </a>
            
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
  </div>

 <?php

require 'sous_parties/footer.php';
?>