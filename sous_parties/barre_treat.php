  <?php
	 
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=tuto;charset=utf8','root','');
	 
	$articles = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $articles = $bdd->query('SELECT titre FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
	   if($articles->rowCount() == 0) {
	      $articles = $bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
	   }
	}
	?>

                     <form method="GET" class="bdr">
                    	
	                       <input type="search" class="form-contol" name="q" placeholder="Recherche..." />
	                        <!-- <input type="submit" class="form-contol"  value="Valider" /> -->
                             <button class="bu"> rechercher </button>
                     </form>
                    
 
                  <?php if($articles->rowCount() == 1) { ?>
	   
	                     <?php if($a = $articles->fetch())  {?>
	                          <?= $a['titre'] ?>
	                     <?php  $articles->closeCursor();?>
	                              <?php } ?>
	       
	                               <?php } ?> 

	