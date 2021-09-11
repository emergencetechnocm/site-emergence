
<?php
require_once "include/functions.php";
reconnect_from_cookie();
if (isset($_SESSION['auth'])) {
   header('Location:page_cours.php'); 
   exit();
}



if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'db.php';
    
    $req = $pdo->prepare('SELECT * FROM membres WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();

    if ($user && password_verify($_POST['password'], $user->password)) {

         session_start();
         $_SESSION['auth'] = $user;
         $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';

         if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE membres SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
    setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}
         header('Location:page_cours.php');
         exit();
             } else{
               $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
           }
    }



?>