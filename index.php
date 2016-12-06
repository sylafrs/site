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
?>

<?php

	// classes CSS utilisées
	
	// article : root d'un article
	// nom-fichier : affichage du nom du fichier d'un élément du site (parce que)
	// image : groupe lié à une image
?>

<?php include("functions/misc.php"); ?>
<?php include("functions/article.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Sylafrs</title>
	</head>
	<body>
		<h1>Sylafrs</h1>
		<?php include("articles/20161206_HelloWorld.php"); ?>
	</body>
</html>