

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
    <link href="style.css" rel="stylesheet" />
    </head>
         
    <body>
        <h3>bienvenue sur ce blog !</h3>
        <p>Derniers articles du blog :</p>
  
<?php
       $bdd = new PDO('mysql:host=127.0.0.1;dbname=tuto;charset=utf8','root','');
// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY date_creation DESC LIMIT 0, 5');
 
while ($donnees = $req->fetch())
{
?>

<div class="news">
    <?php include ("afficher_article.php");?>
     
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));// On affiche le contenu ici
    ?>
    <!-- <br /> -->
    <em><a href="comment.php?id=<?php echo $donnees['id']; ?>" style="color: green; font-weight: bold;">Commentaires</a></em>
    </p>
</div>


<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
</html>