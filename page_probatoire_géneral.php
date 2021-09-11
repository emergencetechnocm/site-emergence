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
         <div class="row ">
           <div class="col-10 col-md-5 my-5" style="  padding-left:20px ; ">
                <div class="dropdown">

         <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets probatoire A</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_probatoire_géneral_physique-chimie A-ABI.php">physique-chime</a>
            <a class="dropdown-item" href="page_probatoire_géneral_ECM.php">Education à la citoyenneté</a>
           <a class="dropdown-item" href="page_probatoire_géneral_EPS.php">EPS</a>
            
          </div>
        </div>
                 </div>


                   <div class="col-10 col-md-5 my-5" style="float:right; padding-left:10px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets probatoire C</button>
          <div class="dropdown-menu" aria-labelledby="deroulantb">
            <a class="dropdown-item" href="page_probatoire_géneral_informatique.php">informatique</a>
            <!-- <a class="dropdown-item" href="#">mathematique</a> -->
            <a class="dropdown-item" href="page_probatoire_géneral_chimie.php">Chimie</a>
            <a class="dropdown-item" href="page_probatoire_géneral_EPS.php">EPS</a>
            <a class="dropdown-item" href="page_probatoire_géneral_ECM.php">Education à la citoyenneté</a>
            <a class="dropdown-item" href="page_probatoire_géneral_histoire D-TI.php">Histoire</a>
            <a class="dropdown-item" href="page_probatoire_géneral_litterature D-TI.php">Littérature</a>
            <a class="dropdown-item" href="page_probatoire_géneral_philosophie C-E.php">Philosophie</a>
            <a class="dropdown-item" href="page_probatoire_géneral_langue francaise D-TI.php">Langue française</a>
            </div>
        </div>


         <div class="col-10 col-md-5 my-5" style=" padding-left:20px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets probatoire D</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <a class="dropdown-item" href="page_probatoire_géneral_informatique.php">informatique</a>
            <a class="dropdown-item" href="page_probatoire_géneral_physique D.php">Physique</a>
            <a class="dropdown-item" href="page_probatoire_géneral_math D.php">Mathematique</a>
            <a class="dropdown-item" href="page_probatoire_géneral_chimie.php">Chimie</a>
            <a class="dropdown-item" href="page_probatoire_géneral_SVT D.php">SVT</a>
            <a class="dropdown-item" href="page_probatoire_géneral_histoire D-TI.php">Histoire</a>
            <a class="dropdown-item" href="page_probatoire_géneral_ECM.php">Education à la citoyenneté</a>
            <a class="dropdown-item" href="page_probatoire_géneral_philosophie C-E.php">Philosophie</a>
            <a class="dropdown-item" href="page_probatoire_géneral_langue francaise D-TI.php">Langue française</a>
            <a class="dropdown-item" href="page_probatoire_géneral_litterature D-TI.php">Littérature</a>
            <a class="dropdown-item" href="page_probatoire_géneral_EPS.php">EPS</a>
            
            </div>
        </div>



         <div class="col-10 col-md-5 my-5" style="float:right; padding-left:10px; >
        
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 15px; margin-left:15px">Sujets probatoire TI</button>
          <div class="dropdown-menu" aria-labelledby="deroulanta">
            <!-- <a class="dropdown-item" href="#">informatique</a> -->
            <a class="dropdown-item" href="page_probatoire_géneral_physique D.php">Physique</a>
            <a class="dropdown-item" href="page_probatoire_géneral_math D.php">Mathematique</a>
            <a class="dropdown-item" href="page_probatoire_géneral_EPS.php">EPS</a>
            <a class="dropdown-item" href="page_probatoire_géneral_ECM.php">Education à la citoyenneté</a>
            <a class="dropdown-item" href="page_probatoire_géneral_histoire D-TI.php">Histoire</a>
            <a class="dropdown-item" href="page_probatoire_géneral_philosophie C-E.php">Philosophie</a>
            <a class="dropdown-item" href="page_probatoire_géneral_langue francaise D-TI.php">Langue française</a>
            <a class="dropdown-item" href="page_probatoire_géneral_litterature D-TI.php">Littérature</a>
            
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