<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=0.49">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no"> -->
    <meta name="description" content=" ">
    


    <!-- les liens pour les differentes polices utilisées  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Jura:wght@300;400;500;600;700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Cookie&family=Goldman:wght@400;700&family=Poiret+One&family=Rakkas&display=swap" rel="stylesheet">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="" ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"  charset="utf-8"></script>


    <link rel="stylesheet" href="css/header.css">
    <link rel="shortcut icon" href="images/logo.PNG">



    <title style="font-family: 'Oswald', sans-serif;">EMERGENCE TECHNOCM</title>
  </head>
  <body>
    
    <!-- ************************NAVAR*************************** -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color:white; font-family: 'Cuprum', sans-serif;">
  <a class="navbar-brand" href="/"><img src="images/logo.PNG " alt="logo" title=" le logo du site" width="85" style="display: inline-block;"><p style="display: inline-block;vertical-align:center; padding: 0; margin: 0; color:white; text-transform:uppercase;font-weight: 900;">le pôle de l'innovation</p></a>

  <button class="navbar-toggler" style=" background-color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >


    <div class="inscription" >

            <?php  if (isset($_SESSION['auth'] )): ?>

                      <a href="logout.php" class="connect" style="color:white;"> se déconnecter </a>

                      <?php  else: ?>

                      <a href="inscrire.php" class="connect" style="margin-right: 20px; color:white;">s'inscrire</a>
                       <a href="connexion.php" class="connect" style="color:white;" >se connecter</a>

                       <?php endif;?>
                    
          </div>




    <ul class="navbar-nav ml-auto" style="font-size:25px; color:white; ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="connexion.php" ><i class="fa fa-archive" aria-hidden="true"></i> Cours & epreuves</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="page_blog.php"><i class="fa fa-book " aria-hidden="true"></i> blog</a>
      </li>

      <!-- <li class="nav-item ">
        <a class="nav-link" href="page_videos.php"><i class="fa fa-film"></i>videos</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="page_projets.php"><i class="fa fa-archive" aria-hidden="true"></i>projets</a>
      </li> -->

      <li class="nav-item ">
        <a class="nav-link" href="messagerie.php"><i class="fa fa-envelope " aria-hidden="true"></i>Nous-joindre</a>
      </li>
      
    </ul>



         





    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="rechercher un article" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>

          

</nav>




