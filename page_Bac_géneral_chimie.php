<?php 
require "include/functions.php";
      session_start();
     logged_only();
require 'sous_parties/header.php';

?>

<link rel="stylesheet" type="text/css" href="css/cours.css"> 
<div id="banniere"> 
	<!-- ici se trouve la banniere -->
	     	 	   
</div >


<div class="container-fluid" >
            
            <div class="row">

   <div class="col-12 col-md-9" style="background-image:url(images/coeur); width: 69.2%; border:groove; 
margin-left:0px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:150vh" >

              <div id="contenu_matière"> 
              	<h4 class="grand_titre" style=" text-align: center; color: white; background-color: black ; border-radius:5px;"> les sujets de chimie au baccalauréat  C et D </h4>
              </div>
   	    
            
              
                 <ul>
                     <li><p class="cours">  <a href="download/Chimie bacc générale/Chimie  bacc C et D 2011.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> baccalauréat C et D chimie session 2011 </a></p></li>
                  
                     
                 </ul>

                  <ul>
                     <li><p class="cours">  <a href="download/Chimie bacc générale/Chimie  bacc C et D 2018.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> baccalauréat C et D chimie session 2018 </a></p></li>
                  
                     
                 </ul>

                 <ul>
                     <li><p class="cours">  <a href="download/Chimie bacc générale/Chimie  bacc C et D 2019.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> baccalauréat C et D chimie session 2019 </a></p></li>
                  
                     
                 </ul>

                 

             </div> 


         <div class="col-12 col-md-3 " id="contenu-droit" > 

           <?php require 'sous_parties/aside.php'; ?>
       
      </div>     

   </div>

</div>



<?php
// require 'sous_parties/contenu_Bac_géneral_chimie.php';
require 'sous_parties/footer.php';

?>