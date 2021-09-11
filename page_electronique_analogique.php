<?php 
require "include/functions.php";
      session_start();
     logged_only();
require 'sous_parties/header.php';
// 
?>

<link rel="stylesheet" type="text/css" href="css/electronique.css"> 
<div id="banniere"> 
	<!-- ici se trouve la banniere -->
	     	 	   
</div >

<div class="container-fluid" >
            
            <div class="row">

  <div class="col-12 col-md-9" style="background-image:url(images/coeur); width: 69.2%; border:groove; 
margin-left:0px; margin-right:0px; padding:50px; border-radius: 5px;float: left; min-height:150vh" >
 

              <div id="contenu_matière"> 
              	<h4 class="grand_titre" style="text-align: center; color: white; background-color: black ; border-radius:5px;"> ELECTRONIQUE ANALOGIQUE </h4>
              </div>
   	    
                <!-- ***************l'electronique analogique *************** --> 

        <div class="container-fluid">

        	<div class="row">
        	    <div class="col-12 col-md-6" style="border: groove; border-radius:10px;" >

        	    	<h5 style="text-align: center;"> cours</h5>

                 <ul>
                     
                     
                     <li><p class="cours">  <a href="download/Technologie des Resistances.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Technologies des resistors electriques </a></p>
                     </li>

                     <li><p class="cours">  <a href="download/Technologie des Condensateurs.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Technologies des condensateurs  </a></p></li>

                     
                 </ul>         
        	    	
        	    </div> 



        	    <div class="col-12 col-md-6" style="border: groove; border-radius:10px;" >
        	    	<h5 style="text-align: center;"> TD</h5>

        	    	 <ul>
                     
                     
                     <li><p class="cours">  <a href="download/cours circuits analogiques/TD1 lois et theoremes d'analyse en courant continu.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> TDn<SUP>0</SUP>1:lois et theoremes d'analyse en courant continu </a></p>
                     </li>

                     
                 </ul>         
        	    	
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