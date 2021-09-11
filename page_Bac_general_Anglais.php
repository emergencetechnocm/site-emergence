<?php 
require "include/functions.php";
      session_start();
     logged_only();
require 'sous_parties/header.php';
// require 'sous_parties/contenu_Bac_géneral_Anglais.php';
?>

<link rel="stylesheet" type="text/css" href="css/cours.css"> 
<div id="banniere"> 
	<!-- ici se trouve la banniere -->
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
            
            <div class="row">

   <div class="col-12 col-md-9" style="background-image:url(images/coeur); width: 69.2%; border:groove; 
margin-left:0px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:150vh" >

              <div id="contenu_matière"> 
              	<h4 class="grand_titre" style=" text-align: center; color: white; background-color: black ; border-radius:5px;"> les sujets d'anglais au baccalauréat A, C, D, E et TI </h4>
              </div>
   	    
            
              
                 <ul>
                     <li><p class="cours">  <a href="download/bacc_générale_Anglais/Bac_Anglais_2018_C_D_E_TI.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sujet d'anglais au baccalauréat C, D, E et TI session 2018 </a></p></li>
                  
                     
                 </ul>

                  

                 

             </div> 


         <div class="col-12 col-md-3 " id="contenu-droit" > 

           <?php require 'sous_parties/aside.php'; ?>
       
      </div>     

   </div>

</div>




<?php 

require 'sous_parties/footer.php';
?>