
<?php
require 'sous_parties/header.php';
?>

<!-- ***********************PHP reponses****************** -->

<?php 

if (isset($_POST['submit'])) {
  extract($_POST);

  if (!empty($nom) and !empty($email) and !empty($message)) {
    require_once('db.php');
    $req=$pdo->prepare('INSERT INTO reponses(id_parent,nom,email,messages,datepost) VALUES(?,?,?,?,NOW())');
    $req->execute(array($_GET['id'],$nom,$email,$message));  
  }
}

 ?>


<!-- ***************************PHP reponses*************************** -->



<link rel="stylesheet" type="text/css" href="css/panneau.css">
<!-- *******************header*************** -->
<header class="container-fluid" style="background-image:url(images/eau_poulets.png); " >
  <div class="container" style=" width: 530px; height:250px;" >
   <div class="row align-items-center" style="min-height:75vh;">


  <div  class="col-12 my-1" style="background-image: url(images/); border-radius: 8px; padding-left:20px ;min-height:20vh"> 

          
        
      </div>


</div>
</div>


</header>



<div class="container-fluid" style="background-color:white; font-size: 19px;">
        
    <div class="row ">    


      <!-- ****************************div de gauche ****************************** -->

 <div class="col-12 col-md-9 my-1" style="background:white;border: groove; border-radius:10px; padding-left:0px ;min-height:auto"> 
   

<section style="width:70%; margin-left: auto; margin-right:auto;">
  

  
                              

                                <!-- ***********recupération du commentaire************* -->

       <?php  
        require_once('db.php');
        $req=$pdo->prepare('SELECT *FROM  commentaires WHERE id=?');
        $req->execute(array($_GET['id']));
        while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {
         
          ?>

          <p  class="my-2" style="background-color:#EFEFEF; border-radius:10px; padding-left:10px;">
           <span style="font-weight: bold; font-size:22px;"> <?php echo $reponse->nom; ?></span> le <?php echo $reponse->datepost ;  ?> <br>

            <span style="font-size:17px;"> <?php  echo $reponse->messages; ?></span>
             </p>

       <?php  

        }

        ?>
                  
   <h5 style=" color:#22427C; font-weight: bold;"> repondre </h5><br>


     <form action="" method="POST" style="background-color:#FFFFF4;">

  
  <div class="form-group">  
     <input type="text" name="nom" class="form-control" required="" placeholder="votre nom">
   </div>

   <div class="form-group">   
     <input type="email" name="email" class="form-control" required="" placeholder="votre email">
   </div>

   <div class="form-group" class="col-s-12">   
   <textarea name="message" placeholder="Votre reponse..." required=""  class="form form-contol"></textarea><br>
   
   </div>


   <input type="submit" name ="submit" value ="poster" class="btn btn-primary">

</form><br> 


<h5 style=" color:#22427C; font-weight: bold;">Les reponses </h5>

<?php 

$req=$pdo->prepare('SELECT *FROM reponses WHERE id_parent=? ORDER BY id DESC');
        $req->execute(array($_GET['id']));
        while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {
         
          ?>

           <div class="container-fluid my-4" style="background-color:#EFEFEF; border-radius:10px; ">
           <span style="font-weight: bold; font-size:22px;"> <?php echo $reponse->nom; ?></span> le <?php echo $reponse->datepost ;  ?> <br>

            <span style="font-size:17px;"> <?php  echo $reponse->messages; ?></span>

             </div>

       <?php  

        }

 ?>

</section>





 </div>
    

     <!-- ***********************aside******************************* -->


      <div class="col-12 col-md-3 my-1" style="background:#FEFDF0; border: groove; border-radius:10px; padding-left:20px ;min-height:20vh"> 

               <div class="container-fluid">
                   <div class="row">

            <?php require'sous_parties/aside.php';?>
            
            </div>

                   
                </div>
    

      </div>
     <!-- *********************** fin aside******************************* -->


</div>

</div>



<?php 
require 'sous_parties/footer.php';
?>



