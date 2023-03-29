<?php

// appel de la bibliothèque de fonctions
include('bibliotheque.php');

//récupération des valeurs provenant du formulaire
$mdp=$_POST['mdp'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$pseudo=$_POST['pseudo'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$rue=$_POST['rue'];
$cp=$_POST['cp'];


// requête d'ajout dans la base de données
$requete = "INSERT INTO client (mdp, nom, prenom, mail, pseudo, pays, ville, rue, cp)
			VALUES ('$mdp','$nom','$prenom','$mail','$pseudo','$pays','$ville','$rue','$cp');";
	
// connexion à la base de données grâce à la fonction connecter
$connexion =connecter();	
		
//Exécution de la requête
$resultat = mysqli_query($connexion,$requete);	
		
//Fermeture de la bdd
mysqli_close($connexion);	

// redirection vers l'accueil

header ("Location: Accueil.php" );

?>