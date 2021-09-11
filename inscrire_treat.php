<?php 
 include "include/functions.php";
 //session_start();

// include 'include/functions.php';

if (!empty($_POST)) {

        $errors= array();
        include'db.php';

        if (empty($_POST['username'])) {
           $errors['username']="vous n'avez pas entrer de pseudo";
        }else{
          $req=$pdo->prepare('SELECT id FROM membres WHERE username=?');
          $req->execute([$_POST['username']]);
          $user=$req->fetch();
          if ($user) {
              $errors['username']='ce pseudo existe dejà';
          }
        }

        if (empty($_POST['email'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
          $errors['email']="votre email n'est pas valide";
          # code...
        }else{
          $req=$pdo->prepare('SELECT id FROM membres WHERE email=?');
          $req->execute([$_POST['email']]);
          $user=$req->fetch();
          if ($user) {
              $errors['email']='cet email existe dejà';
          }
        }


        if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
          $errors['password'] = "vous devez entrez un mot de passe valide ";

        }





        if (empty( $errors)) {

          
        $req=$pdo->prepare("INSERT INTO membres SET username=?,password=?,email=?,confirmation_token=?");
        $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token=str_random(60);

        $req->execute([$_POST['username'], $password, $_POST['email'], $token]);

        // $req->execute([$_POST['username'],$password,$_POST['email'], $token]);

        $user_id=$pdo->lastInsertId();
  
       
        
         mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur le lien ci-dessous. Si le lien n'est pas cliquable, il faut le copier et le coller dans l'URL de votre navigateur\n\nhttp://www.emergencetechnocm.com/confirm.php?id=$user_id&token=$token");
         
         $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
    
    header('Location: connexion.php');
    exit();
          
        } 

        




  
}




 ?>
