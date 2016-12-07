<?php

	// Proposer quoi mettre dans le site ici..
	//
	
	// Déjà, si interaction il y a : ce devra être client-side.
	// Ensuite.
	
	// Le but est de lier l'utile à l'agréable.
	// Je dois donc déterminer ce qui est utile et ce qui est agréable et comment le lier :p
	
	// Je pense à un truc de stockage mais qui me montre certaines images/lignes de codes et me proposent de commenter pourquoi je le stocke pour en faire un article ? :p
	// Mettre un accès à certaines libs que je compte mettre en wtfpl (genre mes smoothbehaviours)

	// Ecrire des tickets sur tous les trucs rageant qui me sont arrivés avec certaines libs et expliquer le problème et sa solution.
	
	// Proposer des tutos de temps à autres.
	// Liens vers certains projets, etc..

	// Finalement: Je ne veux pas avoir de CMS de toute sorte. Même maison ! 
	// Je veux ajouter mes pages au fil de l'eau en html, donc on se prend pas le chou là dessus
	
	// J'aime pas le dev web.

	// classes CSS utilisées
	
	// article : root d'un article
	// nom-fichier : affichage du nom du fichier d'un élément du site (parce que)
	// image : groupe lié à une image
?>

<?php

	/**
	 * Computes how much space does a directory takes
	 * @return the computed size
	 */
	function get_directory_size($path)
	{
		$total_size = 0;
	    $files = scandir($path);
	    $cleanPath = rtrim($path, '/'). '/';

	    foreach($files as $t) {
	        if ($t<>"." && $t<>".." && $t<>".git") {
	            $currentFile = $cleanPath . $t;
	            if (is_dir($currentFile)) {
	                $size = get_directory_size($currentFile);
	                $total_size += $size;
	            }
	            else {
	                $size = filesize($currentFile);
	                $total_size += $size;
	            }
	        }   
	    }

	    return $total_size;
	}

?>

<?php include("functions/misc.php"); ?>
<?php include("functions/article.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Sylafrs</title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- jQuery (file is licensed) -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
		
		<!-- Bootstrap CSS  (file is licensed) -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

		<!-- Optional bootstrap theme (file is licensed) -->
		<link rel="stylesheet" href="third-party/bootstrap/theme.min.css">
	</head>
	<body class="container">
		<div class="row">
		<!--<div class="col-lg-3">
				
			</div> -->
			<!-- <div class="col-lg-9"> -->
			<div class="col-lg-12">
				<div class="page-header">
					<h1>Sylafrs</h1>
				</div>
				<?php show_all_articles(); ?>
			</div>
		</div>
		<footer>
			<hr/>
			<pre>Espace utilisé : <?php echo get_directory_size(".") / 1000000; ?> / 100 Mo</pre>
		</footer>
		<!-- Bootstrap JavaScript (file is licensed)  -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>