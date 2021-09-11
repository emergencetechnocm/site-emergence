<!DOCTYPE html>
	<html lang="fr">
	<head>
		<title>EMERGENCE TECHNOCM</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content=" ">

		<!--***********CSS boostrap************** -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">

		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="" ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"  charset="utf-8"></script>

            <!-- *******************le logo pour l'icon************ -->
                <link rel="shortcut icon"  href="images/logo.PNG">
	

</head>
            

	<body style="font-size:17px;">

	<!-- haut de page (header) -->

		<header role="header">

			<nav class="menu" role="navigation">
				<div class="inner">
					<div class="menu-gauche">
						<p class="logo"><img src="images/logo.PNG " alt="logo" title=" le logo du site" width="100"></p>
						<p class="logo">le pôle de l'innovation</p>
						
						
					</div>

					<div class="menu-droit">
						<a href="index.php" class="menu-lien"><i class="fa fa-home" aria-hidden="true"></i> accueil</a>
						<a href="connexion.php" class="menu-lien"><i class="fa fa-archive" aria-hidden="true"></i> Cours & epreuves </a>
						<a href="page_blog.php" class="menu-lien"><i class="fa fa-book " aria-hidden="true"></i> blog</a>
						<a href="page_videos.php" class="menu-lien"><i class="fa fa-film"></i>videos</a>
						 <a href="page_projets.php" class="menu-lien"><i class="fa fa-archive" aria-hidden="true"></i>projets</a>
						<!--<a href="page_forum.php" class="menu-lien"><i class="fa fa-question-circle" aria-hidden="true"></i> forum</a> -->
						<a href="mailto:emergencetechnocm@gmail.com" class="menu-lien"><i class="fa fa-envelope " aria-hidden="true"></i> contactez nous </a>
						
					</div>

					

	    <!-- *****************responsive*********************  -->

					 <div class="m-nav-toggle">
                           <span class="m-toggle-icon" ></span>
                     </div>

         <!-- *****************inscription*********************  -->
         <div class="inscription">

						<?php  if (isset($_SESSION['auth'] )): ?>

                      <a href="logout.php" class="connect"> se déconnecter </a>

                      <?php  else: ?>

                      <a href="inscrire.php" class="connect">s'inscrire</a>
                       <a href="connexion.php" class="connect">se connecter</a>

                       <?php endif;?>
                    
                     </div>


				</div>


			</nav>

	    </header> 
