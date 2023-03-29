<!doctype html>
<html lang="fr">
	  <head>
			<meta charset="utf-8">
			<title>Mairie de Clermont-Ferrand</title>
			<meta name="viewport" content="width=device-width" />
			<link href="css.css" rel="stylesheet">
            <link href="connexion.css" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </head>
	<body>
	    <link href="css.css" rel="stylesheet">
		<nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark fixed-top bg-light">
			<div class="container">
    			<a class="navbar-brand" href="Accueil.php">
    			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

      			<img src="https://images-ext-1.discordapp.net/external/SOKLo0ldlgoCLlaGCk1jRJto5XetR9ktjl3vmHTecUc/https/www.cjoint.com/doc/22_10/LJknBFuC7jz_t%25C3%25A9l%25C3%25A9chargement-removebg-preview.png" alt="Bootstrap" width="210" height="55">
    			</a>
  			</div>
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" href="Accueil.php"><h5>Accueil</h5></a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="histoire.php">Notre Histoire</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nos Commerces</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="restaurant.php">Restaurant</a></li>
								<li><a class="dropdown-item" href="boulangerie.php">Boulangerie</a></li>
								<li><a class="dropdown-item" href="coiffeur.php">Coiffeur</a></li>
							</ul>
						</li>
						<li class="nav-item">
                        <a class="nav-link" href="visiter.php">Nous Contacter</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autre</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="inscription1.php">S'inscrire</a></li>
								<li><a class="dropdown-item" href="connexion1.php">Se connecter</a></li>
								<li><a class="dropdown-item" href="#">FAQ</a></li>
							</ul>
						</li>
						<li>
						<div class="col-sm-12">
							<div class="card">
								<div class ="connexion">
									<?php
									
									if  (isset($_SESSION['pseudo'])) 
										{
									?>	<!--affichage d’un lien permettant de se déconnecter et du message-->
									Vous êtes connecté<br>
									<a href="deconnexion.php">Déconnexion</a><br>
									<?php	}

									else   
										{ 
									?>	<!--affichage d’un lien vers une page permettant de s’inscrire ou de se connecter et du message-->
									Vous n’êtes pas connecté<br>
									<a href="connexion1.php">Connexion</a><br>
									<?php	} ?>
								</div>
							</div>
						</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</body>
</html>