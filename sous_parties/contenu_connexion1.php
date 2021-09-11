<link rel="stylesheet" type="text/css" href="css/connexion.css"> 

<?php 


  include("commun/entete.php");

  if(isset($_POST['msg_mail']) && $_POST['msg_mail']!='')
{
$expediteur = 'virgiledouanla@gmail.com';
$destinataire = 'emergencetechnocm@gmail.com';
$sujet = $_POST['msg_sujet'];

$entete = 'Content-Type: text/html;\n';
$entete .= 'From: '.$expediteur;

$contenu_message = utf8_decode($_POST["msg_contenu"])."\r\n";
$contenu_message = "De : ".$_POST["msg_mail"].", <br /><br /><strong> Sujet : ".$sujet.", </strong><br/><br />".$contenu_message."\r\n";
$contenu_message ='<html><body>'.$contenu_message.'</body></html>';

$reussi = mail($destinataire, $sujet, $contenu_message, $entete);
}
  
?>


<div id="banniere" style="text-align: center; color:#791CF8; background-color:#EFEFEF; vertical-align: middle; padding-top: 30px;font-family: 'Oswald', sans-serif;"> 
	


          <?php
                  if(isset($reussi) && $reussi==1)
                  echo 'Votre message a été envoyé avec succès';
                   else
                 echo 'Vous devez renseigner tous les champs du formulaire';
           ?>
             		
	     	 	   

</div >

<div id="formulaire" class="container-fluid"  style="text-align:center;"  >


  <script language="javascript" type="text/javascript">

function validation_avt_envoi()
{
  var lancer="oui";
  
  if(document.getElementById("msg_mail").value=="")
  {
    alert("Vous devez saisir votre mail");
    lancer="non";
  }
  else if(document.getElementById("msg_mail").value.indexOf("@")==-1 || document.getElementById("msg_mail").value.indexOf(".")==-1)
  {
    alert("Votre mail ne semble pas correct, corrigez-le");
    lancer="non";
  } 
  else if(document.getElementById("msg_sujet").value=="")
  {
    alert("Vous devez entrer le sujet de votre message");
    lancer="non";
  } 
  else if((document.getElementById("msg_contenu").value=="" || document.getElementById("msg_contenu").value.length<10))
  {
    alert("Vous devez renseigner le contenu du message");
    lancer="non";
  }
  else if(document.getElementById("msg_code").value=="")
  {
    alert("Veuillez saisir le code anti-spam");
    lancer="non"; 
  }
  else if(document.getElementById("msg_code").value.toLowerCase()!=document.getElementById("mem_code").value.toLowerCase())
  {
    alert("Le code anti-spam est incorrect");
    lancer="non"; 
  } 
  
  if(lancer=="oui")
    document.getElementById("contact").submit();
}

</script> 
      
      
      




    





     <div class="row">

      

   <div class="col-12 col-md-6 my-3 pl-5" style=" background-image:url(images/coeur.png); font-family: 'Oswald', sans-serif;"> 
            <form id="contact" name="contact" method="post" action="messagerie.php">
              <div class="div_txt_form" >
              Votre adresse email :
              </div>
              <div class="div_input_form">
              <input type="text" name="msg_mail" id="msg_mail" maxlength="70" />
              </div>
              <div class="div_txt_form">
              Sujet :
              </div>
              <div class="div_input_form">
              <input type="text" name="msg_sujet" id="msg_sujet" maxlength="70" />  
              </div>
              <div class="div_msg">
              <br /><strong>Votre message :<strong><br />
              <textarea id="msg_contenu" name="msg_contenu" cols="20" rows="5" class="zone_msg"></textarea> 
              </div>
              <div class="div_txt_form">
              &nbsp;
              </div>
              <div class="div_input_form">
              <input type="button" style="text-align:center;" name="msg_envoyer" id="msg_envoyer" value="Envoyer le message" onclick="validation_avt_envoi();" />
              </div>  
            </form>
             </div>



 



<div class="col-12 col-md-6 pl-5 pr-5 pt-2  my-3 ml-5 " style="background-image:url(images/coeur.png);  font-family: 'Cuprum', sans-serif; " >


       <div class="div_msg" style="text-align: center;">
          <img id="mem_image" /><br />
          <strong>Code anti-spam :<strong><br />    
          <input type="text" name="msg_code" id="msg_code" maxlength="10" class="input_form" />   
          <input type="text" name="mem_code" id="mem_code" maxlength="10" class="input_form" style="visibility:hidden;" />
          </div>
          <br />
          <span style="font-size:14px;font-weight:normal; text-align: center;">Vous devez reproduire le <strong>code de l'image</strong><br />avant d'envoyer le message.</span>

             
</div>

</div>


 </div>



 <script language="javascript" type="text/javascript">
//1 à 10
var nombre= Math.floor(Math.random() * 6)+1;

switch (nombre)
{
  case 1:
    document.getElementById("mem_image").src = "images/01.jpg";
    document.getElementById("mem_code").value = "TU54FP";                                     
    break;
  case 2:
    document.getElementById("mem_image").src = "images/02.jpg";
    document.getElementById("mem_code").value = "QK717R";                    
    break;
  case 3:
    document.getElementById("mem_image").src = "images/03.jpg";
    document.getElementById("mem_code").value = "QNH8K8";                    
    break;
  case 4:
    document.getElementById("mem_image").src = "images/04.jpg";
    document.getElementById("mem_code").value = "ZX263V";
    break;
  case 5:
    document.getElementById("mem_image").src = "images/05.jpg";
    document.getElementById("mem_code").value = "M7L2VH";                    
    break;
  case 6:
    document.getElementById("mem_image").src = "images/06.jpg";
    document.getElementById("mem_code").value = "AJ2L6B";                    
    break;
  default:
    document.getElementById("mem_image").src = "images/01.jpg";
    document.getElementById("mem_code").value = "TU54FP";                    
    break;
}
</script>



<script type="text/javascript" language="javascript">
  alert(document.getElementById("civilite").value);
</script>
