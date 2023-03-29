<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mairie de Clermont-Ferrand</title>
		<link href="css.css" rel="stylesheet">
        <link href="connexion.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
</html>
<?php


include('bibliotheque.php');


$mdp1= $_POST['mdp'];
$pseudo= $_POST['pseudo'];


    //requete qui va vérifier que le pseudo existe
	$requete ="SELECT pseudo , mdp
	        FROM CLIENT
			WHERE pseudo='$pseudo'; ";
			
	// connexion bdd
	$connexion = connecter();
	
	//exécution requête
	$resultat = mysqli_query($connexion, $requete);
	
	// si aucun résultat alors redirection automatique vers inscription
    if (mysqli_num_rows($resultat) == 0){
            header ("Location: inscription1.php" );}

    /* sinon résultat donc ouverture de session pour le pseudo
    et redirection automatique vers l'acceuil*/
    else
        {
         
	   
	   $ligne = mysqli_fetch_assoc($resultat);
	   $mdp2 = $ligne['mdp'] ;
	  
	       if($mdp1==$mdp2)
		   {
		 
		  $_SESSION['pseudo'] = $pseudo;
		  header ("Location: Accueil.php" );

		   }
		   else
		   {
			header ("Location: mdp_incorrect.php");
		   }
		}

?>

		 