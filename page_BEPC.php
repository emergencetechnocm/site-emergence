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
 
<div class="col-12 col-md-9" style="background-image:url(images/coeur); width: 69.2%; border:groove; 
margin-left:0px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:150vh" >
 

 <div class="container-fluid" >
         <div class="row align-items-center">
           <div class="col-10 col-md-6 my-5" style=" padding-left:300px ; float: center;">
                <div class="dropdown">

          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets de BEPC</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="page_mécanique appliquée bacc F23.php">PCT</a>
            <a class="dropdown-item" href="#">mathematique</a>
            <a class="dropdown-item" href="page_BEPC_Anglais.php">Anglais</a>
            <a class="dropdown-item" href="#">Francais</a>
            <a class="dropdown-item" href="page_BEPC_Allemand.php">Allemand</a>
            <a class="dropdown-item" href="#">SVT</a>
            <a class="dropdown-item" href="#">histoire&geographie</a>
            
            
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